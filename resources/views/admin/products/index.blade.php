@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">لیست محصولات</h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت محصولات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">لیست محصولات</li>
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
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <form method="GET" action="http://127.0.0.1:8000/admin/products">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                <div class="d-flex flex-wrap gap-1 project-list-main align-items-center">
                                    <div class="d-flex me-2">
                                        <input class="form-control me-2" type="search" name="search"
                                               placeholder="جستجو محصول"
                                               value=""
                                               aria-label="جستجو">
                                        <button class="btn btn-light" type="submit">جستجو</button>
                                    </div>

                                    <select id="choices-single-default" class="form-control" name="sort">
                                        <option value="">مرتب‌سازی بر اساس</option>
                                        <option
                                            value="newest" selected>
                                            جدیدترین
                                        </option>
                                        <option
                                            value="name_asc" >
                                            نام (صعودی)
                                        </option>
                                        <option
                                            value="name_desc" >
                                            نام (نزولی)
                                        </option>
                                        <option
                                            value="price_asc" >
                                            قیمت (کم به زیاد)
                                        </option>
                                        <option
                                            value="price_desc" >
                                            قیمت (زیاد به کم)
                                        </option>
                                    </select>
                                </div>


                                <div class="d-flex">
                                    <a href="http://127.0.0.1:8000/admin/products/create" class="btn btn-primary me-2">
                                        <i class="ri-add-line me-1 fw-medium align-middle"></i>
                                        ایجاد محصول
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>دسته‌ بندی</th>
                                <th>قیمت</th>
                                <th>تخفیف</th>
                                <th>موجودی</th>
                                <th>تاریخ ثبت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="product-list">
                                <td>
                                    <div class="d-flex">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img
                                                        src="http://127.0.0.1:8000/storage/product_images/1_1759669026_63170.png"
                                                        class="w-100 h-100" alt="گوشی هوشمند | Smartphone">
                                                </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/products/1/show">
                                                    گوشی هوشمند | Smartphone
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>الکترونیک</td>
                                <td>
                                    500,000
                                    تومان
                                </td>
                                <td>
                                    50,000
                                    تومان
                                </td>
                                <td>
                                    10
                                </td>
                                <td>16:13 1404/07/13</td>

                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/products/1/show"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/products/1/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/products/1/delete"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این محصول مطمئن هستید؟')"
                                        >
                                            <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="product-list">
                                <td>
                                    <div class="d-flex">
                                                <span class="avatar avatar-md avatar-square bg-light">
                                                    <img
                                                        src="http://127.0.0.1:8000/storage/product_images/2_1759669097_29437.png"
                                                        class="w-100 h-100" alt="رمان | Novel">
                                                </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/products/2/show">
                                                    رمان | Novel
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>کتاب</td>
                                <td>
                                    80,000
                                    تومان
                                </td>
                                <td>
                                    1,000
                                    تومان
                                </td>
                                <td>
                                    49
                                </td>
                                <td>16:13 1404/07/13</td>

                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/products/2/show"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/products/2/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/products/2/delete"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این محصول مطمئن هستید؟')"
                                        >
                                            <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- End::row-2 -->



    </div>
@endsection
