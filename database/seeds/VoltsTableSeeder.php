<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoltsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volts')->insert([
            [
                'name' => '18v',
            ],
            [
                'name' => '16v',
            ],
            [
                'name' => '12v',
            ],
            [
                'name' => '20v',
            ],
        ]);
    }
}
