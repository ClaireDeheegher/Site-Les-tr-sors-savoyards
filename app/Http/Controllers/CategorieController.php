<?php

namespace App\Http\Controllers;

class CategorieController extends Controller //Classe qui va servir de controller pour afficher les pages
{
    public function index()
    {
        $categorie = new \App\Models\Categorie(); // Appel du modèle et de la db

        /* $categorie->name = 'Epicerie'; # Création d'une nouvelle ligne dans la db avec le nom de la catégorie
         $categorie->save();*/

        return \App\Models\Categorie::all();
    }

    public function showCategorie(string $id)
    {

        $categorie = \App\Models\Categorie::all();

        dd($categorie[$id]->name);

        return $categorie;

    }
}
