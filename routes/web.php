<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CustomerController;

use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);


Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/booking', [CustomerController::class, 'booking'])->name('user.booking');
Route::get('/',  function () {
    return view('layout.master')};

Route::get('/login',[AuthController::class,'login']);
Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment.index');
Route::get('/admin',  function () {
    echo view('layout_admin.master');

})->name('home');
