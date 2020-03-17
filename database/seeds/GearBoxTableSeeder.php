<?php

use Illuminate\Database\Seeder;

class GearBoxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gear_boxes')->insert([
            [
                'name' => 'Manual Gearbox',
            ],
            [
                'name' => 'Automatic Gearbox',
            ],
        ]);
    }
}
