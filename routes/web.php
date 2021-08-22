<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Student\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/student/home', [HomeController::class, 'index'])->name('home');
    Route::post('/student/logout', [LogoutController::class, 'store'])->name('logout');
});
