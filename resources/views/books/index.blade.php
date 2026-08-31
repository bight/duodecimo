<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Books') }} | {{ config('app.name', 'Duodecimo') }}</title>

        @fonts
    </head>
    <body>
        <h1>{{ __('Books') }}</h1>
        @foreach($books as $book)
            <p><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></p>
        @endforeach
    </body>
</html>
