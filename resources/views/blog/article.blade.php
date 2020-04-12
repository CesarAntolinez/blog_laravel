@extends('blog.template.body')

@section('title', $article->title)

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Title -->
            <h1 class="mt-4">{{ $article->title }}</h1>

            <!-- Author -->
            <p class="lead">por <span class="text-bold">{{ $article->user->name }}</span></p>
            <hr>
            <!-- Date/Time -->
            <p>Creado el  {{ $article->create_at }}</p>
            <hr>
            <img src="{{ asset('img/articles') . '/' . $article->images->first()->name }}" alt="{{ $article->images->first()->name }}" class="img-fluid">
        </div>
        <!-- Preview Image -->
        <div class="col-12">
            {!! $article->content !!}
        </div>
        <div class="col-12">
            <!-- Comments Form -->
            <div id="disqus_thread"></div>
        </div>

    </div>

@endsection

@section('script')
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://blog-laravel-iiutzl9bv6.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
