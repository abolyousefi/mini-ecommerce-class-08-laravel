@extends('layout.app');

@section('content')
    <main class="container">
        <!-- Breadcrumb -->
        <nav class="flex mt-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{route('index')}}"
                       class="inline-flex items-center text-sm gap-x-1  text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="size-4 mb-0.5">
                            <use href="#home"/>
                        </svg>
                        صفحه اصلی
                    </a>
                </li>
                <li class="inline-flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="{{route('products.index')}}"
                       class="inline-flex items-center text-sm gap-x-1  text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        فروشگاه
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm  text-gray-500 md:ms-2 dark:text-gray-400">جزییات محصول</span>
                    </div>
                </li>
            </ol>
        </nav>
        <!-- PRODUCT DETAILS SECTION -->
        <section
            class="mt-5 flex flex-col lg:flex-row items-start gap-4 child:rounded-lg child:bg-white child:dark:bg-gray-800 child:shadow child:p-4">
            <!-- IMAGE & INFO BOX Container -->
            <div class="w-full lg:w-3/4">
                <div class="flex flex-col md:flex-row justify-start gap-x-8 xl:gap-x-2 items-start">
                    <!-- IMAGE SLIDER -->
                    <div class="w-2/4 hidden md:flex flex-col justify-center items-center gap-y-4">
                        <span class="open-sliderModal">
                            <img src="{{asset('assets/images/products/11.png')}}" class="cursor-pointer object-cover"
                                 alt="">
                        </span>
                        <div
                            class="grid grid-cols-12 child:col-span-3 child:app-border gap-x-4 child:size-16 child:rounded-lg child:cursor-pointer">
                            <div class="p-1 open-sliderModal">
                                <img src="{{asset('assets/images/products/11.png')}}"
                                     class="object-cover  rounded-lg">
                            </div>
                            <div class="p-1 open-sliderModal">
                                <img src="{{asset('assets/images/products/12.webp')}}"
                                     class="object-cover  rounded-lg">
                            </div>
                            <div class="p-1 open-sliderModal">
                                <img src="{{asset('assets/images/products/13.webp')}}"
                                     class="object-cover  rounded-lg">
                            </div>
                            <div class="overflow-hidden relative open-sliderModal">
                                <svg class="absolute size-8 text-gray-100 top-4 left-4 z-10">
                                    <use href="#ellipsis"></use>
                                </svg>
                                <img src="{{asset('assets/images/products/14.webp')}}"
                                     class="object-cover rounded-lg blur-sm">
                            </div>
                        </div>
                    </div>
                    <div class="slider-modal">
                        <div class="flex w-full h-fit items-center justify-between">
                            <h1 class="font-DanaMedium text-lg">
                                تصاویر گوشی موبایل اپل مدل iPhone 16 دو سیم کارت
                            </h1>
                            <svg class="size-6 cursor-pointer close-sliderModal">
                                <use href="#x-mark"></use>
                            </svg>
                        </div>

                        <div class="swiper ProductDetailsSlider mt-14 px-10 w-96 relative">
                            <div class="swiper-wrapper w-[50%] child:w-full child:rounded-lg child:overflow-hidden">
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/products/11.png')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/products/12.webp')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/products/13.webp')}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset('assets/images/products/14.webp')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <button
                            class="slider-navigate_btn absolute right-40 top-[17rem] border dark:border-gray-700 border-gray-200 button-prev-ProductDetailsSlider z-20">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </button>
                        <button
                            class="slider-navigate_btn absolute left-40 top-[17rem] border dark:border-gray-700 border-gray-200 button-next-ProductDetailsSlider z-10">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </button>
                    </div>
                    <!-- INFOS -->
                    <div class="w-full md:w-3/4 flex flex-col gap-y-7">
                        <div class="flex items-center justify-between">
                            <span class="font-DanaMedium text-sky-400">{{$product->category->name}}</span>
                        </div>
                        <!-- MOBILE SLIDER -->
                        <div class="flex md:hidden">
                            <div class="swiper MobileProductSlider w-full">
                                <div class="swiper-wrapper w-full child:w-full child:overflow-hidden child:rounded-lg">
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/products/11.png')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/products/12.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/products/13.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/products/14.webp')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination MobileProductSlider-pagination"></div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-3">
                            <p class="text-lg font-DanaDemiBold dark:text-gray-300">
                                {{ $product->name }}
                            </p>
                            <p class="text-sm text-gray-300 dark:text-gray-500">
                                {{$product->name_en}}
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-10 lg:mr-2 grid grid-cols-12 child:col-span-6 xl:child:col-span-3 gap-x-1 gap-y-2 lg:gap-4 child:border child:text-gray-400 child:dark:border-white/20 child:border-gray-200 child:rounded-lg child:h-12  child:p-2 child:flex child:items-center child:gap-x-1 lg:child:gap-x-2 child:text-sm lg:text-base">
                    <span>
                        <svg class="w-4 h-4 lg:w-6 lg:h-6">
                            <use href="#arrow-path-rounded-square"></use>
                        </svg>
                        <p>ضمانت بازگشت کالا</p>
                    </span>
                    <span>
                        <svg class="w-4 h-4 lg:w-6 lg:h-6">
                            <use href="#check-badge"></use>
                        </svg>
                        <p>
                            تضمین اصالت کالا
                        </p>
                    </span>
                    <span>
                        <svg class="w-4 h-4 lg:w-6 lg:h-6">
                            <use href="#calender-day"></use>
                        </svg>
                        <p>پشتیبانی کل هفته</p>
                    </span>
                    <span>
                        <svg class="w-4 h-4 lg:w-6 lg:h-6">
                            <use href="#truke"></use>
                        </svg>
                        <p>ارسال به سراسر ایران </p>
                    </span>
                </div>
            </div>
            <!-- PRICE & ADD TO CART BOX -->
            <div class="w-full lg:w-1/4 lg:sticky top-5 flex flex-col gap-y-6">
                <!-- PRICE -->
                <div class="flex items-center gap-x-1 justify-center">
                    <div class="product-card_price">
                        <del>{{$product->price}} <h6>تومان</h6></del>
                        <p>{{$product->price - $product->discount}}</p>
                        <span>تومان</span>
                    </div>
                </div>




                <form
                    action="http://127.0.0.1:8000/cart/add"
                    method="POST"
                >
                    <input type="hidden" name="_token" value="VofHLLAqMD1Drv23vG8MgkBtFMjNl7t6G8gfBpxL" autocomplete="off">
                    <button
                        class="w-full flex items-center justify-between gap-x-1 rounded-lg border border-gray-200 dark:border-white/20 py-2 px-3"
                        type="button"
                    >
                        <svg class="w-6 h-6 increment text-green-600">
                            <use href="#plus"></use>
                        </svg>
                        <input
                            type="number"
                            name="qty"
                            id="customInput"
                            min="1"
                            max="50"
                            value="1"
                            class="custom-input mr-4 text-lg bg-transparent"
                        />
                        <svg class="w-6 h-6 decrement text-red-500">
                            <use href="#minus"></use>
                        </svg>
                    </button>



                    <br>

                    <input
                        type="hidden"
                        name="product_id"
                        value="2"
                    />

                    <button
                        type="submit"
                        class="w-full flex items-center gap-x-1 justify-center transition-all rounded-lg shadow py-2  bg-blue-500 hover:bg-blue-600 text-white "
                    >
                        <svg class="w-5 h-5">
                            <use href="#shopping-bag"></use>
                        </svg>
                        افزودن به سبد
                    </button>
                </form>

            </div>
        </section>
        @if(isset($product->description))
        <section class="relative mt-10 flex flex-col items-start gap-4 rounded-lg bg-white dark:bg-gray-800 shadow p-4">

                <div
                class="w-full py-3 flex items-center gap-x-6 child:font-DanaMedium tab-buttons z-10 border-b  border-gray-600/20 dark:border-b-gray-200/20">
                <button class="tab-btn text-blue-500" data-target="tab1">توضیحات محصول</button>
            </div>
                <div class="tab-content tab1 block">
                    <p class="mt-4 leading-8">
                        {{$product->description}}
                    </p>
                </div>
            @endif

        </section>

        <!-- Best-selling products -->
        <section class="mx-4 mt-10 lg:mt-20">
            <!-- SECTION TITLE -->
            <div
                class="flex flex-col gap-y-4 xs:flex-row items-center justify-between w-full text-center xs:text-start">
                <div class="flex items-center gap-x-2 sm:gap-x-4">
                    <span class="size-12 hidden xs:flex rounded-lg bg-white shadow-lg dark:bg-gray-800 flex-center">
                        <svg class="size-7 text-gray-700 dark:text-gray-100">
                            <use href="#mobile"></use>
                        </svg>
                    </span>
                    <div class="space-y-1 md:space-y-1">
                        <h3 class="text-xl md:text-2xl font-MorabbaMedium text-gray-800 dark:text-gray-50">محصولات
                            <span class="text-blue-600 dark:text-blue-500">مرتبط</span>
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">جدیدترین و بروزترین محصولات</p>
                    </div>
                </div>
                <div class="w-full xs:w-auto flex justify-between xs:justify-end  items-center gap-x-2">
                    <div class="flex items-center gap-x-2">
                        <button class="slider-navigate_btn BestSelling-prev-slide">
                            <svg class="size-6 -rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </button>
                        <button class="slider-navigate_btn BestSelling-next-slide">
                            <svg class="size-6 rotate-90">
                                <use href="#chevron"/>
                            </svg>
                        </button>
                    </div>
                    <a href="#"
                       class="group shadow-xl text-sm md:text-base flex gap-x-1.5 items-center px-2 h-10 md:px-3 text-white bg-blue-600 rounded-xl">
                        <p>مشاهده همه</p>
                        <span
                            class="w-7 h-7 rounded-full bg-blue-500 flex-center md:group-hover:-translate-x-1 transition-transform duration-300">
                            <svg class="size-5">
                                <use href="#arrow"/>
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
            <!-- Latest products Slider -->
            <div class="swiper BestSelling mt-5 w-full">
                <div class="swiper-wrapper py-5">
                    <!-- PRODUCT ITEM -->
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/1.png"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/3.png"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/5.webp"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/6.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/7.webp"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/8.webp" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/1.png"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/2.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-card group">
                        <!-- product header -->
                        <div class="product-card_header">
                            <div class="flex items-center gap-x-2">
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#shopping-cart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        سبد خرید
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#heart"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        علاقه مندی
                                    </div>
                                </div>
                                <div class="tooltip">
                                    <button class="rounded-full p-1.5 app-border app-hover">
                                        <svg class="size-4">
                                            <use href="#arrows-up-down"></use>
                                        </svg>
                                    </button>
                                    <div class="tooltiptext">
                                        مقایسه
                                    </div>
                                </div>
                            </div>
                            <!-- badge offer -->
                            <span class="product-card_badge">70% تخفیف‌</س>
                        </div>
                        <!-- product img -->
                        <a href="product-details.html">
                            <img class="product-card_img group-hover:opacity-0 absolute" src="./images/products/3.png"
                                 alt="">
                            <img class="product-card_img opacity-0 group-hover:opacity-100"
                                 src="./images/products/4.png" alt="">
                        </a>
                        <!--  product footer -->
                        <div class="space-y-2">
                            <a href="product-details.html" class="product-card_link">
                                لپ تاپ 15.6 اینچی ایسوس مدل Vivobook15 X515MA-BR001-Celeron N4020-8GB DDR4
                            </a>
                            <!-- Rate and Price -->
                            <div class="product-card_price-wrapper">
                                <!-- RATE -->
                                <div class="product-card_rate">
                                    <span class="flex items-center gap-x-0.5">
                                        <svg class="size-4 text-blue-500 mb-0.5">
                                            <use href="#rocket"></use>
                                        </svg>
                                        <p class="text-xs">ارسال امروز</p>
                                    </span>
                                    <span class="text-gray-400 flex items-center text-sm gap-x-0.5">
                                        <p> 5.0 </p>
                                        <svg class="size-4 mb-1">
                                            <use href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Price -->
                                <div class="product-card_price">
                                    <del>70,000,000 <h6>تومان</h6></del>
                                    <p>70,000,000</p>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
