<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * Run the seeder.
     * $ ./vendor/bin/sail artisan db:seed --class=DatabaseSeeder
     * 
     * Obs:
     *  - the method insert doesn't fill timestamps but insert many truples;
     *  - the method create fill timestamps but doesn't insert many truples.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            TagSeeder::class
        ]);
    }
}
