<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
return view('welcome');
});

Route::prefix('/categorie')->group(function () {


    Route::get('/', [\App\Http\Controllers\CategorieController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);

});

route::prefix('/Produits')->group(function () {


    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'ShowProduits']);

});


