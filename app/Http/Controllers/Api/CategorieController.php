<?php

    namespace App\Http\Controllers\Api;


use App\Models\Categorie;
use Illuminate\Http\Request;

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

        $categorie = Categorie::find($id);

        return $categorie;
    }

    public function create(Request $request)
    {
        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();

        return $categorie;
    }

    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->name = $request->name;
        $categorie->save();

        return $categorie;
    }

    public function delete($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return $categorie;
    }
}
