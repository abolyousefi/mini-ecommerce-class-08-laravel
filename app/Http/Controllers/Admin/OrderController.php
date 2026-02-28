<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderUpdatePostRequest;
use App\Models\Order;
use App\Models\User;
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

    public function update(Request $request)
    {
       $order = Order::findOrFail($request->input('id'));

      $order->update([
          'status' => $request->input('status')
      ]);

      return redirect()->route('admin.orders.index');

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

