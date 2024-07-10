<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get ('/products',function (){
    return 'Hello World';
});

    route::get ('/products/{id}',function ($id){
        return 'Hello '.$id;
    });
