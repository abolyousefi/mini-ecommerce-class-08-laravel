<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryCreatePostRequest;
use App\Http\Requests\Admin\CategoryUpdatePostRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()
            ->when($request->filled('search'), function (Builder $query) use($request) {
                $search = $request->input('search');
                $query->where('name','LIKE',"%$search%");
            })
            ->when($request->filled('sort'), function (Builder $query) use($request) {
                $sort  =  $request->input('sort');

                switch ($sort){
                    case "name_asc" : {
                        $query
                            ->orderBy('name');

                    }
                    case "name_desc" : {
                        $query
                            ->orderByDesc('name');

                    }
                    case "date_asc" : {
                        $query
                            ->orderBy('created_at');
                    }
                    default : {
                        $query
                            ->orderByDesc('created_at');
                    }
                }
            })
            ->paginate();
        return view('admin.categories.index',compact('categories'));
    }

    public function show(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    public function update(CategoryUpdatePostRequest $request)
    {


      $category = Category::findOrFail($request->input('id'));

      $category->update([
          'name' => $request->input('name')
      ]);

      return redirect()->route('admin.categories.index');
    }

    public function create()
    {
   return view('admin.categories.create');
    }

    public function createPost(CategoryCreatePostRequest $request)
    {
      $inputs = $request->validated();

      Category::create($inputs);

      return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
