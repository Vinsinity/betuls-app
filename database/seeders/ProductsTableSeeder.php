<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'brand_id' => 2,
                'created_at' => '2023-01-31 18:05:22',
                'detail' => 'asdadsasdas a das da sdasdad',
                'id' => 1,
                'name' => 'Deneme 1',
                'price' => '1122.00',
                'slug' => 'deneme-1',
                'updated_at' => '2023-01-31 18:05:22',
            ),
            1 => 
            array (
                'brand_id' => 1,
                'created_at' => '2023-01-31 18:05:49',
                'detail' => 'Das a das das da isa sda sd asd asd ad a sd',
                'id' => 2,
                'name' => 'Dadddas',
                'price' => '2350.00',
                'slug' => 'dadddas',
                'updated_at' => '2023-01-31 18:05:49',
            ),
            2 => 
            array (
                'brand_id' => 3,
                'created_at' => '2023-01-31 18:06:09',
                'detail' => 'asd aed as asa daed asd ac arc',
                'id' => 3,
                'name' => 'De Asda d cad',
                'price' => '1999.00',
                'slug' => 'de-asda-d-cad',
                'updated_at' => '2023-01-31 18:06:09',
            ),
            3 => 
            array (
                'brand_id' => 4,
                'created_at' => '2023-01-31 18:06:30',
                'detail' => 'ada asd a da sda. as da dua d a',
                'id' => 4,
                'name' => 'Hasoso',
                'price' => '1299.00',
                'slug' => 'hasoso',
                'updated_at' => '2023-01-31 18:06:30',
            ),
            4 => 
            array (
                'brand_id' => 5,
                'created_at' => '2023-01-31 18:06:49',
                'detail' => 'asd asd awdasa da ada as acas',
                'id' => 5,
                'name' => 'Head asjd ashy washed',
                'price' => '1699.00',
                'slug' => 'head-asjd-ashy-washed',
                'updated_at' => '2023-01-31 18:06:49',
            ),
        ));
        
        
    }
}