<?php

<<<<<<< HEAD

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
>>>>>>> e65ea04
});

