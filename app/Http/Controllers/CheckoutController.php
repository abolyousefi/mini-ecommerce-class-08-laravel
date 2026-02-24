<?php

namespace App\Http\Controllers;

use App\Http\Requests\checkoutPostRequest;
use App\Services\CartServices;
use App\Services\OrderServices;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

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
            'user_postal_code',
            'user_mobile',
            'description'
        ]);
        try {
            OrderServices::register($checkoutData);
        }catch (Exception $exception){
            return back()
                ->withInput([
                    'user_province' => $checkoutData['user_province'],
                    'user_city' => $checkoutData['user_city'],
                    'user_address' => $checkoutData['user_address'],
                    'user_postal_code' => $checkoutData['user_postal_code'],
                    'user_mobile' => $checkoutData['user_mobile'],
                    'description' => $checkoutData['description'],
                ])->withErrors([
                    'general' => 'این عملیات با خطا مواجه شده است'
                ]);


        }


        return redirect()->route('dashboard.orders');
   }
}
