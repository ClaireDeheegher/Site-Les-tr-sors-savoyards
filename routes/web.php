<?php

// Routes pour le login
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Web\CategoryControllerWeb;
use App\Http\Controllers\Web\ProductControllerWeb;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);

route::prefix('/products')->group(function () {
    Route::post('/', [ProductController::class, 'products'])->name('product.create');
    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});
Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{id}/update', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/{id}', [CategoryController::class, 'showProductList'])->name('category.show');

});
