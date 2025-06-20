<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);