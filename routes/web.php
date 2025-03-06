<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', BookController::class);
Route::resource('genres', GenreController::class);
Route::post('/books/{book}/publish', [BookController::class, 'publish'])->name('books.publish');
