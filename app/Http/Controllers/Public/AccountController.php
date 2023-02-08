<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //

    public function profile() {
        $user = User::findOrFail(Auth::id());
        return view('public.account.profile', compact('user'));
    }

    public function orders() {
        $orders = Order::where('user_id', Auth::id())->paginate(15);
        return view('public.account.order-history', compact('orders'));
    }

    public function addresses() {

    }
}
