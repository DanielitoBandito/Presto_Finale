<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// ROTTA HOMEPAGE
Route::get('/', [HomeController::class,'index'])
->name('home.index');
