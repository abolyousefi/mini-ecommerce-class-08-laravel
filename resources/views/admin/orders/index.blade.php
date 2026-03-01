@php use App\Enums\OrderStatus; @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">لیست سفارشات</h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت سفارشات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">لیست سفارشات</li>
                        </ol>
                    </nav>
                </div>
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
                        <form method="GET" action="{{route('admin.orders.index')}}">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">

                                <!-- Sort Dropdown -->
                                <div class="d-flex flex-wrap gap-1 align-items-center">
                                    <select id="choices-single-default" class="form-control" name="sort">
                                        <option value="">مرتب‌سازی بر اساس</option>
                                        <option
                                            value="created_at_desc" @selected(request()->input('sort') == "created_at_desc" ) >
                                            جدیدترین
                                        </option>
                                        <option
                                            value="created_at_asc"  @selected(request()->input('sort') == "created_at_asc" ) >
                                            قدیمی‌ترین
                                        </option>
                                        <option
                                            value="price_high"  @selected(request()->input('sort') == "price_high" ) >
                                            مبلغ (زیاد به کم)
                                        </option>
                                        <option
                                            value="price_low"  @selected(request()->input('sort') == "price_low" ) >
                                            مبلغ (کم به زیاد)
                                        </option>
                                        <option value="status"  @selected(request()->input('sort') == "status" ) >
                                            وضعیت
                                        </option>
                                    </select>
                                </div>

                                <!-- Search -->
                                <div class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" name="search"
                                           placeholder="جستجو سفارش"
                                           value="{{ request()->input('search') }}"
                                    >
                                    <button class="btn btn-light" type="submit">جستجو</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="table-responsive">
                        <table class="table text-nowrap table-hover">
                            <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>مشتری</th>
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
                                        {{ $order->user->first_name.' '.$order->user->last_name }}
                                    </td>
                                    <td>
                                        {{number_format($order->total_price - $order->total_discount)}}
                                        تومان
                                    </td>
                                    <td>
                                        <span class="text-info">
                                            @switch($order->status)
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
                                            @endswitch
                                        </span>
                                    </td>
                                    <td>{{$order->created_at->toJalali()->format('H:i Y-m-d ')}}</td>
                                    <td>
                                        <div class="btn-list">
                                            <a href="{{route('admin.orders.show',$order->id)}}"
                                               class="btn btn-primary-light btn-icon btn-sm"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="مشاهده">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('admin.orders.edit',$order->id) }}"
                                               class="btn btn-secondary-light btn-icon btn-sm"
                                               data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                <i class="ti ti-pencil"></i>
                                            </a>
                                            <a href="{{ route('admin.orders.destroy', $order->id) }}"
                                               onclick="event.preventDefault(); if(confirm('آیا از حذف این کاربر مطمئن هستید؟')) { document.getElementById('delete-form-{{ $order->id }}').submit(); }"
                                               class="btn btn-pink-light btn-icon btn-sm"
                                               data-bs-toggle="tooltip"
                                               data-bs-placement="top"
                                               title="حذف">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>

                                            <form id="delete-form-{{ $order->id }}"
                                                  action="{{ route('admin.orders.destroy', $order->id) }}"
                                                  method="POST"
                                                  style="display:none;">
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
                {{ $orders->links() }}
            </div>
        </div>


    </div>
@endsection
