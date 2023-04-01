<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardStudentController;



Route::get('/', function () {
    return view('home');
});


Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest:user,student');
Route::post('/login',  [LoginController::class, 'login']);
Route::post('/logout',  [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth:user,student');

Route::resource('/dashboard/admin/data/student', DashboardStudentController::class)->middleware('auth:user');
