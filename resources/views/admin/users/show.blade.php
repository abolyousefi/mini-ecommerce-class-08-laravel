@php use App\Enums\OrderStatus @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">
                    جزئیات کاربر
                    {{getFullName($user)}}
                </h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت کاربران</a></li>
                            <li class="breadcrumb-item active" aria-current="page">جزئیات کاربر</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">


        <!-- User Info Card -->
        <div class="card custom-card mb-4">
            <div class="card-header">
                <div class="card-title">اطلاعات کاربر</div>
            </div>

            <div class="d-flex align-items-center p-3 pt-0">
                <div class="card-body flex-grow-1">
                    <dl class="row mb-0">
                        <dt class="col-sm-3 my-2 fw-semibold">نام کامل:</dt>
                        <dd class="col-sm-9 my-2">{{getFullName($user)}}</dd>

                        <dt class="col-sm-3 my-2 fw-semibold">ایمیل:</dt>
                        <dd class="col-sm-9 my-2">{{$user->email}}</dd>

                        <dt class="col-sm-3 my-2 fw-semibold">شماره تلفن:</dt>
                        <dd class="col-sm-9 my-2">{{$user->mobile}}</dd>

                        <dt class="col-sm-3 my-2 fw-semibold">تاریخ ثبت‌نام:</dt>
                        <dd class="col-sm-9 my-2">{{$user->created_at->toJalali()->format('H:i Y-m-d ')}}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card mb-4">
                    <div class="card-header">
                        <div class="card-title">سفارشات اخیر کاربر</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap table-hover">
                            <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                                <th>تاریخ ثبت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                         @foreach($orders as $order)
                             <tr>
                                 <td>
                                     <div class="d-flex align-items-center gap-2">
                                         <div>
                                             <span class="fw-semibold d-block">{{$order->traking_code}}</span>
                                         </div>
                                     </div>
                                 </td>
                                 <td>
                                     {{number_format($order->total_price - $order->total_discount)}}
                                     تومان
                                 </td>
                                 <td>
                                     <span class="text-info"> @switch($order->status)
                                             @case(OrderStatus::PENDING)
                                                 <span class="text-red-500">در انتظار پرداخت</span>
                                                 @break
                                             @case(OrderStatus::PROCESSING)
                                                 <span style="color: yellow" class="text-red-500">در حال پردازش</span>
                                                 @break
                                             @case(OrderStatus::SENT)
                                                 <span style="color: orange" class="text-red-500">ارسال شده</span>
                                                 @break
                                             @case(OrderStatus::DELIVERED)
                                                 <span style="color: green" class="text-red-500">تحویل شده</span>
                                                 @break
                                             @case(OrderStatus::CANCELLED)
                                                 <span style="color: red" class="text-red-500">کنسل شده</span>
                                                 @break
                                             @case(OrderStatus::REFUND)
                                                 <span style="color: orange" class="text-red-500">مرجوع شده</span>
                                                 @break
                                         @endswitch</span>
                                 </td>
                                 <td>{{$user->created_at->toJalali()->format('H:i Y-m-d ')}}</td>
                                 <td>
                                     <div class="btn-list">
                                         <a href="{{route('admin.orders.show',$order->id)}}"
                                            class="btn btn-primary-light btn-icon btn-sm"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                             <i class="ri-eye-line"></i>
                                         </a>
                                         <a href="{{route('admin.orders.edit',$order->id)}}"
                                            class="btn btn-secondary-light btn-icon btn-sm"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                             <i class="ti ti-pencil"></i>
                                         </a>
                                         <a href="javascript:void(0);"
                                            onclick="if(confirm('آیا از حذف این سفارش مطمئن هستید؟')) { document.getElementById('delete-form-2').submit(); }"
                                            class="btn btn-pink-light btn-icon btn-sm"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                             <i class="ri-delete-bin-line"></i>
                                         </a>
                                         <form id="delete-form-2"
                                               action="{{route('admin.orders.destroy',$order->id)}}"
                                               method="POST"
                                               style="display:none;"
                                         >
                                           @csrf
                                        @method('DELETE')
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

    </div>
@endsection
