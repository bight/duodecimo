<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $book->title }} | {{ config('app.name', 'Duodecimo') }}</title>

        @fonts
    </head>
    <body>
        <h1>{{ $book->title }}</h1>
        <ul role="list">
        @foreach($book->contents as $content)
            <li>{{ $content->title }}</li>
        @endforeach
        </ul>
    </body>
</html>
