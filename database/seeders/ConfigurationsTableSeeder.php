<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('configurations')->delete();

        \DB::table('configurations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'company' => 'Empresa X',
                'segment' => 'Segmento A',
                'slug' => 'segmento-a',
                'city' => 'Belo Horizonte',
                'city_slug' => 'belo-horizonte',
                'address' => 'Endereço Completo',
                'neighborhood' => 'Bairro',
                'cep' => '33333-333',
                'state' => NULL,
                'country' => NULL,
                'phone' => '(xx) xxxx-xxxx',
                'whatsapp' => '55XX',
                'email' => 'email@email.com.br',
                'logoheader' => 'site/img/ezpGZYzUo8RPMB52jp71aHTCKc3ZI4RCODVhsi7q.jpg',
                'logofooter' => 'site/img/42dl54wHRF8EeZr3q8GCRdlXo3oRcvwbUtXksOAH.jpg',
                'banner_gif' => 'site/img/42dl54wHRF8EeZr3q8GCRdlXo3oRcvwbUtXksOAH.jpg',
                'image' => 'site/img/R8Z6aTOYLp6gu7XbIrl8kc4xiZc73pV8e7Iu3M6h.jpg',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://www.twitter.com',
                'linkedin' => 'https://www.linkedin.com',
                'youtube' => 'https://www.youtube.com',
                'created_at' => '2023-08-08 22:49:33',
                'updated_at' => '2023-08-08 22:51:44',
            ),
        ));


    }
}
