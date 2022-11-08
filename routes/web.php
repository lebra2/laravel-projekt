<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Product;

Route::get('/', function () {
    return Inertia::render('Pood', ['products' => Product::paginate(12)]);
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/contact', function(){
    return Inertia::render('Contact');
});

Route::post('/cart-add', [CartController::class, 'store'])->name('card.add');

Route::get('/cart', [CartController::class, 'index']);