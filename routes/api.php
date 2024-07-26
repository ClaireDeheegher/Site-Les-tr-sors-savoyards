<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
Route::prefix('carts')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::get('/{id}', [CartController::class, 'show']);
    Route::post('/', [CartController::class, 'store']);
    Route::put('/{id}', [CartController::class, 'update']);
    Route::delete('/{id}', [CartController::class, 'destroy']);
});
// Routes pour les users
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index')->WithoutMiddleware('auth:sanctum');
    Route::get('/create', [UserController::class, 'create'])->name('users.create')->WithoutMiddleware('auth:sanctum');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->WithoutMiddleware('auth:sanctum');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update')->WithoutMiddleware('auth:sanctum');
    Route::post('/', [UserController::class, 'store'])->name('users.store')->WithoutMiddleware('auth:sanctum');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show')->WithoutMiddleware('auth:sanctum');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy')->WithoutMiddleware('auth:sanctum');
});
//->Middleware('auth:sanctum')
// Routes pour les produits
Route::prefix('/products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'ShowProduits']);
    Route::post('/', [ProductController::class, 'products']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});
// Routes pour les catégories
Route::prefix('/categorie')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'showCategorie']);
    Route::post('/', [CategoryController::class, 'create']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'delete']);
});
// Routes pour les paniers
Route::resource('carts', CartController::class);
// Routes pour les commandes
Route::prefix('/orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']);
    Route::get('/{id}', [OrderController::class, 'show']);
    Route::post('/', [OrderController::class, 'create']);
    Route::put('/{id}', [OrderController::class, 'update']);
    Route::delete('/{id}', [OrderController::class, 'destroy']);
});
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');









