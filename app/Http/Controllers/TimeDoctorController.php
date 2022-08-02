<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Time;
use App\Models\Time_doctor;
use App\Http\Requests\StoreTime_doctorRequest;
use App\Http\Requests\UpdateTime_doctorRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Label84\HoursHelper\HoursHelper;
use stdClass;

class TimeDoctorController extends Controller
{
    public function __construct()
    {
        $this->model = (new time_doctor())->query();
    }

    public function index()
    {
        $time_doctors = $this->model
            ->with('appointment:time_doctor_id,status')
            ->with('doctor:id,name')
            ->with('time:id,date,time_start,time_end')
            ->latest('id')
            ->paginate();
        return view('admin.timework.index', [
            'time_doctors' => $time_doctors,
        ]);
    }

    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('admin.timework.create', [
            'specialists' => $specialists,
        ]);
    }

    public function getTime($request)
    {
        $date_time = $request->only([
            'date',
            'time_start',
            'time_end',
            'time',
        ]);
        $array = [];
        $i = 0;
        // array to object
        while ($i < count($date_time['date'])) {
            $object = new stdClass();
            foreach ($date_time as $key => $value) {
                $object->$key = $value[$i];
            }
            $dates = explode(' - ', $object->date);
            $object->date_start = $dates[0];
            $object->date_end = $dates[1];
            $array[] = $object;
            $i++;
        }
        foreach ($array as $key => $each) {
            $arrtime = [];
            $date = Carbon::createFromFormat('d/m/Y', $each->date_start)->format('Y-m-d');
            $date_end = Carbon::createFromFormat('d/m/Y', $each->date_end)->format('Y-m-d');
            while ($date <= $date_end) {
                $time = HoursHelper::create(
                    $date.' '.$each->time_start,
                    $date.' '.$each->time_end,
                    $each->time,
                    'Y-m-d H:i');
                $time = $time->slice(0, -1);
                $arrtime[] = $time;
                $date = Carbon::createFromFormat('Y-m-d', $date)->addDays(1)->format('Y-m-d');
            }
            $times[] = $arrtime;
        }
        foreach ($times as $key => $value) {
            foreach ($value as $item) {
                foreach ($item as $each) {
                    $time = Carbon::parse($each);
                    $data = [
                        'date' => $time->format('Y-m-d'),
                        'time_start' => $time->format('H:i'),
                        'time_end' => $time->addMinute($request->time[$key])->format('H:i'),
                    ];
                    $datas[] = $data;
                }
            }
        }
        return $datas;
    }

    public function store(Request $request)
    {
        $datas = $this->getTime($request);
        $doctor_id = $request->doctor_id;
        foreach ($doctor_id as $doctor) {
            foreach ($datas as $each) {
                $time_doctor = new Time_doctor();
                $time = Time::query()->create($each);
                $time_doctor['time_id'] = $time->id;
                $time_doctor['doctor_id'] = $doctor;
                $time_doctor->save();
            }
        }
    }

    public function edit(Time_doctor $time_doctor)
    {
        return view('admin.timework.edit', [
            'time_doctor' => $time_doctor,
        ]);

    }

    public function update(Request $request)
    {
        $object = Time::query()->find($request->time_id);
        $object->fill($request->except([
            '_token',
            '_method',
        ])
        );
        $object['date'] = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
        $object['time_start'] = Carbon::parse($request->time_start)->format('H:i');
        $object['time_end'] = Carbon::parse($request->time_end)->format('H:i');
        $object->save();
    }

    public function destroy(Time_doctor $time_doctor)
    {
        $time_doctor->delete();
    }


}