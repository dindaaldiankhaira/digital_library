<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        Publisher::insert([
            ['name' => 'Gramedia'],
            ['name' => 'Bentang Pustaka'],
            ['name' => 'Mizan'],
        ]);
    }
}
