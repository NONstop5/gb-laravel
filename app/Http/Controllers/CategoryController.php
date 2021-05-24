<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categoryList = [
            'Hot news',
            'Space news',
            'Moscow news',
            'Travel news',
            'Car news',
        ];

        return view('categories.index', [
            'categoryList' => $categoryList,
        ]);
    }
}
