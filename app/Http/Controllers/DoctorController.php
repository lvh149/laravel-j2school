<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    use ResponseTrait;
    public function __construct()
    {
        $this->model = (new Doctor())->query();
    }

    public function index()
    {
//        $search="";
        $doctors = $this->model->with('specialist:id,name')
//            ->where('name', 'like','%'.$search."%")
            ->paginate();
//        $doctors->appends(['q'=>$search]);
        return view('admin.doctor.index', [
            'doctors' => $doctors,
        ]);
    }
    public function api(Request $request)
    {
        
        $data = $this->model
            ->select('id','name')
            ->where('specialist_id', '=',  $request->get('id') )
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
        dd($object);
//        dd($object);
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


}
