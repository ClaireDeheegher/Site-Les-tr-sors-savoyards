<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert($categories);
        $categories = [
            ['id' => 1, 'name' => 'Fromages'],
            ['id' => 2, 'name' => 'Charcuterie'],
            ['id' => 3, 'name' => 'Vins'],
            ['id' => 4, 'name' => 'Pâtes'],
            ['id' => 5, 'name' => 'Miel'],
        ];

    }
}

