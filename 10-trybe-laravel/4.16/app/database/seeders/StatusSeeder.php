<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['nome' => 'disponível'],
            ['nome' => 'em manutenção']
        ];

        foreach ($status as $s) {
            Status::create($s);
        }
        
    }
}
