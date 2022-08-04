<?php

namespace App\Http\Controllers;

use App\Http\Requests\customer\StoreRequest;
use App\Http\Requests\customer\UpdateRequest;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->model = (new Customer())->query();
    }

    public function index(Request $request)
    {
        $search = $request->get('q');
        $customers = $this->model
            ->where('name_patient', 'like', '%'.$search."%")
            ->orwhere('phone_patient', 'like', '%'.$search."%")
            ->orwhere('email', 'like', '%'.$search."%")
            ->paginate();
        $customers->appends(['q'=>$search]);
        return view('admin.customer.index',[
            'customers' => $customers,
            'search' => $search,
        ]);
    }

    public function viewAppointment($customer)
    {
        $appointments = Appointment::query()
            ->where('customer_id','=',$customer)
            ->paginate();
        return view('admin.customer.viewAppointment',[
            'appointments' => $appointments,
        ]);
    }


    public function booking()
    {
        return view('user.booking.index');
    }


}
