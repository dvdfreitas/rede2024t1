<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Manuais',
            'slug' => 'manuais'
        ]);

        Category::create([
            'name' => 'Cidadania e Desenvolvimento',
            'slug' => 'ced'
        ]);

        Category::create([
            'name' => 'Futebol',
            'slug' => 'futebol'
        ]);
    }
}
