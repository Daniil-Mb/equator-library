<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Книга 1',
            'status' => false,
            'cover_url' => 'covers/tipichnyi-muskul-car.jpg',
        ]);

        Book::create([
            'title' => 'Книга 2',
            'status' => true,
            'cover_url' => 'covers/tNTaSWg1MT4FrpW8OPc8QHbwmxbUCNqbzrUs8ape.png',
        ]);
    }
}
