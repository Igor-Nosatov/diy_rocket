<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BatteryTypeTableSeeder::class,
            BrandTableSeeder::class,
            CategoryTableSeeder::class,
            CommentTableSeeder::class,
            GearBoxTableSeeder::class,
            ProductTableSeeder::class,
            VoltsTableSeeder::class,
            WeightTableSeeder::class,
        ]);
    }
}
