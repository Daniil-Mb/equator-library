<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::paginate(10);
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }
}
