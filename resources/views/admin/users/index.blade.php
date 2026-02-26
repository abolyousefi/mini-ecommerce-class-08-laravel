@extends('admin.layout.app')

@section('content')
    <div class="container-fluid pt-4">

        <!-- Page Header Close -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <form method="GET" action="http://127.0.0.1:8000/admin/users">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                <!-- Left: Add User + Sort Dropdown -->
                                <div class="d-flex flex-wrap gap-1 project-list-main align-items-center">
                                    <div class="d-flex me-2">
                                        <input
                                            class="form-control me-2"
                                            type="search"
                                            name="search"
                                            placeholder="جستجوی کاربر"
                                            value=""
                                            aria-label="جستجوی کاربر"
                                        />
                                        <button class="btn btn-light" type="submit">جستجو</button>
                                    </div>

                                    <select id="choices-single-default" class="form-control" name="sort">
                                        <option value="">مرتب‌سازی بر اساس</option>
                                        <option value="newest" selected>
                                            جدیدترین
                                        </option>
                                        <option value="name_asc" >
                                            الفبا (الف - ی)
                                        </option>
                                        <option value="name_desc" >
                                            الفبا (ی - الف)
                                        </option>
                                    </select>
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
                <div class="card custom-card ">
                    <div class="table-responsive">
                        <!-- Removed .table-responsive -->
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th scope="col">نام و نام خانوادگی</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">شماره موبایل</th>
                                <th scope="col">تاریخ ثبت نام</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-fill">
                                            <a
                                                href="javascript:void(0);"
                                                class="fw-medium fs-14 d-block text-truncate"
                                            >
                                                مهدی هاشمی
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>sirj3x@gmail.com</td>
                                <td>09359953331</td>
                                <td>11:29 1404/07/24</td>
                                <td>
                                    <div class="btn-list">
                                        <a href="http://127.0.0.1:8000/admin/users/3/show"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/users/3/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="javascript:void(0);"
                                           onclick="if(confirm('آیا از حذف این کاربر مطمئن هستید؟')) { document.getElementById('delete-form-3').submit(); }"
                                           class="btn btn-pink-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                        <form
                                            id="delete-form-3"
                                            action="http://127.0.0.1:8000/admin/users/3/delete"
                                            method="POST"
                                            style="display:none;"
                                        >
                                            <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">                                                    <input type="hidden" name="_method" value="delete">                                                </form>
                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-fill">
                                            <a
                                                href="javascript:void(0);"
                                                class="fw-medium fs-14 d-block text-truncate"
                                            >
                                                سارا محمدی
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>sara@gmail.com</td>
                                <td>09120000001</td>
                                <td>16:13 1404/07/13</td>
                                <td>
                                    <div class="btn-list">
                                        <a href="http://127.0.0.1:8000/admin/users/1/show"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/users/1/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="javascript:void(0);"
                                           onclick="if(confirm('آیا از حذف این کاربر مطمئن هستید؟')) { document.getElementById('delete-form-1').submit(); }"
                                           class="btn btn-pink-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                        <form
                                            id="delete-form-1"
                                            action="http://127.0.0.1:8000/admin/users/1/delete"
                                            method="POST"
                                            style="display:none;"
                                        >
                                            <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">                                                    <input type="hidden" name="_method" value="delete">                                                </form>
                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-fill">
                                            <a
                                                href="javascript:void(0);"
                                                class="fw-medium fs-14 d-block text-truncate"
                                            >
                                                حسین کریمی
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>hossein@gmail.com</td>
                                <td>09120000002</td>
                                <td>16:13 1404/07/13</td>
                                <td>
                                    <div class="btn-list">
                                        <a href="http://127.0.0.1:8000/admin/users/2/show"
                                           class="btn btn-primary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="http://127.0.0.1:8000/admin/users/2/edit"
                                           class="btn btn-secondary-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="javascript:void(0);"
                                           onclick="if(confirm('آیا از حذف این کاربر مطمئن هستید؟')) { document.getElementById('delete-form-2').submit(); }"
                                           class="btn btn-pink-light btn-icon btn-sm"
                                           data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                        <form
                                            id="delete-form-2"
                                            action="http://127.0.0.1:8000/admin/users/2/delete"
                                            method="POST"
                                            style="display:none;"
                                        >
                                            <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">                                                    <input type="hidden" name="_method" value="delete">                                                </form>
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
