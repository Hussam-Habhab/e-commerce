<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home',);
});

Route::resource('auth' , AuthController::class)->only(['store' , 'create'  ]);
Route::delete('auth',[AuthController::class,'destroy'])->name('auth.destroy');

Route::delete('logout',fn()=>to_route('auth.destroy'))->name('logout');

Route::resource('user' , UserController::class)->only(['store' , 'create' , 'destroy']);

// Only users with the 'admin' role can access this route
Route::middleware(EnsureUserIsAdmin::class)->prefix('admin')
    ->group(function () {
    // Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('products',ProductController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('dashboard',DashboardController::class)
        ->only('index');
});





