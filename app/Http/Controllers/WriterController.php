<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    //
    public function index()
    {
        $writers = Writer::all();
        return view('writers.index', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::with('articles')->findOrFail($id);
        return view('writers.show', compact('writer'));
    }
}
