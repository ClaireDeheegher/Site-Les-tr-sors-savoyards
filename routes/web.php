<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorie', function () {
    return 'Liste des catégories';
});

Route::get('/categorie/{id}', function () {
    return 'Page catégorie';
});
