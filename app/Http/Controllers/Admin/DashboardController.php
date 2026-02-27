<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $userCount = User::count();

        $sellCount = OrderItem::query()
        ->sum('qty');


        $totalIncome = OrderItem::sum('total_price');

        $title = "داشبورد";

     return view('Admin.Dashboard',compact('userCount','sellCount','totalIncome','title'));
    }
}
