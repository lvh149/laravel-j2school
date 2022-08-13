<?php

namespace App\Http\Controllers;

use App\Http\Requests\customer\StoreRequest;
use App\Http\Requests\customer\UpdateRequest;
use App\Models\Customer;
use App\Models\Time_doctor;
use App\Models\Appointment;
use App\Models\Specialist;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->model = (new Customer())->query();
    }

    public function index()
    {
        //        $search="";
        $customers = $this->model
            //            ->where('name', 'like','%'.$search."%")
            ->paginate();
        //        $customers->appends(['q'=>$search]);
        return view('admin.customer.index', [
            'customers' => $customers,
        ]);
    }

    public function create(Time_doctor $time_doctor)
    {
        return view('user.customer.create', [
            'time_doctor' => $time_doctor,
        ]);
    }

    public function store(StoreRequest $request)
    {
        $customer = new customer();
        $customer->fill($request->validated());
        $customer->save();
        $appointment = new appointment();
        $appointment['customer_id'] = $customer->id;
        $appointment['status'] = 1;
        $appointment->fill($request->except('name_patient'));
        // $appointment['description'] = $request->input('description');
        $appointment->save();
        return view('user.appointment.success_notify');
    }

    public function show(customer $customer)
    {
        //
    }

    public function edit(customer $customer)
    {
    }

    public function update(StoreRequest $request, $customer)
    {
    }

    public function destroy(customer $customer)
    {
    }
}
