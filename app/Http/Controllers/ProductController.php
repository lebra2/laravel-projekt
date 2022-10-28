<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        dd(Product::all());
        return Inertia::render('Product/Product', [
            'products' => Product::all(),
        ]);
    }
}
