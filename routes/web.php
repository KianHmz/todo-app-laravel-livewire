<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Auth

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store'])->name('register');

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'read'])->name('login');


// Dashboard

Route::get('/dashbaord', function () {
    return view('dashboard');
})->name('dashboard');

