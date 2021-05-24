@extends('layouts.layout')

@section('title', 'News')

@section('content')
    <h1>News list of category "{{ $categoryList[$categoryId] }}":</h1>

    <a class="btn btn-success" href="{{ route('news.add', [$categoryId]) }}">
        Добавить новость
    </a>
    <ul>
        @foreach($newsList[$categoryId] as $key => $news)
            <li>
                <a href="{{ route('news.show', [$categoryId, $key]) }}">{{ $news }}</a>
            </li>
        @endforeach
    </ul>
@endsection
