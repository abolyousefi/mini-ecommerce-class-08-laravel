@extends('dashboard.layout.app')

@section('dashboard-content')
            <div class="lg:w-3/4">

                <div class="flex flex-col shadow rounded-lg p-4 dark:bg-gray-800 bg-white mt-5 lg:mt-0">
                    <div class="flex items-center justify-between">
                        <h2 class="font-DanaMedium text-lg">اطلاعات حساب کاربری</h2>
                    </div>
                    <form class="mt-5 grid grid-cols-12 gap-5 child:col-span-12 child:lg:col-span-6" action="" method="POST">
                       @csrf
                        <div>
                            <label for="first_name" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                نام
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="" id="first_name" name="first_name" value="{{old('first_name', $user->first_name)}}"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">

                            </div>
                            @error('first_name')
                            <span style="color: red"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                نام خانوادگی
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="" id="last_name"  name="last_name" value="{{old('last_name', $user->last_name)}}"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">

                            </div>
                            @error('last_name')
                            <span style="color: red"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- ITEM -->
                        <div>
                            <label for="mobile" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                شماره موبایل
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="" id="mobile"  name="mobile" value="{{old('mobile', $user->mobile)}}"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                            </div>
                            @error('mobile')
                            <span style="color: red"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- ITEM -->
                        <div>
                            <label for="email" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                ایمیل
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" placeholder="" id="email" name="email" value="{{old('email', $user->email)}}"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">

                            </div>
                            @error('email')
                            <span style="color: red"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- ITEM -->
                        <div>
                            <label for="password" class="block text-sm font-DanaMedium text-gray-500 dark:text-gray-300">
                                رمز عبور
                            </label>
                            <div class="mt-3 relative">
                                <input type="text" name="password"  id="password"
                                       class="block w-full p-2.5 text-base outline dark:outline-none outline-1 -outline-offset-1 placeholder:text-gray-400 transition-all
                     text-gray-800 dark:text-gray-100 dark:bg-gray-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded-md outline-none focus:bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 dark:focus:ring-blue-400">
                                <small>در صورت تغییر کلمه عبور این فیلد را پر کنید.</small>
                            </div>
                            @error('password')
                            <span style="color: red"> {{ $message }}</span>
                            @enderror
                        </div>

                        <button class="swiper-button" style="color: white ;border-radius: 50px ; height: 50px ;  background-color: #3b82f6"  type="submit">ذخیره تغییرات</button>
                    </form>
                </div>
            </div>
@endsection
