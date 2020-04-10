@extends('blog.template.body')

@section('content')
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>
    @foreach($articles as $article)

        <div class="card mb-4">
            <img class="card-img-top" src="{{ asset('img/articles') . '/' . $article->images->first()->name }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$article->title}}</h2>
                <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($article->content),150, '...') }}</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posteado {{ $article->created_at->diffForHumans() }} por {{ $article->user->name }}
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        {{ $articles->render() }}
    </ul>
@endsection
