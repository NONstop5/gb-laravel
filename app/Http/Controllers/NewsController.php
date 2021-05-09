<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show($id)
    {
        dd($id);
        return view('news.show');
    }

    public function add(Request $request)
    {
        return view('news.add');
    }
}
