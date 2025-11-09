<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = ['Interactive Multimedia' => 'interactive-multimedia',
            'Software Engineering' => 'software-engineering'];
        return view('category.index', compact('categories'));
    }

    public function show($slug)
    {
        $map = [
            'interactive-multimedia' => 'Interactive Multimedia',
            'software-engineering' => 'Software Engineering'
        ];

        if (!isset($map[$slug])) abort(404);

        $categoryName = $map[$slug];
        $articles = Article::where('category', $categoryName)->orderBy('published_at', 'desc')->get();

        return view('category.show', compact('categoryName', 'articles'));

        // if($name == 'Interactive Multimedia')
        // {
        //     $courses = [
        //         'Human and Computer Interaction',
        //         'User Experience',
        //         'User Experience for Digital Immersive Technology'
        //     ];
        // }
        // else if($name == 'Software Engineering')
        // {
        //     $courses = [
        //         'Pattern Software Design',
        //         'Agile Software Development',
        //         'Code Reengineering'
        //     ];
        // }
        // return view('detail', ['category' => $name, 'courses' => $courses]);
    }
}
