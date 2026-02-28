<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserUpdatePostRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $title = 'مدیریت کاربران';



        $users = User::query()
            ->when($request->filled('search'), function (Builder $query) use($request) {
                $search = $request->input('search');
                $query->whereAny([
                    'first_name',
                    'last_name',
                    'email',
                    'mobile'
                ],'LIKE',"%$search%");
            })
            ->when($request->filled('sort'), function (Builder $query) use($request) {
                $sort  =  $request->input('sort');

                switch ($sort){
                    case "name_asc" : {
                        $query
                            ->orderBy('first_name')
                            ->orderBy('last_name');
                    }
                    case "name_desc" : {
                        $query
                            ->orderByDesc('first_name')
                            ->orderByDesc('last_name');
                    }
                    default : {
                     $query
                         ->orderByDesc('created_at');
                    }
                }
            })

            ->paginate();

        return view('admin.users.index',compact('title','users'));
    }

    public function show(User $user)
    {
        $orders = Order::query()
            ->where('user_id','=',$user->id)
            ->orderByDesc('created_at')
            ->paginate();

        return view('admin.users.show',compact('user','orders'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function update(UserUpdatePostRequest $request)
    {
       $inputs = $request->validated();

       $user =  User::query()
           ->where('mobile','=',$inputs['mobile'])
           ->first();

       if ($request->filled('password')){
           $inputs['password'] = Hash::make($inputs['password']);
       }
       else {
           $inputs['password'] = $user->password;
       }
       $user->update($inputs);

       return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {

    $user->delete();

    return redirect()->route('admin.users.index');
    }
}
