<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BookService
{
    public function createBook(array $data, ?UploadedFile $cover): Book
    {
        // Обработка загрузки обложки
        $coverUrl = $cover
            ? $cover->store('covers', 'public')
            : 'defaults/default_cover.jpg';

        // Создание книги
        return Book::create([
            'title' => $data['title'],
            'status' => false,
            'cover_url' => $coverUrl,
        ]);
    }

    public function publishBook(Book $book): void
    {
        $book->update(['status' => true]);
    }
}
