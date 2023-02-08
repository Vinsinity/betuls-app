<?php

namespace App\Http\Livewire\Public\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartItemsComponent extends Component
{
    protected $listeners = ['cart_update' => 'render'];

    public function render()
    {
        $cart = Cart::content();
        return view('livewire.public.cart-items-component', compact('cart'));
    }

    public function deleteFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cart_update');
    }

    public function update($value, $rowId) {
        Cart::update($rowId,$value);
        $this->emit('cart_update');
    }
}
