@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">
                    ویرایش کاربر
                    {{getFullName($user)}}
                </h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت کاربران</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ویرایش کاربر</li>
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

                <form
                    action="{{route('admin.users.update',$user->id)}}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                   @csrf
                    @method('PUT')
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">ویرایش کاربر</div>
                        </div>

                        <div class="card-body">


                            <!-- User Fields -->
                            <div class="row gy-3">
                                <div class="col-xl-6">
                                    <label class="form-label">نام</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="first_name"
                                        value="{{old('first_name',$user->first_name)}}"
                                        placeholder="نام را وارد کنید"
                                    >
                                    @error('first_name')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xl-6">
                                    <label class="form-label">نام خانوادگی</label>
                                    <input type="text" class="form-control" name="last_name"
                                           value="{{old('last_name',$user->last_name)}}"
                                           placeholder="نام خانوادگی را وارد کنید">
                                    @error('last_name')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xl-6">
                                    <label class="form-label">ایمیل</label>
                                    <input type="email" class="form-control" name="email"
                                           value="{{old('email',$user->email)}}"
                                           placeholder="ایمیل را وارد کنید">
                                    @error('email')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xl-6">
                                    <label class="form-label">شماره موبایل</label>
                                    <input type="text" class="form-control" name="mobile"
                                           value="{{old('mobile',$user->mobile)}}"
                                           placeholder="شماره موبایل را وارد کنید">
                                    @error('mobile')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xl-6">
                                    <label class="form-label">رمز عبور (در صورت تغییر)</label>
                                    <input type="text" class="form-control" name="password"
                                           placeholder="رمز عبور را وارد کنید">
                                    @error('password')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$user->id}}">
                </form>
            </div>
        </div>

    </div>
@endsection
