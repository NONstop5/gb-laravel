@extends('layouts.layout')

@section('title', 'Category')

@section('content')
    <h1>Category list:</h1>

    <ul>
        @foreach($categoryList as $categoryId => $category)
            <li>
                <a href="{{ route('news.list', [$categoryId]) }}">{{ $category }}</a>
            </li>
        @endforeach
    </ul>
@endsection
