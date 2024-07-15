<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\File;

class produitsseeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $json = File::get("database/seeders/produits.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            DB::table('produits')->insert([
                'nom' => $obj->nom,
                'description' => $obj->description,
                'prix' => $obj->prix,
                'quantite' => $obj->quantite,
                'poid' => $obj->poid,
                'categorie_id' => $obj->categorie_id,

            ]);
        }
    }
}

