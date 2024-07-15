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

    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {

        $produits = [];

        for($i = 0; $i < 10; $i++){
            $produits[] = [
                'nom' => Str::random(10),
                'prix' => rand(10, 200),
                'quantite' => rand(1,10),
                'poid' => rand(20, 100),
                'description' => Str::random(10),
                'categorie_id' => rand(1, 5),
            ];
        }
        DB::table('produits')->insert($produits);
    }

}
