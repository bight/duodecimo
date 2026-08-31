<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController
{
    public function index()
    {
        return view('books.index', ['books' => Book::all()]);
    }

    public function create() {}

    public function store(Request $request) {}

    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    public function edit(Book $book) {}

    public function update(Request $request, Book $book) {}

    public function destroy(Book $book) {}
}
