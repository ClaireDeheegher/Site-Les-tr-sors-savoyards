<?php



    use App\Http\Controllers\UserController;
    use App\Http\Controllers\CartController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/categorie')->group(function () {
    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);
});

    Route::resource('carts', CartController::class);

    Route::resource('users', UserController::class);
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
