<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kadın',
                'slug' => 'kadin',
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2023-01-31 15:25:05',
                'updated_at' => '2023-01-31 15:25:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Erkek',
                'slug' => 'erkek',
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2023-01-31 15:25:05',
                'updated_at' => '2023-01-31 15:25:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Çocuk',
                'slug' => 'cocuk',
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2023-01-31 15:25:05',
                'updated_at' => '2023-01-31 15:25:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Aksesuar',
                'slug' => 'aksesuar',
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2023-01-31 15:25:05',
                'updated_at' => '2023-01-31 15:25:05',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Çanta',
                'slug' => 'canta',
                'status' => 1,
                'parent_id' => NULL,
                'created_at' => '2023-01-31 15:25:05',
                'updated_at' => '2023-01-31 15:25:05',
            ),
        ));
        
        
    }
}