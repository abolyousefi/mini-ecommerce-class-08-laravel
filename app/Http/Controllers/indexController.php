<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        $products = Product::query()
        ->where('status','=',ProductStatus::ENABLE)
        ->paginate();
        $title = 'صفحه اصلی';
   return view('index',compact('title','products'));
    }
}
