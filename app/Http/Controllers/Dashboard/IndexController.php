<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'داشبورد';

        $userOrders = Order::query()
            ->where('user_id','=',Auth::id())
            ->orderByDesc('created_at')
            ->paginate();
        $withOutFooter = true;

        return view('dashboard.index',compact('withOutFooter','title','userOrders'));
    }
}
