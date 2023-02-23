<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSeosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_seos')->delete();
        
        \DB::table('site_seos')->insert(array (
            0 => 
            array (
                'created_at' => '2023-02-01 21:36:16',
                'id' => 1,
                'site_description' => NULL,
                'site_google_verify' => NULL,
                'site_keywords' => 'betuls,taki,jewelry,aksesuar',
                'site_robots' => NULL,
                'site_rss' => NULL,
                'site_sitemap' => NULL,
                'site_title' => 'Betuls Accessories & Jewelry',
                'updated_at' => '2023-02-02 00:12:07',
            ),
        ));
        
        
    }
}