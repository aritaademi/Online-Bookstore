<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Fiction', 'description' => 'Fictional books and novels.']);
        Category::create(['name' => 'Science Fiction', 'description' => 'Sci-Fi books.']);

    }
}
