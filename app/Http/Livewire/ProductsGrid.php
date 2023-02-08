<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use WireUi\Traits\Actions;

class ProductsGrid extends Component
{
    use Actions;
    public $products;

    public function mount($products) {
        $this->products = $products;
    }

    public function render()
    {
        $cart = Cart::content();
        return view('livewire.products-grid', compact('cart'));
    }

    public function addToCart($id) {
//        dd(notify()->success('Sepete eklendi.'));
        $product = Product::findOrFail($id);
        Cart::add($product->id,$product->name,1,$product->price,0,['image' => $product->images[0]->image]);
        $this->emit('cart_update');
        $this->notification()->success('Okey','okey okey okey');
        $this->dispatchBrowserEvent('cartadd:success', [
            'message' => $product->name.' Cart added successfully'
        ]);
    }
}
