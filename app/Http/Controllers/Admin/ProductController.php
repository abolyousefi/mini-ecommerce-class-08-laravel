<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ProductStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreatePostRequest;
use App\Http\Requests\Admin\ProductUpdatePostRequest;
use App\Models\Category;
use App\Models\File;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->orderByDesc('created_at')
            ->paginate();

        return view('admin.products.index',compact('products'));
     }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit',compact('product','categories'));
     }

    public function update(ProductUpdatePostRequest $request)
    {
        $product = Product::query()
            ->where('name','=',$request->input('name'))
            ->first();

        $inputs = $request->only([
            'name',
            'name_en',
            'category_id',
            'price',
            'discount',
            'qty',
            'description',
        ]);
        $inputs['status'] = ProductStatus::ENABLE;
        try {
            DB::beginTransaction();

            $product->update($inputs);


          if ($request->filled('images')){
            foreach ($request->file('images')  as $image) {
                $imageName = $product->id . '_' . time() . '.' . $image->extension();

                $path = $image->storeAs('product_images', $imageName);

                $file = File::update([
                    'file_name' => $imageName,
                    'orginal_name' => $image->getClientOriginalName(),
                    'file_size' => $image->getSize(),
                    'file_path' => $path,
                    'file_type' => $image->extension()
                ]);

                $file->id = File::query()
                    ->where('file_name', '=', $imageName)
                    ->first();

                $default = true;
                ProductImage::update([
                    'product_id' => $product->id,
                    'file_id' => $file->id,
                    'is_default' => $default
                ]);
            }
                if ($default){
                    $default = false;
                }
            }

            DB::commit();

            return redirect()->route('admin.products.index');
        } catch (Exception $exception){
            Log::error($exception);
            DB::rollBack();
            return back()->withErrors([
                'general' =>  'ویرایش محصول با خطا مواجه شده است'
            ]);
        }
     }

    public function show(Product $product)
    {
        return view('admin.products.show',compact('product'));
     }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create',compact('categories'));
     }

    public function createPost(ProductCreatePostRequest $request)
    {
        $inputs = $request->only([
            'name',
            'name_en',
            'category_id',
            'price',
            'discount',
            'qty',
            'description',
        ]);
        $inputs['status'] = ProductStatus::ENABLE;
        try {
            DB::beginTransaction();
          $product   = Product::create($inputs);

          $default = true;

            foreach ($request->file('images')  as $image){
                $imageName = $product->id . '_'.time().'.'.$image->extension();

                 $path  =  $image->storeAs('product_images',$imageName);

                $file   =   File::create([
                    'file_name' => $imageName,
                    'orginal_name' => $image->getClientOriginalName(),
                    'file_size' => $image->getSize(),
                    'file_path' => $path,
                    'file_type' => $image->extension()
                ]);

                ProductImage::create([
                    'product_id' =>  $product->id,
                    'file_id' => $file->id,
                    'is_default' => $default
                ]);
            if ($default){
                $default = false;
            }
            }

           DB::commit();

            return redirect()->route('admin.products.index');
        } catch (Exception $exception){
            Log::error($exception);
            DB::rollBack();
            return back()->withErrors([
                'general' =>  'ایجاد محصول با خطا مواجه شده است'
            ]);
        }
     }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
     }
}
