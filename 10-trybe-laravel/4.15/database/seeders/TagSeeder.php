<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $tags = [
            ['name' => '10% off'],
            ['name' => 'Gamer'],
            ['name' => 'Performance'],
            ['name' => 'Mais vendidos'],
        ];
    
        foreach($tags as $t) {
            Tag::create($t);
        }

        Product::find(1)->tags()->attach([1, 2, 3]);
        Product::find(2)->tags()->attach([4]);
        Product::find(3)->tags()->attach([2, 3]);
        Product::find(4)->tags()->attach([2, 3, 4]);
        Product::find(5)->tags()->attach([2, 3]);
        Product::find(6)->tags()->attach([3]);
    }
}
