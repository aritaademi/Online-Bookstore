<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'George Orwell', 'bio' => 'English novelist and essayist.']);
        Author::create(['name' => 'Jane Austen', 'bio' => 'English novelist known for romantic fiction.']);

    }
}
