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

    public function showProductList(Category $id)
    {
        $category = Category::where('id', $id)->get();

        $category->products()->where('categories_id', $id)->get();

        return $category;
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
