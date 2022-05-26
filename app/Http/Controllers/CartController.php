<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {

        $cart = Session::get('shopping-cart');

        dd($cart->getItems());

        return view('store.cart.index');
    }

    public function add($id)
    {

        $product = Product::find($id);

        if(!$product)
        {
            return redirect()->route('home');
        }

        $cart = new Cart;
        $cart->add($product);

        Session::put('shopping-cart', $cart);

        return redirect()->route('cart');

    }
}
