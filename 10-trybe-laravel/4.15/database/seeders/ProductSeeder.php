<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $products = [
            [
                'name' => 'Mouse Gamer Logitech G305 LIGHTSPEED',
                'description' => 'Sem Fio, 12000 DPI, 6 Botões, Preto',
                'category_id' => 1,
                'price' => 199.99,
            ],
            [
                'name' => 'Mouse Microsoft Wired Basic',
                'description' => 'Com Fio, 800 DPI, USB, Preto',
                'category_id' => 1,
                'price' => 183.90,
            ],
            [
                'name' => 'Memória RAM Kingston Fury Beast 16GB',
                'description' => '16GB, 3200MHz, DDR4, CL16, Preto',
                'category_id' => 2,
                'price' => 999.99,
            ],
            [
                'name' => 'Monitor Gamer AOC 27"',
                'description' => '27", Full HD, 200Hz, 0.3ms, IPS, G-Sync, HDR, Ângulo Ajustável, Preto',
                'category_id' => 3,
                'price' => 800.00,
            ],
            [
                'name' => 'Monitor UltraGear 27"',
                'description' => '27", FHD, 180Hz, 1ms, IPS, DP e HDMI, HDR10, FreeSync, G-Sync',
                'category_id' => 3,
                'price' => 1019.99,
            ],
            [
                'name' => 'HD Seagate 1TB Barracuda',
                'description' => '1TB, 7200RPM, SATA III 6Gb/s',
                'category_id' => 2,
                'price' => 586.49,
            ]
        ];

        foreach($products as $p) {
            Product::create($p);
        }
        
    }
}
