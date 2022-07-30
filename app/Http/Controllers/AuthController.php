<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }


    public function adminLogin()
    {
        return view('admin.auth.login');
    }

    public function adminLogging(Request $request)
    {
//        $password = Hash::make($request->get('password'));
        $admin = Admin::query()
            ->where('email', $request->get('email'))
            ->where('password', $request->get('password'))
            ->first();
        if (is_null($admin)) {
            return redirect()->route("admin.login");
        }
        Auth::login($admin);
        return redirect()->route("admin.home");
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }

}
