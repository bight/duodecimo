<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::controller(BookController::class)->group(function () {
    Route::name('books.')->group(function () {
        Route::get('books', 'index')->name('index');
        Route::get('books/{book:slug}', 'show')->name('show');
    });
});

Route::controller(ContentController::class)->group(function () {
    Route::name('books.contents.')->group(function () {
        Route::get('books/{book:slug}/{content:slug}', 'show')->name('show');
    });
});
