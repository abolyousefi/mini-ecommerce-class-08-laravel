@php use App\Enums\AdminStatus; @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        @endsection

        @section('content')
            <div class="container-fluid pt-4">


                <div class="row">
                    <div class="col-xl-12">
                        <form action="{{ route('admin.admins.update',$admin->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$admin->id}}">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">ویرایش مدیر</div>
                                </div>

                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-xl-6">
                                            <label class="form-label">نام,نام خانوادگی</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ old('name',$admin->name) }}"
                                                   placeholder="نام,نام خانوادگی را وارد کنید">
                                            @error('name')
                                              <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">نام کاربری</label>
                                            <input type="text" class="form-control" name="username"
                                                   value="{{ old('name',$admin->username) }}" placeholder="نام کاربری">
                                            @error('username')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label">رمز عبور (در صورت تغییر)</label>
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="رمز عبور را وارد کنید">

                                            @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-xl-6">
                                            <label class="form-label">وضعیت</label>
                                            <select class="form-control" name="status">
                                                <option value="1" @selected($admin->status == AdminStatus::ENABLE)>
                                                    فعال
                                                </option>
                                                <option value="0" @selected($admin->status == AdminStatus::DISABLE)>
                                                    غیرفعال
                                                </option>
                                            </select>
                                            @error('status')
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
