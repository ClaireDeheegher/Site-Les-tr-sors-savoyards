<?php

    use App\Http\Controllers\Api\AuthController;
    use App\Http\Controllers\Api\CartController;
    use App\Http\Controllers\View\CategoryController;
    use App\Http\Controllers\Api\OrderController;
    use App\Http\Controllers\View\ProductController;
    use App\Http\Controllers\View\UserController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CategorieController;

    Route::get('/', function () {
        return view('welcome');
    });

// Routes pour les carts
Route::prefix('carts')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::get('/{id}', [CartController::class, 'show']);
    Route::post('/', [CartController::class, 'store']);
    Route::put('/{id}', [CartController::class, 'update']);
    Route::delete('/{id}', [CartController::class, 'destroy']);
});

// Routes pour les users
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    //->Middleware('auth:sanctum')


// Routes pour les products
    route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/{id}', [ProductController::class, 'ShowProduits']);
        Route::post('/', [ProductController::class, 'products']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'destroy']);
    });

// Routes pour les catégories
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/{id}', [CategoryController\Controller::class, 'showCategorie']);
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

