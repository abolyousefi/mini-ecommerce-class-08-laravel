<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $withOutHeader = true;

        $withOutFooter = true;

        $title = 'ثبت نام';
        return view('auth.register',compact('withOutHeader','withOutFooter','title'));
    }

    public function post(RegisterPostRequest $request)
    {
     $inputs = $request->validated();

     $inputs['password'] = Hash::make($request->password);

     $user = User::create($inputs);

     Auth::guard()->login($user);

     return redirect()->route('index');
    }
}
