<?php

namespace App\Http\Livewire\Public\Checkout;

use App\Helpers\Helper;
use App\Models\Cargo;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\UserAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public Cargo $cargo;
    public UserAddress $address;

    protected $listeners = ['cargo_select' => 'cargoSelected','address_select' => 'addressSelected'];

    public function render()
    {
        return view('livewire.public.checkout.checkout-component');
    }

    public function cargoSelected(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    public function addressSelected(UserAddress $address)
    {
        $this->address = $address;
    }

    public function makeOrder()
    {
        $order = new Order();
        $order->order_number = Helper::OrderNumberGenerate();
        $order->user_id = Auth::id();
        $order->user_address_id = $this->address->id;
        $order->shipping_address_id = $this->address->id;
        $order->cargo_id = $this->cargo->id;
        $order->total_price = str_replace('.','',str_replace(',','',Cart::total())) / 100;
        $order->total_quantity = Cart::count();
        $order->cargo_price = $this->cargo->price;
        $order->cart_content = Cart::content();
        $order->save();
        foreach (Cart::content() as $orderProduct) {
            if (Product::find($orderProduct->id)->decrement('stock', $orderProduct->qty)) {
                $op = new OrderProduct();
                $op->order_id = $order->id;
                $op->product_id = $orderProduct->id;
                $op->price = $orderProduct->price;
                $op->quantity = $orderProduct->qty;
                $op->save();
            }
        }
        Cart::destroy();
        $this->redirect(route('account.profile'));
    }
}
