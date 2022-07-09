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
            ->with('time:id,time_start,time_end')
            ->paginate();
        return view('admin.timework.index',[
            'time_doctors' => $time_doctors,
        ]);
    }

    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('admin.timework.create',[
            'specialists'=>$specialists,
        ]);
    }
    public function getTime($request)
    {
        $object = HoursHelper::create(
            $request->date .' '. $request->time_start,
            $request->date .' '.$request->time_end,
            $request->time,
            'Y-m-d H:i');
        $object=$object->slice(0,-1);
        foreach ($object as $value) {
            $time = Carbon::parse($value);
            $data=[
                'date'=> $time->format('Y-m-d'),
                'time_start'=> $time->format('H:i'),
                'time_end'=> $time->addMinute($request->time)->format('H:i'),
            ];
            $datas[] = $data;
        }
        return $datas;
    }
    public function store(Request $request)
    {
        $datas = $this->getTime($request);
        foreach($datas as $each)
        {
            //https://stackoverflow.com/a/67335661
            $time = Time::query()->create($each);
            $time_doctor=$request->only(['doctor_id']);
            $time_doctor=$time->Time_doctor()->create($time_doctor);
        }

//        dd($time_doctor);



    }


}
