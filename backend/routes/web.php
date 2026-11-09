<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
// Ruta comodín: /productos y todo lo que cuelgue de ella lo gestiona el router de Angular
Route::view('/productos/{any?}', 'pages.products')->where('any', '.*')->name('products');
Route::view('/sobre-nosotros', 'pages.about')->name('about');
Route::view('/contacto', 'pages.contact')->name('contact');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
