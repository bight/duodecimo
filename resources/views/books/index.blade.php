<x-layout>
    <x-slot:title>
        {{ __('Books') }}
    </x-slot>

    @foreach($books as $book)
        <p><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></p>
    @endforeach
</x-layout>
