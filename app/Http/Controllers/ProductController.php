<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use \App\Models\Produits;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): Collection
    {
        return produits::all();
    }
    public function ShowProduits(string $id)
    {
        $produit = Produits::find($id);
        if ($produit) {
            return $produit->nom;
        }
        return null;
    }
    public function products(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'quantite' => 'required|integer',
            'poid' => 'required',
            'categorie_id' => 'required|integer',
        ]);


    use Illuminate\Http\Request;

        class ProductController extends Controller
        {


        $product = Produits::create($validatedData);
        return response()->json($product, 201);
        }

        public
        function update(Request $request, $id)
        {
            $validatedData = $request->validate([]);
            $product = Produits::findOrFail($id);
            $product->update($validatedData);
            return response()->json($product);
        }

        public
        function destroy($id)
        {
            $product = Produits::findOrFail($id);
            $product->delete();
            return response()->json(null, 204);
        }

    }
}
