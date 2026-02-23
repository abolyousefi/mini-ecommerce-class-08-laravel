<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $userOrders = Order::query()
            ->where('user_id','=',Auth::id())
            ->orderByDesc('created_at')
            ->paginate();

        $title = "سفارش ها";

        $withOutFooter = true;



        return view('dashboard.orders',compact('withOutFooter','title','userOrders'));
    }
}
