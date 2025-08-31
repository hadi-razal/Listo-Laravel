<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::post('/register', [ RegisterController::class,'register'])->name('register');
Route::post('/login', [ LoginController::class,'login'])->name('login');
