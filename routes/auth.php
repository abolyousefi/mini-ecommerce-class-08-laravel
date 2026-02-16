<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->middleware('guest')->name('auth.')->group(function (){
   Route::prefix('login')->name('login.')->controller(LoginController::class)->group(function (){
      Route::get('/','index')->name('index');
      Route::post('/','post')->name('post');

   });
 Route::prefix('register')->name('register.')->controller(RegisterController::class)->group(function (){
     Route::get('/','index')->name('index');
     Route::post('/','post')->name('post');
 });
  Route::get('logout',[LogoutController::class,'index'])->name('logout');



});
