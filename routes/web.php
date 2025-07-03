<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FolderController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/password/request', function () {
    return view('welcome');
})->name('password.request');


Route::get('/dashboard/{folder}', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



Route::resource('folders', FolderController::class)->only(['store', 'edit', 'update', 'destroy']);
