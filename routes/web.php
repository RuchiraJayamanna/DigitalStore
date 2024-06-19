<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::put('categories/{category}/update', [CategoryController::class, 'update'])->name('categories.customUpdate');
    Route::get('categories/download-pdf', [CategoryController::class, 'downloadPDF'])->name('categories.downloadPDF');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::resource('categories', CategoryController::class)->except(['update']);

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::get('products/download-excel', [ProductController::class, 'downloadExcel'])->name('products.downloadExcel');
    Route::resource('products', ProductController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
});
