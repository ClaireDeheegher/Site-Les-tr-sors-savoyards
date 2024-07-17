<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\User;

    class UserSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run()
        {
            // Créer 10 utilisateurs en utilisant la factory
            User::factory()->count(10)->create();
        }
    }
