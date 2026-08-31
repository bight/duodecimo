<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Content;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::factory()
            ->count(1)
            ->has(Content::factory()->count(1))
            ->create();
    }
}
