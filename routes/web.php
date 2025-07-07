<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\TaskController;
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


// Route::get('/dashboard/{folder}', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard.index');

Route::post('/folders/store', [FolderController::class, 'store'])->name('folders.store');
Route::put('/folders/{folder}/update', [FolderController::class, 'update'])->name('folders.update');
Route::delete('/folders/{folder}/destroy', [FolderController::class, 'destroy'])->name('folders.destroy');

Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{task}/update', [TaskController::class, 'update'])->name('tasks.update');
Route::put('/tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
Route::delete('/tasks/{task}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/',function(){
    return view('welcome');
});

