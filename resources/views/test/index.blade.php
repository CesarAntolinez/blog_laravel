<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $prueba->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
<h1>Hola</h1>
<br>
<h1>
    {{ $prueba->title }}
</h1>
<hr>
<p>
    {{ $prueba->content }}
</p>
<hr>
{{ $prueba->user->name . ' | ' . $prueba->category->name }} |
@foreach($prueba->tags as $item)
    {{ $item->name . ' ' }}
@endforeach
</body>
</html>