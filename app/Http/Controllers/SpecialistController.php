<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Http\Requests\StoreSpecialistRequest;
use App\Http\Requests\UpdateSpecialistRequest;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{

    public function index()
    {
//        $search="";
        $specialists = Specialist::query()
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

    public function store(Request $request)
    {
        $object = new Specialist();
        $object->fill($request->except('_token'));
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

    public function update(Request $request, Specialist $specialist)
    {
        $specialist->update(
            $request->except([
                '_token',
                '_method',

            ])
        );
    }

    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        return redirect()->route('specialist.index');
    }
}
