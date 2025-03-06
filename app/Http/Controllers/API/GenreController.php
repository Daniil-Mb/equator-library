<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return $genre->books()->paginate(10);
    }
}
