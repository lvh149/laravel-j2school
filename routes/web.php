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
    Route::get('booking', [CustomerController::class, 'booking'])->name('booking.index');
    Route::get('doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('search', [DoctorController::class, 'search'])->name('doctor.search');
});

Route::get('/', function () {
    return view('user.layout.homepage');
})->name('user.homepage');

//Route admin
route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'adminLogin'])->name('admin.login');
    Route::resource('/specialist', SpecialistController::class)->except([
        'show',
    ]);
    Route::resource('/appointment', AppointmentController::class)->except([
        'show',
    ]);
    Route::get('appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::resource('/specialist', SpecialistController::class)->except([
        'show',
    ]);
    Route::resource('/doctor', DoctorController::class)->except([
        'show',
    ]);
    Route::resource('/customer', CustomerController::class)->except([
        'show',
    ]);
    Route::resource('/time_doctor', TimeDoctorController::class)->except([
        'show',
    ]);
});

Route::get('/admin', function () {
    return view('admin.layout.master');
})->name('home');
