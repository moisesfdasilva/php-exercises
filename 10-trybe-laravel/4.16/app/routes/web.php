<?php

use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::get('/veiculos', [VeiculoController::class, 'index']);
Route::get('/veiculos/{placa}/view', [VeiculoController::class, 'detail']);
Route::get('/veiculos/cadastrar', [VeiculoController::class, 'create']);
Route::post('/veiculos', [VeiculoController::class, 'store']);
Route::patch('/veiculos/{placa}/view', [VeiculoController::class, 'update']);
Route::get('/veiculos/{placa}/edit', [VeiculoController::class, 'edit']);
Route::delete('/veiculos/{placa}/edit', [VeiculoController::class, 'destroy']);
