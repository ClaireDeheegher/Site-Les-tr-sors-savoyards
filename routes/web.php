<?php

    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\CartController;
    use App\Http\Controllers\CategorieController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\UserController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('carts')->group(function () {
        Route::get('/', [CartController::class, 'index']);
        Route::get('/{id}', [CartController::class, 'show']);
        Route::post('/', [CartController::class, 'store']);
        Route::put('/{id}', [CartController::class, 'update']);
        Route::delete('/{id}', [CartController::class, 'destroy']);
    });

// Routes pour les utilisateurs
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index')->Middleware('auth:sanctum');
        Route::get('/create', [UserController::class, 'create'])->name('users.create')->Middleware('auth:sanctum');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->Middleware('auth:sanctum');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update')->Middleware('auth:sanctum');
        Route::post('/', [UserController::class, 'store'])->name('users.store')->Middleware('auth:sanctum');
        Route::get('/{user}', [UserController::class, 'show'])->name('users.show')->Middleware('auth:sanctum');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy')->Middleware('auth:sanctum');
    });

// Routes pour les produits
    route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'ShowProduits']);
        Route::post('/', [ProductController::class, 'products']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'destroy']);
    });

// Routes pour les catégories
    Route::prefix('/categorie')->group(function () {
        Route::get('/', [CategorieController::class, 'index']);
        Route::get('/{id}', [CategorieController::class, 'showCategorie']);
        Route::post('/', [CategorieController::class, 'create']);
        Route::put('/{id}', [CategorieController::class, 'update']);
        Route::delete('/{id}', [CategorieController::class, 'delete']);
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
    Route::get('/register', [AuthController::class, 'register']);
