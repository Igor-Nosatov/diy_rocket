<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Draper 18V Li-Ion Hammer Drill with 1 Hour Fast Charger and Carry Case',
                'price' => '322',
                'image1' => 'image/products/folder1/1.jpg',
                'image2' => 'image/products/folder1/2.jpg',
                'image3' => 'image/products/folder1/3.jpg',
                'image4' => 'image/products/folder1/4.jpg',
                'category_id' => 1,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Makita G-Series 18V 2 X 1.5Ah Li-Ion Cordless Combi Drill with 74 Accessories',
                'price' => '655',
                'image1' => 'image/products/folder2/1.jpg',
                'image2' => 'image/products/folder2/2.jpg',
                'image3' => 'image/products/folder2/3.jpg',
                'category_id' => 1,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Pro-Craft by Hilka 18V Li-Ion Cordless Drill with 2 Battery Packs',
                'price' => '456',
                'image1' => 'image/products/folder3/1.jpg',
                'image2' => 'image/products/folder3/2.jpg',
                'image3' => 'image/products/folder3/3.jpg',
                'image4' => 'image/products/folder3/4.jpg',
                'category_id' => 1,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Black & Decker 18V Cordless Hammer Drill with Battery and Case',
                'price' => '322',
                'image1' => 'image/products/folder4/1.jpg',
                'image2' => 'image/products/folder4/2.jpg',
                'image3' => 'image/products/folder4/3.jpg',
                'image4' => 'image/products/folder4/4.jpg',
                'category_id' => 1,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Hilka 600w Hammer Drill',
                'price' => '211',
                'image1' => 'image/products/folder5/1.jpg',
                'image2' => 'image/products/folder5/2.jpg',
                'image3' => 'image/products/folder5/3.jpg',
                'image4' => 'image/products/folder5/4.jpg',
                'category_id' => 1,
                'brand_id'=> 5,
            ],

            [
                'name' => 'Hilka 130w Detail Sander',
                'price' => '122',
                'image1' => 'image/products/folder6/1.jpg',
                'image2' => 'image/products/folder6/2.jpg',
                'category_id' => 2,
                'brand_id'=> 6,
            ],
            [
                'name' => 'Black & Decker 55W Mouse® Detail Sander and 6 Sanding Sheets',
                'price' => '615',
                'image1' => 'image/products/folder7/1.jpg',
                'image2' => 'image/products/folder7/2.jpg',
                'category_id' => 2,
                'brand_id'=> 7,
            ],
            [
                'name' => 'Hilka 280w Detail Sander',
                'price' => '236',
                'image1' => 'image/products/folder8/1.jpg',
                'category_id' => 2,
                'brand_id'=> 8,
            ],
            [
                'name' => 'Bosch PSM 100 A Multi-Sander with Dust Collector',
                'price' => '782',
                'image1' => 'image/products/folder9/1.jpg',
                'image2' => 'image/products/folder9/2.jpg',
                'image3' => 'image/products/folder9/3.jpg',
                'image4' => 'image/products/folder9/4.jpg',
                'category_id' => 2,
                'brand_id'=> 9,
            ],
            [
                'name' => 'Hilka 220w Detail Palm Sander',
                'price' => '671',
                'image1' => 'image/products/folder10/1.jpg',
                'image2' => 'image/products/folder10/2.jpg',
                'category_id' => 2,
                'brand_id'=> 10,
            ],

            [
                'name' => 'Bosch EasyCut 12V Cordless Nanoblade Saw',
                'price' => '321',
                'image1' => 'image/products/folder11/1.jpg',
                'image2' => 'image/products/folder11/2.jpg',
                'image3' => 'image/products/folder11/1.jpg',
                'image4' => 'image/products/folder11/2.jpg',
                'category_id' => 3,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Black & Decker Scorpion 400W Electric Saw',
                'price' => '756',
                'image1' => 'image/products/folder12/1.jpg',
                'image2' => 'image/products/folder12/2.jpg',
                'category_id' => 3,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Bosch PST 700E Corded Jigsaw',
                'price' => '456',
                'image1' => 'image/products/folder13/1.jpg',
                'image2' => 'image/products/folder13/2.jpg',
                'image3' => 'image/products/folder13/3.jpg',
                'image4' => 'image/products/folder13/4.jpg',
                'category_id' => 3,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Hilka 1200W 185mm Circular Saw',
                'price' => '899',
                'image1' => 'image/products/folder14/1.png',
                'image2' => 'image/products/folder14/2.jpg',
                'category_id' => 3,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Makita G-Series 18V Cordless Jigsaw - Body Only',
                'price' => '471',
                'image1' => 'image/products/folder15/1.jpg',
                'image2' => 'image/products/folder15/2.jpg',
                'image3' => 'image/products/folder15/3.jpg',
                'image4' => 'image/products/folder15/4.jpg',
                'category_id' => 3,
                'brand_id'=> 5,
            ],
            [
                'name' => 'Einhell Power-X-Change 18V Cordless Circular Saw - Bare Unit',
                'price' => '322',
                'image1' => 'image/products/folder16/1.jpg',
                'category_id' => 3,
                'brand_id'=> 6,
            ],

            [
                'name' => 'Hilka 3.6v Cordless Screwdriver',
                'price' => '321',
                'image1' => 'image/products/folder17/1.jpg',
                'image2' => 'image/products/folder17/2.jpg',
                'category_id' => 4,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Black & Decker 3.6V Li-Ion Screwdriver',
                'price' => '756',
                'image1' => 'image/products/folder18/1.jpg',
                'image2' => 'image/products/folder18/2.jpg',
                'image3' => 'image/products/folder18/3.jpg',
                'image4' => 'image/products/folder18/4.jpg',
                'category_id' => 4,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Bosch PSR Select Cordless Screwdriver',
                'price' => '456',
                'image1' => 'image/products/folder19/1.jpg',
                'image2' => 'image/products/folder19/2.jpg',
                'image3' => 'image/products/folder19/3.jpg',
                'category_id' => 4,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Black & Decker 19 Piece 6V Cordless Screwdriver Set',
                'price' => '899',
                'image1' => 'image/products/folder20/1.jpg',
                'image2' => 'image/products/folder20/2.jpg',
                'image3' => 'image/products/folder20/3.jpg',
                'category_id' => 4,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Bosch IXO V 3.6V Cordless Screwdriver with Accessories',
                'price' => '471',
                'image1' => 'image/products/folder21/1.jpg',
                'image2' => 'image/products/folder21/2.jpg',
                'image3' => 'image/products/folder21/3.jpg',
                'image4' => 'image/products/folder21/4.jpg',
                'category_id' => 4,
                'brand_id'=> 5,
            ],
            [
                'name' => '150mm 370w 230v Bench Grinder With Sanding Belt And Worklight',
                'price' => '88',
                'image1' => 'image/products/folder22/1.jpg',
                'image2' => 'image/products/folder22/2.jpg',
                'category_id' => 5,
                'brand_id'=> 6,
            ],
            [
                'name' => 'Draper 150mm 370W Bench Grinder with Wire Wheel and LED Worklight',
                'price' => '555',
                'image1' => 'image/products/folder23/1.jpg',
                'image2' => 'image/products/folder23/2.jpg',
                'image3' => 'image/products/folder23/3.jpg',
                'category_id' => 5,
                'brand_id'=> 7,
            ],
            [
                'name' => 'Bosch PWS 700-115 Angle Grinder',
                'price' => '222',
                'image1' => 'image/products/folder24/1.jpg',
                'image2' => 'image/products/folder24/2.jpg',
                'image3' => 'image/products/folder24/3.jpg',
                'image4' => 'image/products/folder24/4.jpg',
                'category_id' => 5,
                'brand_id'=> 8,
            ],
            [
                'name' => 'Bosch POF 1200 AE 1200W Router',
                'price' => '167',
                'image1' => 'image/products/folder25/1.jpg',
                'image2' => 'image/products/folder25/2.jpg',
                'image3' => 'image/products/folder25/3.jpg',
                'image4' => 'image/products/folder25/4.jpg',
                'category_id' => 5,
                'brand_id'=> 9,
            ],
            [
                'name' => 'Hilka 6 Inch Bench Grinder 1/2 HP Pro Craft',
                'price' => '786',
                'image1' => 'image/products/folder26/1.png',
                'category_id' => 5,
                'brand_id'=> 10,
            ],
            [
                'name' => 'Hilka 2000w Hot Air Gun',
                'price' => '288',
                'image1' => 'image/products/folder27/1.jpg',
                'category_id' => 6,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Black & Decker 1750W Heat Gun',
                'price' => '125',
                'image1' => 'image/products/folder28/1.jpg',
                'category_id' => 6,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Dewalt DCE530N XR Cordless Heat Gun 18V Bare Unit',
                'price' => '672',
                'image1' => 'image/products/folder29/1.jpg',
                'category_id' => 6,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Einhell 2000W Hot Air Gun with Carry Case',
                'price' => '787',
                'image1' => 'image/products/folder30/1.jpg',
                'category_id' => 6,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Draper 2000W Storm Force Hot Air Gun',
                'price' => '566',
                'image1' => 'image/products/folder31/1.jpg',
                'image2' => 'image/products/folder31/2.jpg',
                'image3' => 'image/products/folder31/3.jpg',
                'image4' => 'image/products/folder31/4.jpg',
                'category_id' => 6,
                'brand_id'=> 5,
            ],

            [
                'name' => 'Hilka 2000w Hot Air Gun',
                'price' => '288',
                'image1' => 'image/products/folder27/1.jpg',
                'category_id' => 7,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Black & Decker 1750W Heat Gun',
                'price' => '125',
                'image1' => 'image/products/folder28/1.jpg',
                'category_id' => 7,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Dewalt DCE530N XR Cordless Heat Gun 18V Bare Unit',
                'price' => '672',
                'image1' => 'image/products/folder29/1.jpg',
                'category_id' => 7,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Einhell 2000W Hot Air Gun with Carry Case',
                'price' => '787',
                'image1' => 'image/products/folder30/1.jpg',
                'category_id' => 7,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Draper 2000W Storm Force Hot Air Gun',
                'price' => '566',
                'image1' => 'image/products/folder31/1.jpg',
                'image2' => 'image/products/folder31/2.jpg',
                'image3' => 'image/products/folder31/3.jpg',
                'image4' => 'image/products/folder31/4.jpg',
                'category_id' => 7,
                'brand_id'=> 5,
            ],

            [
                'name' => 'Storm Force  Air Impact Wrench With Composite Body (1/2-Inch Square Drive)',
                'price' => '563',
                'image1' => 'image/products/folder32/1.jpg',
                'image2' => 'image/products/folder32/2.jpg',
                'image3' => 'image/products/folder32/3.jpg',
                'image4' => 'image/products/folder32/4.jpg',
                'category_id' => 8,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Dewalt DCS355N XR Brushless Oscillating Multi-Tool 18V Bare Unit',
                'price' => '564',
                'image1' => 'image/products/folder33/1.jpg',
                'category_id' => 8,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Draper 180W Rotary Multi Tool Kit - 113 Piece',
                'price' => '372',
                'image1' => 'image/products/folder34/1.jpg',
                'image2' => 'image/products/folder34/2.jpg',
                'category_id' => 8,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Draper D20 20V Oscillating Multi Tool with 1 x 2Ah Batteries and Charger',
                'price' => '657',
                'image1' => 'image/products/folder35/1.jpg',
                'image2' => 'image/products/folder35/2.jpg',
                'image3' => 'image/products/folder35/3.jpg',
                'image4' => 'image/products/folder35/4.jpg',
                'category_id' => 8,
                'brand_id'=> 4,
            ],
            [
                'name' => 'Bosch PMF 250 CES 250W Multi Tool',
                'price' => '446',
                'image1' => 'image/products/folder36/1.jpg',
                'image2' => 'image/products/folder36/2.jpg',
                'image3' => 'image/products/folder36/3.jpg',
                'image4' => 'image/products/folder36/4.jpg',
                'category_id' => 8,
                'brand_id'=> 5,
            ],

            [
                'name' => 'Bosch PFS 1000 Wood Paint Spray System',
                'price' => '288',
                'image1' => 'image/products/folder37/1.jpg',
                'image2' => 'image/products/folder37/2.jpg',
                'image3' => 'image/products/folder37/3.jpg',
                'image4' => 'image/products/folder37/4.jpg',
                'category_id' => 9,
                'brand_id'=> 6,
            ],
            [
                'name' => 'Bosch PFS 2000 AllPaint Spray System',
                'price' => '787',
                'image1' => 'image/products/folder38/1.jpg',
                'image2' => 'image/products/folder38/2.jpg',
                'image3' => 'image/products/folder38/3.jpg',
                'category_id' => 9,
                'brand_id'=> 9,
            ],
            [
                'name' => 'Draper Storm Force Airless Spray Gun',
                'price' => '566',
                'image1' => 'image/products/folder39/1.jpg',
                'image2' => 'image/products/folder39/2.jpg',
                'image3' => 'image/products/folder39/3.jpg',
                'category_id' => 9,
                'brand_id'=> 10,
            ],

            [
                'name' => 'Draper Storm Force  230V Electric Stapler/Nailer',
                'price' => '288',
                'image1' => 'image/products/folder40/1.jpg',
                'image2' => 'image/products/folder40/2.jpg',
                'image3' => 'image/products/folder40/3.jpg',
                'image4' => 'image/products/folder40/4.jpg',
                'category_id' => 10,
                'brand_id'=> 1,
            ],
            [
                'name' => 'Hilka 230v Electric Stapler',
                'price' => '125',
                'image1' => 'image/products/folder41/1.jpg',
                'category_id' => 10,
                'brand_id'=> 2,
            ],
            [
                'name' => 'Draper D20 20V Nailer/Stapler with 2Ah Battery and Charger',
                'price' => '672',
                'image1' => 'image/products/folder42/1.jpg',
                'image2' => 'image/products/folder42/2.jpg',
                'image3' => 'image/products/folder42/3.jpg',
                'category_id' => 10,
                'brand_id'=> 3,
            ],
            [
                'name' => 'Draper D20 20V Nailer/Staplier - Bare',
                'price' => '787',
                'image1' => 'image/products/folder43/1.jpg',
                'category_id' => 10,
                'brand_id'=> 4,
            ],

        ]);
    }
}