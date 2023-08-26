<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryServiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_service')->delete();
        
        \DB::table('category_service')->insert(array (
            0 => 
            array (
                'category_id' => 2,
                'service_id' => 16,
            ),
        ));
        
        
    }
}