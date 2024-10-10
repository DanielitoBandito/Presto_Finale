<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    public function create(){
        return view('article.create');
    }

    public static function middleware():array{
        return [
            new Middleware('auth', only: ['create']),
        ];
    }

    public function show(Article $article){
        return view('article.show', compact('article'));
    }
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }
}

