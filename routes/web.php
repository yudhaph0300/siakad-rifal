<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardStudentController;
use App\Http\Controllers\DashboardTeacherController;



Route::get('/', function () {
    return view('home');
});


Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest:user,student');
Route::post('/login',  [LoginController::class, 'login']);
Route::post('/logout',  [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth:user,student,teacher');

Route::resource('/dashboard/admin/data/student', DashboardStudentController::class)->middleware('auth:user');
Route::resource('/dashboard/admin/data/teacher', DashboardTeacherController::class)->middleware('auth:user');
