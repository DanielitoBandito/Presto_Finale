<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('home.index', compact('articles'));
    }

}