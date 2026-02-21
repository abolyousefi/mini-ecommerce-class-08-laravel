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
                ->applySearch()
                ->where('status','=',ProductStatus::ENABLE)
                ->paginate()
               ->withQueryString();


          $Categories = Category::all();

      return view('products.index',compact('products','title','Categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $title =  $product->name;

        $relatedProducts = Product::query()
            ->where('category_id','=',$product->id)
            ->where('id','!=',$product->id)
            ->limit(6)
            ->get();
        return view('products.show',compact('product','title','relatedProducts'));
    }
}
