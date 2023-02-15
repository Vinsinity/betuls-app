<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\UpdateRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function list() {
        $orders = Order::orderBy('created_at','desc')->paginate(12);
        return view('admin.order.list', compact('orders'));
    }

    public function show($number)
    {
        $order = Order::where('order_number',$number)->first();
        return view('admin.order.show',compact('order'));
    }

    public function update(UpdateRequest $request, $number)
    {
        $order = Order::where('order_number', $number)->first();
        $order->update($request->all());
        return redirect()->route('admin.orders.show',['number' => $order->order_number])->with('success', 'Order update successfully');
    }
}
