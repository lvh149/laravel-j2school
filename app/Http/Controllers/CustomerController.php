<?php

namespace App\Http\Controllers;

use App\Http\Requests\customer\StoreRequest;
use App\Http\Requests\customer\UpdateRequest;
use App\Models\Customer;
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
        return view('admin.customer.index',[
            'customers' => $customers,
        ]);
    }

    public function booking()
    {
        return view('user.booking');
    }

    public function create()
    {

    }

    public function store(StoreRequest $request)
    {

    }

    public function show(customer $customer)
    {
        //
    }

    public function edit(customer $customer)
    {

    }

    public function update(UpdateRequest $request, $customer)
    {

    }

    public function destroy(customer $customer)
    {

    }
}
