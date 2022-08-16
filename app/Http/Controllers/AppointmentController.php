<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Time;
use App\Models\Time_doctor;
use Carbon\Carbon;
use App\Http\Requests\Appointment\StoreRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->model = (new Appointment())->query();
    }

    public function index(Request $request)
    {
        $appointments = $this->model
            ->with('time_doctor.time:id,date,time_start,time_end')
            ->with('time_doctor.doctor:id,name')
            ->with('time_doctor.doctor.specialist:id,name')
            ->with('customer:id,name_patient,phone_patient')
            ->where('status','=',$request->status)
            ->latest('updated_at')
            ->paginate();
        return view('admin.appointment.index',[
            'appointments' => $appointments,
        ]);
    }


    public function create(doctor $doctor)
    {
        $current_time = Carbon::now();
        $time_doctors = (new time_doctor())->query()
            ->with('appointment:time_doctor_id,status')
            ->with('doctor:id,name')
            ->with('time:id,date,time_start,time_end')
            ->where('doctor_id','=',$doctor->id)
            ->latest('id')
            ->get();
        $specialists = Specialist::query()->get();
        return view('user.appointment.create', [
            'doctor' => $doctor,
            'specialists' => $specialists,
            'time_doctors' => $time_doctors,
            'current_time' => $current_time,
        ]);

    }

    public function search(Request $request)
    {
         $time_doctors = (new time())->query()
            ->where('date','=',$request->date)
             ->whererelation('time_doctor.doctor','id','=',$request->doctor_id)
             ->orderBy('time_start')
            ->get();
         return $time_doctors;
    }

    public function update(Request $request, Appointment $appointment)
    {
        $admin_id = Auth::id();
        $appointment->fill($request->except([
            '_token',
            '_method',
        ]));
        $appointment['admin_id'] = $admin_id;
        $appointment->save();
    }
}
