<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $userCount = User::count();

        $sellCount = OrderItem::sum('qty');

        $totalIncome = OrderItem::sum('total_price');

     return view('Admin.Dashboard',compact('userCount','sellCount','totalIncome'));
    }
}
