<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller //Classe qui va servir de controller pour afficher les pages
{
    public function index()
    {
        $categorie = new Categorie(); // Appel du modèle et de la db

        /* $categorie->name = 'Epicerie'; # Création d'une nouvelle ligne dans la db avec le nom de la catégorie
         $categorie->save();*/

        return view('categories.categories', ['categorie' => \App\Models\Categorie::all()]);
    }

    public function showProductList(Categorie $id)
    {
        /*$category=Categorie::where('id', $id)->get(); */

        //$id > produits()->where('categories_id', $id)->get();

        return view('categories.product_listing', ['category' => $id]);
    }

    public function create(Request $request)
    {
        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();

        return $categorie;
    }

    public function update(Request $request, Categorie $id)
    {

        $id->name = $request->name;
        $id->save();

        return $id;
    }

    public function delete(Categorie $id)
    {

        $id->delete();

        return $id;
    }
}
