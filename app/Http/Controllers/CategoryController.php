<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller //Classe qui va servir de controller pour afficher les pages
{
    public function index()
    {
        $category = new Category(); // Appel du modèle et de la db


        return view('categories.index', ['category' => \App\Models\Category::all()]);
    }

    public function showProductList(Category $id)
    {
        /*$category=Categorie::where('id', $id)->get(); */

        //$id > produits()->where('categories_id', $id)->get();

        return view('categories.product_listing', ['category' => $id]);
    }

    public function create()
    {

        return view('categories.create');
    }

    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect('/category');
    }

    public function update(Request $request, Category $id)
    {

        $id->name = $request->name;
        $id->save();

        return $id;
    }

    public function delete(Category $id)
    {

        $id->delete();

        return $id;
    }
}
