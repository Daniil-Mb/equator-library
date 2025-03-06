<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::create(['name' => 'Фантастика']);
        Genre::create(['name' => 'Детектив']);
        Genre::create(['name' => 'Роман']);
    }
}
