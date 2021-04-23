<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Selector ^\s*'.*
     * Replace DB::table('images')->insert([
     * 'url' => $0,
     * 'product_id' => n,
     * 'created_at' => now(),
     * 'updated_at' => now()
     * ]);
     */

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // AREAS IMAGES
        DB::table('images')->insert([
            'url' =>       'https://ss423.liverpool.com.mx/lg/1097875908.jpg',
            'area_id' =>    1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss423.liverpool.com.mx/lg/1097877731.jpg',
            'area_id' =>    1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // PRODUCTS IMAGES
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095455804_0p.jpg',
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095455804_20p.jpg',
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095455804_2p.jpg',
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095455804_3p.jpg',
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095688175.jpg',
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095688175_3p.jpg',
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095688175_20p.jpg',
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1095688175_6p.jpg',
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1104796423.jpg',
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1104796423_3p.jpg',
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1104796423_9p.jpg',
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1104796423_5p.jpg',
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1084638958.jpg',
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1084638958_3p.jpg',
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1084638958_20p.jpg',
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('images')->insert([
            'url' =>       'https://ss629.liverpool.com.mx/xl/1104796423_5p.jpg',
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
