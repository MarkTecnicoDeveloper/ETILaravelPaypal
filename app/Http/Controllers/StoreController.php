<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::orderby('id', 'DESC')->get();

        return view('store.home.index', compact('products'));
    }
}
