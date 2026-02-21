<?php

use App\Http\Controllers\About_Us;
use App\Http\Controllers\Contact_Us;
use App\Http\Controllers\dashboard\AccountController;
use App\Http\Controllers\dashboard\IndexController as DashboardIndexController;
use App\Http\Controllers\dashboard\OrderController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[indexController::class,'index'])->name('index');

Route::prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('index',[DashboardIndexController::class,'index'])->name('index');
    Route::get('account',[AccountController::class,'index'])->name('account');
    Route::get('orders', [OrderController::class,'index'])->name('orders');

});


Route::prefix('products')->controller(ProductsController::class)->name('products.')->group(function (){
    Route::get('','index')->name('index');
    Route::get('{id}','show')->name('show');
});


Route::get('shop',[\App\Http\Controllers\shop\IndexController::class,'index'])->name('shop');

Route::get('questions',[QuestionController::class , 'index'])->name('questions');

Route::get('contact_us',[Contact_Us::class,'index'])->name('contact_us');

Route::get('about_us',[About_Us::class,'index'])->name('about_us');
