<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderUpdatePostRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::query()
            ->when($request->filled('search'), function (Builder $query) use($request) {

                $search = $request->input('search');
                $query->where('traking_code','LIKE',"%$search%");
            })
            ->when($request->filled('sort'), function (Builder $query) use($request) {
                $sort  =  $request->input('sort');

                switch ($sort){
                    case "created_at_asc" : {
                        $query
                            ->orderBy('created_at')
                            ->orderBy('updated_at');
                    }
                    case "price_high" : {
                        $query
                            ->orderByDesc('total_price')
                            ->orderByDesc('total_discount');
                    }
                    case "price_low" : {
                        $query
                            ->orderBy('total_price');
                    }
                    case "price_desc" : {
                        $query
                            ->orderByDesc('total_price');
                    }
                    case "status" : {
                        $query
                            ->orderByDesc('status');
                    }
                    default : {
                        $query
                            ->orderByDesc('created_at');
                    }
                }
            })
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
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index');
    }
}

