<?php

namespace App\Http\Livewire\Public\Cart;

use Gloudemans\Shoppingcart\Cart;
use Livewire\Component;

class CartPriceComponent extends Component
{
    protected $listeners = ['cart_update' => 'render'];

    public function render()
    {
        return view('livewire.public.cart-price-component');
    }
}
