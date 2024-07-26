<?php



    use App\Http\Controllers\Api\CategoryController;
    use App\Http\Controllers\Api\ProductController;
    use App\Http\Controllers\Api\UserController;
    use Illuminate\Support\Facades\Route;


// Routes pour le login
Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login', [AuthController::class, 'doLogin'])->name('auth.login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');


    Route::get('/', function () {
        return view('auth.login');
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
    Route::prefix('/categorie')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/{id}', [CategoryController::class, 'showCategorie']);
        Route::post('/', [CategoryController::class, 'create']);
        Route::put('/{id}', [CategoryController::class, 'update']);
        Route::delete('/{id}', [CategoryController::class, 'delete']);
    });

    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'doLogin']);

