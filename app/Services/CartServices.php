<?php

namespace App\Services;

use App\Models\Product;

class CartServices
{
    public static function add(int $product_id, int $qty) :void
    {
        $userCart = session('cart',[]);


        $userCart[$product_id] = [
       'product_id' => $product_id,
       'qty'   => $qty
   ];

   session([
       'cart'  =>$userCart
   ]);

    }

    public static function getCount() : int
    {
        $userCart = session('cart',[]);

        return count($userCart);
    }

    public static function getItems()
    {
        $userCart =session('cart',[]);

       foreach ($userCart as $key => $value){
            $userCart[$key]['product'] = Product::findOrFail($key);
       }
        return $userCart;
    }
}
