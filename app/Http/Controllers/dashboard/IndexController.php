<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'داشبورد';

        $withOutFooter = true;

        return view('dashboard.index',compact('withOutFooter','title'));
    }
}
