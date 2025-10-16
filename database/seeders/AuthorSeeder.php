<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'email' => 'jkrowling@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Agatha Christie', 'email' => 'agatha@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'George Orwell', 'email' => 'orwell@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Austen', 'email' => 'austen@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stephen King', 'email' => 'king@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
