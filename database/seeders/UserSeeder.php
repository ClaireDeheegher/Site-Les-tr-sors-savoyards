<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [];

        for ($i = 0; $i < 10; $i++) { // Par exemple, créer 10 utilisateurs
            $birthdate = Carbon::now()->subYears(rand(18, 65))->subDays(rand(0, 365));

            $users[] = [
                'name' => Str::random(10),
                'lastname' => Str::random(10),
                'birthday' => $birthdate,
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
                'gender' => $i % 2 == 0 ? 'M' : 'F', // Exemple: alterner entre 'M' et 'F' pour le genre
                'phone' => Str::random(10), // Générer un numéro de téléphone aléatoire
                'address' => Str::random(20), // Générer une adresse aléatoire
                'address2' => '', // Laisser vide ou générer si nécessaire
                'zipcode' => Str::random(5), // Générer un code postal aléatoire
                'town' => Str::random(10), // Générer une ville aléatoire
                'country' => 'France', // Par exemple, fixer le pays comme 'France'
                'email_verified_at' => now(), // Marquer comme vérifié à la date actuelle
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}
