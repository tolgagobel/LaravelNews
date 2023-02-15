<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Cart;
use Livewire\Component;

class Counter extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty+1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty-1;
        Cart::update($rowId,$qty);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
