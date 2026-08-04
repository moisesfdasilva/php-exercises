<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Periféricos'],
            ['name' => 'Hardware'],
            ['name' => 'Monitor']
        ];

        foreach ($categories as $c) {
            Category::create($c);
        }
        
    }
}
