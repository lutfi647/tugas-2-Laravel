<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $authors = Author::all();
        if ($authors->count() < 5) {
            Author::insert([
                ['name' => 'Author A', 'email' => 'a@example.com', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Author B', 'email' => 'b@example.com', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Author C', 'email' => 'c@example.com', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Author D', 'email' => 'd@example.com', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Author E', 'email' => 'e@example.com', 'created_at' => now(), 'updated_at' => now()],
            ]);
            $authors = Author::all();
        }

        Book::insert([
            ['title' => 'Harry Potter and the Philosopher\'s Stone', 'year' => 1997, 'author_id' => $authors[0]->id, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Murder on the Orient Express', 'year' => 1934, 'author_id' => $authors[1]->id, 'created_at' => now(), 'updated_at' => now()],
            ['title' => '1984', 'year' => 1949, 'author_id' => $authors[2]->id, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Pride and Prejudice', 'year' => 1813, 'author_id' => $authors[3]->id, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'The Shining', 'year' => 1977, 'author_id' => $authors[4]->id, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
