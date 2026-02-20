<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        $title =  "فروشگاه";



            $products =    Product::query()
                ->applySort()
                ->applyFilter()
                ->where('status','=',ProductStatus::ENABLE)
                ->paginate();


          $Categories = Category::all();

      return view('products.index',compact('products','title','Categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $title =  "$product->name";
        return view('products.show',compact('product','title'));
    }
}
