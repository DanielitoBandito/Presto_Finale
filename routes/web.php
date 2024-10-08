<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// ROTTA HOMEPAGE
Route::get('/', [HomeController::class,'index'])
->name('home.index');

Route::get('/login' , [UserController::class, 'index'])
->name('auth.login');


