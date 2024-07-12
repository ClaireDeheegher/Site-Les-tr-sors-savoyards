<?php


    use App\Http\Controllers\UserController;
    use App\Http\Controllers\GererController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*ROUTE TEST
Route => on utilise une class definit dans ce namespace: "use Illuminate\Support\Facades\Route;"

get => pour informer qu'on repond à la methode "get" du navigateur.

"/" => URL en premier parametre "/" = root
function\() => permettra d'explique comment repondre
return view('welcome'); => lorsque j'accede a la page racine, il faut que tu reponde en retournant une view qui s'appelle "welcome".

*/


    Route::get('/user', [UserController::class, 'index']);
    Route::get('/blog', [GererController::class, 'index']);

