<?php

namespace App\Http\Controllers;

class CategorieController extends Controller
{
    public function index()
    {
        $categorie = new \App\Models\Categorie;
        $categorie->name = 'Fromage';
        $categorie->save();
        return \App\Models\Categorie::all();
    }

    public function showCategorie(string $id)
    {
        $categorie = new \App\Models\Categorie;
        return \App\Models\Categorie::all('name');

    }
}
