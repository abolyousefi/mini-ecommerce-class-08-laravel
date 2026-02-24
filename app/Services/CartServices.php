<?php

namespace App\Services;

use App\Models\Product;

class CartServices
{
    public static function getItems()
    {
      return session('cart',[]);
    }
    public static function add(int $product_id, int $qty) :void
    {
        $userCart = self::getItems();


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
        $userCart = self::getItems();

        return count($userCart);
    }

    public static function getCartTotalQty(int $product_id):int
    {
        $userCart = self::getItems();
        return $userCart[$product_id]['qty'] ?? 0;
    }

    public static function getItemsWithDetails() :array
    {
        $userCart = session('cart',[]);

       foreach ($userCart as $key => $value){
            $userCart[$key]['product'] = Product::findOrFail($key);
       }
        return $userCart;
    }

    public static function remove(int $product_id) :void
    {
        $userCart = self::getItems();

        unset($userCart[$product_id]);

        session([
            'cart' => $userCart
        ]);
    }

    public static function clear() :void
    {
       session([
           'cart' => []
       ]) ;
    }

    public static function updateQty(int $product_id, int $newQty)
    {
        $userCart = self::getItems();

        $userCart[$product_id]['qty'] = $newQty;

        session([
            'cart' => $userCart
        ]);
    }

    public static function getTotalPrices() : array
    {
        $finalPrice = 0;
        $finalDiscount = 0;

        $userCart = self::getItemsWithDetails();

        foreach ($userCart as $item){
            $finalPrice += $item['product']->price * $item['qty'];
            $finalDiscount += $item['product']->discount * $item['qty'];
        }
        return [
            'price' => $finalPrice,
            'discount' => $finalDiscount
        ];
    }
}
