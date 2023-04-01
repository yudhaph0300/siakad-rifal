<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('home');
});


Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest:user,student');
Route::post('/login',  [LoginController::class, 'login']);
Route::post('/logout',  [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth:user,student');
