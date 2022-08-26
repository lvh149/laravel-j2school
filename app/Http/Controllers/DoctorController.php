<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Time_doctor;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class DoctorController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {
        $this->model = (new Doctor())->query();
    }

    public function index(Request $request)
    {
        $search = $request->get('q');
        $doctors = $this->model->with('specialist:id,name')
            ->where('name', 'like', '%'.$search."%")
            ->orwhere('phone', 'like', '%'.$search."%")
            ->orwhere('email', 'like', '%'.$search."%")
            ->paginate();
        $doctors->appends(['q' => $search]);
        return view('admin.doctor.index', [
            'doctors' => $doctors,
            'search' => $search,
        ]);
    }

    public function api(Request $request)
    {

        $data = $this->model
            ->select('id', 'name')
            ->where('specialist_id', '=', $request->get('id'))
            ->get();
        return $this->successResponse($data);
    }


    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.create', [
            'specialists' => $specialists,
        ]);
    }

    public function store(StoreRequest $request)
    {
        $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
        $object = new doctor();
        $object->fill($request->validated());
        $object['avatar'] = $path;
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function show(doctor $doctor)
    {
    }

    public function edit(doctor $doctor)
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.edit', [
            'doctor' => $doctor,
            'specialists' => $specialists,
        ]);
    }

    public function update(UpdateRequest $request, $doctor)
    {
        $object = Doctor::query()->find($doctor);
        $object->fill($request->validated());
        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
            $object['avatar'] = $path;
        }
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }

    public function doctor(Request $request)
    {
        $doctors = $this->model
            ->with('specialist:id,name')
            ->paginate(9);
        return view('user.doctor.index', [
            'doctors' => $doctors,
        ]);
    }

    public function search(Request $request)
    {
        $doctors = $this->model
            ->with('specialist:id,name')
            ->where('name', 'like', '%'.$request->key.'%')
            ->paginate();
        return view('user.doctor.search', [
            'doctors' => $doctors,
        ]);
    }


    public function get_free_doctor(Request $request)
    {
        //Get order value
        $orderValue = $request->orderValue ?? 'desc';

        // Get date and time
        $time_start = Carbon::parse($request->time_start ?? '00:00:00')->format('H:i:s');
        $time_end = Carbon::parse($request->time_end ?? '23:59:59')->format('H:i:s');
        $date = Carbon::parse($request->date)->format('Y-m-d');

        //Get free time
        $time_doctor= Time_doctor::query()
            ->whereRelation('time', function ($query) use ($date, $time_start, $time_end) {
                $query->where('date', '=', $date)
                    ->where('time_start', '>', $time_start)
                    ->where('time_end', '<', $time_end);
            })
            ->whereDoesntHave('appointment',function ($query){
                $query->where('status','=',2);
            })
            ->get()
            ->unique('doctor_id')
            ->pluck('doctor_id')->toArray();

        //Get free doctor
        $doctors = Doctor::query()->whereIn('id', $time_doctor)
            ->orderBy('price',$orderValue)
            ->paginate(9);
        if($request->ajax()){
            return view('user.doctor.doctor-pagination', [
                'doctors' => $doctors,
            ]);
        }
        return view('user.doctor.index', [
            'doctors' => $doctors,
        ]);
    }

    public function info($doctor) {
        $doctor = Doctor::with('specialist')->find($doctor);
        return view('user.doctor.info', [
            'doctor' => $doctor,
        ]);
    }

    public function workSchedule($doctor) {
        return view('user.doctor.workSchedule');
    }

    public function get_doctor($doctor) {
        $doctor = Time_doctor::query()
            ->join('doctors', 'doctors.id', '=', 'time_doctors.doctor_id')
            ->join('times', 'times.id', '=', 'time_doctors.id')
            ->select([
                'name as title',
                time::raw("CONCAT(times.date,' ',times.time_start) AS start"),
                time::raw("CONCAT(times.date,' ',times.time_end) AS end"),
            ])
            ->where('doctors.id', '=', $doctor)
            ->get();
        return response()->json($doctor);
    }
}
