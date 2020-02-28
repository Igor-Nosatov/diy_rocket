<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Draper',
                'image' => 'image/brands/1.jpg',
            ],
            [
                'name' => 'Hilka',
                'image' => 'image/brands/2.jpg',
            ],
            [
                'name' => 'Bosch',
                'image' => 'image/brands/3.jpg',
            ],
            [
                'name' => 'Black & Decker',
                'image' => 'image/brands/4.jpg',
            ],
            [
                'name' => 'Dewalt',
                'image' => 'image/brands/5.jpg',
            ],
            [
                'name' => 'Makita',
                'image' => 'image/brands/6.jpg',
            ],
            [
                'name' => 'Einhell',
                'image' => 'image/brands/7.jpg',
            ],
            [
                'name' => 'Faithfull',
                'image' => 'image/brands/8.jpg',
            ],
            [
                'name' => 'Pro-Craft',
                'image' => 'image/brands/9.jpg',
            ],
            [
                'name' => 'Q Connect',
                'image' => 'image/brands/10.jpg',
            ],
        ]);
    }
}

