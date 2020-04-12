@extends('blog.template.body')

@section('title', $article->title)

@section('content')
    <div class="row my-4">

        <img src="{{ asset('img/articles') . '/' . $article->images->first()->name }}" alt="{{ $article->images->first()->name }}" class="img-fluid">
        <h1>{{ $article->title }}</h1>
    </div>
    <div class="row my-4">
        {!! $article->content !!}
    </div>

@endsection
