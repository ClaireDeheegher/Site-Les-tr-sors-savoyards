<?php


    use App\Http\Controllers\CartController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/categorie')->group(function () {


    Route::get('/', [\App\Http\Controllers\CategorieController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);


    Route::resource('carts', CartController::class);



});
