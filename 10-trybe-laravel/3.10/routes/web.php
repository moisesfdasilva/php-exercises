<?php

use App\Models\Veiculo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/veiculos', function () {
    return view('veiculos', ['veiculos' => Veiculo::all()]);
});

Route::get('/veiculos/{placa}', function ($placa) {
    $veiculo = Veiculo::find($placa);
    return view('veiculo', ['veiculo' => $veiculo]);
});
