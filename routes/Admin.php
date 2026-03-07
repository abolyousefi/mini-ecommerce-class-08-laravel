<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->name('admin.')->group(function (){

    Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function (){

        Route::prefix('login')->name('login.')->middleware('guest:admin')->group(function (){
            Route::get('/','login')->name('index');
            Route::post('/','loginPost')->name('Post');
        });

        Route::get('logout','logout')->name('logout')->middleware('auth:admin');

    });




  Route::middleware('auth:admin')->group(function (){
      Route::prefix('products')->name('products.')->controller(ProductController::class)->group(function (){
          Route::get('index','index')->name('index');



          Route::prefix('create')->name('create.')->group(function (){
              Route::get('/','create')->name('index');
              Route::post('/','createPost')->name('post');

          });
          Route::prefix('{product}')->group(function (){
              Route::get('show','show')->name('show');
              Route::get('edit','edit')->name('edit');
              Route::get('remove_item','removeItem')->name('remove_item');
              Route::put('update','update')->name('update');

              Route::delete('destroy','destroy')->name('destroy');

          });

      });



      Route::prefix('admins')->name('admins.')->controller(AdminController::class)->group(function (){
         Route::get('index','index')->name('index');

         Route::prefix('create')->name('create.')->group(function (){
            Route::get('/','create')->name('index');
            Route::post('/','createPost')->name('post');

         });
         Route::prefix('{admin}')->group(function (){

             Route::get('edit','edit')->name('edit');
             Route::put('update','update')->name('update');

             Route::delete('destroy','destroy')->name('destroy');

         });
      });



      Route::prefix('/users')->name('users.')->controller(UserController::class)->group(function (){
         Route::get('/','index')->name('index');

         Route::prefix('{user}')->group(function (){
            Route::get('show','show')->name('show');

            Route::get('edit','edit')->name('edit');
            Route::put('update','update')->name('update');

            Route::delete('destroy','destroy')->name('destroy');
         });

      });


      Route::prefix('/orders')->name('orders.')->controller(OrderController::class)->group(function (){
          Route::get('/','index')->name('index');


          Route::prefix('{order}')->group(function (){
              Route::get('show','show')->name('show');

              Route::get('edit','edit')->name('edit');
              Route::patch('update','update')->name('update');

              Route::delete('destroy','destroy')->name('destroy');
          });

      });

     Route::prefix('categories')->name('categories.')->controller(CategoryController::class)->group(function () {
         Route::get('index', 'index')->name('index');

         Route::prefix('create')->name('create.')->group(function () {
             Route::get('/', 'create')->name('index');
             Route::post('/', 'createPost')->name('post');
         });

             Route::prefix('{category}')->group(function () {
                 Route::get('show', 'show')->name('show');

                 Route::get('edit', 'edit')->name('edit');
                 Route::put('update', 'update')->name('update');

                 Route::delete('destroy', 'destroy')->name('destroy');
             });

         });



      Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
  });



  });


