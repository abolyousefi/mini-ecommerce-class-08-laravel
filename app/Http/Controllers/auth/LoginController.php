<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $withOutHeader = true;

        $withOutFooter = true;


          return view('auth.login',compact('withOutHeader','withOutFooter'));
    }

    public function post(LoginPostRequest $request)
    {
     $inputs = $request->validated();




    }
}
