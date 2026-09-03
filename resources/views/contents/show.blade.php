<x-layout>
    <x-slot:title>
        {{ $content->title }}
    </x-slot>

    {!! $content->body !!}
</x-layout>
