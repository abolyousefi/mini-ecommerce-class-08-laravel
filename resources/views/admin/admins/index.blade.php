@php use App\Enums\AdminStatus @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">لیست ادمین‌ها</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">ادمین‌ها</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست ادمین‌ها</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">


        <!-- Filter + Search -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-3">
                        <form method="GET" action="{{route('admin.admins.index')}}">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                <!-- Left: Add admin + Sort -->
                                <div class="d-flex flex-wrap gap-1 project-list-main align-items-center">
                                    <div class="d-flex me-2">
                                        <input class="form-control me-2" type="search" name="search"
                                               placeholder="جستجو ادمین" value="{{request()->input('search')}}"
                                               aria-label="جستجو">
                                        <button class="btn btn-light" type="submit">جستجو</button>
                                    </div>

                                    <select id="choices-single-default" class="form-control" name="sort">
                                        <option value="">مرتب‌سازی بر اساس</option>
                                        <option
                                            value="name_asc" >
                                            نام (الف - ی)
                                        </option>
                                        <option
                                            value="name_desc" >
                                            نام (ی - الف)
                                        </option>
                                        <option value="newest" >
                                            جدیدترین
                                        </option>
                                    </select>
                                </div>

                                <!-- Right: Search -->
                                <div class="d-flex" role="search">
                                    <a href="{{route('admin.admins.create.index')}}" class="btn btn-primary me-2">
                                        <i class="ri-add-line me-1 fw-medium align-middle"></i>ایجاد مدیر
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-bordered">
                            <thead>
                            <tr>


                                <th>نام,نام خانوادگی</th>
                                <th>نام کاربری</th>
                                <th>وضعیت</th>
                                <th>تاریخ ایجاد</th>
                                <th>اقدامات</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach($admins as $admin)
                              <tr>


                                  <td>{{$admin->name}}</td>
                                  <td>{{$admin->username}}</td>

                                  <td>
                                            <span
                                                class="badge bg-primary-transparent">
                                               @switch($admin->status)
                                                   @case(AdminStatus::ENABLE)
                                                   <span style="color: blue">فعال</span>
                                                   @break
                                                   @case(AdminStatus::DISABLE)
                                                   <span style="color: red">غیر فعال</span>
                                               @endswitch
                                            </span>
                                  </td>


                                  <td>{{$admin->created_at->toJalali()->format('H:i Y-m-d ')}}</td>
                                  <td>
                                      <div class="hstack gap-2 fs-15">
                                          <a href="{{ route('admin.admins.edit',$admin->id) }}"
                                             class="btn btn-secondary-light btn-icon btn-sm" title="ویرایش">
                                              <i class="ti ti-pencil"></i>
                                          </a>
                                          <form action="{{route('admin.admins.destroy',$admin->id)}}"
                                                method="POST"
                                                onsubmit="return confirm('آیا از حذف این ادمین مطمئن هستید؟')">
                                             @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-icon btn-sm btn-danger-light">
                                                  <i class="ri-delete-bin-line"></i>
                                              </button>
                                          </form>
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
        <!-- Pagination -->


    </div>
@endsection
