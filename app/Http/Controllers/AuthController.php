<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
        $password = Hash::make($request->get('password'));
        $admin = Admin::query()
            ->where('email', $request->get('email'))
            ->first();
        if (!Hash::check($request->get('password'), $admin->password)) {
            return redirect()->route("admin.login")->with('error', 'Email-Address And Password Are Wrong.');
        }
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
