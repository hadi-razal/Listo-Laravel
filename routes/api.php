<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

//AUTHENTICATIONS

//Register and Login routes
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/api/login', [LoginController::class, 'login'])->name('login');

//Forgot password API routes
Route::post('/forgot-password', [ForgotPasswordController::class, 'resetPasswordRequest'])->name('password.resetPasswordRequest');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');


