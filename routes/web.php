<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

// ROTTA HOMEPAGE
Route::get('/', [HomeController::class,'index'])
->name('home.index');

Route::get('/create/article', [ArticleController::class, 'create'])
->name('article.create')
->middleware(['auth']);

Route::get('/show/article/{article}', [ArticleController::class, 'show'])
->name('article.show');

Route::get('/article/index', [ArticleController::class, 'index'])
->name('article.index');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])
->name('byCategory');

Route::get('/search/article', [HomeController::class, 'searchArticles'])
->name('article.search');





