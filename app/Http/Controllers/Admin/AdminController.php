<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminsCreatePostRequest;
use App\Http\Requests\Admin\AdminsUpdatePostRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::query()
            ->orderByDesc('created_at')
            ->paginate();

        return view('admin.admins.index',compact('admins'));

    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit',compact('admin'));
    }

    public function update(AdminsUpdatePostRequest $request)
    {
        $inputs = $request->only([
            'id',
            'name',
            'username',
            'password',
            'status'
        ]);

        $admin = Admin::query()
            ->where('id','=',$inputs['id'])
            ->first();

        if ($inputs['password'] == null){
            $inputs['password'] = $admin->password;
        }
        else {
            $inputs['password'] = Hash::make($inputs['password']);
        }

        $admin->update($inputs);

        return redirect()->route('admin.admins.index');
    }

    public function create()
    {
   return view('admin.admins.create');
    }

    public function createPost(AdminsCreatePostRequest $request)
    {
     $inputs = $request->only([
         'name',
         'username',
         'password',
         'status'
     ]);

     $inputs['password'] = Hash::make($inputs['password']);

     Admin::create($inputs);

     return redirect()->route('admin.admins.index');

    }

    public function destroy(Admin $admin)
    {
      $admin->delete();

      return redirect()->route('admin.admins.index');
    }
}
