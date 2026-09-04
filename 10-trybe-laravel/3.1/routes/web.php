<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function () {
    return view('produtos', [
        'products' => Product::all()
    ]);
});

Route::get('/produtos/{id}', function ($id) {
    $product = Product::find($id);
    return view('produto', ['product' => $product]);
});

Route::get('/config', function () {
    return view('config');
});

Route::fallback(function () {
    abort(401, 'Página não encontrada.');
});
