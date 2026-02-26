<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
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

      Route::prefix('/users')->name('users.')->controller(UserController::class)->group(function (){
         Route::get('/','index')->name('index');

      });

      Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
  });



});
