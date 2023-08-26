<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 2,
                'model_type' => 'App\\Models\\Service',
                'model_id' => 16,
                'uuid' => 'a67af3ae-761b-4f3e-8071-f6c40c07c5d8',
                'collection_name' => 'services',
                'name' => 'Pesquisa de cardiologista em bh',
                'file_name' => 'advogado-direito-trabalhista.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 300384,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2023-08-25 05:29:10',
                'updated_at' => '2023-08-25 05:29:10',
            ),
        ));
        
        
    }
}