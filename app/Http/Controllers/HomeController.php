<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('home.index', compact('articles'));
    }

    public function searchArticles(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }
}


// ->where('is_accepted', true)