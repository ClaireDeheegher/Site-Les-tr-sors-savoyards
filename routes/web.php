<?php

// Routes pour le login
use App\Http\Controllers\View\AuthViewController;
use App\Http\Controllers\View\CartViewController;
use App\Http\Controllers\View\CategoryViewController;
use App\Http\Controllers\View\OrderViewController;
use App\Http\Controllers\View\ProductViewController;
use App\Http\Controllers\View\UserViewController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('auth.login');
});*/

// Routes pour le login
Route::get('login', [AuthViewController::class, 'login'])->name('auth.login');
Route::post('login', [AuthViewController::class, 'doLogin'])->name('auth.login.post');
Route::post('logout', [AuthViewController::class, 'logout'])->name('auth.logout');

// Routes pour les carts
Route::prefix('carts')->group(function () {
    Route::get('/', [CartViewController::class, 'index']);
    Route::get('/{id}', [CartViewController::class, 'show']);
    Route::post('/', [CartViewController::class, 'store']);
    Route::put('/{id}', [CartViewController::class, 'update']);
    Route::delete('/{id}', [CartViewController::class, 'destroy']);
});

// Routes pour les users
Route::prefix('users')->group(function () {
    Route::get('/', [UserViewController::class, 'index'])->name('users.index');
    Route::get('/create', [UserViewController::class, 'create'])->name('users.create');
    Route::get('/{user}/edit', [UserViewController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserViewController::class, 'update'])->name('users.update');
    Route::post('/', [UserViewController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserViewController::class, 'show'])->name('users.show');
    Route::delete('/{user}', [UserViewController::class, 'destroy'])->name('users.destroy');
});

// Routes pour les products
Route::prefix('products')->group(function () {
    Route::get('/', [ProductViewController::class, 'index']);
    Route::get('/{id}', [ProductViewController::class, 'show']);
    Route::post('/', [ProductViewController::class, 'store'])->name('products.store');
    Route::put('/{id}', [ProductViewController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductViewController::class, 'destroy'])->name('products.destroy');
});

// Routes pour les catégories
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryViewController::class, 'index']);
    Route::get('/create', [CategoryViewController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryViewController::class, 'store'])->name('categories.store');
    Route::get('/{id}/edit', [CategoryViewController::class, 'edit'])->name('categories.edit');
    Route::put('/{id}', [CategoryViewController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryViewController::class, 'destroy'])->name('categories.destroy');
    Route::get('/{id}', [CategoryViewController::class, 'show'])->name('categories.show');
});

// Routes pour les commandes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderViewController::class, 'index']);
    Route::get('/{id}', [OrderViewController::class, 'show']);
    Route::post('/', [OrderViewController::class, 'store'])->name('orders.store');
    Route::put('/{id}', [OrderViewController::class, 'update'])->name('orders.update');
    Route::delete('/{id}', [OrderViewController::class, 'destroy'])->name('orders.destroy');
});
