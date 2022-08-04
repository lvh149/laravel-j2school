<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->model = (new Admin())->query();
        $arrRole = UserRoleEnum::getRole();
        View::share('roles', $arrRole);
    }

    public function index()
    {
        $employee = $this->model
            ->paginate();
        return view('admin.employee.index', [
            'employees' => $employee,
        ]);
    }
    public function create()
    {

        return view('admin.employee.create', [
//            'roles' => $role
        ]);
    }

    public function store(StoreRequest $request)
    {
        $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
        $object = new Admin();
        $object->fill($request->validated());
        $object['avatar'] = $path;
        $object['password'] = Hash::make($request->password);
        $object->save();
        return redirect()->route('admin.employee.index');
    }


    public function edit(Admin $employee)
    {
        return view('admin.employee.edit', [
            'employee' => $employee,
        ]);
    }

    public function update(UpdateRequest $request, $admin)
    {
        $object = Admin::query()->find($admin);
        $object->fill($request->validated());
        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
            $object['avatar'] = $path;
        }
        $object['password'] = Hash::make($request->password);
        $object->save();
        return redirect()->route('admin.employee.index')->with('success', 'test');
    }

    public function destroy(Admin $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employee.index');
    }

    public function resetPassword(Admin $employee)
    {
        $employee['password'] = Hash::make(123456);
        $employee->save();
    }
}
