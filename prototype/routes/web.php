<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, "index"]);

Auth::routes();
Route::middleware("auth")->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
    Route::get('/product/create', function() {return view('dashboard.create');})
    ->name('product.create');
    Route::put('/product/store', [ProductController::class, 'store'])
    ->name('product.store');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])
    ->name('product.destroy');
});
