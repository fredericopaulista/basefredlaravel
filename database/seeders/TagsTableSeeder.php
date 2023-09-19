<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Advogado Familiar',
                'slug' => 'advogado-familiar',
                'briefDescription' => NULL,
                'body' => 'advogado familiar',
                'visible' => 1,
                'created_at' => '2023-09-10 01:07:14',
                'updated_at' => '2023-09-10 01:07:14',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => '  Escritório De Advocacia Familiar',
                'slug' => 'escritorio-de-advocacia-familiar',
                'briefDescription' => NULL,
                'body' => '  escritório de advocacia familiar',
                'visible' => 1,
                'created_at' => '2023-09-10 01:07:14',
                'updated_at' => '2023-09-10 01:07:14',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => ' Advogada De Familia',
                'slug' => 'advogada-de-familia',
                'briefDescription' => NULL,
                'body' => ' advogada de familia',
                'visible' => 1,
                'created_at' => '2023-09-10 01:07:14',
                'updated_at' => '2023-09-10 01:07:14',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => ' Direito De Familia',
                'slug' => 'direito-de-familia',
                'briefDescription' => NULL,
                'body' => ' direito de familia',
                'visible' => 1,
                'created_at' => '2023-09-10 01:07:14',
                'updated_at' => '2023-09-10 01:07:14',
            ),
        ));
        
        
    }
}