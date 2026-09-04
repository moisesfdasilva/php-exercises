<?php

namespace Database\Seeders;

use App\Models\Veiculo;
use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'placa' => 'XLM2170',
                'modelo' => 'Moto Ducati - Streetfighter V4 S',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status_id' => 1
            ],
            [
                'placa' => 'XLM2171',
                'modelo' => 'Moto Ducati - Panigale V4',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status_id' => 1
            ],
            [
                'placa' => 'XLM2172',
                'modelo' => 'Moto Ducati - Hypermotard 698 Mono RVE',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status_id' => 2
            ],
            [
                'placa' => 'XLN2070',
                'modelo' => 'BYD Dolphin',
                'ano' => 2026,
                'proprietario' => 'Chico Buarque',
                'status_id' => 1
            ],
            [
                'placa' => 'XLN2071',
                'modelo' => 'BYD Han',
                'ano' => 2026,
                'proprietario' => 'Chico Buarque',
                'status_id' => 1
            ],
            [
                'placa' => 'XLN2072',
                'modelo' => 'BYD Sealion 7',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status_id' => 1
            ],
            [
                'placa' => 'XLN2073',
                'modelo' => 'BYD Tan',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status_id' => 1
            ],
            [
                'placa' => 'XLN2074',
                'modelo' => 'BYD Yuan Pro',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status_id' => 1
            ]
            
        ];

        foreach ($vehicles as $v) {
            Veiculo::create($v);
        }
        
    }
}
