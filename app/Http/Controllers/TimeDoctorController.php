<?php

namespace App\Http\Controllers;

use App\Enums\AppointmentStatusEnum;
use App\Models\Appointment;
use App\Models\Time_doctor;
use App\Http\Requests\StoreTime_doctorRequest;
use App\Http\Requests\UpdateTime_doctorRequest;
use Illuminate\Support\Facades\View;

class TimeDoctorController extends Controller
{
    public function __construct()
    {
        $this->model = (new time_doctor())->query();
    }

    public function index()
    {

        $time_doctors = $this->model->with('appointment')
            ->paginate();
        return view('admin.timework.index',[
            'time_doctors' => $time_doctors,
        ]);
    }

    public function create()
    {

    }

    public function store(StoreRequest $request)
    {

    }

    public function show(doctor $doctor)
    {
        //
    }

    public function edit(doctor $doctor)
    {
        ;
    }

    public function update(UpdateRequest $request, $doctor)
    {

    }

    public function destroy(doctor $doctor)
    {

    }
}
