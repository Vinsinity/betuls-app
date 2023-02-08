<?php

namespace App\Http\Livewire\Public\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class MobileCartCounterComponent extends Component
{
    protected $listeners = ['cart_update' => 'render'];

    public function render()
    {
        $cart = Cart::content();
        return view('livewire.public.cart.mobile-cart-counter-component');
    }
}
