<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart')->insert([
            'id' => int ::random(10),
            'quantity' => int ::random(10),
        ]);
    {

    }
        //
    }
}
class cart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cart::factory()->count(50)->create();
    }
}

