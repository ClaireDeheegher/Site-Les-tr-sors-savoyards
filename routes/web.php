
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



    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);

});

<<<<<<< HEAD

route::get ('/products',function (){
    return 'Hello World';
=======
route::prefix('/Produits')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);

    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'ShowProduits']);
>>>>>>> a456567 (+2)
});

    route::get ('/products/{id}',function ($id){
        return 'Hello '.$id;
    });

    Route::resource('users', UserController::class);
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

    Route::resource('carts', CartController::class);
