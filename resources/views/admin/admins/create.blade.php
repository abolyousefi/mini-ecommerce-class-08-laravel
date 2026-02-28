@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <h1 class="page-title fw-medium fs-18 mb-2">افزودن مدیر جدید</h1>
            <div>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/admin/admins">مدیران</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن مدیر</li>
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
                        <form action="{{ route('admin.admins.create.post') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">ایجاد مدیر</div>
                                </div>

                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label class="form-label">نام</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}" placeholder="نام,نام خانوادگی را وارد کنید">
                                            @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">نام کاربری</label>
                                            <input type="text" class="form-control" name="username"
                                                   value="{{ old('username') }}" placeholder="نام کاربری">
                                            @error('username')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">رمز عبور</label>
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="رمز عبور را وارد کنید">
                                            @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="1" selected>فعال
                                                </option>
                                                <option value="0" >غیرفعال
                                                </option>
                                            </select>
                                            @error('status')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary">ثبت اطلاعات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
@endsection
