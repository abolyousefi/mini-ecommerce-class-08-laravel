@php use App\Enums\ProductStatus; @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">جزئیات محصول</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/products">محصولات</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">جزئیات محصول</li>
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
                <div class="card custom-card">
                    <div class="card-body">

                        <!-- Product Images -->
                        <div class="image-upload-wrapper d-flex flex-wrap gap-2 mb-4"
                             style="border-radius: 8px; padding: 10px;">
                            <div style="width:150px;height:150px;">
                                <img src="/storage/products/86RqhSSnghgyin7JcuD5OEU7LVIZLjWwZm7UgaAq.webp"
                                     class="img-fluid rounded"
                                     style="width:100%;height:100%;object-fit:cover;" alt="تصویر محصول">
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <strong>نام محصول:</strong>
                                <p>{{ $product->name }}</p>
                            </div>

                            <div class="col-xl-6">
                                <strong>اسلاگ:</strong>
                                <p>{{$product->name_en}}</p>
                            </div>

                            <div class="col-xl-6">
                                <strong>دسته‌بندی:</strong>
                                <p>{{$product->category->name}}</p>
                            </div>

                            <div class="col-xl-6">
                                <strong>قیمت:</strong>
                                <p>{{number_format($product->price)}} تومان</p>
                            </div>
                            @if($product->discount > 0)
                                <div class="col-xl-6">
                                    <strong>قیمت تخفیفی:</strong>
                                    <p>
                                        {{$product->discount}} تومان
                                    </p>
                                </div>
                            @endif
                            <div class="col-xl-6">
                                <strong>موجودی:</strong>
                                <p>{{$product->qty}}</p>
                            </div>

                            <div class="col-xl-6">
                                <strong>وضعیت:</strong>
                                @switch($product->status)
                                    @case(ProductStatus::ENABLE)
                                        <p>
                                            <span class="badge bg-success">فعال</span>
                                        </p>

                                        @break
                                    @case(ProductStatus::DISABLE)
                                    <p>
                                        <span style="color: red">غیر فعال</span>
                                    </p>

                                    @break
                                    @case(ProductStatus::DRAFT)
                                    <p>
                                        <span class="badge bg-success"></span>
                                    </p>

                                    @break
                                @endswitch

                            </div>

                            <div class="col-xl-12">
                                <strong>توضیحات:</strong>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">
                        <a href="{{route('admin.products.index')}}" class="btn btn-secondary">
                            بازگشت به لیست محصولات
                        </a>
                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-warning ms-2">ویرایش
                            محصول</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
