@php use App\Enums\OrderStatus  @endphp
@extends('admin.layout.app')

@section('breadcrumb')
    <div class="header-element header-search d-md-block d-none my-auto">
        <div>
            <div>
                <h1 class="page-title fw-medium fs-18 mb-2">جزئیات سفارش</h1>
                <div class="">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">مدیریت سفارشات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">جزئیات سفارش</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid pt-4">

        <!-- Main Row -->
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Summary -->
                        <div class="card custom-card overflow-hidden" style="padding-bottom: 6px !important;">
                            <div class="card-header justify-content-between">
                                <div class="card-title">خلاصه سفارش</div>
                                <div>شناسه: <span class="text-primary fw-semibold">{{$order->traking_code}}</span></div>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="fw-semibold">تعداد کالا:</div>
                                        </td>
                                        <td>{{ $order->total_products }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-semibold">وضعیت سفارش:</div>
                                        </td>
                                        <td>
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
                                                @default
                                                <span style="color:black; ">وضعیت نامعلوم</span>
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fw-semibold">مبلغ کل:</div>
                                        </td>
                                        <td>
                                                <span class="fw-medium">
                                                  {{number_format($order->total_price - $order->total_discount)}}
                                                    تومان
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom: 0;">
                                            <div class="fw-semibold">توضیحات:</div>
                                        </td>
                                        <td style="border-bottom: 0;">{{$order->description}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Address Info -->
                    <div class="col-md-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">آدرس تحویل</div>
                            </div>
                            <div class="card-body">
                                <p>
                                    <strong>آدرس:</strong>
                                    {{$order->user_address}}
                                </p>
                                <p>
                                    <strong>شماره تماس:</strong>
                                    {{$order->user_mobile}}
                                </p>
                                <p>
                                    <strong>کد پستی:</strong>
                                   {{$order->user_postal_code}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-4">

                <!-- User Info -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">مشخصات کاربر</div>
                    </div>
                    <div class="card-body">
                        <p><strong>نام:</strong>{{$order->user->first_name.' '.$order->user->last_name}}</p>
                        <p><strong>ایمیل:</strong>{{$order->user->email}}</p>
                        <p><strong>موبایل:</strong> {{$order->user->mobile}}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div>
                <!-- Order Card -->
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title">
                            محصولات سفارش
                        </div>
                        <div>
                            <span class="badge bg-primary-transparent">
                                تاریخ سفارش:
                            {{$order->created_at->toJalali()->format('H:i Y-m-d ')}}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">محصول</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">تعداد</th>
                                    <th scope="col">مبلغ نهایی</th>
                                </tr>
                                </thead>
                                <tbody>
                              @foreach($order->orderItems as $orderItem)
                                  <tr>
                                      <td>
                                          <div class="d-flex align-items-center">
                                              <div>
                                                  <div class="mb-1 fs-14 fw-medium">
                                                        <span>
                                                            {{$orderItem->product->name}} | {{$orderItem->product->name_en}}
                                                        </span>
                                                  </div>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          {{number_format($orderItem->product->price - $orderItem->product->discount)}}
                                          تومان
                                      </td>
                                      <td>{{$orderItem->qty}}</td>
                                      <td>
                                          {{number_format(($orderItem->product->price - $orderItem->product->discount) * $orderItem->qty )}}
                                          تومان
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
    </div>
@endsection
