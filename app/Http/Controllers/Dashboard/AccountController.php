<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\accountPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $title = "اطلاعات حساب";

        $withOutFooter = true;

        $user = Auth::user();

        return view('dashboard.account',compact('withOutFooter','title','user'));
    }

    public function post(accountPostRequest $request)
    {
        $inputs = $request->only([
            'first_name',
            'last_name',
            'mobile',
            'email',
        ]);
        if ($request->filled('password')) {
            $inputs['password'] = Hash::make($request->input('password'));
        }

       Auth::user()->update($inputs);

        return redirect()->back();
    }
}
