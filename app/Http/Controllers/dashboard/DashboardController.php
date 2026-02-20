<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $withOutFooter = true;
        return view('dashboard.index',compact('withOutFooter'));
    }
    public function account()
    {
        $withOutFooter = true;
       return view('dashboard.account',compact('withOutFooter'));
   }

    public function orders()
    {
        $withOutFooter = true;
     return view('dashboard.orders',compact('withOutFooter'));
   }
}
