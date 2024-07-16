<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;



class ProductController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Produits::all();
    }
    public function ShowProduits(string $id)
    {
        $produits = new \App\Models\Produits;
        return \App\Models\Produits::all('name');

    }
}
