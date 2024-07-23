<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Integer;

class produitsseeder extends Seeder
{

    public function run(): void
    {
        $json = File::get("database/seeders/produits.json");
        $data = json_decode($json);

        if ($data === null) {
            throw new \Exception('Le fichier JSON est vide ou invalide.');
        }

        foreach ($data as $obj) {
<<<<<<< HEAD
            if (!isset($obj->nom, $obj->description, $obj->prix, $obj->quantite, $obj->poid, $obj->categories_id)) {
=======
            if (! isset($obj->nom, $obj->description, $obj->prix, $obj->quantite, $obj->poid, $obj->categories_id)) {
>>>>>>> 99d9381 (encore une update)
                throw new \Exception('Données JSON manquantes pour l\'un des produits.');
            }

            DB::table('produits')->insert([
                'nom' => $obj->nom,
                'description' => $obj->description,
                'prix' => $obj->prix,
                'quantite' => $obj->quantite,
                'poid' => $obj->poid,
                'categories_id' => $obj->categories_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }

    public function timestamps()
    {
    }
}
