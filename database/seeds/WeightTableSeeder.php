<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weights')->insert([
            [
                'name' => '1.2kg',
            ],
            [
                'name' => '0.9kg',
            ],
            [
                'name' => '0.8kg',
            ],
            [
                'name' => '1.4kg',
            ],
            [
                'name' => '1.35kg',
            ],
        ]);
    }
}
