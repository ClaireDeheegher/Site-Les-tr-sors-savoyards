<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
return view('welcome');
});
Route::prefix('/categorie')->group(function () {


    Route::get('/', [\App\Http\Controllers\CategorieController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);

});

route::prefix('/Produits')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);

/*
get => pour informer qu'on repond à la methode "get" du navigateur.

"/" => URL en premier parametre "/" = root
function\() => permettra d'explique comment repondre
return view('welcome'); => lorsque j'accede a la page racine, il faut que tu reponde en retournant une view qui s'appelle "welcome".

*/

    Route::get('/user', [UserController::class, 'index']);

Route::get('/categorie', function () {
    return 'Liste des catégories';
});

Route::prefix('/categorie')->group(function () {
    Route::get('/', [\App\Http\Controllers\CategorieController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);

    Route::resource('carts', CartController::class);

});

    Route::resource('users', UserController::class);
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::resource('carts', CartController::class);
