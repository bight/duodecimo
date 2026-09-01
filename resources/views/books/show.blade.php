<x-layout>
    <x-slot:title>
        {{ $book->title }}
    </x-slot>

    <ul role="list">
    @foreach($book->contents as $content)
        <li><a href="{{ route('books.contents.show', ['book' => $book, 'content' => $content])}}">{{ $content->title }}</a></li>
    @endforeach
    </ul>
</x-layout>
