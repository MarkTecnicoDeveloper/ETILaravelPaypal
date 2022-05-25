<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

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
