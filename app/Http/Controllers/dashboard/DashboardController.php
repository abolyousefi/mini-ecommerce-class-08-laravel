<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function account()
    {
       return view('dashboard.account');
   }

    public function orders()
    {
     return view('dashboard.orders');
   }
}
