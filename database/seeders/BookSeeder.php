<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['title' => 'Laskar Pelangi', 'author_id' => 1, 'publisher_id' => 1],
            ['title' => 'Bumi', 'author_id' => 2, 'publisher_id' => 2],
            ['title' => 'Supernova', 'author_id' => 3, 'publisher_id' => 3],
        ]);
    }
}
