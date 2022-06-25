<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
//        $search="";
        $doctors = doctor::query()
//            ->where('name', 'like','%'.$search."%")
            ->paginate();
//        $doctors->appends(['q'=>$search]);
        return view('admin.doctor.index',[
            'doctors' => $doctors,
        ]);
    }

    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.create',[
            'specialists'=>$specialists,
        ]);
    }

    public function store(Request $request)
    {
        $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
        $object = new doctor();
        $object->fill($request->except('_token'));
        $object['avatar'] = $path;
//        dd($object);
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function show(doctor $doctor)
    {
        //
    }

    public function edit(doctor $doctor)
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.edit', [
            'doctor'=>$doctor,
            'specialists'=>$specialists,
        ]);
        return redirect()->route('doctor.index');
    }

    public function update(Request $request, $doctor)
    {
        $object = Doctor::query()->find($doctor);
        $object->fill($request->except([
            '_token',
            '_method',

        ]));
        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
            $object['avatar'] = $path;
        }
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
