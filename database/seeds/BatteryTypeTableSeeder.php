<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatteryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('battery_types')->insert([
            [
                'name' => 'Lithium-ion',
            ],
            [
                'name' => 'Lithium-pol',
            ],
        ]);
    }
}
