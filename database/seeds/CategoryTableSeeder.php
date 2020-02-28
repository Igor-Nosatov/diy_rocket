<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Drills',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Sanders & Planers',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Jigsaws & Power Saws',
                'image' => 'image/categories/3.jpg',
            ],
            [
                'name' => 'Electric Screwdrivers',
                'image' => 'image/categories/4.jpg',
            ],
            [
                'name' => 'Grinders',
                'image' => 'image/categories/5.jpg',
            ],
            [
                'name' => 'Heat Guns',
                'image' => 'image/categories/6.jpg',
            ],
            [
                'name' => 'Powered Multi-Tools',
                'image' => 'image/categories/7.jpg',
            ],
            [
                'name' => 'Glue Guns',
                'image' => 'image/categories/8.jpg',
            ],
            [
                'name' => 'Spray Guns',
                'image' => 'image/categories/9.jpg',
            ],
            [
                'name' => 'Staplers & Nailers',
                'image' => 'image/categories/10.jpg',
            ],
        ]);
    }
}
