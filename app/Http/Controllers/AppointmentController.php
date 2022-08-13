<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Appointment;
use App\Models\Time_doctor;
use Carbon\Carbon;
use App\Http\Requests\Appointment\StoreRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('admin.appointment.index');
    }

    public function create(doctor $doctor)
    {
        $current_time = Carbon::now();
        $time_doctors = (new time_doctor())->query()
            ->with('appointment:time_doctor_id,status')
            ->with('doctor:id,name')
            ->with('time:id,date,time_start,time_end')
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

    public function store(StoreRequest $request, doctor $doctor, Time_doctor $doctor_id)
    {
    }

    public function show(Appointment $appointment)
    {
        //
    }

    public function edit(Appointment $appointment)
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy(Appointment $appointment)
    {
        //
    }
}
