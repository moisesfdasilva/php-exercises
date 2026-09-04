<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Veiculo {

    public static function all(): array {
        $veiculos = [
            [
                'id' => 1,
                'placa' => 'XLM2170',
                'modelo' => 'Moto Ducati - Streetfighter V4 S',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status' => 'disponível'
            ],
            [
                'id' => 2,
                'placa' => 'XLM2171',
                'modelo' => 'Moto Ducati - Panigale V4',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status' => 'disponível'
            ],
            [
                'id' => 3,
                'placa' => 'XLM2172',
                'modelo' => 'Moto Ducati - Hypermotard 698 Mono RVE',
                'ano' => 2025,
                'proprietario' => 'Tim Maia',
                'status' => 'em manutenção'
            ],
            [
                'id' => 4,
                'placa' => 'XLN2070',
                'modelo' => 'BYD Dolphin',
                'ano' => 2026,
                'proprietario' => 'Chico Buarque',
                'status' => 'disponível'
            ],
            [
                'id' => 5,
                'placa' => 'XLN2071',
                'modelo' => 'BYD Han',
                'ano' => 2026,
                'proprietario' => 'Chico Buarque',
                'status' => 'disponível'
            ],
            [
                'id' => 6,
                'placa' => 'XLN2072',
                'modelo' => 'BYD Sealion 7',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status' => 'disponível'
            ],
            [
                'id' => 7,
                'placa' => 'XLN2073',
                'modelo' => 'BYD Tan',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status' => 'disponível'
            ],
            [
                'id' => 8,
                'placa' => 'XLN2074',
                'modelo' => 'BYD Yuan Pro',
                'ano' => 2026,
                'proprietario' => 'Gilberto Gil',
                'status' => 'disponível'
            ]
            
        ];
        
        return $veiculos;
    }

    public static function find(string $placa): array {
        $veiculo = Arr::first(
            Veiculo::all(), fn ($v) => $v['placa'] == $placa);

        if (!$veiculo) {
            abort(404);
        }

        return $veiculo;
    }

}
