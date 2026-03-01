@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">ویرایش دسته‌بندی</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a
                                href="http://127.0.0.1:8000/admin/categories">دسته‌بندی‌ها</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش دسته‌بندی</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">


        <div class="row">
            <div class="col-xl-12">

                <!-- Edit Category Form -->
                <form action="{{route('admin.categories.update',$category->id)}}" method="Post"
                      enctype="multipart/form-data">
                  @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="card custom-card mb-4">
                        <div class="card-header">
                            <div class="card-title">ویرایش دسته‌بندی</div>
                        </div>

                        <div class="card-body">

                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <label class="form-label">نام دسته‌بندی</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{old('name',$category->name)}}"
                                           placeholder="نام دسته‌بندی را وارد کنید">
                                    @error('name')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>
@endsection
