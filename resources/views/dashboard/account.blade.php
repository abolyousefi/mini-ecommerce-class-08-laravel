@extends('layout.app')

@section('content')

    <main class="container relative">
        <div class="flex flex-col lg:flex-row gap-x-8 mt-10">
            <!-- SIDE MENU -->
            <div class="lg:sticky mb-8 top-1 h-fit lg:w-1/4 hidden lg:flex flex-col gap-y-4 items-center shadow rounded-lg p-4 dark:bg-gray-800 bg-white">
                <!-- NAME AND AVATAR  -->
                <div class="w-full flex items-center justify-between border-b border-gray-200 dark:border-white/20 py-3">
                    <div class="flex items-center gap-x-3">
                        <img src="./images/svg/user.png" class="size-10 ring-2 ring-gray-400/20 rounded-full"
                             alt="AVATAR">
                        <span class="felx flex-col gap-y-2">
                            <p class="font-DanaMedium text-lg">پارسا وصالی</p>
                            <p class="text-gray-400">09100000001</p>
                        </span>
                    </div>
                    <span>
                        <svg class="w-6 h-6 cursor-pointer text-blue-500">
                            <use href="#edit"></use>
                        </svg>
                    </span>
                </div>
                <ul
                    class="w-full relative space-y-2 child:duration-300 child:transition-all child:py-3  child:px-2 child:flex child:gap-x-2 text-lg child:cursor-pointer child:rounded-lg">
                    <li class="hover:text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#squares"></use>
                        </svg>
                        <a href="dashboard.html">داشبورد</a>
                    </li>
                    <li class="hover:text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#shopping-bag"></use>
                        </svg>
                        <a href="dashboard-orders.html">
                            سفارش ها
                        </a>
                    </li>
                    <li class="hover:text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#heart"></use>
                        </svg>
                        <a href="dashboard-favorite.html">علاقه‌مندی ها</a>
                    </li>
                    <li class="hover:text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#map"></use>
                        </svg>
                        <a href="dashboard-address.html">آدرس ها</a>
                    </li>
                    <li class="hover:text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#bell"></use>
                        </svg>
                        <a href="dashboard-messages.html">پیام ها</a>
                    </li>
                    <li class="bg-blue-500/10 text-blue-500">
                        <svg class="w-6 h-6 ">
                            <use href="#cog"></use>
                        </svg>
                        <a href="dashboard-account.html">اطلاعات حساب </a>
                    </li>
                    <li class="text-red-400">
                        <svg class="w-6 h-6 ">
                            <use href="#arrow-left-end"></use>
                        </svg>
                        <a href="index.html">خروج</a>
                    </li>
                </ul>
            </div>
            <!-- TOP FILTER BOX & PRODUCT & PAGINATION -->
            <div class="lg:w-3/4">
                <div class="flex lg:hidden">
                    <button class="open-user-menu mr-2 bg-blue-500 flex items-center gap-x-1 font-DanaMedium text-white p-2 rounded-lg text-sm">
                        <svg class="size-5">
                            <use href="#bars-3" />
                        </svg>
                        منوی کاربری
                    </button>
                    <div class="user-menu">
                        <button class="close-user-menu">
                            <svg class="size-6">
                                <use href="#x-mark" />
                            </svg>
                        </button>
                        <!-- NAME AND AVATAR  -->
                        <div class="w-full flex items-center justify-between border-b border-gray-200 dark:border-white/20 py-3">
                            <div class="flex items-center gap-x-3">
                                <img src="./images/svg/user.png" class="size-10 ring-2 ring-gray-400/20 rounded-full"
                                     alt="AVATAR">
                                <span class="felx flex-col gap-y-2">
                            <p class="font-DanaMedium text-lg">پارسا وصالی</p>
                            <p class="text-gray-400">09100000001</p>
                        </span>
                            </div>
                            <span>
                        <svg class="w-6 h-6 cursor-pointer text-blue-500">
                            <use href="#edit"></use>
                        </svg>
                    </span>
                        </div>
                        <ul
                            class="w-full relative space-y-2 child:duration-300 child:transition-all child:py-3  child:px-2 child:flex child:gap-x-2 text-lg child:cursor-pointer child:rounded-lg">
                            <li class="hover:text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#squares"></use>
                                </svg>
                                <a href="dashboard.html">داشبورد</a>
                            </li>
                            <li class="hover:text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#shopping-bag"></use>
                                </svg>
                                <a href="dashboard-orders.html">
                                    سفارش ها
                                </a>
                            </li>
                            <li class="hover:text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#heart"></use>
                                </svg>
                                <a href="dashboard-favorite.html">علاقه‌مندی ها</a>
                            </li>
                            <li class="bg-blue-500/10 text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#map"></use>
                                </svg>
                                <a href="dashboard-address.html">آدرس ها</a>
                            </li>
                            <li class="hover:text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#bell"></use>
                                </svg>
                                <a href="dashboard-messages.html">پیام ها</a>
                            </li>
                            <li class="hover:text-blue-500">
                                <svg class="w-6 h-6 ">
                                    <use href="#cog"></use>
                                </svg>
                                <a href="dashboard-account.html">اطلاعات حساب </a>
                            </li>
                            <li class="text-red-400">
                                <svg class="w-6 h-6 ">
                                    <use href="#arrow-left-end"></use>
                                </svg>
                                <a href="index.html">خروج</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
                    <div class="flex items-center justify-between">
                        <h2 class="font-DanaMedium text-lg">اطلاعات حساب کاربری</h2>
                    </div>
                    <form class="mt-5 grid grid-cols-12 gap-5 child:col-span-12 child:lg:col-span-6" action="#" method="POST">
                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                نام و نام خانوادگی
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="پارسا وصالی"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <button type="button" class="absolute left-3 top-3 z-10">
                                    <svg class="size-5 text-gray-500">
                                        <use href="#edit"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                شماره موبایل
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="090000000 "
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <button type="button" class="absolute left-3 top-3 z-10">
                                    <svg class="size-5 text-gray-500">
                                        <use href="#edit"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                ایمیل
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="ایمیل خود را وارد کنید"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <button type="button" class="absolute left-3 top-3 z-10">
                                    <svg class="size-5 text-gray-500">
                                        <use href="#plus"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                رمز عبور
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="......"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <button type="button" class="absolute left-3 top-3 z-10">
                                    <svg class="size-5 text-gray-500">
                                        <use href="#edit"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                تاریخ تولد :
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="1400/1/1"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <button type="button" class="absolute left-3 top-3 z-10">
                                    <svg class="size-5 text-gray-500">
                                        <use href="#edit"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
