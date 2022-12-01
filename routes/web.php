<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;
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

Route::post('/cart-update/{id}', [CartController::class, 'update'])->name('cart.update');

Route::delete('/cart-delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');

Route::get('/cart', [CartController::class, 'index']);

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'pay')->name('stripe.post');
});