@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">ویرایش سفارش</h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت سفارشات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ویرایش سفارش</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid pt-4">


        <!-- Edit Form -->
        <div class="card custom-card">
            <div class="card-body">


                <form action="{{route('admin.orders.update',$order->id)}}" method="POST">
                  @csrf
                    @method('PATCH')
                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label fw-semibold">وضعیت سفارش</label>

                        <select name="status" id="status" class="form-select ">
                            <option
                                value="0"
                            >در انتظار ثبت</option>
                            <option
                                value="1"
                                selected                                >در حال پردازش</option>
                            <option
                                value="2"
                            >ارسال شده</option>
                            <option
                                value="3"
                            >تحویل داده</option>
                            <option
                                value="4"
                            >لغو شده</option>
                        </select>
                    </div>


                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-wave">
                        ذخیره تغییرات
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
