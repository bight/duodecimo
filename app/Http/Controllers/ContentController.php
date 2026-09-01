<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController
{
    public function index() {}

    public function create() {}

    public function store(Request $request) {}

    public function show(Book $book, Content $content)
    {
        return view('contents.show', ['book' => $book, 'content' => $content]);
    }

    public function edit(Content $content) {}

    public function update(Request $request, Content $content) {}

    public function destroy(Content $content) {}
}
