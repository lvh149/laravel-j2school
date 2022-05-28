<?php

namespace App\Http\Controllers;

use App\Models\Time_doctor;
use App\Http\Requests\StoreTime_doctorRequest;
use App\Http\Requests\UpdateTime_doctorRequest;

class TimeDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTime_doctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTime_doctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Time_doctor  $time_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Time_doctor $time_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Time_doctor  $time_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Time_doctor $time_doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTime_doctorRequest  $request
     * @param  \App\Models\Time_doctor  $time_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTime_doctorRequest $request, Time_doctor $time_doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Time_doctor  $time_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Time_doctor $time_doctor)
    {
        //
    }
}
