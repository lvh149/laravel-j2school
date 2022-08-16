<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\TimeDoctorController;
use Illuminate\Support\Facades\Route;

// Route user
route::group(['prefix' => 'user'], function () {
    Route::get('login', [AuthController::class, 'userLogin'])->name('user.login');
    Route::get('register', [AuthController::class, 'userRegister'])->name('user.register');
    Route::get('doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('search', [DoctorController::class, 'search'])->name('doctor.search');
    Route::get('appointment/create/{doctor}', [AppointmentController::class, 'create'])->name('user.appointment.create');
    Route::get('customer/create/{time_doctor}', [CustomerController::class, 'create'])->name('user.customer.create');
    Route::post('customer/', [CustomerController::class, 'store'])->name('user.customer.store');
    Route::get('appoinment/success', [AppointmentController::class, 'success'])->name('user.appointment.success');
    Route::get('appoinment/search', [AppointmentController::class, 'search'])->name('user.appointment.search');
});

Route::get('/', function () {
    return view('user.layout.homepage');
})->name('user.homepage');

//Route admin
route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'adminLogin'])->name('admin.login');
    Route::get('logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::POST('auth/logging', [AuthController::class, 'adminLogging'])->name('admin.logging');
});
