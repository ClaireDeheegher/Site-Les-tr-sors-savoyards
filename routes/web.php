<<<<<<< HEAD
=======
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
return view('welcome');
});

    Route::prefix('/categorie')->group(function () {



    Route::get('/{id}', [\App\Http\Controllers\CategorieController::class, 'showCategorie']);

});


route::get ('/products',function (){
    return 'Hello World';
});

    route::get ('/products/{id}',function ($id){
        return 'Hello '.$id;
    });
>>>>>>> b590524 (Ajout du ProductController et modification des routes)
