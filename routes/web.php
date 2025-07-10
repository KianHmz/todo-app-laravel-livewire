<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Auth

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store'])->name('auth.register');

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'read'])->name('auth.login');

Route::post('/password/request', [AuthController::class, 'password'])->name('auth.password.request');


// Dashboard

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard.index');

