<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home'); 


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/products', [ProductController::class, 'index'])->name('products'); 
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant/store', [EtudiantController::class, 'store'])->name('etudiant.store');