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

        //$request = request();
        $cart = Session::get('shopping-cart');
        //$cart = $request->session()->get('cart');
        //dd($cart);

        return view('store.cart.index');
    }

    public function add(Request $request, $id)
    {

        $product = Product::find($id);

        if(!$product)
        {
            return redirect()->route('home');
        }

        $cart = new Cart;
        $cart->add($product);

        Session::put('shopping-cart', $cart);
        Session::save();
        //$request->session()->put('cart',$cart);

        //$request->session()->put('cart',$cart);

        //dd($request->session()->get('cart'));

        return redirect()->route('cart');

    }
}
