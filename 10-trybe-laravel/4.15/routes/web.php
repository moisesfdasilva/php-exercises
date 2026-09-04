<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/produtos/criar', [ProductController::class, 'create']);
Route::post('/produtos', [ProductController::class, 'store']);
Route::get('/produtos/{id}', [ProductController::class, 'edit']);
Route::patch('/produtos/{id}', [ProductController::class, 'update']);
Route::delete('/produtos/{id}', [ProductController::class, 'destroy']);

Route::view('/config', 'config');

Route::fallback(function () {
    abort(401);
});
