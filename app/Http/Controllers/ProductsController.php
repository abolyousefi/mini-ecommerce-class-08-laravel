<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $title =  "فروشگاه";
        $products =  Product::query()
            ->where('status','=',ProductStatus::ENABLE)
            ->paginate(1);
      return view('products.index',compact('products','title'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $title =  "$product->name";
        return view('products.show',compact('product','title'));
    }
}
