<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//DASHBOARD
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//LOGIN
Route::get('login', [AuthController::class, 'login'])->name('login');

//USER
Route::get('user', [UserController::class, 'index'])->name('user');

//TUGAS
Route::get('tugas', [TugasController::class, 'index'])->name('tugas');