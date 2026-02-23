<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPostRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $withOutHeader = true;

        $withOutFooter = true;

        $title = 'ورود';

          return view('auth.login',compact('withOutHeader','withOutFooter','title'));
    }

    public function post(LoginPostRequest $request)
    {
     $user = User::query()
         ->where('mobile','=',$request->mobile)
         ->first();
     $user = User::findOrFail($user->id);
     if (!Hash::check($request->password ,$user->password)){
         return back()
             ->withErrors([
                 'general' => "رمزعبور صحیح نمی باشد"
             ])->withInput([
                 'mobile' => $request->mobile
             ]);
     }
     Auth::guard()->login($user);

     return redirect()->route('index');
    }
}
