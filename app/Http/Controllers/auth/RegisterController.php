<?php

namespace App\Http\Controllers\auth;

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
        return view('auth.register');
    }

    public function post(RegisterPostRequest $request)
    {
     $inputs = $request->validated();

     $inputs['password'] = Hash::make($request->password);

     $user = User::create($inputs);

     Auth::guard('user')->login($user);

     return redirect()->route('index');
    }
}
