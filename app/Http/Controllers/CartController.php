<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddPostRequest;
use App\Services\CartServices;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $userCartItems = CartServices::getItems();
        $title = 'سبد خرید';
        return view('Cart',compact('title','userCartItems'));
    }
    public function add(CartAddPostRequest $request)
    {
      CartServices::add($request->input('product_id'),$request->input('qty'));

      return redirect()->back();
    }
}
