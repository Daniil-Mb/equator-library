<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookService;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $this->bookService->createBook($request->only('title'), $request->file('cover'));

        return redirect()->route('books.index')->with('success', 'Книга успешно создана!');
    }

    public function publish(Book $book)
    {
        $this->bookService->publishBook($book);

        return redirect()->route('books.index')->with('success', 'Книга успешно опубликована!');
    }
}
