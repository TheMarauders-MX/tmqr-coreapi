<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AreaSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AreaSeeder::class,
            ProductSeeder::class,
            ImageSeeder::class
        ]);
    }
}
