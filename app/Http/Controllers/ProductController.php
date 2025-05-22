<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('is_active', true)->paginate();

        return view('dashboard', [
            'products' => $products,
        ]);
    }

    public function show(Product $product) // Product::where('id', 1)->first
    {
        return view('products.show', [
            'product' => $product,
        ]);
    }
}