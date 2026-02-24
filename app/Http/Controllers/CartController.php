<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartAddPostRequest;
use App\Http\Requests\UpdateQtyPostRequest;
use App\Services\CartServices;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $userCartItems = CartServices::getItemsWithDetails();

        $CartTotalPrices = CartServices::getTotalPrices();
        $title = 'سبد خرید';
        return view('Cart',compact('title','userCartItems','CartTotalPrices'));
    }
    public function add(CartAddPostRequest $request)
    {
      CartServices::add($request->input('product_id'),$request->input('qty'));

      return redirect()->back();
    }

    public function removeItem(int $product_id)
    {
        CartServices::remove($product_id);


        return back();
    }

    public function clear()
    {
        CartServices::clear();

        return back();

    }

    public function updateQty(Request $request)
    {
      $cartItems =  $request->input('cart_items');

      foreach ($cartItems as $cartItem) {

          CartServices::updateQty($cartItem['product_id'], $cartItem['qty']);

      }
      return back();
    }
}
