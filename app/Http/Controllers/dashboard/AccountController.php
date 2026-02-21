<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $title = "اطلاعات حساب";

        $withOutFooter = true;

        return view('dashboard.account',compact('withOutFooter','title'));
    }
}
