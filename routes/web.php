<?php

// Routes pour le login
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'showProductList'])->name('category.show');
    Route::get('/create', [CategoryController::class, 'store'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
});
