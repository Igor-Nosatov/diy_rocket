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
                'code' => 'drills',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Sanders & Planers',
                'code' => 'sanders-planers',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Jigsaws & Power Saws',
                'code' => 'jigsaw-powersaws',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Electric Screwdrivers',
                'code' => 'electric-screwdrivers',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Grinders',
                'code' => 'grinders',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Heat Guns',
                'code' => 'heat-guns',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Powered Multi-Tools',
                'code' => 'powered-multitools',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Glue Guns',
                'code' => 'glue-guns',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Spray Guns',
                'code' => 'spray-guns',
                'image' => 'image/categories/1.jpg',
            ],
            [
                'name' => 'Staplers & Nailers',
                'code' => 'staplers-nailers',
                'image' => 'image/categories/1.jpg',
            ],
        ]);
    }
}
