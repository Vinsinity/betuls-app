<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['cart_update' => 'render'];

    public function render()
    {
        $cart_count = Cart::content()->count();
        $cart = Cart::content();
        return view('livewire.cart-counter', compact('cart_count','cart'));
    }
}
