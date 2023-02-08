<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart() {
        return view('public.cart.cart');
    }

    public function checkout() {
        if (Auth::check()){
            return view('public.cart.checkout');
        }else{
            return redirect(route('login'));
        }
    }
}
