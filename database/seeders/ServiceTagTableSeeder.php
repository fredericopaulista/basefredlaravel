<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_tag')->delete();
        
        \DB::table('service_tag')->insert(array (
            0 => 
            array (
                'service_id' => 16,
                'tag_id' => 2,
            ),
        ));
        
        
    }
}