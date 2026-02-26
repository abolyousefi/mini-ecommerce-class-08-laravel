<?php

namespace App\Http\Controllers\Admin;

use App\Enums\AdminStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginPostRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        $rawLayout = true;

        $title = "ورود";

    return view('admin.login',compact('rawLayout','title'));
   }

    public function loginPost(LoginPostRequest $request)
    {
     $admin = Admin::query()
         ->whereUsername($request->input('username'))
         ->whereStatus(AdminStatus::ENABLE)
         ->first();

     if (!$admin){
         return back()
             ->withErrors([
                 'general' => 'اطلاعات وارد شده صحیح نمیباشد'
             ]);
     }
     if (!Hash::check($request->input('password'),$admin->password)){
         return back()
             ->withErrors([
                 'general' => 'اطلاعات وارد شده صحیح نمیباشد'
             ]);
     }

     Auth::guard('admin')->login($admin);

     return redirect()->route('admin.dashboard');
   }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.auth.login.index');
   }
}
