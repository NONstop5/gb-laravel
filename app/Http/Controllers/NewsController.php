<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($categoryId)
    {
        $categoryList = [
            'Hot news',
            'Space news',
            'Moscow news',
            'Travel news',
            'Car news',
        ];

        $newsList = [
            [
                'Hot news1',
                'Hot news2',
                'Hot news3',
                'Hot news4',
            ],
            [
                'Space news1',
                'Space news2',
                'Space news3',
                'Space news4',
            ],
            [
                'Moscow news1',
                'Moscow news2',
                'Moscow news3',
                'Moscow news4',
            ],
            [
                'Travel news1',
                'Travel news2',
                'Travel news3',
                'Travel news4',
            ],
            [
                'Car news1',
                'Car news2',
                'Car news3',
                'Car news4',
            ],
        ];

        return view('news.index', [
            'categoryId' => $categoryId,
            'categoryList' => $categoryList,
            'newsList' => $newsList,
        ]);
    }

    public function show(
        int $categoryId,
        int $id
    ) {

        return view('news.show');
    }

    public function add(Request $request)
    {
        return view('news.add');
    }
}
