<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        فروشگاه درنیکا
        | صفحه اصلی
    </title>

    <link rel="stylesheet" href="{{asset('assets/styles/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/swiper/swiper.css')}}">


    <!-- ==========================  DARK MODE SCRIPT ============================= -->
    <script type="text/javascript">
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>
<!-- Header -->
<header class="header">
    <!-- Desktop -->
    <div class="container mt-5 hidden flex-col gap-y-6 lg:flex">
        <!-- TOPBAR -->
        <div class="flex-between">
            <!-- Search Box -->
            <div class="relative z-20">
                <form action="http://127.0.0.1:8000/products">
                    <!-- INPUT -->
                    <div
                        class="search-btn-open flex gap-x-2 app-border bg-gray-50 dark:bg-gray-700 p-1 rounded-full cursor-pointer ring-blue-400 w-84 transition-all"
                    >
                        <button type="submit">
                            <svg class="size-6 p-1.5 flex-center text-gray-100 bg-blue-600 rounded-full w-9 h-9">
                                <use href="#search"/>
                            </svg>
                        </button>

                        <input
                            placeholder="جستجو در محصولات..."
                            type="text"
                            name="keyword"
                            value=""
                            style="border: 0"
                        />
                    </div>
                </form>
            </div>
            <!-- Logo -->
            <a href="http://127.0.0.1:8000" class="flex flex-col text-center ml-20">
                    <span class="font-MorabbaMedium text-4xl flex items-center">
                        فروشگاه<span class="text-blue-500">درنیکا</span>
                    </span>
                <p class="font-DanaMedium text-gray-400"> خرید موبایل و لپ‌تاپ</p>
            </a>
            <!--  Action -->
            <div class="flex items-center gap-x-3">
                <!-- LOGIN -->
                <button class="flex-center py-2 px-4  app-border rounded-full app-hover">
                    <a href="{{route('auth.login.index')}}" class="flex items-center gap-x-2">
                        <p>ورود | ثبت‌نام</p>
                        <svg class="size-5">
                            <use href="#arrow-left-end"/>
                        </svg>
                    </a>
                </button>

                <!-- Toggle theme -->
                <button class="toggle-theme flex-center p-2 app-border rounded-full app-hover">
                    <svg class="inline-block dark:hidden size-6">
                        <use href="#moon"/>
                    </svg>
                    <svg class="hidden dark:inline size-6">
                        <use href="#sun"/>
                    </svg>
                </button>
                <!-- Shopping cart -->
                <a href="http://127.0.0.1:8000/cart"
                   class="flex-center p-2 bg-blue-600 text-gray-100 rounded-full open-cart relative">
                    <svg class="size-6">
                        <use href="#shopping-bag"/>
                    </svg>
                    <span class="absolute -top-1 -right-1 flex h-4 w-4">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75">

                        </span>
                        <span class="relative inline-flex rounded-full h-4 w-4 bg-red-500 text-xs pt-1 flex-center text-white">
                            1
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <!-- NAVBAR -->
        <div class="relative flex-between h-16 bg-gray-900 dark:bg-gray-800 rounded-full text-gray-200 px-10">
            <!-- MENU -->
            <ul class="flex items-center gap-x-8">
                <li class="menu-item">
                    <a href="http://127.0.0.1:8000" class="menu-item_link">
                        صفحه اصلی
                    </a>
                </li>

                <li class="menu-item">
                    <a href="http://127.0.0.1:8000/products" class="menu-item_link">
                        فروشگاه
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/" class="menu-item_link">
                        دسته بندی ها
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/" class="menu-item_link">
                        تماس با ما
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/" class="menu-item_link">
                        سوالات متداول
                    </a>
                </li>

                <li class="menu-item">
                    <a href="/" class="menu-item_link">
                        درباره ما
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <!-- Mobile -->
    <div class="flex justify-center lg:hidden">
        <!-- Top Navbar -->
        <nav
            class="absolute top-0 inset-x-0 w-full h-16 px-4 shadow-sm dark:bg-gray-800 flex items-center justify-between">
            <!-- Menu -->
            <button class="open-menu-mobile flex-center p-2 app-border rounded-full">
                <svg class=" size-6">
                    <use href="#bars"/>
                </svg>
            </button>
            <div class="mobile-menu z-50 flex flex-col">
                <!--  MENU MOBILE header -->
                <div class="flex w-full items-center justify-between border-b-normal pb-4">
                    <a href="index.html" class="text-xl font-MorabbaMedium">
                        فروشگاه<span class="text-blue-500">درنیکا</span>
                    </a>
                    <button class="close-menu-mobile">
                        <svg class="size-5 text-gray-500 dark:text-gray-200">
                            <use href="#x-mark"/>
                        </svg>
                    </button>
                </div>
                <!-- MENU MOBILE CATEGORY & ACTION  -->
                <ul class="flex flex-col gap-y-2 text-gray-800 dark:text-gray-100 mt-4">

                    <li class="mobile-menu-item">
                        <svg class="size-4">
                            <use href="#arrow"/>
                        </svg>
                        <a href="dashboard.html">دسته بندی</a>
                    </li>
                    <li class="mobile-menu-item">
                        <svg class="size-5">
                            <use href="#user"/>
                        </svg>
                        <a href="dashboard.html">حساب کاربری</a>
                    </li>
                    <li class="mobile-menu-item">
                        <svg class="size-5">
                            <use href="#shopping-cart"/>
                        </svg>
                        <a href="shopping-cart.html">سبد خرید</a>
                    </li>
                    <li class="mobile-menu-item">
                        <svg class="size-5">
                            <use href="#check-badge"/>
                        </svg>
                        <a href="#">دربـاره مـا</a>
                    </li>
                    <li class="mobile-menu-item">
                        <svg class="size-5">
                            <use href="#phone"/>
                        </svg>
                        <a href="contact-us.html">تـماس بـا مـا</a>
                    </li>
                </ul>
            </div>
            <!-- Logo -->
            <a href="index.html" class="flex flex-col text-center">
                    <span class="font-MorabbaMedium text-3xl flex items-center">
                        فروشگاه<span class="text-blue-500">درنیکا</span>
                    </span>
            </a>
            <!-- Toggle theme -->
            <button class="toggle-theme flex-center p-2 app-border rounded-full ">
                <svg class="inline-block dark:hidden size-6">
                    <use href="#moon"/>
                </svg>
                <svg class="hidden dark:inline size-6">
                    <use href="#sun"/>
                </svg>
            </button>
        </nav>

        <!-- Search baer -->
        <button class="open-mobile_search-modal">
            <svg class=" size-6">
                <use href="#search"/>
            </svg>
            <p>جستجو در <span class="font-MorabbaMedium">محصولات</span></p>
        </button>

        <!-- Search Modal -->
        <div class="mobile_search-modal">
            <!-- TOP -->
            <div class="w-full flex items-center gap-x-2">
                <button
                    class="w-full flex items-center gap-x-1 bg-gray-200 dark:bg-gray-800 text-gray-500 py-2 px-4 rounded-3xl">
                    <svg class="size-6">
                        <use href="#search"/>
                    </svg>
                    <input type="text" placeholder="جستجو در همه کالاها">
                </button>
                <svg class="size-6 close-mobile_search-modal">
                    <use href="#x-mark"/>
                </svg>
            </div>

            <div class="w-full space-y-4">

                <!-- Trend -->
                <div class="pt-4">
                        <span class="flex items-center gap-x-1 text-sm text-gray-500 dark:text-gray-200">
                            <svg class="size-4">
                                <use href="#fire"/>
                            </svg>
                            <p>جستجو های پرطرفدار :</p>
                        </span>
                    <ul class="w-full flex items-center gap-1.5 mt-3 child:search-modal-list-item">
                        <li>
                            <a href="#">#آیفون</a>
                        </li>
                        <li>
                            <a href="#">#لپ تاپ</a>
                        </li>
                        <li>
                            <a href="#">#هدفون</a>
                        </li>
                        <li>
                            <a href="#">#هلدر</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- bottom Navbar-->
        <ul class="bottom-navbar">
            <li class="dark:text-sky-400 text-blue-500 font-DanaMedium">
                <svg class="size-5">
                    <use href="#home"/>
                </svg>
                <a href="index.html">خانه</a>
            </li>
            <li>
                <svg class="size-5">
                    <use href="#squares"/>
                </svg>
                <a href="shop.html">فروشگاه</a>
            </li>
            <li>
                <svg class="size-5">
                    <use href="#shopping-bag"/>
                </svg>
                <a href="shopping-cart.html">سبد خرید</a>
            </li>
            <li>
                <svg class="size-5">
                    <use href="#user"/>
                </svg>
                <a href="dashboard.html">حساب من</a>
            </li>
        </ul>
    </div>


</header>
