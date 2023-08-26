<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Customizations')->delete();
        
        \DB::table('Customizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bg_header_color' => '#000000',
                'nav_text_color' => '#ffffff',
                'bg_footer_color' => '#000000',
                'created_at' => '2023-08-25 01:42:09',
                'updated_at' => '2023-08-25 01:50:51',
            ),
        ));
        
        
    }
}