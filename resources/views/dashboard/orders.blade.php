@php use App\Enums\OrderStatus; @endphp
@extends('dashboard.layout.app')

@section('dashboard-content')

    <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
               <span class="flex items-center justify-between">
                 <span class="flex items-center gap-x-2">
                    <img src="{{asset('assets/images/svg/status-delivered.svg')}}" class="w-10" alt="">
                    <h2 class="font-DanaMedium text-lg">سفارش های من :</h2>
                </span>
                 <a href="#" class="flex items-center gap-x-1 text-blue-500">

                    </a>
               </span>
        <div class="relative mt-5 overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
            <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700  bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3.5">
                        شماره پیگیری
                    </th>
                    <th scope="col" class="px-6 py-3.5">
                        تعداد محصول
                    </th>
                    <th scope="col" class="px-6 py-3.5">
                        تاریخ
                    </th>
                    <th scope="col" class="px-6 py-3.5">
                        قیمت
                    </th>
                    <th scope="col" class="px-6 py-3.5">
                        وضعیت
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($userOrders as $order)
                    @include('components.orders')
                 @endforeach
            </table>
            {{$userOrders->links()}}
        </div>
    </div>

@endsection
