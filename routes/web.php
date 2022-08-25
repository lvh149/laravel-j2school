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
    Route::get('doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('doctor/viewDoctor', [DoctorController::class, 'get_free_doctor'])->name('get_free_doctor');
    Route::get('doctor/orderByPrice', [DoctorController::class, 'order_by_price'])->name('order_by_price');
    Route::get('search', [DoctorController::class, 'search'])->name('doctor.search');
    Route::get('appointment/create/{doctor}', [AppointmentController::class, 'create'])->name('user.appointment.create');
    Route::get('customer/create/{time_doctor}', [CustomerController::class, 'create'])->name('user.customer.create');
    Route::post('customer/', [CustomerController::class, 'store'])->name('user.customer.store');
    Route::get('appoinment/success', [AppointmentController::class, 'success'])->name('user.appointment.success');
    Route::get('appoinment/selectTime', [AppointmentController::class, 'selectTime'])->name('user.appointment.selectTime');
});

Route::get('/', function () {
    return view('user.layout.homepage');
})->name('user.home');

//Route doctor
route::group(['prefix' => 'doctor'], function () {
    Route::get('login', [AuthController::class, 'doctorLogin'])->name('doctor.login');
    Route::get('logout', [AuthController::class, 'doctorLogout'])->name('doctor.logout');
    Route::post('auth/logging', [AuthController::class, 'doctorLogging'])->name('doctor.logging');
    Route::get('schedule', [DoctorController::class, 'workSchedule'])->name('doctor.schedule')->middleware('doctor');
    Route::get('info/{doctor}', [DoctorController::class, 'info'])->name('doctor.info')->middleware('doctor');
});

//Route admin
route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'adminLogin'])->name('admin.login');
    Route::get('logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
    Route::POST('auth/logging', [AuthController::class, 'adminLogging'])->name('admin.logging');
});
