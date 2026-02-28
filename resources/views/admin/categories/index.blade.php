@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">لیست دسته‌بندی‌ها</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">دسته‌بندی‌ها</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست دسته‌بندی‌ها</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">


        <!-- Filters -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <form method="GET" action="{{ route('admin.categories.index') }}">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                <!-- Sort Dropdown -->
                                <div class="d-flex flex-wrap gap-1 align-items-center">
                                    <div class="d-flex me-2">
                                        <input class="form-control me-2" type="search" name="search"
                                               placeholder="جستجو دسته‌بندی" value="">
                                        <button class="btn btn-light" type="submit">جستجو</button>
                                    </div>

                                    <select id="choices-single-default" class="form-control" name="sort">
                                        <option value="">مرتب‌سازی بر اساس</option>
                                        <option
                                            value="date_desc" >
                                            جدیدترین
                                        </option>
                                        <option
                                            value="date_asc" >
                                            قدیمی‌ترین
                                        </option>
                                        <option
                                            value="name_asc" >
                                            نام (الف تا ی)
                                        </option>
                                        <option
                                            value="name_desc" >
                                            نام (ی تا الف)
                                        </option>
                                    </select>
                                </div>

                                <!-- Search -->
                                <div class="d-flex" role="search">
                                    <a href="http://127.0.0.1:8000/admin/categories/create" class="btn btn-primary me-2">
                                        <i class="ri-add-line me-1 fw-medium align-middle"></i>
                                        ایجاد دسته بندی
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories Table -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>دسته‌بندی</th>
                                <th>توضیحات</th>
                                <th>تعداد محصولات</th>
                                <th scope="col">وضعیت</th>

                                <th>تاریخ ایجاد</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="موبایل">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/1">موبایل</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">1#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">یک دسته بندی تستی برای تست کد</td>
                                <td>3</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>23 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/1"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/1/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/1"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="کالای دیجیتال">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/2">کالای دیجیتال</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">2#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">نمیدانم اطلاعی ندارم</td>
                                <td>1</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/2"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/2/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/2"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="خانه و آشپزخانه">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/3">خانه و آشپزخانه</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">3#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">i don&#039;t know really what is happening in my mind</td>
                                <td>0</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/3"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/3/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/3"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="آرایشی بهداشتی">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/4">آرایشی بهداشتی</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">4#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">بیا بخر ضرر نمیکنی</td>
                                <td>0</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/4"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/4/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/4"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="لوازم تحریر">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/5">لوازم تحریر</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">5#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">لوازم تحریر ها در اینجا دسته بندی شد</td>
                                <td>0</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/5"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/5/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/5"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="گیفت کارت">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/6">گیفت کارت</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">6#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">تمامی هدایات در اینجا دسته بندی شد</td>
                                <td>0</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/6"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/6/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/6"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md avatar-square bg-light">
                                         <img
                                             src="/assets/admin/images/product-default-image.png"
                                             class="w-100 h-100"
                                             alt="ابزار آلات">

                                        </span>
                                        <div class="ms-2">
                                            <p class="fw-semibold mb-0 name-limit">
                                                <a href="http://127.0.0.1:8000/admin/categories/7">ابزار آلات</a>
                                            </p>
                                            <p class="fs-12 text-muted mb-0 ">7#</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="description-limit">مهندس ابزار آلات است؟</td>
                                <td>0</td>
                                <td>
                                        <span
                                            class="badge bg-success-transparent">
                                            فعال
                                        </span>
                                </td>
                                <td>20 مرداد 1404</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="http://127.0.0.1:8000/admin/categories/7"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/categories/7/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="http://127.0.0.1:8000/admin/categories/7"
                                              method="POST"
                                              onsubmit="return confirm('آیا از حذف این دسته‌بندی مطمئن هستید؟')">
                                            <input type="hidden" name="_token" value="G3faz5te2OVLWMw1sn2U47RRUgVWPGJznIyOIEMM" autocomplete="off">                                                    <input type="hidden" name="_method" value="DELETE">                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
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


        <!-- Pagination -->
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0);">قبلی</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="http://127.0.0.1:8000/admin/categories?page=1">1</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0);">بعدی</a>
            </li>
        </ul>

    </div>
@endsection
