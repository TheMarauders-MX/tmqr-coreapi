<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Computación',
            'discount' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Zapatería',
            'discount' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Llantas',
            'discount' => 30,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
