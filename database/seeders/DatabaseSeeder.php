<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert(['name' => 'Percussion']);
        //php artisan db:seed -> Da digitare sul terminale

        DB::table('restaurants')->insert([
            'name' => 'Prati',
            'address' => 'Via dei Gracchi, 128',
            'image' => 'https://www.chopstick.it/public/Banners/dsc1838-(1).jpg'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Cassia',
            'address' => 'Via Cassia, 844',
            'image' => 'https://www.chopstick.it/public/Banners/cassia.jpg'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Trastevere',
            'address' => 'Via Portuense, 76/78',
            'image' => 'https://www.chopstick.it/public/Banners/dsc9869.jpg'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Parioli',
            'address' => 'Via Regina Margherita, 17',
            'image' => 'https://www.chopstick.it/public/Banners/dsc6258-(1).jpg'
        ]);

    }
}