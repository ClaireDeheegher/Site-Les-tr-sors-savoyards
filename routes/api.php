<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/categorie')->group(function () {
    Route::get('/', [\App\Http\Controllers\CategorieController::class, 'index']);
    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);
});

route::prefix('/produits')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'ShowProduits']);
});
Route::post('/products', [ProductController::class, 'products']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::resource('users', UserController::class);
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::resource('carts', CartController::class);
