<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Keysa',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Hanny',
            'year' => 2023,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Zahwa',
            'year' => 2022,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Pemrograman Web',
            'author' => 'Dewi',
            'year' => 2024,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Belajar Laravel',
            'author' => 'Eca',
            'year' => 2025,
            'stock' => 7,
        ]);
    }
}