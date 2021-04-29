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
            'route' => urlencode('computacion'),
            'discount' => 20,
            'image' => "https://ss628.liverpool.com.mx/lg/1098132739.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Zapatería',
            'route' => urlencode('zapateria'),
            'discount' => 15,
            'image' => "https://ss628.liverpool.com.mx/lg/1098132739.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Llantas',
            'route' => urlencode('llantas'),
            'discount' => 30,
            'image' => "https://ss628.liverpool.com.mx/lg/1098132739.jpg",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
