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
            'name' => 'Pantallas',
            'route' => urlencode('pantallas'),
            'discount' => 20,
            'image' => 'https://assetspwa.liverpool.com.mx/assets/digital/home/img/abril21/bca_280421pan.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Relojes',
            'route' => urlencode('relojes'),
            'discount' => 45,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/cosmeticos/catst6220042.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Mochilas',
            'route' => urlencode('mochilas'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/el/cat3980000.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Colchones',
            'route' => urlencode('colchones'),
            'discount' => 35,
            'image' => 'https://media11.liverpool.com.mx/web/images/products/es_MX/xl/Muebles-colchones-colchones.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 5
        DB::table('areas')->insert([
            'name' => 'Ciclismo',
            'route' => urlencode('ciclismo'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/deportes/ciclismo-cat.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Celulares',
            'route' => urlencode('celulares'),
            'discount' => 10,
            'image' => 'https://assetspwa.liverpool.com.mx/assets/digital/home/img/abril21/bpromo02b_280421cel.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Salas',
            'route' => urlencode('salas'),
            'discount' => 20,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/williamsonoma/cat4340001.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Bolsas Clutch',
            'route' => urlencode('bolsas-clutch'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/ella/bolso-clutch.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Motos',
            'route' => urlencode('motos'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/deportes/motocicletas.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Maletas',
            'route' => urlencode('maletas'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/viajes/artsdeviaje-maletas1.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Corbatas',
            'route' => urlencode('corbatas'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/el/cat5660179.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('areas')->insert([
            'name' => 'Paraguas Mujer',
            'route' => urlencode('paraguas-mujer'),
            'discount' => 30,
            'image' => 'https://assets.liverpool.com.mx/assets/images/categorias/damas/catst9207491.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
