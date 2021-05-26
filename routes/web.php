<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('AdminLogin', [AuthController::class ,'AdminLogin'])->name('admin.login');
Route::post('AdminLogin', [AuthController::class ,'AdminLoginPost'])->name('admin.login.post');
Route::get('Admin', [AuthController::class ,'admin'])->name('admin');

Route::get('Logout', [AuthController::class ,'Logout'])->name('logout');

Route::get('Doctor/Add', [DoctorController::class ,'create'])->name('doctor.create');
Route::post('Doctor/Add', [DoctorController::class ,'store'])->name('doctor.store');


Route::get('DoctorLogin', [DoctorController::class ,'DoctorLogin'])->name('doctor.login');
Route::post('DoctorLogin', [DoctorController::class ,'DoctorLoginPost'])->name('doctor.login.post');
Route::get('Doctor', [DoctorController::class ,'dashboard'])->name('doctor.dashboard');

Route::get('UserLogin', [UserController::class ,'Login'])->name('user.login');
Route::post('UserLogin', [UserController::class ,'LoginPost'])->name('user.login.post');
Route::get('UserRegister', [UserController::class ,'create'])->name('user.register');
Route::post('UserRegister', [UserController::class ,'store'])->name('user.register.post');
Route::get('User', [UserController::class ,'Dashboard'])->name('user.dashboard');

Route::post('Appointment', [UserController::class ,'TakeAppointment'])->name('user.appointment');
Route::get('Appointments', [UserController::class ,'Appointments'])->name('user.appointments');

Route::post('Appointment/Update', [DoctorController::class ,'ConfirmAppointment'])->name('confirm.appointments');