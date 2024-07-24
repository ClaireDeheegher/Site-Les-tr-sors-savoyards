<?php
    // Routes pour le login
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CategorieController;

    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'doLogin']);
    Route::prefix('/categorie')->group(function () {
        Route::get('/', [CategorieController::class, 'index']);
        Route::get('/{id}', [CategorieController::class, 'showProductList'])->name('categorie.show');
});

