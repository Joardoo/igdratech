<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

// Estas rutas llevan el prefijo /api automáticamente (configurado en bootstrap/app.php)

Route::get('/products', [ProductController::class, 'index'])->name('api.products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('api.products.show');
