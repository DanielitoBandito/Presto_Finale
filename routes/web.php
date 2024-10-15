<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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


Route::get('revisor/index' , [RevisorController::class, 'index'])->middleware('isRevisor')
->name('revisor.index');

Route::patch('/accept/{article}' , [RevisorController::class, 'accept'])
->name('accept');

Route::patch('/reject/{article}' , [RevisorController::class, 'reject'])
->name('reject');

Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])
->middleware('auth')
->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])
->name('make.revisor');










