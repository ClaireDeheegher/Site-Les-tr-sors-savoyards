<?php

namespace App\Http\Controllers;

class CategorieController extends Controller
{
    public function index() : string
    {
        return 'Liste des catégories';
    }

    public function showCategorie(string $id,) : string
    {
        return 'Page catégorie'.$id;
    }
}
