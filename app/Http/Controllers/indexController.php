<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        $title = 'صفحه اصلی';
   return view('index',compact('title'));
    }
}
