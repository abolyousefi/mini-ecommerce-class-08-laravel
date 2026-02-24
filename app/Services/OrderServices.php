<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class OrderServices
{
    public static function register(array $checkoutData) : void
    {
      $cartItems = CartServices::getItemsWithDetails();

      $cartTotalPrices = CartServices::getTotalPrices();

      foreach ($cartItems as $cartItem){
          if ($cartItem['qty'] > $cartItem['product']->qty){
              throw new Exception('یکی از محصولات موجودی ندارد');
          }
      }


      foreach ($cartItems as $cartItem){
          $cartItem['product']->decrement('qty',$cartItem['qty']);
      }

      $orderData = [
          'user_id' => Auth::id(),
          'total_price' => $cartTotalPrices['price'],
          'total_discount' => $cartTotalPrices['discount'] ?? null,
          'total_products' => CartServices::getCount(),
          'traking_code' => Str::random(12),
          'status' => OrderStatus::PROCESSING
      ];

      $order  = Order::create(array_merge($orderData,$checkoutData));

      foreach ($cartItems as $cartItem){
          OrderItem::create([
              'order_id' => $order->id,
              'product_id' => $cartItem['product_id'],
              'qty' => $cartItem['qty'] ,
              'price' => $cartItem['product']->price,
              'total_price' => $cartItem['product']->price * $cartItem['qty'],
              'discount' => $cartItem['product']->discount ?? 0,
              'total_discount' => $cartItem['product']->discount * $cartItem['qty']
          ]);
      }

      CartServices::clear();
    }

}
