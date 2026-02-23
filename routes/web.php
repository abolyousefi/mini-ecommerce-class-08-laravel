<?php

use App\Http\Controllers\About_UsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Dashboard\AccountController;
use App\Http\Controllers\Dashboard\IndexController as DashboardIndexController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[indexController::class,'index'])->name('index');

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function (){
  Route::prefix('account')->controller(AccountController::class)->name('account.')->group(function (){
      Route::get('/','index')->name('index');
      Route::post('/','post')->name('post');
  });

   Route::middleware('auth')->group(function (){
       Route::get('index',[DashboardIndexController::class,'index'])->name('index');
       Route::get('orders', [OrderController::class,'index'])->name('orders');
   });

});


Route::prefix('products')->controller(ProductsController::class)->name('products.')->group(function (){
    Route::get('','index')->name('index');
    Route::get('remove-filter','removeFilters')->name('remove-filter');
    Route::get('{id}','show')->name('show');
});

Route::prefix('Cart')->name('Cart.')->middleware('auth')->controller(CartController::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::post('add','add')->name('add');

});


Route::get('questions',[QuestionController::class , 'index'])->name('questions');

Route::get('contact_us',[ContactUsController::class,'index'])->name('contact_us');

Route::get('about_us',[AboutUsController::class,'index'])->name('about_us');
