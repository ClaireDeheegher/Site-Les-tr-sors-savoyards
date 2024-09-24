<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller //Classe qui va servir de controller pour afficher les pages
{
    public function index()
    {
        $category = Category::all();

        return response()->json($category);
    }

    public function showProductList($id)
    {
        // Récupère la catégorie par ID
        $category = Category::findOrFail($id);

        // Accède aux produits de la catégorie
        $products = $category->products;

        // Retourne la catégorie et ses produits
        return response()->json([
            'category' => $category,
            'products' => $products
        ]);
    }



    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json($category);
    }

    public function update(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        $category->name = $request->name;
        $category->save();

        return $id;

    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return $category;
    }
}
