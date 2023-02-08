<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'created_at' => '2023-01-31 18:05:22',
                'id' => 1,
                'product_id' => 1,
                'updated_at' => '2023-01-31 18:05:22',
            ),
            1 => 
            array (
                'category_id' => 2,
                'created_at' => '2023-01-31 18:05:49',
                'id' => 2,
                'product_id' => 2,
                'updated_at' => '2023-01-31 18:05:49',
            ),
            2 => 
            array (
                'category_id' => 3,
                'created_at' => '2023-01-31 18:06:09',
                'id' => 3,
                'product_id' => 3,
                'updated_at' => '2023-01-31 18:06:09',
            ),
            3 => 
            array (
                'category_id' => 4,
                'created_at' => '2023-01-31 18:06:30',
                'id' => 4,
                'product_id' => 4,
                'updated_at' => '2023-01-31 18:06:30',
            ),
            4 => 
            array (
                'category_id' => 5,
                'created_at' => '2023-01-31 18:06:49',
                'id' => 5,
                'product_id' => 5,
                'updated_at' => '2023-01-31 18:06:49',
            ),
        ));
        
        
    }
}