@php use App\Enums\ProductStatus @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">جزئیات دسته‌بندی</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a
                                href="http://127.0.0.1:8000/admin/categories">دسته‌بندی‌ها</a></li>
                        <li class="breadcrumb-item active" aria-current="page">جزئیات دسته‌بندی</li>
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

                <div class="card custom-card mb-4">
                    <div class="card-header">
                        <div class="card-title">اطلاعات دسته‌بندی</div>
                    </div>

                    <div class="card-body">
                        <div class="row gx-4 gy-4 align-items-center">

                            <div class="col-md-8">
                                <h2 class="fw-bold mb-3">{{$category->name}}</h2>

                                <dl class="row mb-4">

                                </dl>

                                <div class="row text-center text-md-start">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="p-3 border rounded bg-light">
                                            <div class="fs-4 fw-bold">{{count($category->products)}}</div>
                                            <div class="text-muted">تعداد محصولات</div>
                                        </div>
                                    </div>

                                    <!-- اگر اطلاعات وضعیت دیگه‌ای داری می‌تونی اینجا اضافه کنی -->
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <!-- Products List -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">محصولات دسته‌بندی</div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>محصول</th>
                                <th>دسته‌بندی فعلی</th>
                                <th>قیمت</th>
                                <th>قیمت تخفیف‌خورده</th>
                                <th>موجودی</th>
                                <th>وضعیت</th>
                                <th>منتشر شده</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($category->products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                            <span class="avatar avatar-md avatar-square bg-light">
                                                <img
                                                    src="/assets/admin/images/product-default-image.png"
                                                    class="w-100 h-100" alt="لپ تاپ asus مدل rog">
                                            </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0">{{$product->name}} {{$product->name_en}}</p>
                                            <p class="fs-12 text-muted mb-0 description-limit">{{$product->description}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$category->name}}</td>
                                <td>{{number_format($product->price)}} تومان</td>
                                <td>
                                    <span class="text-success">{{number_format($product->discount)}} تومان</span>
                                </td>
                                <td>{{$product->qty}}</td>
                                <td>
                                        <span class="badge bg-primary-transparent">
                                              @switch($product->status)
                                                @case(ProductStatus::ENABLE)
                                                    <p>
                                            <span class="badge bg-success">فعال</span>
                                        </p>

                                                    @break
                                                @case(ProductStatus::DISABLE)
                                                    <p>
                                        <span style="color: red ">غیر فعال</span>
                                    </p>

                                                    @break
                                                @case(ProductStatus::DRAFT)
                                                    <p>
                                        <span class="badge bg-success"></span>
                                    </p>

                                                    @break
                                            @endswitch
                                        </span>
                                </td>
                                <td>{{$product->created_at->toJalali()->format('H:i Y-m-d ')}}</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="{{route('admin.products.show',$product->id)}}"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>

                                        <a href="{{route('admin.products.edit',$product->id)}}"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
