<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produits;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(): Collection
    {
        return produits::all();
    }

    public function ShowProduits(int $id)
    {
        $produit = Produits::findOrFail($id);
        if ($produit) {
            return response()->json($produit);
        }

        return response()->json(['message' => 'Product not found'], 404);
    }

    public function products(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'quantite' => 'required|integer',
            'poid' => 'required',
            'categories_id' => 'required|integer',
        ]);

        $product = Produits::create($validatedData);

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([]);
        $product = Produits::findOrFail($id);
        $product->update($validatedData);

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Produits::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
    }
}

