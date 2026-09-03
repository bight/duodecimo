<x-layout>
    <x-slot:title>
        {{ $content->title }}
    </x-slot>

    <x-markdown>{{ $content->body }}</x-markdown>
</x-layout>
