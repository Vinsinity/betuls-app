<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'created_at' => '2023-01-31 18:05:22',
                'id' => 1,
                'image' => '20230131180518E2Ts5i01oJQk.jpg',
                'is_showcase' => 0,
                'product_id' => 1,
                'updated_at' => '2023-01-31 18:05:22',
            ),
            1 => 
            array (
                'created_at' => '2023-01-31 18:05:49',
                'id' => 2,
                'image' => '20230131180536YKXpNrUalmPu.jpg',
                'is_showcase' => 0,
                'product_id' => 2,
                'updated_at' => '2023-01-31 18:05:49',
            ),
            2 => 
            array (
                'created_at' => '2023-01-31 18:06:09',
                'id' => 3,
                'image' => '20230131180603r4w2sy3oyFDJ.jpg',
                'is_showcase' => 0,
                'product_id' => 3,
                'updated_at' => '2023-01-31 18:06:09',
            ),
            3 => 
            array (
                'created_at' => '2023-01-31 18:06:30',
                'id' => 4,
                'image' => '20230131180625m7XJCdWpbALG.jpg',
                'is_showcase' => 0,
                'product_id' => 4,
                'updated_at' => '2023-01-31 18:06:30',
            ),
            4 => 
            array (
                'created_at' => '2023-01-31 18:06:49',
                'id' => 5,
                'image' => '20230131180645sxia4PAi73r2.jpg',
                'is_showcase' => 0,
                'product_id' => 5,
                'updated_at' => '2023-01-31 18:06:49',
            ),
        ));
        
        
    }
}