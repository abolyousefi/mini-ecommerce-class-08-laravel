<?php

use App\Http\Controllers\Contact_Us;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[indexController::class,'index'])->name('index');

Route::prefix('dashboard')->controller(DashboardController::class)->name('dashboard.')->group(function (){
   Route::get('account','account')->name('account');
   Route::get('orders','orders')->name('orders');
});


Route::prefix('products')->controller(ProductsController::class)->name('products.')->group(function (){
    Route::get('','index')->name('index');
    Route::get('{id}','show')->name('show');
});


Route::get('shop',[\App\Http\Controllers\shop\IndexController::class,'index'])->name('shop');

Route::get('questions',[QuestionController::class , 'index'])->name('questions');

Route::get('contact_us',[Contact_Us::class,'index'])->name('contact_us');
