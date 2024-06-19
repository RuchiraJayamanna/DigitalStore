<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
});


Route::middleware('auth:sanctum')->group(function () {
    Route::get('product/list', [ProductController::class, 'list']);
    Route::put('product/update/{id}', [ProductController::class, 'update']);
});

Route::post('login', 'Auth\ApiAuthController@login');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
});

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
