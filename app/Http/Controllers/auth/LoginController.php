<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $withOutHeader = true;

        $withOutFooter = true;


          return view('auth.login',compact('withOutHeader','withOutFooter'));
    }

    public function post()
    {

    }
}
