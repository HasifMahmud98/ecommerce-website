<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function shop()
    {
        $products = Product::orderBy('id', 'desc')->with('images')->get();
        // dd($products);
        return view('frontend.shop', compact('products'));
    }
}