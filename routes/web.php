<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\TimeDoctorController;
use Illuminate\Support\Facades\Route;
// Route user
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/booking', [CustomerController::class, 'booking'])->name('user.booking');
Route::get('/',  function () {
    return view('layout.master');
});



//Route admin

route::group(['prefix'=>'admin'],function (){
Route::get('login', [AuthController::class, 'adminLogin'])->name('admin.login');
Route::get('appointment',[AppointmentController::class,'index'])->name('appointment.index');
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


