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
                'id' => 2,
                'name' => 'tag advogado trabalhista',
                'slug' => 'tag-advogado-trabalhista',
                'briefDescription' => 'uma breve descrição advogado trabalhista',
                'body' => 'tag advogado trabalhista',
                'created_at' => '2023-08-25 04:42:19',
                'updated_at' => '2023-08-25 04:42:19',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => ' tag2 advogado trabalhista',
                'slug' => 'tag2-advogado-trabalhista',
                'briefDescription' => 'uma breve descrição advogado trabalhista 2',
                'body' => ' tag2 advogado trabalhista',
                'created_at' => '2023-08-25 04:42:19',
                'updated_at' => '2023-08-25 04:42:19',
            ),
        ));


    }
}
