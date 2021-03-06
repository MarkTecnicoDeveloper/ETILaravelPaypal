<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;

class Cart
{
    private $items = [];

    public function __construct()
    {
        if(Session::has('shopping-cart'))
        {
            $cart = Session::get('shopping-cart');

            $this->items = $cart->items;
        }
    }

    public function add(Product $product)
    {
        
        if(isset($this->items[$product->id]))
        {
            $this->items[$product->id] = [
                'item'  => $product,
                'qtd'   => $this->items[$product->id]['qtd'] + 1,
            ];
        } else {
            $this->items[$product->id] = [
                'item'  => $product,
                'qtd'   => 1,
            ];
        }

    }

    public function decrement(Product $product)
    {
        if(isset($this->items[$product->id]))
        {
            if($this->items[$product->id]['qtd'] == 1)
            {
                unset($this->items[$product->id]);
            } else {
                $this->items[$product->id] = [
                    'item'  => $product,
                    'qtd'   => $this->items[$product->id]['qtd'] - 1,
                ];
            }
        } 
    }

    public function getItems()
    {
        return $this->items;
    }

}