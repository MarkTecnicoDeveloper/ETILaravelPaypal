<?php

namespace App\Models;

class Cart
{
    private $items = [];

    public function add(Product $product)
    {
        $this->items[$product->id] = [
            'item'  => $product,
            'qtd'   => 1,
        ];
    }

    public function getItems()
    {
        return $this->items;
    }

}