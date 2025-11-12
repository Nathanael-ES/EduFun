<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use illuminate\support\Str;

class HomeController extends Controller
{
    //
    public function index()
    {
        // ambil semua artikel dari database
        $articles = Article::orderBy('published_at', 'desc')->take(5)->get();

        // kirim ke view home.blade.php
        return view('home', compact('articles'));
    }

    public function popular()
    {
        $articles = Article::orderBy('views', 'desc')->paginate(3);
        return view('popular.index', compact('articles'));
    }
}
