@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">ویرایش محصول</h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت محصولات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ویرایش محصول</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">

        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('admin.products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                    @method('PUT')
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">
                                ویرایش محصول
                            </div>
                        </div>

                        <div class="card-body pt-0">


                            <div class="row gy-3">
                                <!-- Name -->
                                <div class="col-xl-6">
                                    <label class="form-label">نام فارسی</label>
                                    <input
                                        type="text"
                                        class="form-control" name="name"
                                        placeholder="نام فارسی را وارد کنید"
                                        value="{{$product->name}}"
                                    />
                                    @error('name')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Name -->
                                <div class="col-xl-6">
                                    <label class="form-label">نام انگلیسی</label>
                                    <input type="text" class="form-control" name="name_en"
                                           placeholder="نام انگلیسی را وارد کنید" value="{{$product->name_en}}">
                                    @error('name_en')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Category -->
                                <div class="col-xl-6">
                                    <label class="form-label">دسته‌ بندی</label>
                                    <select class="form-control" name="category_id">
                                        <option>یک دسته بندی انتخاب کنید</option>
                                        @foreach($categories as $case)
                                            <option @selected($case->id == $product->category_id)
                                                value="{{$case->id}}" >  {{ __($case->name) }} </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Price -->
                                <div class="col-xl-6">
                                    <label class="form-label">قیمت</label>
                                    <input type="number" class="form-control" name="price"
                                           placeholder="قیمت را وارد کنید" value="{{$product->price}}">
                                    @error('price')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Discount Price -->
                                <div class="col-xl-6">
                                    <label class="form-label">تخفیف</label>
                                    <input type="number" class="form-control" name="discount"
                                           placeholder="تخفیف را وارد کنید"
                                           value="{{$product->discount}}">
                                    @error('discount')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Stock -->
                                <div class="col-xl-6">
                                    <label class="form-label">موجودی</label>
                                    <input type="number" class="form-control" name="qty"
                                           placeholder="تعداد موجودی را وارد کنید" value="{{$product->qty}}">
                                    @error('qty')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="col-xl-12">
                                    <label class="form-label">توضیحات</label>
                                    <textarea  class="form-control" name="description" rows="4"
                                              placeholder="توضیحات را وارد کنید">{{$product->description}}</textarea>
                                    @error('description')
                                    <span style="color: red"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Product Images -->
                            <div
                                class="image-upload-wrapper d-flex flex-wrap gap-2 px-0 pt-0 mt-3"
                                id="imagePreviewContainer"
                                style=" border-radius: 8px; padding: 10px;"
                            >
                                <div class="position-relative" style="width:150px;height:150px;">
                                    <img src="{{ Storage::url('product_images/9_1772284010') }}"
                                         class="img-fluid rounded"
                                         style="width:100%;height:100%;object-fit:cover;" alt="">
                                    <a href="http://127.0.0.1:8000/admin/products/1/remove-image/4"
                                       class="remove-btn btn btn-sm btn-danger position-absolute top-0 end-0 delete-image"
                                       data-confirm="حذف این تصویر؟">×</a>
                                </div>

                                <label
                                    id="uploadPlaceholder"
                                    class="upload-placeholder"
                                    for="imageInput"
                                    style="cursor: pointer; width:150px; height:150px; display: flex; justify-content: center; align-items: center; border: 2px dashed #ccc; border-radius: 8px; padding: 20px; text-align: center;"
                                >
                                    <div>📷<br><strong>آپلود یا کشیدن</strong></div>
                                    <small style="color:#999;">JPG / PNG / JPEG / WEBP</small>
                                </label>
                                <input
                                    id="imageInput"
                                    name="images[]"
                                    type="file"
                                    accept=".jpg,.png,.jpeg,.webp"
                                    multiple
                                    style="display:none"
                                />
                                @error('images')
                                <span style="color: red"> {{ $message }} </span>
                                @enderror
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
