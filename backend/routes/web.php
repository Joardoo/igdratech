<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/productos', 'pages.products')->name('products');
Route::view('/sobre-nosotros', 'pages.about')->name('about');
Route::view('/contacto', 'pages.contact')->name('contact');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
