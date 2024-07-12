<?php

namespace App\Http\Controllers;

class CategorieController extends Controller
{
    public function index(): array
    {
        return [
            'name' => 'Categorie',
        ];
    }

    public function showCategorie(string $id): array
    {
        return [
            'name' => 'Categorie',
            'id' => $id,
        ];
    }
}
