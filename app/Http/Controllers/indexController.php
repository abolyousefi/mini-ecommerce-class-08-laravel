<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        $bestSelling = Product::query()
            ->withSum('orderItems','qty')
            ->orderByDesc('order_items_sum_qty')
            ->limit(5)
            ->get();

        $categories = Category::query()
            ->limit(5)
            ->get();

        $newestProducts =  Product::query()
        ->orderByDesc('created_at')
        ->limit(5)
        ->get();

        $title = 'صفحه اصلی';
   return view('index',compact('title','bestSelling','categories','newestProducts'));
    }
}
