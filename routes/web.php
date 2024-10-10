<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

// ROTTA HOMEPAGE
Route::get('/', [HomeController::class,'index'])
->name('home.index');

route::get('/create/article', [ArticleController::class, 'create'])
->name('article.create')
->middleware(['auth']);

route::get('/show/article/{article}', [ArticleController::class, 'show'])
->name('article.show');


