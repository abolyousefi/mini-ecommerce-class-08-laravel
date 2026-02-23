@php use App\Enums\OrderStatus; @endphp
@extends('dashboard.layout.app')

@section('dashboard-content')

            <div class="lg:w-3/4">

                <div class="grid grid-cols-12 child:col-span-12 mt-5 lg:mt-0 md:child:col-span-4 gap-4 child:rounded-lg child:bg-white child:dark:bg-gray-800 child:w-full child:flex
               child:shadow child:p-4">
                </div>
                <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5">
                <span class="flex items-center gap-x-2">
                    <img src="{{asset('assets/images/svg/status-delivered.svg')}}" class="w-10" alt="">
                    <h2 class="font-DanaMedium text-lg">سفارش های اخیر :</h2>
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
                            </tbody>
                        </table>
                        {{$userOrders->links()}}
                    </div>
                </div>
                <div class="w-full flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 mb-8">
                    <div class="flex items-center justify-between">
                 <span class="flex items-center gap-x-2">
                    <img src="{{asset('assets/images/svg/map.png')}}" class="w-8" alt="">
                    <h2 class="font-DanaMedium text-lg"> آدرس های من:</h2>
                </span>
                        <a href="#" class="flex items-center gap-x-1 text-blue-500">
                            <svg class="size-5  ">

                            </svg>

                        </a>
                    </div>
                    <ul class="mt-5 space-y-3">
                        <li class="w-full border border-blue-300 dark:border-blue-400 p-4 rounded-lg">
                        <span href="#" class="flex items-center gap-x-1 text-blue-500 dark:text-blue-400">
                            <svg class="size-6">
                            <use href="#map"></use>
                            </svg>
                            <h2 class="font-DanaMedium">نام آدرس</h2>
                        </span>
                            <div class="space-y-1.5 text-gray-600 dark:text-gray-300 mt-3 mr-2">
                                <p> ساری بعد از میدان خزر میدان بار قدیم شرکت درنیکا </p>
                                <p>کد پستی: 208099941</p>
                                <p>گیرنده: ابولفضل یوسفی | 8587***0930 </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

@endsection
