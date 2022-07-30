<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->model = (new Appointment())->query();
    }

    public function index(Request $request)
    {
        $appointments = $this->model
            ->with('time_doctor.doctor:id,name')
            ->with('customer:id,name_patient,phone_patient')
            ->where('status','=',$request->status)
            ->latest('updated_at')
            ->paginate();
        return view('admin.appointment.index',[
            'appointments' => $appointments,
        ]);
    }


    public function update(Request $request, Appointment $appointment)
    {
        $appointment->fill($request->except([
            '_token',
            '_method',
        ]));
        $appointment->save();
    }
}
