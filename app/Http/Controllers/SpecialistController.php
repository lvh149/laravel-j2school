<?php

namespace App\Http\Controllers;

use App\Http\Requests\Specialist\StoreRequest;
use App\Http\Requests\Specialist\UpdateRequest;
use App\Models\Specialist;

class SpecialistController extends Controller
{
    public function __construct()
    {
        $this->model = (new Specialist())->query();
    }

    public function index()
    {
//        $search="";
        $specialists = $this->model
//            ->where('name', 'like','%'.$search."%")
            ->paginate();
//        $specialists->appends(['q'=>$search]);
        return view('admin.specialist.index',[
            'specialists' => $specialists,
        ]);
    }

    public function create()
    {
        return view('admin.specialist.create');
    }

    public function store(StoreRequest $request)
    {
        $object = new Specialist();
        $object->fill($request->validated());
        $object->save();
        return redirect()->route('specialist.index');
    }

    public function show(Specialist $specialist)
    {
        //
    }

    public function edit(Specialist $specialist)
    {
        return view('admin.specialist.edit', [
            'specialist'=>$specialist,
        ]);
    }

    public function update(UpdateRequest $request, Specialist $specialist)
    {
        $specialist->update(
            $request->validated()
        );
        return redirect()->route('specialist.index');
    }

    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        return redirect()->route('specialist.index');
    }
}
