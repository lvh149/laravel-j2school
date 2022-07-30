<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\TimeDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layout.master');
})->name('home');

Route::resource('/specialist', SpecialistController::class)->except([
    'show',
]);
Route::resource('/appointment', AppointmentController::class)->except([
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

