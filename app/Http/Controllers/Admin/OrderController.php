<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()
            ->orderByDesc('created_at')
            ->paginate();


        return view('admin.orders.index',compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show',compact('order'));
    }

    public function edit(Order $order)
    {
       return view('admin.orders.edit',compact('order'));
    }

    public function update()
    {

    }

    public function create()
    {

    }

    public function createPost()
    {

    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index');
    }
}

