<?php

namespace App\Http\Controllers;

use App\Http\Requests\checkoutPostRequest;
use App\Services\CartServices;
use App\Services\OrderServices;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $title  = 'تکمیل سفارش';

        $userCart = CartServices::getItemsWithDetails();

        $CartTotalPrices = CartServices::getTotalPrices();

        return view('checkout',compact('CartTotalPrices','userCart','title'));
   }

    public function post(checkoutPostRequest $request)
    {
        $checkoutData = $request->only([
            'user_province',
            'user_city',
            'user_address',
            'postal_code',
            'user_mobile',
            'description'
        ]);
        OrderServices::register($checkoutData);

        return redirect()->route('dashboard.orders');
   }
}
