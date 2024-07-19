<?php

namespace App\Http\Controllers;

use \App\Models\Categorie;

class CategorieController extends Controller //Classe qui va servir de controller pour afficher les pages
{
    public function index()
    {
        $categorie = new Categorie(); // Appel du modèle et de la db

        /* $categorie->name = 'Epicerie'; # Création d'une nouvelle ligne dans la db avec le nom de la catégorie
         $categorie->save();*/

        return \App\Models\Categorie::all();
    }

    public function showCategorie(string $id)
    {

        $categorie = Categorie::all();

        dd($categorie[$id]->name);

        return $categorie;
    }
}
