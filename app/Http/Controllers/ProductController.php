<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;



class ProductController extends Controller{
public function index(): JsonResponse{
    $test = [
        'name' => 'Abigail',
        'state' => 'CA',
    ];

    return response()->json($test);
}
};
