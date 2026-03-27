<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', fn() => view('dashboard'));

    Route::resource('orders', OrderController::class);

    Route::post('/orders/{id}/status', [OrderController::class, 'changeStatus']);

    Route::get('/orders-archived', [OrderController::class, 'archived']);
    Route::post('/orders/{id}/restore', [OrderController::class, 'restore']);

    Route::post('/photos', [PhotoController::class, 'store']);
});