<?php


    use App\Http\Controllers\GererController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/blog', [GererController::class, 'index']);




