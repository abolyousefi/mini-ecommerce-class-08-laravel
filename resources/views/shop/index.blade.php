@extends('layout.app')

@section('content')
    <!-- MAIN -->
    <div class="flex flex-col divide-y-2 divide-gray-200 dark:divide-gray-600 my-4">
        <!-- CART ITEM -->
        <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
            <!-- img -->
            <div class="col-span-4 w-24 h-20">
                <img src="{{asset('assets/images/products/5.webp')}}" class="rounded-lg" alt="product">
            </div>
            <!-- detail -->
            <div class="col-span-8 flex flex-col justify-between">
                <h2 class="font-DanaMedium line-clamp-2">
                    گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                    - نات اکتیو
                </h2>
                <div class="flex items-center justify-between gap-x-2 mt-2">
                    <button
                        class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                        <svg class="size-4 increment text-green-600">
                            <use href="#plus"></use>
                        </svg>
                        <input type="number" name="customInput" id="customInput" min="0" max="20"
                               value="2" class="custom-input w-4 mr-2 text-sm">
                        <svg class="size-4 decrement text-red-500">
                            <use href="#minus"></use>
                        </svg>
                    </button>
                    <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                        <span class="font-Dana text-sm">تومان</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- CART ITEM -->
        <div class="grid grid-cols-12 gap-x-2 w-full py-4 cursor-pointer">
            <!-- img -->
            <div class="col-span-4 w-24 h-20">
                <img src="{{asset('assets/images/products/1.png')}}" class="rounded-lg" alt="product">
            </div>
            <!-- detail -->
            <div class="col-span-8 flex flex-col justify-between">
                <h2 class="font-DanaMedium line-clamp-2">
                    گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 256 گیگابایت و رم 4 گیگابایت
                    - نات اکتیو
                </h2>
                <div class="flex items-center justify-between gap-x-2 mt-2">
                    <button
                        class="w-20 flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-1 px-2">
                        <svg class="size-4 increment text-green-600">
                            <use href="#plus"></use>
                        </svg>
                        <input type="number" name="customInput" id="customInput" min="0" max="20"
                               value="2" class="custom-input w-4 mr-2 text-sm">
                        <svg class="size-4 decrement text-red-500">
                            <use href="#minus"></use>
                        </svg>
                    </button>
                    <p class="text-lg text-blue-500 dark:text-blue-400 font-DanaMedium">1,130,000
                        <span class="font-Dana text-sm">تومان</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
