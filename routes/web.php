<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Auth
Route::middleware(['guest'])->group(function () {

    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'store'])->name('register');

    Route::get('login', [AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'read'])->name('login');

});

// Dashboard
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

});


