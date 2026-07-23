<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Product {
    public static function all(): array {
        $products = [
            [
                'id' => 1,
                'name' => 'Mouse Gamer Logitech G305 LIGHTSPEED',
                'description' => 'Sem Fio, 12000 DPI, 6 Botões, Preto',
                'price' => 199.99,
                'category' => 'Periféricos'
            ],
            [
                'id' => 2,
                'name' => 'Mouse Microsoft Wired Basic',
                'description' => 'Com Fio, 800 DPI, USB, Preto',
                'price' => 183.90,
                'category' => 'Periféricos'
            ],
            [
                'id' => 3,
                'name' => 'Memória RAM Kingston Fury Beast 16GB',
                'description' => '16GB, 3200MHz, DDR4, CL16, Preto',
                'price' => 999.99,
                'category' => 'Hardware'
            ],
            [
                'id' => 4,
                'name' => 'Monitor Gamer AOC 27"',
                'description' => '27", Full HD, 200Hz, 0.3ms, IPS, G-Sync, HDR, Ângulo Ajustável, Preto',
                'price' => 800.00,
                'category' => 'Monitor'
            ],
            [
                'id' => 5,
                'name' => 'Monitor UltraGear 27"',
                'description' => '27", FHD, 180Hz, 1ms, IPS, DP e HDMI, HDR10, FreeSync, G-Sync',
                'price' => 1019.99,
                'category' => 'Monitor'
            ],
            [
                'id' => 6,
                'name' => 'HD Seagate 1TB Barracuda',
                'description' => '1TB, 7200RPM, SATA III 6Gb/s',
                'price' => 586.49,
                'category' => 'Hardware'
            ]
        ];

        return $products;
    }

    public static function find(int $id): array {
        $product = Arr::first(
            Product::all(), fn ($p) => $p['id'] == $id);

        if (!$product) {
            abort(404);
        }

        return $product;
    }
}
