@extends('admin.layout.app')

@section('content')
    <!-- Start::app-content -->
    <div class="container-lg">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4 auth-circle">
                    <div class="card-body p-5">
                        <p class="h4 mb-3 fw-semibold text-center">
                            ورود به پنل مدیریت
                        </p>
                        <p class="mb-4 text-muted text-center">
                            برای ورود به پنل مدیریت لطفا اطلاعات فرم را وارد کنید.
                        </p>


                        <form method="POST" action="{{route('admin.auth.login.Post')}}">
                          @csrf
                            <div class="col-xl-12">
                                <label for="login-username" class="form-label text-default">نام کاربری</label>
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    id="login-username"
                                    placeholder="نام کاربری را وارد کنید"
                                    value=""
                                />
                                @error('username')
                                <span style="color: red"> {{ $message }}</span>
                                @enderror
                            </div>

                            <br>

                            <div class="col-xl-12">
                                <label for="login-password" class="form-label text-default">رمز عبور</label>
                                <div class="position-relative">
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="login-password"
                                        placeholder="رمز عبور را وارد کنید"
                                    />
                                    @error('password')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                    @error('general')
                                    <span style="color: red"> {{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">ورود</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::app-content -->

@endsection
