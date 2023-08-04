<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Belo Horizonte',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.922732;-43.945095\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte\' />
<meta name=\'',
                'slug' => 'belo-horizonte',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Belo Horizonte Aarão Reis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Aarão Reis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8453732;-43.9254356\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Aarão Reis M',
                'slug' => 'belo-horizonte-aarao-reis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Belo Horizonte Acaba Mundo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Acaba Mundo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9611994;-43.9291724\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Acaba Mundo',
                'slug' => 'belo-horizonte-acaba-mundo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Belo Horizonte Acaiaca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Acaiaca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8460174;-43.8929070\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Acaiaca MG\' />
',
                'slug' => 'belo-horizonte-acaiaca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Belo Horizonte Adelaide MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Adelaide MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9016787;-43.9767311\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Adelaide MG\' /',
                'slug' => 'belo-horizonte-adelaide-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Belo Horizonte Aeroporto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Aeroporto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8543645;-43.9546051\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Aeroporto MG\'',
                'slug' => 'belo-horizonte-aeroporto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
            'name' => 'Belo Horizonte Águas Claras (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Águas Claras (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0102697;-44.0223064\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-aguas-claras-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Belo Horizonte Alípio de Melo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alípio de Melo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8981533;-44.0032210\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alípio d',
                'slug' => 'belo-horizonte-alipio-de-melo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Belo Horizonte Alpes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alpes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9517745;-43.9981867\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alpes MG\' />
',
                'slug' => 'belo-horizonte-alpes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Belo Horizonte Alta Tensão 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alta Tensão 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8324637;-43.9286003\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alta Tens',
                'slug' => 'belo-horizonte-alta-tensao-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Belo Horizonte Alto Barroca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alto Barroca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9684451;-44.2141566\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alto Barro',
                'slug' => 'belo-horizonte-alto-barroca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Belo Horizonte Alto Caiçaras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alto Caiçaras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8990377;-43.9767438\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alto Caiç',
                'slug' => 'belo-horizonte-alto-caicaras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Belo Horizonte Alto dos Pinheiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alto dos Pinheiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9344040;-44.0002720\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alto',
                'slug' => 'belo-horizonte-alto-dos-pinheiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Belo Horizonte Alto Vera Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Alto Vera Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.5955116;-46.9318519\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Alto Ver',
                'slug' => 'belo-horizonte-alto-vera-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Belo Horizonte Álvaro Camargos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Álvaro Camargos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9178009;-44.0076103\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Álvaro ',
                'slug' => 'belo-horizonte-alvaro-camargos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Belo Horizonte Anchieta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Anchieta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9494624;-43.9226091\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Anchieta MG\' /',
                'slug' => 'belo-horizonte-anchieta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Belo Horizonte Aparecida MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Aparecida MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9524048;-43.9666004\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Aparecida MG\'',
                'slug' => 'belo-horizonte-aparecida-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Belo Horizonte Aparecida Sétima Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Aparecida Sétima Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8931394;-43.9596847\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-aparecida-setima-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Belo Horizonte Ápia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ápia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9523958;-43.9547535\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ápia MG\' />
',
                'slug' => 'belo-horizonte-apia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Belo Horizonte Apolônia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Apolônia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9517745;-43.9981867\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Apolônia MG\' /',
                'slug' => 'belo-horizonte-apolonia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Belo Horizonte Araguaia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Araguaia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9932377;-44.0061538\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Araguaia MG\' /',
                'slug' => 'belo-horizonte-araguaia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Belo Horizonte Área Rural de Belo Horizonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Área Rural de Belo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                'slug' => 'belo-horizonte-area-rural-de-belo-horizonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
            'name' => 'Belo Horizonte Átila de Paiva (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Átila de Paiva (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9777232;-44.0304148\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                'slug' => 'belo-horizonte-atila-de-paiva-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Belo Horizonte Baleia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Baleia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9248548;-43.9229684\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Baleia MG\' />
',
                'slug' => 'belo-horizonte-baleia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
            'name' => 'Belo Horizonte Bandeirantes (Pampulha) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bandeirantes (Pampulha) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8636960;-43.9921061\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-bandeirantes-pampulha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Belo Horizonte Barão Homem de Melo 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Barão Homem de Melo 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8408704;-43.9893046\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte B',
                'slug' => 'belo-horizonte-barao-homem-de-melo-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Belo Horizonte Barreiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Barreiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9820762;-44.0308278\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Barreiro MG\' /',
                'slug' => 'belo-horizonte-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Belo Horizonte Barro Preto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Barro Preto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9253421;-43.9505765\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Barro Preto',
                'slug' => 'belo-horizonte-barro-preto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Belo Horizonte Barroca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Barroca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9308871;-43.9662932\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Barroca MG\' />
',
                'slug' => 'belo-horizonte-barroca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Belo Horizonte Beija Flor MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Beija Flor MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8347351;-43.9886106\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Beija Flor M',
                'slug' => 'belo-horizonte-beija-flor-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Belo Horizonte Beira-Linha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Beira-Linha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8124271;-43.9319999\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Beira-Linha',
                'slug' => 'belo-horizonte-beira-linha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Belo Horizonte Belmonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Belmonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9954957;-43.9638762\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Belmonte MG\' /',
                'slug' => 'belo-horizonte-belmonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Belo Horizonte Belvedere MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Belvedere MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9661223;-43.9380244\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Belvedere MG\'',
                'slug' => 'belo-horizonte-belvedere-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
            'name' => 'Belo Horizonte Bernadete (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bernadete (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9565744;-44.0027106\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Be',
                'slug' => 'belo-horizonte-bernadete-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Belo Horizonte Betânia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Betânia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9605752;-43.9930506\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Betânia MG\' />
',
                'slug' => 'belo-horizonte-betania-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Belo Horizonte Biquinhas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Biquinhas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9212554;-43.9589885\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Biquinhas MG\'',
                'slug' => 'belo-horizonte-biquinhas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Belo Horizonte Bispo de Maura MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bispo de Maura MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8244098;-43.9593168\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Bispo de',
                'slug' => 'belo-horizonte-bispo-de-maura-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Belo Horizonte Boa Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Boa Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9458879;-43.9624971\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Boa Esper',
                'slug' => 'belo-horizonte-boa-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Belo Horizonte Boa Viagem MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Boa Viagem MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9249114;-43.9351549\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Boa Viagem M',
                'slug' => 'belo-horizonte-boa-viagem-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Belo Horizonte Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8908558;-43.8937247\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Boa Vista MG\'',
                'slug' => 'belo-horizonte-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Belo Horizonte Bom Jesus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bom Jesus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8965554;-43.9547776\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Bom Jesus MG\'',
                'slug' => 'belo-horizonte-bom-jesus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Belo Horizonte Bonfim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bonfim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9125986;-43.9503982\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Bonfim MG\' />
',
                'slug' => 'belo-horizonte-bonfim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
            'name' => 'Belo Horizonte Bonsucesso (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Bonsucesso (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9884925;-43.9893543\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte B',
                'slug' => 'belo-horizonte-bonsucesso-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
            'name' => 'Belo Horizonte Brasil Industrial (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Brasil Industrial (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0008047;-44.0187904\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                'slug' => 'belo-horizonte-brasil-industrial-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Belo Horizonte Braúnas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Braúnas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8552351;-44.0100478\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Braúnas MG\' />
',
                'slug' => 'belo-horizonte-braunas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Belo Horizonte Buritis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Buritis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9823722;-43.9696585\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Buritis MG\' />
',
                'slug' => 'belo-horizonte-buritis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Belo Horizonte Cabana do Pai Tomás MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cabana do Pai Tomás MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9446753;-44.0004087\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cab',
                'slug' => 'belo-horizonte-cabana-do-pai-tomas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Belo Horizonte Cachoeirinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cachoeirinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8934633;-43.9486891\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cachoeirin',
                'slug' => 'belo-horizonte-cachoeirinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Belo Horizonte Caetano Furquim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Caetano Furquim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9163369;-43.9341448\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Caetano',
                'slug' => 'belo-horizonte-caetano-furquim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Belo Horizonte Caiçara-Adelaide MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Caiçara-Adelaide MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9013048;-43.9808108\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Caiçar',
                'slug' => 'belo-horizonte-caicara-adelaide-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Belo Horizonte Caiçaras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Caiçaras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9082025;-43.9688214\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Caiçaras MG\' /',
                'slug' => 'belo-horizonte-caicaras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Belo Horizonte Calafate MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Calafate MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9263640;-43.9766107\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Calafate MG\' /',
                'slug' => 'belo-horizonte-calafate-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Belo Horizonte Califórnia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Califórnia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9533970;-43.9342210\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Califórnia M',
                'slug' => 'belo-horizonte-california-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Belo Horizonte Camargos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Camargos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Camargos MG\' /',
                'slug' => 'belo-horizonte-camargos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Belo Horizonte Campo Alegre MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Campo Alegre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8293255;-43.9468924\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Campo Aleg',
                'slug' => 'belo-horizonte-campo-alegre-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Belo Horizonte Campus UFMG MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Campus UFMG MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8715242;-43.9550192\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Campus UFMG',
                'slug' => 'belo-horizonte-campus-ufmg-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Belo Horizonte Canaã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Canaã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7942152;-43.9484235\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Canaã MG\' />
',
                'slug' => 'belo-horizonte-canaa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Belo Horizonte Canadá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Canadá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8280397;-44.0131034\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Canadá MG\' />
',
                'slug' => 'belo-horizonte-canada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Belo Horizonte Candelária MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Candelária MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8102505;-43.9714182\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Candelária M',
                'slug' => 'belo-horizonte-candelaria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Belo Horizonte Capitão Eduardo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Capitão Eduardo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8318931;-43.8866057\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Capitão',
                'slug' => 'belo-horizonte-capitao-eduardo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
            'name' => 'Belo Horizonte Capitão Eduardo (Bairro Montes Claros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Capitão Eduardo (Bairro Montes Claros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'belo-horizonte-capitao-eduardo-bairro-montes-claros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
            'name' => 'Belo Horizonte Cardoso (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cardoso (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0039178;-44.0063824\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Card',
                'slug' => 'belo-horizonte-cardoso-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Belo Horizonte Carlos Prates MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Carlos Prates MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9131393;-43.9479756\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Carlos Pr',
                'slug' => 'belo-horizonte-carlos-prates-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Belo Horizonte Carmo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Carmo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9404247;-43.9310849\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Carmo MG\' />
',
                'slug' => 'belo-horizonte-carmo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Belo Horizonte Casa Branca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Casa Branca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8953069;-43.8869123\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Casa Branca',
                'slug' => 'belo-horizonte-casa-branca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
            'name' => 'Belo Horizonte Castanheira (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Castanheira (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9978704;-44.0333461\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-castanheira-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Belo Horizonte Castelo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Castelo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8728677;-43.9954211\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Castelo MG\' />
',
                'slug' => 'belo-horizonte-castelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
            'name' => 'Belo Horizonte CDI Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte CDI Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9994296;-44.0413302\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte C',
                'slug' => 'belo-horizonte-cdi-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Belo Horizonte Cenáculo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cenáculo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8044913;-43.9614018\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cenáculo MG\' /',
                'slug' => 'belo-horizonte-cenaculo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Belo Horizonte Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9171085;-43.9337089\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Centro MG\' />
',
                'slug' => 'belo-horizonte-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Belo Horizonte Céu Azul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Céu Azul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8285105;-43.9962656\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Céu Azul MG\' /',
                'slug' => 'belo-horizonte-ceu-azul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Belo Horizonte Cidade Jardim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cidade Jardim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9412029;-43.9490566\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cidade Ja',
                'slug' => 'belo-horizonte-cidade-jardim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Belo Horizonte Cidade Jardim Taquaril MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cidade Jardim Taquaril MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9322509;-43.8848198\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-cidade-jardim-taquaril-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Belo Horizonte Cidade Nova MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cidade Nova MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cidade Nova',
                'slug' => 'belo-horizonte-cidade-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Belo Horizonte Cinquentenário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cinquentenário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9528794;-43.9811528\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cinquent',
                'slug' => 'belo-horizonte-cinquentenario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Belo Horizonte Colégio Batista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Colégio Batista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9057291;-43.9355920\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Colégio',
                'slug' => 'belo-horizonte-colegio-batista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Belo Horizonte Comiteco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Comiteco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9513928;-43.9201351\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Comiteco MG\' /',
                'slug' => 'belo-horizonte-comiteco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Belo Horizonte Concórdia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Concórdia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8985971;-43.9411756\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Concórdia MG\'',
                'slug' => 'belo-horizonte-concordia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Belo Horizonte Cônego Pinheiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cônego Pinheiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9195544;-43.9093703\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cônego ',
                'slug' => 'belo-horizonte-conego-pinheiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Belo Horizonte Confisco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Confisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Confisco MG\' /',
                'slug' => 'belo-horizonte-confisco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
            'name' => 'Belo Horizonte Conjunto Ademar Maldonado (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Ademar Maldonado (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9825738;-44.0252260\' />
<meta name=\'geo.region\' content=\'BR-B',
                'slug' => 'belo-horizonte-conjunto-ademar-maldonado-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
            'name' => 'Belo Horizonte Conjunto Bonsucesso (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Bonsucesso (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9775954;-43.9918554\' />
<meta name=\'geo.region\' content=\'BR-Belo Ho',
                'slug' => 'belo-horizonte-conjunto-bonsucesso-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Belo Horizonte Conjunto Califórnia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Califórnia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9193172;-44.0118491\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Con',
                'slug' => 'belo-horizonte-conjunto-california-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Belo Horizonte Conjunto Celso Machado MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Celso Machado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8837014;-44.0084862\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-conjunto-celso-machado-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
            'name' => 'Belo Horizonte Conjunto Habitacional Vale do Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Habitacional Vale do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0073143;-44.0383404\' />
<meta name=\'geo.region\' co',
                'slug' => 'belo-horizonte-conjunto-habitacional-vale-do-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Belo Horizonte Conjunto Jardim Filadélfia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Jardim Filadélfia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9078548;-44.0096733\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizo',
                'slug' => 'belo-horizonte-conjunto-jardim-filadelfia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
            'name' => 'Belo Horizonte Conjunto Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0043746;-44.0426156\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizo',
                'slug' => 'belo-horizonte-conjunto-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Belo Horizonte Conjunto Lagoa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Lagoa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8666222;-43.9969946\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Conjunto',
                'slug' => 'belo-horizonte-conjunto-lagoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Belo Horizonte Conjunto Minascaixa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Minascaixa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-22.2398440;-45.9312583\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Con',
                'slug' => 'belo-horizonte-conjunto-minascaixa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Belo Horizonte Conjunto Novo Dom Bosco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Novo Dom Bosco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9173268;-44.0086860\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-conjunto-novo-dom-bosco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Belo Horizonte Conjunto Paulo 6 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Paulo 6 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8312515;-43.8837944\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Conjun',
                'slug' => 'belo-horizonte-conjunto-paulo-6-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Belo Horizonte Conjunto Santa Maria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Santa Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Co',
                'slug' => 'belo-horizonte-conjunto-santa-maria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Belo Horizonte Conjunto Taquaril MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Taquaril MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9387067;-44.0345752\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Conju',
                'slug' => 'belo-horizonte-conjunto-taquaril-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
            'name' => 'Belo Horizonte Conjunto Túnel Ibirité (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Conjunto Túnel Ibirité (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9874400;-44.0466568\' />
<meta name=\'geo.region\' content=\'BR-Belo',
                'slug' => 'belo-horizonte-conjunto-tunel-ibirite-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Belo Horizonte Copacabana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Copacabana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8375606;-43.9822591\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Copacabana M',
                'slug' => 'belo-horizonte-copacabana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Belo Horizonte Coqueiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Coqueiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9020622;-44.0203031\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Coqueiros MG\'',
                'slug' => 'belo-horizonte-coqueiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Belo Horizonte Coração de Jesus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Coração de Jesus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9083531;-43.8885548\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Coraçã',
                'slug' => 'belo-horizonte-coracao-de-jesus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Belo Horizonte Coração Eucarístico MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Coração Eucarístico MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9259957;-43.9897719\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cor',
                'slug' => 'belo-horizonte-coracao-eucaristico-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
            'name' => 'Belo Horizonte Corumbiara (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Corumbiara (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0094783;-44.0138014\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte C',
                'slug' => 'belo-horizonte-corumbiara-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Belo Horizonte Cruzeiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Cruzeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9390536;-43.9263425\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Cruzeiro MG\' /',
                'slug' => 'belo-horizonte-cruzeiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Belo Horizonte Delta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Delta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8956569;-43.9670390\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Delta MG\' />
',
                'slug' => 'belo-horizonte-delta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
            'name' => 'Belo Horizonte Diamante (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Diamante (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9900469;-44.0189364\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dia',
                'slug' => 'belo-horizonte-diamante-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
            'name' => 'Belo Horizonte Distrito Industrial do Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Distrito Industrial do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'',
                'slug' => 'belo-horizonte-distrito-industrial-do-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
            'name' => 'Belo Horizonte Distrito Industrial do Jatobá (Camilo Torres) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Distrito Industrial do Jatobá (Camilo Torres) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8018210;-43.9915666\' />
<meta name=\'geo.region\' cont',
                'slug' => 'belo-horizonte-distrito-industrial-do-jatoba-camilo-torres-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
            'name' => 'Belo Horizonte Distrito Industrial do Jatobá (Eliana Silva) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Distrito Industrial do Jatobá (Eliana Silva) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8442580;-44.0064653\' />
<meta name=\'geo.region\' conte',
                'slug' => 'belo-horizonte-distrito-industrial-do-jatoba-eliana-silva-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
            'name' => 'Belo Horizonte Distrito Industrial do Jatobá (Irmã Doroty) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Distrito Industrial do Jatobá (Irmã Doroty) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8257405;-43.8995217\' />
<meta name=\'geo.region\' conten',
                'slug' => 'belo-horizonte-distrito-industrial-do-jatoba-irma-doroty-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Belo Horizonte Dom Bosco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Dom Bosco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9142989;-44.0001202\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dom Bosco MG\'',
                'slug' => 'belo-horizonte-dom-bosco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Belo Horizonte Dom Cabral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Dom Cabral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9214976;-43.9966680\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dom Cabral M',
                'slug' => 'belo-horizonte-dom-cabral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Belo Horizonte Dom Joaquim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Dom Joaquim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8782558;-43.9148280\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dom Joaquim',
                'slug' => 'belo-horizonte-dom-joaquim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Belo Horizonte Dom Silvério MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Dom Silvério MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8534066;-43.9036620\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dom Silvér',
                'slug' => 'belo-horizonte-dom-silverio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Belo Horizonte Dona Clara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Dona Clara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8613347;-43.9371587\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Dona Clara M',
                'slug' => 'belo-horizonte-dona-clara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Belo Horizonte Engenho Nogueira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Engenho Nogueira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8912919;-43.9778638\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Engenh',
                'slug' => 'belo-horizonte-engenho-nogueira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Belo Horizonte Ermelinda MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ermelinda MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8844008;-43.9626521\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ermelinda MG\'',
                'slug' => 'belo-horizonte-ermelinda-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
            'name' => 'Belo Horizonte Ernesto do Nascimento(Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ernesto do Nascimento(Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0084044;-44.0319753\' />
<meta name=\'geo.region\' content=\'BR-Belo H',
                'slug' => 'belo-horizonte-ernesto-do-nascimento-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
            'name' => 'Belo Horizonte Esperança (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Esperança (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9932349;-43.9891446\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Es',
                'slug' => 'belo-horizonte-esperanca-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Belo Horizonte Esplanada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Esplanada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9061833;-43.9019726\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Esplanada MG\'',
                'slug' => 'belo-horizonte-esplanada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Belo Horizonte Estoril MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Estoril MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9588911;-43.9622129\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Estoril MG\' />
',
                'slug' => 'belo-horizonte-estoril-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Belo Horizonte Estrela MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Estrela MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9335581;-43.9356615\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Estrela MG\' />
',
                'slug' => 'belo-horizonte-estrela-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Belo Horizonte Estrela do Oriente MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Estrela do Oriente MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9645706;-43.9895015\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Estr',
                'slug' => 'belo-horizonte-estrela-do-oriente-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Belo Horizonte Etelvina Carneiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Etelvina Carneiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8115512;-43.9323500\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Etelv',
                'slug' => 'belo-horizonte-etelvina-carneiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Belo Horizonte Europa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Europa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8035864;-43.9660318\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Europa MG\' />
',
                'slug' => 'belo-horizonte-europa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Belo Horizonte Eymard MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Eymard MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8637935;-43.9182628\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Eymard MG\' />
',
                'slug' => 'belo-horizonte-eymard-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Belo Horizonte Fazendinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Fazendinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9316840;-43.9049065\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Fazendinha M',
                'slug' => 'belo-horizonte-fazendinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Belo Horizonte Fernão Dias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Fernão Dias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8685566;-43.9175936\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Fernão Dias',
                'slug' => 'belo-horizonte-fernao-dias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
            'name' => 'Belo Horizonte Flávio de Oliveira (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Flávio de Oliveira (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0015676;-44.0030688\' />
<meta name=\'geo.region\' content=\'BR-Belo Hor',
                'slug' => 'belo-horizonte-flavio-de-oliveira-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
            'name' => 'Belo Horizonte Flávio Marques Lisboa (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Flávio Marques Lisboa (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9928640;-43.9997684\' />
<meta name=\'geo.region\' content=\'BR-Belo ',
                'slug' => 'belo-horizonte-flavio-marques-lisboa-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Belo Horizonte Floramar MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Floramar MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8394152;-43.9318353\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Floramar MG\' /',
                'slug' => 'belo-horizonte-floramar-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Belo Horizonte Floresta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Floresta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9195048;-43.9300485\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Floresta MG\' /',
                'slug' => 'belo-horizonte-floresta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Belo Horizonte Frei Leopoldo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Frei Leopoldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8074266;-43.9384388\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Frei Leop',
                'slug' => 'belo-horizonte-frei-leopoldo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Belo Horizonte Funcionários MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Funcionários MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9285347;-43.9329118\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Funcionári',
                'slug' => 'belo-horizonte-funcionarios-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Belo Horizonte Gameleira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Gameleira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9683958;-44.2142169\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Gameleira MG\'',
                'slug' => 'belo-horizonte-gameleira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Belo Horizonte Garças MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Garças MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8335523;-44.0001662\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Garças MG\' />
',
                'slug' => 'belo-horizonte-garcas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Belo Horizonte Glória MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Glória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9016354;-44.0160719\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Glória MG\' />
',
                'slug' => 'belo-horizonte-gloria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Belo Horizonte Goiânia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Goiânia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8604942;-43.9034835\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Goiânia MG\' />
',
                'slug' => 'belo-horizonte-goiania-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Belo Horizonte Graça MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Graça MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8983417;-43.9327959\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Graça MG\' />
',
                'slug' => 'belo-horizonte-graca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Belo Horizonte Grajaú MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Grajaú MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9385362;-43.9656135\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Grajaú MG\' />
',
                'slug' => 'belo-horizonte-grajau-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Belo Horizonte Granja de Freitas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Granja de Freitas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7628713;-43.9417843\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Granj',
                'slug' => 'belo-horizonte-granja-de-freitas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Belo Horizonte Granja Werneck MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Granja Werneck MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8277632;-43.9083275\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Granja W',
                'slug' => 'belo-horizonte-granja-werneck-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Belo Horizonte Grotinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Grotinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8491011;-43.8915434\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Grotinha MG\' /',
                'slug' => 'belo-horizonte-grotinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Belo Horizonte Guarani MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Guarani MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8430566;-43.9196157\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Guarani MG\' />
',
                'slug' => 'belo-horizonte-guarani-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Belo Horizonte Gutierrez MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Gutierrez MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9365278;-43.9571877\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Gutierrez MG\'',
                'slug' => 'belo-horizonte-gutierrez-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Belo Horizonte Havaí MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Havaí MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Havaí MG\' />
',
                'slug' => 'belo-horizonte-havai-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Belo Horizonte Heliópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Heliópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8404244;-43.9380982\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Heliópolis M',
                'slug' => 'belo-horizonte-heliopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Belo Horizonte Horto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Horto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9091792;-43.9192904\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Horto MG\' />
',
                'slug' => 'belo-horizonte-horto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Belo Horizonte Horto Florestal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Horto Florestal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9029246;-43.9127577\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Horto F',
                'slug' => 'belo-horizonte-horto-florestal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Belo Horizonte Imbaúbas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Imbaúbas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9443426;-43.9920767\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Imbaúbas MG\' /',
                'slug' => 'belo-horizonte-imbaubas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Belo Horizonte Inconfidência MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Inconfidência MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9049078;-43.9989925\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Inconfidê',
                'slug' => 'belo-horizonte-inconfidencia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Belo Horizonte Indaiá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Indaiá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8664267;-43.9532335\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Indaiá MG\' />
',
                'slug' => 'belo-horizonte-indaia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
            'name' => 'Belo Horizonte Independência (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Independência (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0196563;-44.0259471\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-independencia-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
            'name' => 'Belo Horizonte Indústrias I (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Indústrias I (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9661208;-43.9977408\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-industrias-i-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Belo Horizonte Indústrias 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Indústrias 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9579393;-44.0005330\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Indústrias',
                'slug' => 'belo-horizonte-industrias-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Belo Horizonte Ipê MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ipê MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8684888;-43.9067778\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ipê MG\' />
',
                'slug' => 'belo-horizonte-ipe-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Belo Horizonte Ipiranga MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ipiranga MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8849437;-43.9492555\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ipiranga MG\' /',
                'slug' => 'belo-horizonte-ipiranga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
            'name' => 'Belo Horizonte Itaipu (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Itaipu (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9897262;-44.0507576\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Itaip',
                'slug' => 'belo-horizonte-itaipu-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Belo Horizonte Itapoã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Itapoã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Itapoã MG\' />
',
                'slug' => 'belo-horizonte-itapoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Belo Horizonte Itatiaia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Itatiaia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8685594;-44.0142353\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Itatiaia MG\' /',
                'slug' => 'belo-horizonte-itatiaia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Belo Horizonte Jaqueline MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jaqueline MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8017591;-43.9367256\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jaqueline MG\'',
                'slug' => 'belo-horizonte-jaqueline-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Belo Horizonte Jaraguá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jaraguá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8578345;-43.9484616\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jaraguá MG\' />
',
                'slug' => 'belo-horizonte-jaragua-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Belo Horizonte Jardim Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9043305;-43.9855940\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim ',
                'slug' => 'belo-horizonte-jardim-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Belo Horizonte Jardim América MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim América MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9445778;-43.9731329\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim A',
                'slug' => 'belo-horizonte-jardim-america-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Belo Horizonte Jardim Atlântico MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Atlântico MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8444963;-43.9814297\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim',
                'slug' => 'belo-horizonte-jardim-atlantico-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
            'name' => 'Belo Horizonte Jardim dos Comerciários (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim dos Comerciários (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9747718;-44.0703711\' />
<meta name=\'geo.region\' content=\'BR-B',
                'slug' => 'belo-horizonte-jardim-dos-comerciarios-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Belo Horizonte Jardim Felicidade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Felicidade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9551291;-43.9247983\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardi',
                'slug' => 'belo-horizonte-jardim-felicidade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Belo Horizonte Jardim Filadélfia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Filadélfia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9182962;-44.0160193\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardi',
                'slug' => 'belo-horizonte-jardim-filadelfia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Belo Horizonte Jardim Guanabara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Guanabara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8317747;-43.9360063\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim',
                'slug' => 'belo-horizonte-jardim-guanabara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Belo Horizonte Jardim Leblon MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Leblon MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8226376;-43.9896201\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim Le',
                'slug' => 'belo-horizonte-jardim-leblon-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Belo Horizonte Jardim Montanhês MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Montanhês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9071215;-43.9800839\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim',
                'slug' => 'belo-horizonte-jardim-montanhes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Belo Horizonte Jardim Pirineus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Pirineus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9248779;-43.8906510\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim ',
                'slug' => 'belo-horizonte-jardim-pirineus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Belo Horizonte Jardim São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9017932;-43.9953651\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim ',
                'slug' => 'belo-horizonte-jardim-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Belo Horizonte Jardim Vitória MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardim Vitória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardim V',
                'slug' => 'belo-horizonte-jardim-vitoria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Belo Horizonte Jardinópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jardinópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9416155;-44.0044847\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jardinópol',
                'slug' => 'belo-horizonte-jardinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
            'name' => 'Belo Horizonte Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9892305;-44.0541767\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jatob',
                'slug' => 'belo-horizonte-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
            'name' => 'Belo Horizonte João Paulo II (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte João Paulo II (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9825453;-44.0339340\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-joao-paulo-ii-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Belo Horizonte João Pinheiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte João Pinheiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9301651;-43.9945246\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte João Pinh',
                'slug' => 'belo-horizonte-joao-pinheiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Belo Horizonte Jonas Veiga MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Jonas Veiga MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9212618;-43.8926890\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Jonas Veiga',
                'slug' => 'belo-horizonte-jonas-veiga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Belo Horizonte Juliana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Juliana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8114704;-43.9401832\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Juliana MG\' />
',
                'slug' => 'belo-horizonte-juliana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Belo Horizonte Lagoa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lagoa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8084984;-43.9980341\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Lagoa MG\' />
',
                'slug' => 'belo-horizonte-lagoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Belo Horizonte Lagoinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lagoinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9100895;-43.9425163\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Lagoinha MG\' /',
                'slug' => 'belo-horizonte-lagoinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
            'name' => 'Belo Horizonte Lagoinha Leblon (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lagoinha Leblon (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8059141;-43.9944536\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                'slug' => 'belo-horizonte-lagoinha-leblon-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Belo Horizonte Lajedo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lajedo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8333054;-43.9144900\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Lajedo MG\' />
',
                'slug' => 'belo-horizonte-lajedo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Belo Horizonte Leonina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Leonina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Leonina MG\' />
',
                'slug' => 'belo-horizonte-leonina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Belo Horizonte Letícia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Letícia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8080692;-43.9806539\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Letícia MG\' />
',
                'slug' => 'belo-horizonte-leticia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Belo Horizonte Liberdade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Liberdade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8588859;-43.9560947\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Liberdade MG\'',
                'slug' => 'belo-horizonte-liberdade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
            'name' => 'Belo Horizonte Lindéia (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lindéia (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9777739;-44.0524146\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Lind',
                'slug' => 'belo-horizonte-lindeia-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Belo Horizonte Lourdes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Lourdes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9286390;-43.9371400\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Lourdes MG\' />
',
                'slug' => 'belo-horizonte-lourdes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Belo Horizonte Luxemburgo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Luxemburgo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9566815;-43.9305466\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Luxemburgo M',
                'slug' => 'belo-horizonte-luxemburgo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Belo Horizonte Madre Gertrudes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Madre Gertrudes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9490026;-44.0068174\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Madre G',
                'slug' => 'belo-horizonte-madre-gertrudes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Belo Horizonte Madre Gertrudes 3 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Madre Gertrudes 3 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9764843;-43.9884208\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Madre',
                'slug' => 'belo-horizonte-madre-gertrudes-3-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Belo Horizonte Madre Gertrudes 5 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Madre Gertrudes 5 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9757918;-43.9885797\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Madre',
                'slug' => 'belo-horizonte-madre-gertrudes-5-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Belo Horizonte Madri MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Madri MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Madri MG\' />
',
                'slug' => 'belo-horizonte-madri-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
            'name' => 'Belo Horizonte Mala e Cuia (Sion) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mala e Cuia (Sion) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mala',
                'slug' => 'belo-horizonte-mala-e-cuia-sion-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Belo Horizonte Manacás MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Manacás MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8971007;-43.9990452\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Manacás MG\' />
',
                'slug' => 'belo-horizonte-manacas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Belo Horizonte Mangabeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mangabeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9587934;-43.9154855\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mangabeiras',
                'slug' => 'belo-horizonte-mangabeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
            'name' => 'Belo Horizonte Mangueiras (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mangueiras (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0155682;-44.0377442\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte M',
                'slug' => 'belo-horizonte-mangueiras-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Belo Horizonte Mantiqueira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mantiqueira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mantiqueira',
                'slug' => 'belo-horizonte-mantiqueira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Belo Horizonte Marajó MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Marajó MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9599191;-43.9921096\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marajó MG\' />
',
                'slug' => 'belo-horizonte-marajo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Belo Horizonte Marçola MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Marçola MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9421132;-43.9094859\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marçola MG\' />
',
                'slug' => 'belo-horizonte-marcola-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Belo Horizonte Maria Goretti MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Maria Goretti MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8641050;-43.9136197\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Maria Gor',
                'slug' => 'belo-horizonte-maria-goretti-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Belo Horizonte Maria Helena MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Maria Helena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7964667;-43.9936741\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Maria Hele',
                'slug' => 'belo-horizonte-maria-helena-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Belo Horizonte Maria Tereza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Maria Tereza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0077478;-44.0099243\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Maria Tere',
                'slug' => 'belo-horizonte-maria-tereza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Belo Horizonte Maria Virgínia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Maria Virgínia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8705521;-43.9355487\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Maria Vi',
                'slug' => 'belo-horizonte-maria-virginia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Belo Horizonte Mariano de Abreu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mariano de Abreu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8954844;-43.8898783\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marian',
                'slug' => 'belo-horizonte-mariano-de-abreu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Belo Horizonte Marieta 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Marieta 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9918333;-44.0341683\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marieta 1 MG\'',
                'slug' => 'belo-horizonte-marieta-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Belo Horizonte Marilândia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Marilândia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9986418;-44.0469776\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marilândia M',
                'slug' => 'belo-horizonte-marilandia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Belo Horizonte Mariquinhas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mariquinhas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8130051;-43.9397471\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mariquinhas',
                'slug' => 'belo-horizonte-mariquinhas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Belo Horizonte Marmiteiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Marmiteiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9210555;-43.9853343\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Marmiteiros',
                'slug' => 'belo-horizonte-marmiteiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
            'name' => 'Belo Horizonte Milionários (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Milionários (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9815227;-44.0015610\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-milionarios-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Belo Horizonte Minas Brasil MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Minas Brasil MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9185970;-43.9895579\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Minas Bras',
                'slug' => 'belo-horizonte-minas-brasil-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Belo Horizonte Minascaixa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Minascaixa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8093286;-43.9585366\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Minascaixa M',
                'slug' => 'belo-horizonte-minascaixa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
            'name' => 'Belo Horizonte Minaslândia (P Maio) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Minaslândia (P Maio) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8514961;-43.9293646\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mi',
                'slug' => 'belo-horizonte-minaslandia-p-maio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Belo Horizonte Mineirão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mineirão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0280056;-44.0271285\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mineirão MG\' /',
                'slug' => 'belo-horizonte-mineirao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
            'name' => 'Belo Horizonte Miramar (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Miramar (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9924724;-44.0097184\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mira',
                'slug' => 'belo-horizonte-miramar-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Belo Horizonte Mirante MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Mirante MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9518817;-43.9126894\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Mirante MG\' />
',
                'slug' => 'belo-horizonte-mirante-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Belo Horizonte Monsenhor Messias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Monsenhor Messias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9079988;-43.9780401\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Monse',
                'slug' => 'belo-horizonte-monsenhor-messias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Belo Horizonte Monte Azul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Monte Azul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8163765;-43.8925529\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Monte Azul M',
                'slug' => 'belo-horizonte-monte-azul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Belo Horizonte Morro das Pedras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Morro das Pedras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7625927;-43.9336303\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Morro ',
                'slug' => 'belo-horizonte-morro-das-pedras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Belo Horizonte Nazaré MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nazaré MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8541868;-43.8954857\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nazaré MG\' />
',
                'slug' => 'belo-horizonte-nazare-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
            'name' => 'Belo Horizonte Nossa Senhora Aparecida (Aglomerado da Serra) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nossa Senhora Aparecida (Aglomerado da Serra) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8801940;-43.9408520\' />
<meta name=\'geo.region\' cont',
                'slug' => 'belo-horizonte-nossa-senhora-aparecida-aglomerado-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Belo Horizonte Nossa Senhora da Conceição MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nossa Senhora da Conceição MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizo',
                'slug' => 'belo-horizonte-nossa-senhora-da-conceicao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Belo Horizonte Nossa Senhora da Saúde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nossa Senhora da Saúde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8655508;-43.9105554\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                'slug' => 'belo-horizonte-nossa-senhora-da-saude-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Belo Horizonte Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9366434;-44.0117170\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Belo Horizonte Nossa Senhora do Rosário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nossa Senhora do Rosário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9433321;-43.9711478\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-nossa-senhora-do-rosario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Belo Horizonte Nova Cachoeirinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Cachoeirinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova ',
                'slug' => 'belo-horizonte-nova-cachoeirinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Belo Horizonte Nova Cintra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Cintra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9493108;-43.9873924\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Cintra',
                'slug' => 'belo-horizonte-nova-cintra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Belo Horizonte Nova Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8969605;-43.9590004\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Esp',
                'slug' => 'belo-horizonte-nova-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Belo Horizonte Nova Floresta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Floresta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8924814;-43.9348843\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Flor',
                'slug' => 'belo-horizonte-nova-floresta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Belo Horizonte Nova Gameleira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Gameleira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9427485;-43.9911149\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Gam',
                'slug' => 'belo-horizonte-nova-gameleira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Belo Horizonte Nova Granada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Granada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9397317;-43.9705445\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Grana',
                'slug' => 'belo-horizonte-nova-granada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Belo Horizonte Nova Pampulha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Pampulha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8314930;-44.0154414\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Pamp',
                'slug' => 'belo-horizonte-nova-pampulha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Belo Horizonte Nova Suíssa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Suíssa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9364056;-43.9750320\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Suíssa',
                'slug' => 'belo-horizonte-nova-suissa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Belo Horizonte Nova Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Nova Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8866239;-43.8977533\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Nova Vista M',
                'slug' => 'belo-horizonte-nova-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Belo Horizonte Novo Aarão Reis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo Aarão Reis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8405025;-43.9084981\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Novo Aa',
                'slug' => 'belo-horizonte-novo-aarao-reis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
            'name' => 'Belo Horizonte Novo das Indústrias (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo das Indústrias (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8463736;-43.9286769\' />
<meta name=\'geo.region\' content=\'BR-Belo Ho',
                'slug' => 'belo-horizonte-novo-das-industrias-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Belo Horizonte Novo Glória MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo Glória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9022538;-44.0185166\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Novo Glória',
                'slug' => 'belo-horizonte-novo-gloria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Belo Horizonte Novo Itamarati MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo Itamarati MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Novo Ita',
                'slug' => 'belo-horizonte-novo-itamarati-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
            'name' => 'Belo Horizonte Novo Santa Cecília (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo Santa Cecília (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Hor',
                'slug' => 'belo-horizonte-novo-santa-cecilia-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Belo Horizonte Novo Tupi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Novo Tupi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9072617;-43.9612071\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Novo Tupi MG\'',
                'slug' => 'belo-horizonte-novo-tupi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Belo Horizonte Oeste MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Oeste MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9377863;-44.0041796\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Oeste MG\' />
',
                'slug' => 'belo-horizonte-oeste-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
            'name' => 'Belo Horizonte Olaria (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Olaria (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9917590;-44.0315316\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Olari',
                'slug' => 'belo-horizonte-olaria-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Belo Horizonte Olhos D\'Água MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Olhos D\'Água MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9951690;-43.9653091\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Olhos D\'Ág',
                'slug' => 'belo-horizonte-olhos-d-agua-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Belo Horizonte Ouro Minas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ouro Minas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8477927;-43.9104312\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ouro Minas M',
                'slug' => 'belo-horizonte-ouro-minas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Belo Horizonte Ouro Preto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ouro Preto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8772727;-43.9834387\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ouro Preto M',
                'slug' => 'belo-horizonte-ouro-preto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Belo Horizonte Padre Eustáquio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Padre Eustáquio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9184247;-43.9866910\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Padre E',
                'slug' => 'belo-horizonte-padre-eustaquio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Belo Horizonte Palmares MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Palmares MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8744469;-43.9351581\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Palmares MG\' /',
                'slug' => 'belo-horizonte-palmares-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Belo Horizonte Palmeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Palmeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9753875;-43.9807217\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Palmeiras MG\'',
                'slug' => 'belo-horizonte-palmeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Belo Horizonte Pampulha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pampulha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8579626;-43.9566381\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pampulha MG\' /',
                'slug' => 'belo-horizonte-pampulha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Belo Horizonte Pantanal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pantanal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9535734;-43.9613938\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pantanal MG\' /',
                'slug' => 'belo-horizonte-pantanal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Belo Horizonte Paquetá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Paquetá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8916094;-43.9925989\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Paquetá MG\' />
',
                'slug' => 'belo-horizonte-paqueta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Belo Horizonte Paraíso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Paraíso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9178965;-43.9034699\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Paraíso MG\' />
',
                'slug' => 'belo-horizonte-paraiso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Belo Horizonte Parque São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Parque São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9633997;-43.9778754\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Parque ',
                'slug' => 'belo-horizonte-parque-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
            'name' => 'Belo Horizonte Parque São Pedro (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Parque São Pedro (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8118496;-43.9509386\' />
<meta name=\'geo.region\' content=\'BR-Belo Hor',
                'slug' => 'belo-horizonte-parque-sao-pedro-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Belo Horizonte Paulo 6 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Paulo 6 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8405039;-43.8964227\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Paulo 6 MG\' />
',
                'slug' => 'belo-horizonte-paulo-6-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Belo Horizonte Pedreira Prado Lopes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pedreira Prado Lopes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9016888;-43.9486059\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pe',
                'slug' => 'belo-horizonte-pedreira-prado-lopes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Belo Horizonte Pedro 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pedro 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9005032;-43.9678168\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pedro 2 MG\' />
',
                'slug' => 'belo-horizonte-pedro-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Belo Horizonte Penha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Penha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8775947;-43.9123198\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Penha MG\' />
',
                'slug' => 'belo-horizonte-penha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
            'name' => 'Belo Horizonte Petrópolis (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Petrópolis (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte P',
                'slug' => 'belo-horizonte-petropolis-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Belo Horizonte Pilar MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pilar MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9997207;-43.9725429\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pilar MG\' />
',
                'slug' => 'belo-horizonte-pilar-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Belo Horizonte Pindorama MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pindorama MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9147429;-44.0200155\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pindorama MG\'',
                'slug' => 'belo-horizonte-pindorama-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Belo Horizonte Pio 12 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pio 12 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8961295;-43.9452525\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pio 12 MG\' />
',
                'slug' => 'belo-horizonte-pio-12-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Belo Horizonte Pirajá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pirajá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8678467;-43.9187945\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pirajá MG\' />
',
                'slug' => 'belo-horizonte-piraja-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
            'name' => 'Belo Horizonte Piratininga (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Piratininga (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8186690;-43.9893133\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-piratininga-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Belo Horizonte Planalto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Planalto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8366619;-43.9491319\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Planalto MG\' /',
                'slug' => 'belo-horizonte-planalto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Belo Horizonte Pompéia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pompéia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9122135;-43.9035441\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Pompéia MG\' />
',
                'slug' => 'belo-horizonte-pompeia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
            'name' => 'Belo Horizonte Pongelupe (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pongelupe (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0080434;-44.0030558\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Po',
                'slug' => 'belo-horizonte-pongelupe-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Belo Horizonte Pousada Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Pousada Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8575818;-43.8887996\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte P',
                'slug' => 'belo-horizonte-pousada-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Belo Horizonte Prado MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Prado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9237605;-43.9604771\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Prado MG\' />
',
                'slug' => 'belo-horizonte-prado-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Belo Horizonte Primeiro de Maio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Primeiro de Maio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8622391;-43.9311054\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Primei',
                'slug' => 'belo-horizonte-primeiro-de-maio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Belo Horizonte Providência MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Providência MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8547925;-43.9279140\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Providência',
                'slug' => 'belo-horizonte-providencia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Belo Horizonte Renascença MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Renascença MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8859937;-43.9386747\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Renascença M',
                'slug' => 'belo-horizonte-renascenca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Belo Horizonte Ribeiro de Abreu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ribeiro de Abreu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8362604;-43.9007451\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ribeir',
                'slug' => 'belo-horizonte-ribeiro-de-abreu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Belo Horizonte Rio Branco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Rio Branco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8230005;-43.9842212\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Rio Branco M',
                'slug' => 'belo-horizonte-rio-branco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Belo Horizonte Sagrada Família MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Sagrada Família MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9021088;-43.9214830\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sagrada',
                'slug' => 'belo-horizonte-sagrada-familia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Belo Horizonte Salgado Filho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Salgado Filho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9461032;-43.9777973\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Salgado F',
                'slug' => 'belo-horizonte-salgado-filho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Belo Horizonte Santa Amélia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Amélia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8402790;-43.9749673\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Amél',
                'slug' => 'belo-horizonte-santa-amelia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Belo Horizonte Santa Branca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Branca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8371892;-43.9670977\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Bran',
                'slug' => 'belo-horizonte-santa-branca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
            'name' => 'Belo Horizonte Santa Cecília Vale do Jatobá (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Cecília Vale do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0048544;-44.0330562\' />
<meta name=\'geo.region\' content=\'B',
                'slug' => 'belo-horizonte-santa-cecilia-vale-do-jatoba-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Belo Horizonte Santa Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8753593;-43.9438730\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Cruz M',
                'slug' => 'belo-horizonte-santa-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
            'name' => 'Belo Horizonte Santa Cruz (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Cruz (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9915495;-44.0152656\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte S',
                'slug' => 'belo-horizonte-santa-cruz-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Belo Horizonte Santa Efigênia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Efigênia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9216396;-43.9138364\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Ef',
                'slug' => 'belo-horizonte-santa-efigenia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
            'name' => 'Belo Horizonte Santa Helena (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Helena (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9867177;-44.0101421\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte',
                'slug' => 'belo-horizonte-santa-helena-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Belo Horizonte Santa Inês MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Inês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Inês M',
                'slug' => 'belo-horizonte-santa-ines-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Belo Horizonte Santa Isabel MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Isabel MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9426211;-43.9231524\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Isab',
                'slug' => 'belo-horizonte-santa-isabel-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Belo Horizonte Santa Lúcia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Lúcia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9720945;-43.9525250\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Lúcia',
                'slug' => 'belo-horizonte-santa-lucia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
            'name' => 'Belo Horizonte Santa Margarida (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Margarida (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9753482;-44.0270469\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizo',
                'slug' => 'belo-horizonte-santa-margarida-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Belo Horizonte Santa Maria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9353943;-44.0143075\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Maria',
                'slug' => 'belo-horizonte-santa-maria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Belo Horizonte Santa Mônica MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Mônica MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8196787;-43.9727410\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Môni',
                'slug' => 'belo-horizonte-santa-monica-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
            'name' => 'Belo Horizonte Santa Rita (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Rita (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0081655;-44.0307500\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte S',
                'slug' => 'belo-horizonte-santa-rita-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Belo Horizonte Santa Rita de Cássia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Rita de Cássia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9347544;-43.9762763\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sa',
                'slug' => 'belo-horizonte-santa-rita-de-cassia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Belo Horizonte Santa Rosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Rosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8636257;-43.9427883\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Rosa M',
                'slug' => 'belo-horizonte-santa-rosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Belo Horizonte Santa Sofia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Sofia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9503227;-43.9677386\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Sofia',
                'slug' => 'belo-horizonte-santa-sofia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Belo Horizonte Santa Tereza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Tereza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9182903;-43.9246488\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa Tere',
                'slug' => 'belo-horizonte-santa-tereza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Belo Horizonte Santa Terezinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santa Terezinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8680788;-44.0028768\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santa T',
                'slug' => 'belo-horizonte-santa-terezinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Belo Horizonte Santana do Cafezal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santana do Cafezal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sant',
                'slug' => 'belo-horizonte-santana-do-cafezal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Belo Horizonte Santo Agostinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santo Agostinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9293840;-43.9502113\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santo A',
                'slug' => 'belo-horizonte-santo-agostinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Belo Horizonte Santo André MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santo André MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9128250;-44.0239431\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santo André',
                'slug' => 'belo-horizonte-santo-andre-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Belo Horizonte Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9466026;-43.9460441\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Santo Ant',
                'slug' => 'belo-horizonte-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Belo Horizonte São Benedito MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Benedito MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9956903;-43.9899819\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Benedi',
                'slug' => 'belo-horizonte-sao-benedito-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Belo Horizonte São Bento MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Bento MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9589611;-43.9507310\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Bento MG\'',
                'slug' => 'belo-horizonte-sao-bento-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Belo Horizonte São Bernardo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Bernardo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8499245;-43.9397682\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Bernar',
                'slug' => 'belo-horizonte-sao-bernardo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Belo Horizonte São Cristóvão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Cristóvão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8974386;-43.9474181\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Crist',
                'slug' => 'belo-horizonte-sao-cristovao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Belo Horizonte São Damião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Damião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9153358;-44.0000465\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Damião M',
                'slug' => 'belo-horizonte-sao-damiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Belo Horizonte São Francisco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Francisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8742560;-43.9587342\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Franc',
                'slug' => 'belo-horizonte-sao-francisco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Belo Horizonte São Francisco das Chagas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Francisco das Chagas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9144092;-43.9627485\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-sao-francisco-das-chagas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Belo Horizonte São Gabriel MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Gabriel MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8617064;-43.9267079\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Gabriel',
                'slug' => 'belo-horizonte-sao-gabriel-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Belo Horizonte São Geraldo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Geraldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9022970;-43.8904790\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Geraldo',
                'slug' => 'belo-horizonte-sao-geraldo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Belo Horizonte São Gonçalo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Gonçalo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8494305;-43.9259174\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Gonçalo',
                'slug' => 'belo-horizonte-sao-goncalo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Belo Horizonte São João MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São João MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9960675;-43.9712606\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São João MG\' /',
                'slug' => 'belo-horizonte-sao-joao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
            'name' => 'Belo Horizonte São João Batista (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São João Batista (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8237405;-43.9643581\' />
<meta name=\'geo.region\' content=\'BR-Belo Hor',
                'slug' => 'belo-horizonte-sao-joao-batista-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Belo Horizonte São Jorge MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Jorge MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8474333;-43.9456229\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Jorge MG\'',
                'slug' => 'belo-horizonte-sao-jorge-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Belo Horizonte São Jorge 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Jorge 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9424331;-43.9525651\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Jorge 2',
                'slug' => 'belo-horizonte-sao-jorge-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Belo Horizonte São Jorge 3 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Jorge 3 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9458879;-43.9624971\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Jorge 3',
                'slug' => 'belo-horizonte-sao-jorge-3-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Belo Horizonte São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8591538;-43.9636593\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São José MG\' /',
                'slug' => 'belo-horizonte-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Belo Horizonte São Lucas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Lucas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9298818;-43.9132538\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Lucas MG\'',
                'slug' => 'belo-horizonte-sao-lucas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Belo Horizonte São Luiz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8441392;-43.9513846\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Luiz MG\' /',
                'slug' => 'belo-horizonte-sao-luiz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Belo Horizonte São Marcos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Marcos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8704865;-43.9078367\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Marcos M',
                'slug' => 'belo-horizonte-sao-marcos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Belo Horizonte São Paulo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Paulo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8691174;-43.9263503\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Paulo MG\'',
                'slug' => 'belo-horizonte-sao-paulo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Belo Horizonte São Pedro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Pedro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9640373;-43.9898958\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Pedro MG\'',
                'slug' => 'belo-horizonte-sao-pedro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Belo Horizonte São Salvador MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Salvador MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8951575;-44.0162816\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Salvad',
                'slug' => 'belo-horizonte-sao-salvador-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Belo Horizonte São Sebastião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Sebastião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710543;-43.9451279\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Sebas',
                'slug' => 'belo-horizonte-sao-sebastiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Belo Horizonte São Tomáz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte São Tomáz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8433921;-43.9508385\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte São Tomáz MG\'',
                'slug' => 'belo-horizonte-sao-tomaz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Belo Horizonte Satélite MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Satélite MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8120753;-43.9487225\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Satélite MG\' /',
                'slug' => 'belo-horizonte-satelite-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Belo Horizonte Saudade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Saudade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9177974;-43.8993095\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Saudade MG\' />
',
                'slug' => 'belo-horizonte-saudade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Belo Horizonte Savassi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Savassi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9383229;-43.9350362\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Savassi MG\' />
',
                'slug' => 'belo-horizonte-savassi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Belo Horizonte Senhor dos Passos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Senhor dos Passos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9077873;-43.9485258\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Senho',
                'slug' => 'belo-horizonte-senhor-dos-passos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Belo Horizonte Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9394488;-43.9258788\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Serra MG\' />
',
                'slug' => 'belo-horizonte-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Belo Horizonte Serra do Curral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Serra do Curral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0074570;-44.0063202\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Serra d',
                'slug' => 'belo-horizonte-serra-do-curral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
            'name' => 'Belo Horizonte Serra Verde (Venda Nova) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Serra Verde (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7999459;-43.9614582\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-serra-verde-venda-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Belo Horizonte Serrano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Serrano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8839636;-44.0129920\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Serrano MG\' />
',
                'slug' => 'belo-horizonte-serrano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Belo Horizonte Silveira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Silveira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8904339;-43.9307980\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Silveira MG\' /',
                'slug' => 'belo-horizonte-silveira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Belo Horizonte Sion MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Sion MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9520511;-43.9308951\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sion MG\' />
',
                'slug' => 'belo-horizonte-sion-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
            'name' => 'Belo Horizonte Solar do Barreiro (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Solar do Barreiro (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0109557;-44.0094064\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                'slug' => 'belo-horizonte-solar-do-barreiro-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Belo Horizonte Solimões MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Solimões MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8213096;-43.9271691\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Solimões MG\' /',
                'slug' => 'belo-horizonte-solimoes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Belo Horizonte Sport Club MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Sport Club MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9471146;-44.0104275\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sport Club M',
                'slug' => 'belo-horizonte-sport-club-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Belo Horizonte Sumaré MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Sumaré MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9589279;-44.0014162\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Sumaré MG\' />
',
                'slug' => 'belo-horizonte-sumare-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Belo Horizonte Suzana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Suzana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8637145;-43.9345513\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Suzana MG\' />
',
                'slug' => 'belo-horizonte-suzana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Belo Horizonte Taquaril MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Taquaril MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9155965;-43.8844427\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Taquaril MG\' /',
                'slug' => 'belo-horizonte-taquaril-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
            'name' => 'Belo Horizonte Teixeira Dias (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Teixeira Dias (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9835985;-44.0189102\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizont',
                'slug' => 'belo-horizonte-teixeira-dias-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Belo Horizonte Tiradentes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Tiradentes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9457569;-44.0463689\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Tiradentes M',
                'slug' => 'belo-horizonte-tiradentes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
            'name' => 'Belo Horizonte Tirol (Barreiro) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Tirol (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9852140;-44.0352673\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Tirol ',
                'slug' => 'belo-horizonte-tirol-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Belo Horizonte Três Marias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Três Marias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8116183;-43.9871268\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Três Marias',
                'slug' => 'belo-horizonte-tres-marias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Belo Horizonte Trevo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Trevo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8340173;-44.0047984\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Trevo MG\' />
',
                'slug' => 'belo-horizonte-trevo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
            'name' => 'Belo Horizonte Trevo (Dandara) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Trevo (Dandara) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8284917;-44.0115224\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Trevo (',
                    'slug' => 'belo-horizonte-trevo-dandara-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                342 => 
                array (
                    'id' => 343,
                    'name' => 'Belo Horizonte Tupi A MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Tupi A MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Tupi A MG\' />
',
                    'slug' => 'belo-horizonte-tupi-a-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                343 => 
                array (
                    'id' => 344,
                    'name' => 'Belo Horizonte Tupi B MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Tupi B MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8384854;-43.9178978\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Tupi B MG\' />
',
                    'slug' => 'belo-horizonte-tupi-b-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                344 => 
                array (
                    'id' => 345,
                    'name' => 'Belo Horizonte União MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte União MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8867739;-43.9207305\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte União MG\' />
',
                    'slug' => 'belo-horizonte-uniao-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                345 => 
                array (
                    'id' => 346,
                    'name' => 'Belo Horizonte Universitário MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Universitário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8686051;-43.9460259\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Universit',
                    'slug' => 'belo-horizonte-universitario-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                346 => 
                array (
                    'id' => 347,
                    'name' => 'Belo Horizonte Universo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Universo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9517745;-43.9981867\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Universo MG\' /',
                    'slug' => 'belo-horizonte-universo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                347 => 
                array (
                    'id' => 348,
                    'name' => 'Belo Horizonte Urca MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Urca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8719646;-44.0135193\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Urca MG\' />
',
                    'slug' => 'belo-horizonte-urca-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                348 => 
                array (
                    'id' => 349,
                'name' => 'Belo Horizonte Vale do Jatobá (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vale do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                    'slug' => 'belo-horizonte-vale-do-jatoba-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                349 => 
                array (
                    'id' => 350,
                    'name' => 'Belo Horizonte Venda Nova MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Venda Nova MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8163227;-43.9590973\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Venda Nova M',
                    'slug' => 'belo-horizonte-venda-nova-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                350 => 
                array (
                    'id' => 351,
                    'name' => 'Belo Horizonte Ventosa MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Ventosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9530035;-43.9733186\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Ventosa MG\' />
',
                    'slug' => 'belo-horizonte-ventosa-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                351 => 
                array (
                    'id' => 352,
                    'name' => 'Belo Horizonte Vera Cruz MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vera Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9029275;-43.9022332\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vera Cruz MG\'',
                    'slug' => 'belo-horizonte-vera-cruz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                352 => 
                array (
                    'id' => 353,
                    'name' => 'Belo Horizonte Vila Aeroporto MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Aeroporto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8591540;-43.9316013\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Aer',
                    'slug' => 'belo-horizonte-vila-aeroporto-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                353 => 
                array (
                    'id' => 354,
                    'name' => 'Belo Horizonte Vila Antena MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Antena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9301024;-44.0361052\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Antena',
                    'slug' => 'belo-horizonte-vila-antena-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                354 => 
                array (
                    'id' => 355,
                    'name' => 'Belo Horizonte Vila Antena Montanhês MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Antena Montanhês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8969672;-43.9853817\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte V',
                    'slug' => 'belo-horizonte-vila-antena-montanhes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                355 => 
                array (
                    'id' => 356,
                    'name' => 'Belo Horizonte Vila Bandeirantes MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Bandeirantes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9488818;-43.9327012\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila ',
                    'slug' => 'belo-horizonte-vila-bandeirantes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                356 => 
                array (
                    'id' => 357,
                    'name' => 'Belo Horizonte Vila Barragem Santa Lúcia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Barragem Santa Lúcia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9516863;-43.9452392\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                    'slug' => 'belo-horizonte-vila-barragem-santa-lucia-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                357 => 
                array (
                    'id' => 358,
                'name' => 'Belo Horizonte Vila Bernadete (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Bernadete (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9866911;-43.9855382\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                    'slug' => 'belo-horizonte-vila-bernadete-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                358 => 
                array (
                    'id' => 359,
                    'name' => 'Belo Horizonte Vila Calafate MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Calafate MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9214692;-43.9695564\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Cala',
                    'slug' => 'belo-horizonte-vila-calafate-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                359 => 
                array (
                    'id' => 360,
                    'name' => 'Belo Horizonte Vila Cemig MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Cemig MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9942384;-43.9947297\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Cemig M',
                    'slug' => 'belo-horizonte-vila-cemig-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                360 => 
                array (
                    'id' => 361,
                    'name' => 'Belo Horizonte Vila Cloris MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Cloris MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8199244;-43.9506328\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Cloris',
                    'slug' => 'belo-horizonte-vila-cloris-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                361 => 
                array (
                    'id' => 362,
                'name' => 'Belo Horizonte Vila Coqueiral (Vila da Paz) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Coqueiral (Vila da Paz) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9128250;-44.0239431\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                    'slug' => 'belo-horizonte-vila-coqueiral-vila-da-paz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                362 => 
                array (
                    'id' => 363,
                    'name' => 'Belo Horizonte Vila da Luz MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila da Luz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9153846;-43.8883375\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila da Luz',
                    'slug' => 'belo-horizonte-vila-da-luz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                363 => 
                array (
                    'id' => 364,
                    'name' => 'Belo Horizonte Vila dos Anjos MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila dos Anjos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9192873;-44.0081126\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila dos',
                    'slug' => 'belo-horizonte-vila-dos-anjos-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                364 => 
                array (
                    'id' => 365,
                'name' => 'Belo Horizonte Vila Ecológica (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Ecológica (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9279944;-43.9818005\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                    'slug' => 'belo-horizonte-vila-ecologica-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                365 => 
                array (
                    'id' => 366,
                'name' => 'Belo Horizonte Vila Formosa Vale do Jatobá (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Formosa Vale do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9992175;-44.0312266\' />
<meta name=\'geo.region\' content=\'BR',
                    'slug' => 'belo-horizonte-vila-formosa-vale-do-jatoba-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                366 => 
                array (
                    'id' => 367,
                    'name' => 'Belo Horizonte Vila Independencia 1 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Independencia 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0120158;-44.0284495\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vi',
                    'slug' => 'belo-horizonte-vila-independencia-1-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                367 => 
                array (
                    'id' => 368,
                    'name' => 'Belo Horizonte Vila Independencia 2 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Independencia 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9954957;-43.9638762\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vi',
                    'slug' => 'belo-horizonte-vila-independencia-2-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                368 => 
                array (
                    'id' => 369,
                    'name' => 'Belo Horizonte Vila Inestan MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Inestan MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Inest',
                    'slug' => 'belo-horizonte-vila-inestan-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                369 => 
                array (
                    'id' => 370,
                'name' => 'Belo Horizonte Vila Itaipu (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Itaipu (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9889715;-44.0520330\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                    'slug' => 'belo-horizonte-vila-itaipu-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                370 => 
                array (
                    'id' => 371,
                    'name' => 'Belo Horizonte Vila Jardim Alvorada MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Jardim Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0155682;-44.0377442\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vi',
                    'slug' => 'belo-horizonte-vila-jardim-alvorada-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                371 => 
                array (
                    'id' => 372,
                    'name' => 'Belo Horizonte Vila Jardim São José MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Jardim São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8864875;-43.9941391\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vi',
                    'slug' => 'belo-horizonte-vila-jardim-sao-jose-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                372 => 
                array (
                    'id' => 373,
                    'name' => 'Belo Horizonte Vila Madre Gertrudes 1 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Madre Gertrudes 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte ',
                    'slug' => 'belo-horizonte-vila-madre-gertrudes-1-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                373 => 
                array (
                    'id' => 374,
                    'name' => 'Belo Horizonte Vila Maloca MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Maloca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8802915;-43.9523918\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Maloca',
                    'slug' => 'belo-horizonte-vila-maloca-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                374 => 
                array (
                    'id' => 375,
                    'name' => 'Belo Horizonte Vila Maria MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8318931;-43.8866057\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Maria M',
                    'slug' => 'belo-horizonte-vila-maria-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                375 => 
                array (
                    'id' => 376,
                    'name' => 'Belo Horizonte Vila Nossa Senhora Aparecida MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Nossa Senhora Aparecida MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8240397;-43.9677275\' />
<meta name=\'geo.region\' content=\'BR-Belo Hori',
                    'slug' => 'belo-horizonte-vila-nossa-senhora-aparecida-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                376 => 
                array (
                    'id' => 377,
                    'name' => 'Belo Horizonte Vila Nova Gameleira 2 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Nova Gameleira 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8941250;-43.9490509\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte V',
                    'slug' => 'belo-horizonte-vila-nova-gameleira-2-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                377 => 
                array (
                    'id' => 378,
                    'name' => 'Belo Horizonte Vila Nova Paraíso MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Nova Paraíso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8695562;-43.9090093\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila ',
                    'slug' => 'belo-horizonte-vila-nova-paraiso-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                378 => 
                array (
                    'id' => 379,
                    'name' => 'Belo Horizonte Vila Novo São Lucas MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Novo São Lucas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9135277;-43.8762132\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vil',
                    'slug' => 'belo-horizonte-vila-novo-sao-lucas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                379 => 
                array (
                    'id' => 380,
                    'name' => 'Belo Horizonte Vila Oeste MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Oeste MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9398495;-44.0064191\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Oeste M',
                    'slug' => 'belo-horizonte-vila-oeste-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                380 => 
                array (
                    'id' => 381,
                    'name' => 'Belo Horizonte Vila Ouro Minas MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Ouro Minas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.7014018;-46.5995772\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Ou',
                    'slug' => 'belo-horizonte-vila-ouro-minas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                381 => 
                array (
                    'id' => 382,
                    'name' => 'Belo Horizonte Vila Paris MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Paris MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9491725;-43.9504865\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Paris M',
                    'slug' => 'belo-horizonte-vila-paris-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                382 => 
                array (
                    'id' => 383,
                'name' => 'Belo Horizonte Vila Petrópolis (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Petrópolis (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0138578;-44.0289040\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizo',
                    'slug' => 'belo-horizonte-vila-petropolis-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                383 => 
                array (
                    'id' => 384,
                'name' => 'Belo Horizonte Vila Pinho Vale do Jatobá (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Pinho Vale do Jatobá (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9967573;-44.0265630\' />
<meta name=\'geo.region\' content=\'BR-B',
                    'slug' => 'belo-horizonte-vila-pinho-vale-do-jatoba-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                384 => 
                array (
                    'id' => 385,
                    'name' => 'Belo Horizonte Vila Real 2 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Real 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Real 2',
                    'slug' => 'belo-horizonte-vila-real-2-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                385 => 
                array (
                    'id' => 386,
                    'name' => 'Belo Horizonte Vila Rica MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Rica MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8551496;-43.9533918\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Rica MG\'',
                    'slug' => 'belo-horizonte-vila-rica-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                386 => 
                array (
                    'id' => 387,
                'name' => 'Belo Horizonte Vila Santa Branca (Venda Nova) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Santa Branca (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9905098;-43.9602605\' />
<meta name=\'geo.region\' content=\'BR-Belo Ho',
                    'slug' => 'belo-horizonte-vila-santa-branca-venda-nova-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                387 => 
                array (
                    'id' => 388,
                'name' => 'Belo Horizonte Vila Santa Mônica (Venda Nova) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Santa Mônica (Venda Nova) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9463360;-43.9976620\' />
<meta name=\'geo.region\' content=\'BR-Belo Ho',
                    'slug' => 'belo-horizonte-vila-santa-monica-venda-nova-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                388 => 
                array (
                    'id' => 389,
                    'name' => 'Belo Horizonte Vila Santo Antônio Barroquinha MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Santo Antônio Barroquinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8898198;-44.0114785\' />
<meta name=\'geo.region\' content=\'BR-Belo Ho',
                    'slug' => 'belo-horizonte-vila-santo-antonio-barroquinha-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                389 => 
                array (
                    'id' => 390,
                    'name' => 'Belo Horizonte Vila São José MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila São ',
                    'slug' => 'belo-horizonte-vila-sao-jose-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                390 => 
                array (
                    'id' => 391,
                    'name' => 'Belo Horizonte Vila São Paulo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila São Paulo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8676198;-43.9213376\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila São',
                    'slug' => 'belo-horizonte-vila-sao-paulo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                391 => 
                array (
                    'id' => 392,
                    'name' => 'Belo Horizonte Vila São Rafael MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila São Rafael MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9114020;-43.9065348\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Sã',
                    'slug' => 'belo-horizonte-vila-sao-rafael-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                392 => 
                array (
                    'id' => 393,
                    'name' => 'Belo Horizonte Vila Sumaré MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Sumaré MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8884752;-43.9654252\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila Sumaré',
                    'slug' => 'belo-horizonte-vila-sumare-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                393 => 
                array (
                    'id' => 394,
                'name' => 'Belo Horizonte Vila Tirol (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Tirol (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8797731;-43.9422099\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte V',
                    'slug' => 'belo-horizonte-vila-tirol-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                394 => 
                array (
                    'id' => 395,
                    'name' => 'Belo Horizonte Vila Trinta e Um de Março MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Trinta e Um de Março MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9211280;-44.0002978\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizon',
                    'slug' => 'belo-horizonte-vila-trinta-e-um-de-marco-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                395 => 
                array (
                    'id' => 396,
                    'name' => 'Belo Horizonte Vila União MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila União MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9197326;-43.9866326\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila União M',
                    'slug' => 'belo-horizonte-vila-uniao-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                396 => 
                array (
                    'id' => 397,
                    'name' => 'Belo Horizonte Vila Vista Alegre MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Vista Alegre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9520348;-43.9898712\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila ',
                    'slug' => 'belo-horizonte-vila-vista-alegre-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                397 => 
                array (
                    'id' => 398,
                    'name' => 'Belo Horizonte Vila Zilah Spósito MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vila Zilah Spósito MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8301652;-43.8888574\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vila',
                    'slug' => 'belo-horizonte-vila-zilah-sposito-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                398 => 
                array (
                    'id' => 399,
                    'name' => 'Belo Horizonte Virgínia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Virgínia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Virgínia MG\' /',
                    'slug' => 'belo-horizonte-virginia-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                399 => 
                array (
                    'id' => 400,
                    'name' => 'Belo Horizonte Vista Alegre MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vista Alegre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9544937;-43.9973887\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vista Aleg',
                    'slug' => 'belo-horizonte-vista-alegre-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                400 => 
                array (
                    'id' => 401,
                    'name' => 'Belo Horizonte Vista do Sol MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vista do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8491246;-43.8900031\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vista do S',
                    'slug' => 'belo-horizonte-vista-do-sol-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                401 => 
                array (
                    'id' => 402,
                    'name' => 'Belo Horizonte Vitória MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vitória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602620;-43.8833094\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Vitória MG\' />
',
                    'slug' => 'belo-horizonte-vitoria-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                402 => 
                array (
                    'id' => 403,
                'name' => 'Belo Horizonte Vitória da Conquista (Barreiro) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Vitória da Conquista (Barreiro) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166813;-43.9344931\' />
<meta name=\'geo.region\' content=\'BR-Belo H',
                    'slug' => 'belo-horizonte-vitoria-da-conquista-barreiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                403 => 
                array (
                    'id' => 404,
                    'name' => 'Belo Horizonte Xodó Marize MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte Xodó Marize MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8205477;-43.9393674\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte Xodó Marize',
                    'slug' => 'belo-horizonte-xodo-marize-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                404 => 
                array (
                    'id' => 406,
                    'name' => 'Contagem',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem, MG, Brasil\' />
<meta name=\'geo.position\' content=\';\' />
<meta name=\'geo.region\' content=\'BR-Contagem\' />
<meta name=\'ICBM\' content=\', \'/>',
                    'slug' => 'contagem',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                405 => 
                array (
                    'id' => 407,
                    'name' => 'Contagem Água Branca MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Água Branca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9339373;-44.0336043\' />
<meta name=\'geo.region\' content=\'BR-Contagem Água Branca MG\' />
',
                    'slug' => 'contagem-agua-branca-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                406 => 
                array (
                    'id' => 408,
                    'name' => 'Contagem Alvorada MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9019076;-44.0795905\' />
<meta name=\'geo.region\' content=\'BR-Contagem Alvorada MG\' />
',
                    'slug' => 'contagem-alvorada-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                407 => 
                array (
                    'id' => 409,
                    'name' => 'Contagem Amazonas MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Amazonas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9691620;-44.0383022\' />
<meta name=\'geo.region\' content=\'BR-Contagem Amazonas MG\' />
',
                    'slug' => 'contagem-amazonas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                408 => 
                array (
                    'id' => 410,
                    'name' => 'Contagem Antônio Cambraia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Antônio Cambraia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9711365;-44.0371816\' />
<meta name=\'geo.region\' content=\'BR-Contagem Antônio Cambraia M',
                    'slug' => 'contagem-antonio-cambraia-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                409 => 
                array (
                    'id' => 411,
                    'name' => 'Contagem Arcádia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Arcádia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9125525;-44.0786143\' />
<meta name=\'geo.region\' content=\'BR-Contagem Arcádia MG\' />
',
                    'slug' => 'contagem-arcadia-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                410 => 
                array (
                    'id' => 412,
                    'name' => 'Contagem Área Rural de Contagem MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Área Rural de Contagem MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Área Rural d',
                    'slug' => 'contagem-area-rural-de-contagem-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                411 => 
                array (
                    'id' => 413,
                    'name' => 'Contagem Arpoador MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Arpoador MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9695943;-44.0361229\' />
<meta name=\'geo.region\' content=\'BR-Contagem Arpoador MG\' />
',
                    'slug' => 'contagem-arpoador-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                412 => 
                array (
                    'id' => 414,
                    'name' => 'Contagem Arvoredo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Arvoredo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8759119;-44.0239322\' />
<meta name=\'geo.region\' content=\'BR-Contagem Arvoredo MG\' />
',
                    'slug' => 'contagem-arvoredo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                413 => 
                array (
                    'id' => 415,
                    'name' => 'Contagem Arvoredo 2ª Seção MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Arvoredo 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Arvoredo 2ª Seção',
                    'slug' => 'contagem-arvoredo-2-secao-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                414 => 
                array (
                    'id' => 416,
                    'name' => 'Contagem Bairro Empresarial do Mandu MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bairro Empresarial do Mandu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9589909;-44.0431560\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bairro ',
                    'slug' => 'contagem-bairro-empresarial-do-mandu-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                415 => 
                array (
                    'id' => 417,
                    'name' => 'Contagem Bandeirantes MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bandeirantes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9680569;-44.0508639\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bandeirantes MG\' />
',
                    'slug' => 'contagem-bandeirantes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                416 => 
                array (
                    'id' => 418,
                    'name' => 'Contagem Beatriz MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Beatriz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9321138;-44.1224142\' />
<meta name=\'geo.region\' content=\'BR-Contagem Beatriz MG\' />
',
                    'slug' => 'contagem-beatriz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                417 => 
                array (
                    'id' => 419,
                    'name' => 'Contagem Beija Flor MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Beija Flor MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845760;-44.0412627\' />
<meta name=\'geo.region\' content=\'BR-Contagem Beija Flor MG\' />
',
                    'slug' => 'contagem-beija-flor-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                418 => 
                array (
                    'id' => 420,
                    'name' => 'Contagem Bela Vista MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bela Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9332445;-44.0786867\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bela Vista MG\' />
',
                    'slug' => 'contagem-bela-vista-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                419 => 
                array (
                    'id' => 421,
                    'name' => 'Contagem Bernardo Monteiro MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bernardo Monteiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9332116;-44.0841041\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bernardo Monteiro',
                    'slug' => 'contagem-bernardo-monteiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                420 => 
                array (
                    'id' => 422,
                    'name' => 'Contagem Betânia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Betânia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9100738;-44.0862336\' />
<meta name=\'geo.region\' content=\'BR-Contagem Betânia MG\' />
',
                    'slug' => 'contagem-betania-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                421 => 
                array (
                    'id' => 423,
                    'name' => 'Contagem Bitácula ou 40 Alqueires MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bitácula ou 40 Alqueires MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9687441;-44.0413494\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bitácula o',
                    'slug' => 'contagem-bitacula-ou-40-alqueires-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                422 => 
                array (
                    'id' => 424,
                    'name' => 'Contagem Boa Vista MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9330204;-44.0264789\' />
<meta name=\'geo.region\' content=\'BR-Contagem Boa Vista MG\' />
',
                    'slug' => 'contagem-boa-vista-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                423 => 
                array (
                    'id' => 425,
                    'name' => 'Contagem Bom Jesus MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Bom Jesus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8394610;-44.0350520\' />
<meta name=\'geo.region\' content=\'BR-Contagem Bom Jesus MG\' />
',
                    'slug' => 'contagem-bom-jesus-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                424 => 
                array (
                    'id' => 426,
                    'name' => 'Contagem Buganvile 1 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Buganvile 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9203279;-44.1171049\' />
<meta name=\'geo.region\' content=\'BR-Contagem Buganvile 1 MG\' />
',
                    'slug' => 'contagem-buganvile-1-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                425 => 
                array (
                    'id' => 427,
                    'name' => 'Contagem Buganville 2 MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Buganville 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8556246;-44.1504965\' />
<meta name=\'geo.region\' content=\'BR-Contagem Buganville 2 MG\' />
',
                    'slug' => 'contagem-buganville-2-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                426 => 
                array (
                    'id' => 428,
                    'name' => 'Contagem Cabral MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cabral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8819742;-44.0396559\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cabral MG\' />
',
                    'slug' => 'contagem-cabral-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                427 => 
                array (
                    'id' => 429,
                    'name' => 'Contagem Caiapós MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Caiapós MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9706854;-44.0225211\' />
<meta name=\'geo.region\' content=\'BR-Contagem Caiapós MG\' />
',
                    'slug' => 'contagem-caiapos-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                428 => 
                array (
                    'id' => 430,
                    'name' => 'Contagem Camilo Alves MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Camilo Alves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9172942;-44.0909648\' />
<meta name=\'geo.region\' content=\'BR-Contagem Camilo Alves MG\' />
',
                    'slug' => 'contagem-camilo-alves-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                429 => 
                array (
                    'id' => 431,
                    'name' => 'Contagem Campina Verde MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Campina Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8945131;-44.0549099\' />
<meta name=\'geo.region\' content=\'BR-Contagem Campina Verde MG\' />
',
                    'slug' => 'contagem-campina-verde-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                430 => 
                array (
                    'id' => 432,
                    'name' => 'Contagem Campo Alto MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Campo Alto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9169305;-44.1213317\' />
<meta name=\'geo.region\' content=\'BR-Contagem Campo Alto MG\' />
',
                    'slug' => 'contagem-campo-alto-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                431 => 
                array (
                    'id' => 433,
                    'name' => 'Contagem Canadá MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Canadá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9266411;-44.0938222\' />
<meta name=\'geo.region\' content=\'BR-Contagem Canadá MG\' />
',
                    'slug' => 'contagem-canada-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                432 => 
                array (
                    'id' => 434,
                    'name' => 'Contagem Cândida Ferreira MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cândida Ferreira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8777853;-44.0504046\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cândida Ferreira M',
                    'slug' => 'contagem-candida-ferreira-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                433 => 
                array (
                    'id' => 435,
                'name' => 'Contagem Capim Rasteiro (Chácaras Campo Alegre) MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Capim Rasteiro (Chácaras Campo Alegre) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8446373;-44.1348099\' />
<meta name=\'geo.region\' content=\'BR-Conta',
                    'slug' => 'contagem-capim-rasteiro-chacaras-campo-alegre-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                434 => 
                array (
                    'id' => 436,
                    'name' => 'Contagem Carajás MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Carajás MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9059477;-44.0929121\' />
<meta name=\'geo.region\' content=\'BR-Contagem Carajás MG\' />
',
                    'slug' => 'contagem-carajas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                435 => 
                array (
                    'id' => 437,
                    'name' => 'Contagem Central Parque MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Central Parque MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Central Parque MG\' /',
                    'slug' => 'contagem-central-parque-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                436 => 
                array (
                    'id' => 438,
                    'name' => 'Contagem Centro MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Centro MG\' />
',
                    'slug' => 'contagem-centro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                437 => 
                array (
                    'id' => 439,
                    'name' => 'Contagem Chácara Contagem MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácara Contagem MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9186123;-44.1028075\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácara Contagem M',
                    'slug' => 'contagem-chacara-contagem-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                438 => 
                array (
                    'id' => 440,
                    'name' => 'Contagem Chácara Del-Rey MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácara Del-Rey MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácara Del-Rey MG\'',
                    'slug' => 'contagem-chacara-del-rey-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                439 => 
                array (
                    'id' => 441,
                    'name' => 'Contagem Chácara Novo Horizonte MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácara Novo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácara Novo',
                    'slug' => 'contagem-chacara-novo-horizonte-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                440 => 
                array (
                    'id' => 442,
                    'name' => 'Contagem Chácara Planalto MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácara Planalto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9284691;-44.1103755\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácara Planalto M',
                    'slug' => 'contagem-chacara-planalto-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                441 => 
                array (
                    'id' => 443,
                    'name' => 'Contagem Chácara São Geraldo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácara São Geraldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácara São Ger',
                    'slug' => 'contagem-chacara-sao-geraldo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                442 => 
                array (
                    'id' => 444,
                    'name' => 'Contagem Chácaras Boa Vista MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9070330;-44.0889274\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácaras Boa Vis',
                    'slug' => 'contagem-chacaras-boa-vista-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                443 => 
                array (
                    'id' => 445,
                    'name' => 'Contagem Chácaras Bom Jesus MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Bom Jesus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8476175;-44.0366446\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácaras Bom Jes',
                    'slug' => 'contagem-chacaras-bom-jesus-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                444 => 
                array (
                    'id' => 446,
                    'name' => 'Contagem Chácaras Califórnia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Califórnia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácaras Califó',
                    'slug' => 'contagem-chacaras-california-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                445 => 
                array (
                    'id' => 447,
                    'name' => 'Contagem Chácaras Campestre MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Campestre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8450294;-44.0290654\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácaras Campest',
                    'slug' => 'contagem-chacaras-campestre-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                446 => 
                array (
                    'id' => 448,
                    'name' => 'Contagem Chácaras Cotia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Cotia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Chácaras Cotia MG\' /',
                    'slug' => 'contagem-chacaras-cotia-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                447 => 
                array (
                    'id' => 449,
                    'name' => 'Contagem Chácaras Reunidas Santa Terezinha MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Chácaras Reunidas Santa Terezinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem C',
                    'slug' => 'contagem-chacaras-reunidas-santa-terezinha-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                448 => 
                array (
                    'id' => 450,
                    'name' => 'Contagem Cidade Industrial MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cidade Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9174211;-44.0247519\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cidade Industrial',
                    'slug' => 'contagem-cidade-industrial-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                449 => 
                array (
                    'id' => 451,
                    'name' => 'Contagem Cidade Jardim Eldorado MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cidade Jardim Eldorado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9409912;-44.0320196\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cidade Jardi',
                    'slug' => 'contagem-cidade-jardim-eldorado-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                450 => 
                array (
                    'id' => 452,
                    'name' => 'Contagem Cincão MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cincão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9100899;-44.0372719\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cincão MG\' />
',
                    'slug' => 'contagem-cincao-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                451 => 
                array (
                    'id' => 453,
                    'name' => 'Contagem Cinco MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Cinco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9299979;-44.0645025\' />
<meta name=\'geo.region\' content=\'BR-Contagem Cinco MG\' />
',
                    'slug' => 'contagem-cinco-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                452 => 
                array (
                    'id' => 454,
                    'name' => 'Contagem Colonial MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Colonial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9203693;-44.0869875\' />
<meta name=\'geo.region\' content=\'BR-Contagem Colonial MG\' />
',
                    'slug' => 'contagem-colonial-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                453 => 
                array (
                    'id' => 455,
                    'name' => 'Contagem Colorado MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Colorado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9107662;-44.0330062\' />
<meta name=\'geo.region\' content=\'BR-Contagem Colorado MG\' />
',
                    'slug' => 'contagem-colorado-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                454 => 
                array (
                    'id' => 456,
                    'name' => 'Contagem Condomínio Estância San Remo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Condomínio Estância San Remo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8624613;-44.1091660\' />
<meta name=\'geo.region\' content=\'BR-Contagem Condom',
                    'slug' => 'contagem-condominio-estancia-san-remo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                455 => 
                array (
                    'id' => 457,
                    'name' => 'Contagem Conjunto Água Branca MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Conjunto Água Branca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9333752;-44.0282462\' />
<meta name=\'geo.region\' content=\'BR-Contagem Conjunto Água ',
                    'slug' => 'contagem-conjunto-agua-branca-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                456 => 
                array (
                    'id' => 458,
                    'name' => 'Contagem Conjunto Confisco MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Conjunto Confisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8035932;-44.1022061\' />
<meta name=\'geo.region\' content=\'BR-Contagem Conjunto Confisco',
                    'slug' => 'contagem-conjunto-confisco-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                457 => 
                array (
                    'id' => 459,
                    'name' => 'Contagem Conjunto Habitacional Nova Pampulha MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Conjunto Habitacional Nova Pampulha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8648136;-44.0199023\' />
<meta name=\'geo.region\' content=\'BR-Contagem',
                    'slug' => 'contagem-conjunto-habitacional-nova-pampulha-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                458 => 
                array (
                    'id' => 460,
                    'name' => 'Contagem Conquista Veredas MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Conquista Veredas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9526711;-44.1058556\' />
<meta name=\'geo.region\' content=\'BR-Contagem Conquista Veredas',
                    'slug' => 'contagem-conquista-veredas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                459 => 
                array (
                    'id' => 461,
                    'name' => 'Contagem Darcy Ribeiro MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Darcy Ribeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8614046;-44.1303907\' />
<meta name=\'geo.region\' content=\'BR-Contagem Darcy Ribeiro MG\' />
',
                    'slug' => 'contagem-darcy-ribeiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                460 => 
                array (
                    'id' => 462,
                    'name' => 'Contagem Darcy Vargas MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Darcy Vargas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9264223;-44.0287133\' />
<meta name=\'geo.region\' content=\'BR-Contagem Darcy Vargas MG\' />
',
                    'slug' => 'contagem-darcy-vargas-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                461 => 
                array (
                    'id' => 463,
                    'name' => 'Contagem Distrito Industrial Doutor Hélio Pentagna Guimarães MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Distrito Industrial Doutor Hélio Pentagna Guimarães MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8831719;-44.0340457\' />
<meta name=\'geo.region\' cont',
                    'slug' => 'contagem-distrito-industrial-doutor-helio-pentagna-guimaraes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                462 => 
                array (
                    'id' => 464,
                    'name' => 'Contagem Do Comércio MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Do Comércio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9034473;-44.0527645\' />
<meta name=\'geo.region\' content=\'BR-Contagem Do Comércio MG\' />
',
                    'slug' => 'contagem-do-comercio-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                463 => 
                array (
                    'id' => 465,
                    'name' => 'Contagem Duque de Caxias MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Duque de Caxias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9408230;-44.1510382\' />
<meta name=\'geo.region\' content=\'BR-Contagem Duque de Caxias MG\'',
                    'slug' => 'contagem-duque-de-caxias-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                464 => 
                array (
                    'id' => 466,
                    'name' => 'Contagem Eldoradinho MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Eldoradinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Eldoradinho MG\' />
',
                    'slug' => 'contagem-eldoradinho-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                465 => 
                array (
                    'id' => 467,
                    'name' => 'Contagem Eldorado MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Eldorado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9422344;-44.0413350\' />
<meta name=\'geo.region\' content=\'BR-Contagem Eldorado MG\' />
',
                    'slug' => 'contagem-eldorado-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                466 => 
                array (
                    'id' => 468,
                    'name' => 'Contagem Estaleiro MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Estaleiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9643954;-44.0497462\' />
<meta name=\'geo.region\' content=\'BR-Contagem Estaleiro MG\' />
',
                    'slug' => 'contagem-estaleiro-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                467 => 
                array (
                    'id' => 469,
                    'name' => 'Contagem Estância do Hibisco MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Estância do Hibisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9134652;-44.0924659\' />
<meta name=\'geo.region\' content=\'BR-Contagem Estância do Hib',
                    'slug' => 'contagem-estancia-do-hibisco-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                468 => 
                array (
                    'id' => 470,
                    'name' => 'Contagem Estância Silveira MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Estância Silveira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Estância Silveira',
                    'slug' => 'contagem-estancia-silveira-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                469 => 
                array (
                    'id' => 471,
                    'name' => 'Contagem Estâncias Imperiais MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Estâncias Imperiais MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Estâncias Imper',
                    'slug' => 'contagem-estancias-imperiais-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                470 => 
                array (
                    'id' => 472,
                    'name' => 'Contagem Estrela Dalva MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Estrela Dalva MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8617635;-44.0276547\' />
<meta name=\'geo.region\' content=\'BR-Contagem Estrela Dalva MG\' />
',
                    'slug' => 'contagem-estrela-dalva-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                471 => 
                array (
                    'id' => 473,
                    'name' => 'Contagem Europa MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Europa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8947200;-44.0886557\' />
<meta name=\'geo.region\' content=\'BR-Contagem Europa MG\' />
',
                    'slug' => 'contagem-europa-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                472 => 
                array (
                    'id' => 474,
                    'name' => 'Contagem Fazenda do Mandu MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Fazenda do Mandu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9191670;-44.1270361\' />
<meta name=\'geo.region\' content=\'BR-Contagem Fazenda do Mandu M',
                    'slug' => 'contagem-fazenda-do-mandu-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                473 => 
                array (
                    'id' => 475,
                    'name' => 'Contagem Feijão Miúdo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Feijão Miúdo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8875389;-44.0426923\' />
<meta name=\'geo.region\' content=\'BR-Contagem Feijão Miúdo MG\' />
',
                    'slug' => 'contagem-feijao-miudo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                474 => 
                array (
                    'id' => 476,
                    'name' => 'Contagem Flamengo MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Flamengo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Flamengo MG\' />
',
                    'slug' => 'contagem-flamengo-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                475 => 
                array (
                    'id' => 477,
                    'name' => 'Contagem Fonte Grande MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Fonte Grande MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9266737;-44.0877118\' />
<meta name=\'geo.region\' content=\'BR-Contagem Fonte Grande MG\' />
',
                    'slug' => 'contagem-fonte-grande-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                476 => 
                array (
                    'id' => 478,
                    'name' => 'Contagem Funcionários MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Funcionários MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Funcionários MG\' />
',
                    'slug' => 'contagem-funcionarios-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                477 => 
                array (
                    'id' => 479,
                    'name' => 'Contagem Glória MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Glória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9362663;-44.0486741\' />
<meta name=\'geo.region\' content=\'BR-Contagem Glória MG\' />
',
                    'slug' => 'contagem-gloria-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                478 => 
                array (
                    'id' => 480,
                    'name' => 'Contagem Granja Ouro Branco MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Granja Ouro Branco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8837104;-44.1015380\' />
<meta name=\'geo.region\' content=\'BR-Contagem Granja Ouro Bran',
                    'slug' => 'contagem-granja-ouro-branco-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                479 => 
                array (
                    'id' => 481,
                    'name' => 'Contagem Granja Vista Alegre MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Granja Vista Alegre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Granja Vista Al',
                    'slug' => 'contagem-granja-vista-alegre-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                480 => 
                array (
                    'id' => 482,
                    'name' => 'Contagem Guanabara MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Guanabara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8857742;-44.0336409\' />
<meta name=\'geo.region\' content=\'BR-Contagem Guanabara MG\' />
',
                    'slug' => 'contagem-guanabara-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                481 => 
                array (
                    'id' => 483,
                    'name' => 'Contagem Icaivera MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Icaivera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8578027;-44.1454022\' />
<meta name=\'geo.region\' content=\'BR-Contagem Icaivera MG\' />
',
                    'slug' => 'contagem-icaivera-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                482 => 
                array (
                    'id' => 484,
                    'name' => 'Contagem Inconfidentes MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Inconfidentes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9625139;-44.0359257\' />
<meta name=\'geo.region\' content=\'BR-Contagem Inconfidentes MG\' />
',
                    'slug' => 'contagem-inconfidentes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                483 => 
                array (
                    'id' => 485,
                    'name' => 'Contagem Industrial MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Industrial MG\' />
',
                    'slug' => 'contagem-industrial-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                484 => 
                array (
                    'id' => 486,
                    'name' => 'Contagem Industrial Itaú MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Industrial Itaú MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Industrial Itaú MG\'',
                    'slug' => 'contagem-industrial-itau-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                485 => 
                array (
                    'id' => 487,
                    'name' => 'Contagem Industrial Santa Cruz MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Industrial Santa Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9231253;-44.0629179\' />
<meta name=\'geo.region\' content=\'BR-Contagem Industrial Sa',
                    'slug' => 'contagem-industrial-santa-cruz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                486 => 
                array (
                    'id' => 488,
                    'name' => 'Contagem Industrial Santa Rita MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Industrial Santa Rita MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9733648;-44.0436601\' />
<meta name=\'geo.region\' content=\'BR-Contagem Industrial Sa',
                    'slug' => 'contagem-industrial-santa-rita-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                487 => 
                array (
                    'id' => 489,
                    'name' => 'Contagem Industrial São Luiz MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Industrial São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8874816;-44.0913457\' />
<meta name=\'geo.region\' content=\'BR-Contagem Industrial São ',
                    'slug' => 'contagem-industrial-sao-luiz-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                488 => 
                array (
                    'id' => 490,
                    'name' => 'Contagem Janjão MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Janjão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9241551;-44.1010806\' />
<meta name=\'geo.region\' content=\'BR-Contagem Janjão MG\' />
',
                    'slug' => 'contagem-janjao-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                489 => 
                array (
                    'id' => 491,
                    'name' => 'Contagem Jardim Alvorada MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9444217;-44.0573031\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Alvorada MG\'',
                    'slug' => 'contagem-jardim-alvorada-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                490 => 
                array (
                    'id' => 492,
                    'name' => 'Contagem Jardim Balneário MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Balneário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8850304;-44.0210003\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Balneário M',
                    'slug' => 'contagem-jardim-balneario-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                491 => 
                array (
                    'id' => 493,
                    'name' => 'Contagem Jardim Bandeirantes MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Bandeirantes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9253934;-44.0339740\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Bandeira',
                    'slug' => 'contagem-jardim-bandeirantes-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                492 => 
                array (
                    'id' => 494,
                    'name' => 'Contagem Jardim Califórnia MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Califórnia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9493810;-44.0417391\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Califórnia',
                    'slug' => 'contagem-jardim-california-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                493 => 
                array (
                    'id' => 495,
                    'name' => 'Contagem Jardim das Oliveiras MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim das Oliveiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8934363;-44.0319345\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim das Oli',
                    'slug' => 'contagem-jardim-das-oliveiras-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                494 => 
                array (
                    'id' => 496,
                    'name' => 'Contagem Jardim do Lago MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim do Lago MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8806795;-44.0463212\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim do Lago MG\' /',
                    'slug' => 'contagem-jardim-do-lago-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                495 => 
                array (
                    'id' => 497,
                    'name' => 'Contagem Jardim Industrial MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9721047;-44.0250217\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Industrial',
                    'slug' => 'contagem-jardim-industrial-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                496 => 
                array (
                    'id' => 498,
                    'name' => 'Contagem Jardim Laguna MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Laguna MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9203693;-44.0869875\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Laguna MG\' />
',
                    'slug' => 'contagem-jardim-laguna-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                497 => 
                array (
                    'id' => 499,
                    'name' => 'Contagem Jardim Marrocos MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Marrocos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9231253;-44.0629179\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Marrocos MG\'',
                    'slug' => 'contagem-jardim-marrocos-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                498 => 
                array (
                    'id' => 500,
                    'name' => 'Contagem Jardim Pérola MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Pérola MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8890271;-44.0166331\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Pérola MG\' />
',
                    'slug' => 'contagem-jardim-perola-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                499 => 
                array (
                    'id' => 501,
                    'name' => 'Contagem Jardim Riacho das Pedras MG',
                    'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Riacho das Pedras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9361636;-44.0123064\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Ria',
                    'slug' => 'contagem-jardim-riacho-das-pedras-mg',
                    'print' => 1,
                    'state_id' => '0',
                    'parent_local_id' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 502,
                'name' => 'Contagem Jardim Vera Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Vera Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8951403;-44.0809221\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Vera Cruz M',
                'slug' => 'contagem-jardim-vera-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 503,
                'name' => 'Contagem Jardim Vera Cruz 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Jardim Vera Cruz 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9306268;-44.0924570\' />
<meta name=\'geo.region\' content=\'BR-Contagem Jardim Vera Cruz',
                'slug' => 'contagem-jardim-vera-cruz-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 504,
                'name' => 'Contagem JK MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem JK MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9460966;-44.0295210\' />
<meta name=\'geo.region\' content=\'BR-Contagem JK MG\' />
',
                'slug' => 'contagem-jk-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 505,
                'name' => 'Contagem Kennedy MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Kennedy MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8882297;-44.0473656\' />
<meta name=\'geo.region\' content=\'BR-Contagem Kennedy MG\' />
',
                'slug' => 'contagem-kennedy-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 506,
            'name' => 'Contagem Kennedy (Ceasa) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Kennedy (Ceasa) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8377354;-44.0250319\' />
<meta name=\'geo.region\' content=\'BR-Contagem Kennedy (Ceasa) MG\'',
                'slug' => 'contagem-kennedy-ceasa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 507,
                'name' => 'Contagem Liberdade 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Liberdade 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9475005;-44.1712873\' />
<meta name=\'geo.region\' content=\'BR-Contagem Liberdade 1 MG\' />
',
                'slug' => 'contagem-liberdade-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 508,
                'name' => 'Contagem Liberdade 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Liberdade 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8678574;-44.0447962\' />
<meta name=\'geo.region\' content=\'BR-Contagem Liberdade 2 MG\' />
',
                'slug' => 'contagem-liberdade-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 509,
                'name' => 'Contagem Linda Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Linda Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9086789;-44.0689391\' />
<meta name=\'geo.region\' content=\'BR-Contagem Linda Vista MG\' />
',
                'slug' => 'contagem-linda-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 510,
                'name' => 'Contagem Lua Nova da Pampulha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Lua Nova da Pampulha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8360403;-44.0331947\' />
<meta name=\'geo.region\' content=\'BR-Contagem Lua Nova da Pa',
                'slug' => 'contagem-lua-nova-da-pampulha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 511,
                'name' => 'Contagem Lúcio de Abreu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Lúcio de Abreu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9260997;-44.1023499\' />
<meta name=\'geo.region\' content=\'BR-Contagem Lúcio de Abreu MG\' /',
                'slug' => 'contagem-lucio-de-abreu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 512,
                'name' => 'Contagem Maria da Conceição MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Maria da Conceição MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9636095;-44.0149310\' />
<meta name=\'geo.region\' content=\'BR-Contagem Maria da Conceiç',
                'slug' => 'contagem-maria-da-conceicao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 513,
                'name' => 'Contagem Milanez MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Milanez MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9164564;-44.0323838\' />
<meta name=\'geo.region\' content=\'BR-Contagem Milanez MG\' />
',
                'slug' => 'contagem-milanez-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 514,
                'name' => 'Contagem Monsenhor Horta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Monsenhor Horta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9031117;-44.0834970\' />
<meta name=\'geo.region\' content=\'BR-Contagem Monsenhor Horta MG\'',
                'slug' => 'contagem-monsenhor-horta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 515,
                'name' => 'Contagem Monte Castelo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Monte Castelo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9434749;-44.0690181\' />
<meta name=\'geo.region\' content=\'BR-Contagem Monte Castelo MG\' />
',
                'slug' => 'contagem-monte-castelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 516,
                'name' => 'Contagem Morada Nova MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Morada Nova MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Morada Nova MG\' />
',
                'slug' => 'contagem-morada-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 517,
                'name' => 'Contagem Nacional MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nacional MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8456182;-44.0249938\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nacional MG\' />
',
                'slug' => 'contagem-nacional-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 518,
                'name' => 'Contagem Nazaré MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nazaré MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8546228;-44.1436251\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nazaré MG\' />
',
                'slug' => 'contagem-nazare-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 519,
                'name' => 'Contagem Nossa Senhora da Conceição MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nossa Senhora da Conceição MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8547718;-44.0508518\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nossa Se',
                'slug' => 'contagem-nossa-senhora-da-conceicao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 520,
                'name' => 'Contagem Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9109811;-44.0851421\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nossa Senho',
                'slug' => 'contagem-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 521,
                'name' => 'Contagem Nossa Senhora do Carmo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nossa Senhora do Carmo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9203693;-44.0869875\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nossa Senhor',
                'slug' => 'contagem-nossa-senhora-do-carmo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 522,
                'name' => 'Contagem Nova Contagem MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Nova Contagem MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8301154;-44.1510524\' />
<meta name=\'geo.region\' content=\'BR-Contagem Nova Contagem MG\' />
',
                'slug' => 'contagem-nova-contagem-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 523,
                'name' => 'Contagem Novo Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Novo Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8847439;-44.0500053\' />
<meta name=\'geo.region\' content=\'BR-Contagem Novo Boa Vista MG\' /',
                'slug' => 'contagem-novo-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 524,
                'name' => 'Contagem Novo Eldorado MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Novo Eldorado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9668235;-44.0268463\' />
<meta name=\'geo.region\' content=\'BR-Contagem Novo Eldorado MG\' />
',
                'slug' => 'contagem-novo-eldorado-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 525,
                'name' => 'Contagem Novo Progresso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Novo Progresso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9203693;-44.0869875\' />
<meta name=\'geo.region\' content=\'BR-Contagem Novo Progresso MG\' /',
                'slug' => 'contagem-novo-progresso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 526,
                'name' => 'Contagem Novo Recanto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Novo Recanto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8594614;-44.0245569\' />
<meta name=\'geo.region\' content=\'BR-Contagem Novo Recanto MG\' />
',
                'slug' => 'contagem-novo-recanto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 527,
                'name' => 'Contagem Oitis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Oitis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9057369;-44.0380855\' />
<meta name=\'geo.region\' content=\'BR-Contagem Oitis MG\' />
',
                'slug' => 'contagem-oitis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 528,
                'name' => 'Contagem Olinda MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Olinda MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8944212;-44.0782023\' />
<meta name=\'geo.region\' content=\'BR-Contagem Olinda MG\' />
',
                'slug' => 'contagem-olinda-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 529,
                'name' => 'Contagem Parque Ayrton Senna MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Ayrton Senna MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8968573;-44.0321862\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Ayrton S',
                'slug' => 'contagem-parque-ayrton-senna-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 530,
                'name' => 'Contagem Parque Belo Horizonte Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Belo Horizonte Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9297817;-44.0581901\' />
<meta name=\'geo.region\' content=\'BR-Contagem Pa',
                'slug' => 'contagem-parque-belo-horizonte-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 531,
                'name' => 'Contagem Parque Duval de Barros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Duval de Barros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9747883;-44.0652896\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Duval',
                'slug' => 'contagem-parque-duval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 532,
                'name' => 'Contagem Parque Maracanã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Maracanã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9215126;-44.0907489\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Maracanã MG\'',
                'slug' => 'contagem-parque-maracana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 533,
                'name' => 'Contagem Parque Recreio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Recreio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9029177;-44.0857384\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Recreio MG\' /',
                'slug' => 'contagem-parque-recreio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 534,
                'name' => 'Contagem Parque Riacho das Pedras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Riacho das Pedras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9517153;-44.0551487\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Ria',
                'slug' => 'contagem-parque-riacho-das-pedras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 535,
                'name' => 'Contagem Parque Riacho das Pedras 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Riacho das Pedras 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9535589;-44.0618561\' />
<meta name=\'geo.region\' content=\'BR-Contagem P',
                'slug' => 'contagem-parque-riacho-das-pedras-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 536,
                'name' => 'Contagem Parque São João MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque São João MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9206381;-44.0557870\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque São João MG\'',
                'slug' => 'contagem-parque-sao-joao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 537,
                'name' => 'Contagem Parque Turistas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Turistas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8800088;-44.0178608\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Turistas MG\'',
                'slug' => 'contagem-parque-turistas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 538,
                'name' => 'Contagem Parque Xangri-Lá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Parque Xangri-Lá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8331689;-44.0241964\' />
<meta name=\'geo.region\' content=\'BR-Contagem Parque Xangri-Lá M',
                'slug' => 'contagem-parque-xangri-la-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 539,
                'name' => 'Contagem Pedra Azul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Pedra Azul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8574520;-44.0327545\' />
<meta name=\'geo.region\' content=\'BR-Contagem Pedra Azul MG\' />
',
                'slug' => 'contagem-pedra-azul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 540,
                'name' => 'Contagem Pedra Azul 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Pedra Azul 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8547185;-44.0413298\' />
<meta name=\'geo.region\' content=\'BR-Contagem Pedra Azul 3ª S',
                'slug' => 'contagem-pedra-azul-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 541,
                'name' => 'Contagem Perobas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Perobas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9244503;-44.0620541\' />
<meta name=\'geo.region\' content=\'BR-Contagem Perobas MG\' />
',
                'slug' => 'contagem-perobas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 542,
                'name' => 'Contagem Perobas 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Perobas 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9166208;-44.0628240\' />
<meta name=\'geo.region\' content=\'BR-Contagem Perobas 2 MG\' />
',
                'slug' => 'contagem-perobas-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 543,
                'name' => 'Contagem Petrolândia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Petrolândia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9278804;-44.1030364\' />
<meta name=\'geo.region\' content=\'BR-Contagem Petrolândia MG\' />
',
                'slug' => 'contagem-petrolandia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 544,
                'name' => 'Contagem Portal do Sol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Portal do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9330204;-44.0264789\' />
<meta name=\'geo.region\' content=\'BR-Contagem Portal do Sol MG\' />
',
                'slug' => 'contagem-portal-do-sol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 545,
                'name' => 'Contagem Praia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Praia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8874816;-44.0913457\' />
<meta name=\'geo.region\' content=\'BR-Contagem Praia MG\' />
',
                'slug' => 'contagem-praia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 546,
                'name' => 'Contagem Quintas Coloniais MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Quintas Coloniais MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8904287;-44.0825137\' />
<meta name=\'geo.region\' content=\'BR-Contagem Quintas Coloniais',
                'slug' => 'contagem-quintas-coloniais-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 547,
                'name' => 'Contagem Quintas do Jacuba MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Quintas do Jacuba MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9296552;-44.0283672\' />
<meta name=\'geo.region\' content=\'BR-Contagem Quintas do Jacuba',
                'slug' => 'contagem-quintas-do-jacuba-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 548,
                'name' => 'Contagem Recanto da Pampulha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Recanto da Pampulha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8607658;-44.0233053\' />
<meta name=\'geo.region\' content=\'BR-Contagem Recanto da Pamp',
                'slug' => 'contagem-recanto-da-pampulha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 549,
                'name' => 'Contagem Ressaca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Ressaca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8856270;-44.0300407\' />
<meta name=\'geo.region\' content=\'BR-Contagem Ressaca MG\' />
',
                'slug' => 'contagem-ressaca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 550,
                'name' => 'Contagem Retiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Retiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Retiro MG\' />
',
                'slug' => 'contagem-retiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 551,
                'name' => 'Contagem Retiro dos Sonhos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Retiro dos Sonhos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Retiro dos Sonhos',
                'slug' => 'contagem-retiro-dos-sonhos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 552,
                'name' => 'Contagem Riacho das Pedras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Riacho das Pedras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9456929;-44.0645107\' />
<meta name=\'geo.region\' content=\'BR-Contagem Riacho das Pedras',
                'slug' => 'contagem-riacho-das-pedras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 553,
                'name' => 'Contagem Santa Cruz Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Cruz Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9449419;-44.0568256\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Cruz In',
                'slug' => 'contagem-santa-cruz-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 554,
                'name' => 'Contagem Santa Edwiges MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Edwiges MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9146462;-44.0895144\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Edwiges MG\' />
',
                'slug' => 'contagem-santa-edwiges-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 555,
                'name' => 'Contagem Santa Helena MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Helena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Helena MG\' />
',
                'slug' => 'contagem-santa-helena-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 556,
                'name' => 'Contagem Santa Luzia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Luzia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9059477;-44.0929121\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Luzia MG\' />
',
                'slug' => 'contagem-santa-luzia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 557,
                'name' => 'Contagem Santa Maria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Maria MG\' />
',
                'slug' => 'contagem-santa-maria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 558,
                'name' => 'Contagem Santa Terezinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santa Terezinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santa Terezinha MG\'',
                'slug' => 'contagem-santa-terezinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 559,
                'name' => 'Contagem Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8611112;-44.0191337\' />
<meta name=\'geo.region\' content=\'BR-Contagem Santo Antônio MG\' />
',
                'slug' => 'contagem-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 560,
                'name' => 'Contagem São Caetano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Caetano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9341375;-44.1178151\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Caetano MG\' />
',
                'slug' => 'contagem-sao-caetano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 561,
                'name' => 'Contagem São Gonçalo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Gonçalo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9071376;-44.0854371\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Gonçalo MG\' />
',
                'slug' => 'contagem-sao-goncalo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 562,
                'name' => 'Contagem São Gotardo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Gotardo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9252533;-44.1019864\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Gotardo MG\' />
',
                'slug' => 'contagem-sao-gotardo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 563,
                'name' => 'Contagem São Joaquim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Joaquim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8755159;-44.0191469\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Joaquim MG\' />
',
                'slug' => 'contagem-sao-joaquim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 564,
                'name' => 'Contagem São Joaquim 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Joaquim 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8787054;-44.0253585\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Joaquim 3ª',
                'slug' => 'contagem-sao-joaquim-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 565,
                'name' => 'Contagem São Mateus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Mateus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602240;-44.0285488\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Mateus MG\' />
',
                'slug' => 'contagem-sao-mateus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 566,
                'name' => 'Contagem São Sebastião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Sebastião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Sebastião MG\' />
',
                'slug' => 'contagem-sao-sebastiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 567,
                'name' => 'Contagem São Sebastião - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem São Sebastião - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8502351;-44.0398299\' />
<meta name=\'geo.region\' content=\'BR-Contagem São Sebast',
                'slug' => 'contagem-sao-sebastiao-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 568,
                'name' => 'Contagem Sapucaia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Sapucaia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8948920;-44.0556073\' />
<meta name=\'geo.region\' content=\'BR-Contagem Sapucaia MG\' />
',
                'slug' => 'contagem-sapucaia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 569,
                'name' => 'Contagem Sapucaia 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Sapucaia 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8817325;-44.0316783\' />
<meta name=\'geo.region\' content=\'BR-Contagem Sapucaia 2 MG\' />
',
                'slug' => 'contagem-sapucaia-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 570,
                'name' => 'Contagem Sapucaias 3 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Sapucaias 3 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8896491;-44.0331622\' />
<meta name=\'geo.region\' content=\'BR-Contagem Sapucaias 3 MG\' />
',
                'slug' => 'contagem-sapucaias-3-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 571,
                'name' => 'Contagem Serrano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Serrano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8798922;-44.0142209\' />
<meta name=\'geo.region\' content=\'BR-Contagem Serrano MG\' />
',
                'slug' => 'contagem-serrano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 572,
                'name' => 'Contagem Solar do Madeira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Solar do Madeira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8965932;-44.1377301\' />
<meta name=\'geo.region\' content=\'BR-Contagem Solar do Madeira M',
                'slug' => 'contagem-solar-do-madeira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 573,
                'name' => 'Contagem Tapera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Tapera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Tapera MG\' />
',
                'slug' => 'contagem-tapera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 574,
                'name' => 'Contagem Tijuca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Tijuca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8589181;-44.0211726\' />
<meta name=\'geo.region\' content=\'BR-Contagem Tijuca MG\' />
',
                'slug' => 'contagem-tijuca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 575,
                'name' => 'Contagem Três Barras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Três Barras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9154185;-44.0747580\' />
<meta name=\'geo.region\' content=\'BR-Contagem Três Barras MG\' />
',
                'slug' => 'contagem-tres-barras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 576,
                'name' => 'Contagem Tropical MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Tropical MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9162803;-44.1158825\' />
<meta name=\'geo.region\' content=\'BR-Contagem Tropical MG\' />
',
                'slug' => 'contagem-tropical-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 577,
                'name' => 'Contagem Tupã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Tupã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9152133;-44.0362852\' />
<meta name=\'geo.region\' content=\'BR-Contagem Tupã MG\' />
',
                'slug' => 'contagem-tupa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 578,
                'name' => 'Contagem Vale das Amendoeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vale das Amendoeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8520200;-44.0364701\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vale das Amend',
                'slug' => 'contagem-vale-das-amendoeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 579,
                'name' => 'Contagem Vale das Orquídeas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vale das Orquídeas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8522060;-44.0310633\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vale das Orquíde',
                'slug' => 'contagem-vale-das-orquideas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 580,
                'name' => 'Contagem Vera Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vera Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9629886;-44.0443708\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vera Cruz MG\' />
',
                'slug' => 'contagem-vera-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 581,
                'name' => 'Contagem Vila Barroquinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Barroquinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8943082;-44.0927630\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Barroquinha M',
                'slug' => 'contagem-vila-barroquinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 582,
                'name' => 'Contagem Vila Beatriz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Beatriz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8293206;-44.1556053\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Beatriz MG\' />
',
                'slug' => 'contagem-vila-beatriz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 583,
                'name' => 'Contagem Vila Beija-Flor MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Beija-Flor MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9238706;-44.1259719\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Beija-Flor MG\'',
                'slug' => 'contagem-vila-beija-flor-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 584,
                'name' => 'Contagem Vila Belém MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Belém MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9211179;-44.0974782\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Belém MG\' />
',
                'slug' => 'contagem-vila-belem-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 585,
                'name' => 'Contagem Vila Beneves MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Beneves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8488980;-44.0224642\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Beneves MG\' />
',
                'slug' => 'contagem-vila-beneves-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 586,
                'name' => 'Contagem Vila Boa Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Boa Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Boa Esperan',
                'slug' => 'contagem-vila-boa-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 587,
                'name' => 'Contagem Vila Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8496839;-44.0140221\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Boa Vista MG\' /',
                'slug' => 'contagem-vila-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 588,
                'name' => 'Contagem Vila Cristina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Cristina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9517061;-43.9961308\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Cristina MG\' />
',
                'slug' => 'contagem-vila-cristina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 589,
                'name' => 'Contagem Vila Feliz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Feliz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Feliz MG\' />
',
                'slug' => 'contagem-vila-feliz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 590,
                'name' => 'Contagem Vila Francisco Mariano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Francisco Mariano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8585761;-44.0244776\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Francis',
                'slug' => 'contagem-vila-francisco-mariano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 591,
                'name' => 'Contagem Vila Ipê Amarelo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Ipê Amarelo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8123150;-44.1447641\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Ipê Amarelo M',
                'slug' => 'contagem-vila-ipe-amarelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 592,
                'name' => 'Contagem Vila Itália MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Itália MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8710657;-44.0830156\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Itália MG\' />
',
                'slug' => 'contagem-vila-italia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 593,
                'name' => 'Contagem Vila Líder MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Líder MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9161508;-44.0808763\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Líder MG\' />
',
                'slug' => 'contagem-vila-lider-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 594,
                'name' => 'Contagem Vila Magdalena MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Magdalena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9309582;-44.0842937\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Magdalena MG\' /',
                'slug' => 'contagem-vila-magdalena-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 595,
                'name' => 'Contagem Vila Militar MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Militar MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8893564;-44.0787574\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Militar MG\' />
',
                'slug' => 'contagem-vila-militar-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 596,
                'name' => 'Contagem Vila Morro Vermelho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Morro Vermelho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9328984;-44.0339928\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Morro Verm',
                'slug' => 'contagem-vila-morro-vermelho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 597,
                'name' => 'Contagem Vila Nova Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Nova Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8285805;-44.1506651\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Nova Esper',
                'slug' => 'contagem-vila-nova-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 598,
                'name' => 'Contagem Vila Panamá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Panamá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9234054;-44.0934391\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Panamá MG\' />
',
                'slug' => 'contagem-vila-panama-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 599,
                'name' => 'Contagem Vila Paris MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Paris MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9231414;-44.0252710\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Paris MG\' />
',
                'slug' => 'contagem-vila-paris-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 600,
                'name' => 'Contagem Vila Renascer MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Renascer MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8397124;-44.0260075\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Renascer MG\' />
',
                'slug' => 'contagem-vila-renascer-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 601,
                'name' => 'Contagem Vila Ruy Barbosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Ruy Barbosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9656423;-44.0207397\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Ruy Barbosa M',
                'slug' => 'contagem-vila-ruy-barbosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 602,
                'name' => 'Contagem Vila Santa Luzia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Santa Luzia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8844842;-44.0318065\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Santa Luzia M',
                'slug' => 'contagem-vila-santa-luzia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 603,
                'name' => 'Contagem Vila São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9490342;-44.0931972\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila São José MG\' />
',
                'slug' => 'contagem-vila-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 604,
                'name' => 'Contagem Vila São Paulo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila São Paulo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9556464;-44.0145659\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila São Paulo MG\' /',
                'slug' => 'contagem-vila-sao-paulo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 605,
                'name' => 'Contagem Vila Universal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Vila Universal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9342643;-44.1102243\' />
<meta name=\'geo.region\' content=\'BR-Contagem Vila Universal MG\' /',
                'slug' => 'contagem-vila-universal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 606,
                'name' => 'Contagem Zonas Industriais do Riacho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Contagem Zonas Industriais do Riacho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9552254;-44.0666643\' />
<meta name=\'geo.region\' content=\'BR-Contagem Zonas I',
                'slug' => 'contagem-zonas-industriais-do-riacho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 607,
                'name' => 'Nova Lima',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-;-\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima\' />
<meta name=\'ICBM\' content=\'-, -\'/>',
                'slug' => 'nova-lima',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 608,
                'name' => 'Nova Lima Alphaville - Lagoa dos Ingleses MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Alphaville - Lagoa dos Ingleses MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.1058344;-43.9723567\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima A',
                'slug' => 'nova-lima-alphaville-lagoa-dos-ingleses-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 609,
                'name' => 'Nova Lima Alto do Gaia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Alto do Gaia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0097598;-43.8381867\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Alto do Gaia MG\' />
',
                'slug' => 'nova-lima-alto-do-gaia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 610,
                'name' => 'Nova Lima Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9959823;-43.8538922\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Alvorada MG\' />
',
                'slug' => 'nova-lima-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 611,
                'name' => 'Nova Lima Balneário Água Limpa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Balneário Água Limpa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9904374;-43.9055686\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Balneário Ág',
                'slug' => 'nova-lima-balneario-agua-limpa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 612,
                'name' => 'Nova Lima Barra do Céu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Barra do Céu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9928046;-43.8452268\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Barra do Céu MG\' />
',
                'slug' => 'nova-lima-barra-do-ceu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 613,
                'name' => 'Nova Lima Bela Fama MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Bela Fama MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0059659;-43.8345078\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Bela Fama MG\' />
',
                'slug' => 'nova-lima-bela-fama-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 614,
                'name' => 'Nova Lima Bom Jardim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Bom Jardim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9312170;-43.9447027\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Bom Jardim MG\' />
',
                'slug' => 'nova-lima-bom-jardim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 615,
                'name' => 'Nova Lima Bonfim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Bonfim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9872249;-43.8478024\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Bonfim MG\' />
',
                'slug' => 'nova-lima-bonfim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 616,
                'name' => 'Nova Lima Bosque Residencial do Jambreiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Bosque Residencial do Jambreiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9963215;-43.8449990\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima B',
                'slug' => 'nova-lima-bosque-residencial-do-jambreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 617,
                'name' => 'Nova Lima Cabeceiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Cabeceiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9883724;-43.8742340\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Cabeceiras MG\' />
',
                'slug' => 'nova-lima-cabeceiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 618,
                'name' => 'Nova Lima Campo do Pires MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Campo do Pires MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9881243;-43.8515826\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Campo do Pires MG\'',
                'slug' => 'nova-lima-campo-do-pires-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 619,
                'name' => 'Nova Lima Capela Velha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Capela Velha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0438441;-43.9154134\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Capela Velha MG\' />
',
                'slug' => 'nova-lima-capela-velha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 620,
                'name' => 'Nova Lima Cascalho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Cascalho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9925361;-43.8464225\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Cascalho MG\' />
',
                'slug' => 'nova-lima-cascalho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 621,
                'name' => 'Nova Lima Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9830726;-43.8515156\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Centro MG\' />
',
                'slug' => 'nova-lima-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 622,
                'name' => 'Nova Lima Chácara Bom Retiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Chácara Bom Retiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0044826;-43.8553806\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Chácara Bom Re',
                'slug' => 'nova-lima-chacara-bom-retiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 623,
                'name' => 'Nova Lima Chácara Luiz Daniel MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Chácara Luiz Daniel MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9897886;-43.8519785\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Chácara Luiz ',
                'slug' => 'nova-lima-chacara-luiz-daniel-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 624,
                'name' => 'Nova Lima Cristais Curitiba MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Cristais Curitiba MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9969524;-43.8585135\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Cristais Curiti',
                'slug' => 'nova-lima-cristais-curitiba-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 625,
                'name' => 'Nova Lima Cruzeiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Cruzeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8102126;-43.9716472\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Cruzeiro MG\' />
',
                'slug' => 'nova-lima-cruzeiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 626,
                'name' => 'Nova Lima Distrito Industrial Bela Fama MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Distrito Industrial Bela Fama MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0001157;-43.8375574\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Dis',
                'slug' => 'nova-lima-distrito-industrial-bela-fama-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 627,
                'name' => 'Nova Lima Estância Estoril 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Estância Estoril 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9836751;-43.9434397\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Estância Estor',
                'slug' => 'nova-lima-estancia-estoril-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 628,
                'name' => 'Nova Lima Galo Novo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Galo Novo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9742993;-43.8270679\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Galo Novo MG\' />
',
                'slug' => 'nova-lima-galo-novo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 629,
                'name' => 'Nova Lima Honório Bicalho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Honório Bicalho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0223172;-43.8300532\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Honório Bicalho M',
                'slug' => 'nova-lima-honorio-bicalho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 630,
                'name' => 'Nova Lima Ipê MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Ipê MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9962422;-43.8953733\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Ipê MG\' />
',
                'slug' => 'nova-lima-ipe-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 631,
                'name' => 'Nova Lima Jardim Canadá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Jardim Canadá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0545465;-43.9842296\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Jardim Canadá MG\' /',
                'slug' => 'nova-lima-jardim-canada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 632,
                'name' => 'Nova Lima Jardim das Mangabeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Jardim das Mangabeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9809564;-43.9329438\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Jardim das',
                'slug' => 'nova-lima-jardim-das-mangabeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 633,
                'name' => 'Nova Lima Jardim Monte Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Jardim Monte Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0530642;-43.9691619\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Jardim Monte V',
                'slug' => 'nova-lima-jardim-monte-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 634,
                'name' => 'Nova Lima Jardim Serrano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Jardim Serrano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9063837;-43.9834275\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Jardim Serrano MG\'',
                'slug' => 'nova-lima-jardim-serrano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 635,
                'name' => 'Nova Lima Jardinaves MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Jardinaves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9793876;-43.9368152\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Jardinaves MG\' />
',
                'slug' => 'nova-lima-jardinaves-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 636,
                'name' => 'Nova Lima Lagoa do Miguelão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Lagoa do Miguelão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0995933;-43.9750180\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Lagoa do Miguel',
                'slug' => 'nova-lima-lagoa-do-miguelao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 637,
                'name' => 'Nova Lima Matadouro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Matadouro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9876921;-43.8464460\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Matadouro MG\' />
',
                'slug' => 'nova-lima-matadouro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 638,
                'name' => 'Nova Lima Mina D\'água 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Mina D\'água 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9685005;-43.8515438\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Mina D\'água 2 MG\' /',
                'slug' => 'nova-lima-mina-d-agua-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 639,
                'name' => 'Nova Lima Mina de Águas Claras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Mina de Águas Claras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9727333;-43.9288829\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Mina de Água',
                'slug' => 'nova-lima-mina-de-aguas-claras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 640,
                'name' => 'Nova Lima Mingú MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Mingú MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9778221;-43.8470472\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Mingú MG\' />
',
                'slug' => 'nova-lima-mingu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 641,
                'name' => 'Nova Lima Mirante da Mata MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Mirante da Mata MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9984814;-43.8831106\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Mirante da Mata M',
                'slug' => 'nova-lima-mirante-da-mata-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 642,
                'name' => 'Nova Lima Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0030325;-43.8388081\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Nossa Sen',
                'slug' => 'nova-lima-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 643,
                'name' => 'Nova Lima Olaria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Olaria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9827837;-43.8580174\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Olaria MG\' />
',
                'slug' => 'nova-lima-olaria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 644,
                'name' => 'Nova Lima Oswaldo Barbosa Pena 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Oswaldo Barbosa Pena 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0104552;-43.8541669\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Oswaldo Ba',
                'slug' => 'nova-lima-oswaldo-barbosa-pena-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 645,
                'name' => 'Nova Lima Ouro Velho Mansões MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Ouro Velho Mansões MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9998671;-43.8941829\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Ouro Velho Man',
                'slug' => 'nova-lima-ouro-velho-mansoes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 646,
                'name' => 'Nova Lima Parque do Tumbá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Parque do Tumbá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9805762;-43.8220579\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Parque do Tumbá M',
                'slug' => 'nova-lima-parque-do-tumba-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 647,
                'name' => 'Nova Lima Pasárgada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Pasárgada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9982944;-43.8930927\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Pasárgada MG\' />
',
                'slug' => 'nova-lima-pasargada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 648,
                'name' => 'Nova Lima Pasto da Balança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Pasto da Balança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0256805;-43.8271201\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Pasto da Balança',
                'slug' => 'nova-lima-pasto-da-balanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 649,
                'name' => 'Nova Lima Quintas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Quintas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9886295;-43.8560918\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Quintas MG\' />
',
                'slug' => 'nova-lima-quintas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 650,
                'name' => 'Nova Lima Quintas do Morro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Quintas do Morro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9775002;-43.8466938\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Quintas do Morro',
                'slug' => 'nova-lima-quintas-do-morro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 651,
                'name' => 'Nova Lima Quintas do Sol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Quintas do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9847444;-43.8472881\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Quintas do Sol MG\'',
                'slug' => 'nova-lima-quintas-do-sol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 652,
                'name' => 'Nova Lima Riviera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Riviera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9952049;-43.9565285\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Riviera MG\' />
',
                'slug' => 'nova-lima-riviera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 653,
                'name' => 'Nova Lima Santa Rita MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Santa Rita MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0455736;-43.8215374\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Santa Rita MG\' />
',
                'slug' => 'nova-lima-santa-rita-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 654,
                'name' => 'Nova Lima São Sebastião das Águas Claras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima São Sebastião das Águas Claras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0500690;-43.9158710\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Sã',
                'slug' => 'nova-lima-sao-sebastiao-das-aguas-claras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 655,
                'name' => 'Nova Lima Serra do Curral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Serra do Curral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9957272;-43.9607474\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Serra do Curral M',
                'slug' => 'nova-lima-serra-do-curral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 656,
                'name' => 'Nova Lima Serra do Curral Del Rey MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Serra do Curral Del Rey MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9727333;-43.9288829\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Serra do ',
                'slug' => 'nova-lima-serra-do-curral-del-rey-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 657,
                'name' => 'Nova Lima Solar da Lagoa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Solar da Lagoa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.6248775;-43.8866489\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Solar da Lagoa MG\'',
                'slug' => 'nova-lima-solar-da-lagoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 658,
                'name' => 'Nova Lima Unidade de Vizinhanças Quintas Morro do Chapéu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Unidade de Vizinhanças Quintas Morro do Chapéu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.1956022;-43.9899314\' />
<meta name=\'geo.region\' content=',
                'slug' => 'nova-lima-unidade-de-vizinhancas-quintas-morro-do-chapeu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 659,
                'name' => 'Nova Lima Vale da Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vale da Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9994669;-43.8497073\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vale da Esperan',
                'slug' => 'nova-lima-vale-da-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 660,
                'name' => 'Nova Lima Vale do Sereno MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vale do Sereno MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9846566;-43.9381660\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vale do Sereno MG\'',
                'slug' => 'nova-lima-vale-do-sereno-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 661,
                'name' => 'Nova Lima Vale do Sol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vale do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9957272;-43.9607474\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vale do Sol MG\' />
',
                'slug' => 'nova-lima-vale-do-sol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 662,
                'name' => 'Nova Lima Vale dos Cristais MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vale dos Cristais MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0036770;-43.9342774\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vale dos Crista',
                'slug' => 'nova-lima-vale-dos-cristais-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 663,
                'name' => 'Nova Lima Veredas das Geraes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Veredas das Geraes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9881243;-43.8515826\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Veredas das Ge',
                'slug' => 'nova-lima-veredas-das-geraes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 664,
                'name' => 'Nova Lima Vila Campestre MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Campestre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0105878;-43.9621996\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Campestre MG\'',
                'slug' => 'nova-lima-vila-campestre-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 665,
                'name' => 'Nova Lima Vila Castela-2ª Etapa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Castela-2ª Etapa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0077627;-43.8361814\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Castel',
                'slug' => 'nova-lima-vila-castela-2-etapa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 666,
                'name' => 'Nova Lima Vila da Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila da Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9966846;-43.9151586\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila da Serra MG\' /',
                'slug' => 'nova-lima-vila-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 667,
                'name' => 'Nova Lima Vila Del Rey MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Del Rey MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8473429;-43.9308565\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Del Rey MG\' />
',
                'slug' => 'nova-lima-vila-del-rey-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 668,
                'name' => 'Nova Lima Vila Industrial 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Industrial 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0010872;-43.8884163\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Industrial',
                'slug' => 'nova-lima-vila-industrial-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 669,
                'name' => 'Nova Lima Vila Industrial 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Industrial 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0006657;-43.8865549\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Industrial',
                'slug' => 'nova-lima-vila-industrial-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 670,
                'name' => 'Nova Lima Vila Ipê Amarelo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Ipê Amarelo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8540465;-43.9629202\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Ipê Amarelo',
                'slug' => 'nova-lima-vila-ipe-amarelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 671,
                'name' => 'Nova Lima Vila Marise MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Marise MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9965067;-43.8488115\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Marise MG\' />
',
                'slug' => 'nova-lima-vila-marise-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 672,
                'name' => 'Nova Lima Vila Monte Castelo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Monte Castelo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9978955;-43.8473786\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Monte Cas',
                'slug' => 'nova-lima-vila-monte-castelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 673,
                'name' => 'Nova Lima Vila Nova Suíça MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Nova Suíça MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9677898;-43.8255138\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Nova Suíça M',
                'slug' => 'nova-lima-vila-nova-suica-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 674,
                'name' => 'Nova Lima Vila Odete MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Odete MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9986578;-43.8885113\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Odete MG\' />
',
                'slug' => 'nova-lima-vila-odete-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 675,
                'name' => 'Nova Lima Vila Operária MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Operária MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9914885;-43.8512688\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Operária MG\' /',
                'slug' => 'nova-lima-vila-operaria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 676,
                'name' => 'Nova Lima Vila Padre Valeriano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila Padre Valeriano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9942282;-43.8502557\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila Padre V',
                'slug' => 'nova-lima-vila-padre-valeriano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 677,
                'name' => 'Nova Lima Vila São Luiz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Vila São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9985016;-43.8463349\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Vila São Luiz MG\' /',
                'slug' => 'nova-lima-vila-sao-luiz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 678,
                'name' => 'Nova Lima Village Sans Souci MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Village Sans Souci MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0567405;-43.8994166\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Village Sans S',
                'slug' => 'nova-lima-village-sans-souci-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 679,
                'name' => 'Nova Lima Ville de Montagne MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Nova Lima Ville de Montagne MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9963215;-43.8449990\' />
<meta name=\'geo.region\' content=\'BR-Nova Lima Ville de Montag',
                'slug' => 'nova-lima-ville-de-montagne-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 680,
                'name' => 'Vespasiano',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Vespasiano, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.6888060;-43.9243123\' />
<meta name=\'geo.region\' content=\'BR-Vespasiano\' />
<meta name=\'ICBM\' ',
                'slug' => 'vespasiano',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 681,
                'name' => 'Sabará',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará, MG, Brasil\' />
<meta name=\'geo.position\' content=\';\' />
<meta name=\'geo.region\' content=\'BR-Sabará\' />
<meta name=\'ICBM\' content=\', \'/>',
                'slug' => 'sabara',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 682,
                'name' => 'Sabará Adelmolândia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Adelmolândia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9022500;-43.8142735\' />
<meta name=\'geo.region\' content=\'BR-Sabará Adelmolândia MG\' />
',
                'slug' => 'sabara-adelmolandia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 683,
                'name' => 'Sabará Água Férrea MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Água Férrea MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8955459;-43.8189445\' />
<meta name=\'geo.region\' content=\'BR-Sabará Água Férrea MG\' />
',
                'slug' => 'sabara-agua-ferrea-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 684,
                'name' => 'Sabará Alto do Cabral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Alto do Cabral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8831915;-43.8037975\' />
<meta name=\'geo.region\' content=\'BR-Sabará Alto do Cabral MG\' />
',
                'slug' => 'sabara-alto-do-cabral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 685,
                'name' => 'Sabará Alto do Fidalgo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Alto do Fidalgo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9108262;-43.8969239\' />
<meta name=\'geo.region\' content=\'BR-Sabará Alto do Fidalgo MG\' />
',
                'slug' => 'sabara-alto-do-fidalgo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 686,
                'name' => 'Sabará Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8769690;-43.8956929\' />
<meta name=\'geo.region\' content=\'BR-Sabará Alvorada MG\' />
',
                'slug' => 'sabara-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 687,
                'name' => 'Sabará Ana Lúcia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Ana Lúcia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8844882;-43.9063721\' />
<meta name=\'geo.region\' content=\'BR-Sabará Ana Lúcia MG\' />
',
                'slug' => 'sabara-ana-lucia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 688,
                'name' => 'Sabará Área Rural de Sabará MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Área Rural de Sabará MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Área Rural de Saba',
                'slug' => 'sabara-area-rural-de-sabara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 689,
                'name' => 'Sabará Borba Gato MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Borba Gato MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8094379;-43.7745941\' />
<meta name=\'geo.region\' content=\'BR-Sabará Borba Gato MG\' />
',
                'slug' => 'sabara-borba-gato-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 690,
                'name' => 'Sabará Borges MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Borges MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8094379;-43.7745941\' />
<meta name=\'geo.region\' content=\'BR-Sabará Borges MG\' />
',
                'slug' => 'sabara-borges-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 691,
                'name' => 'Sabará Caieira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Caieira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Caieira MG\' />
',
                'slug' => 'sabara-caieira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 692,
                'name' => 'Sabará Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8874340;-43.8084786\' />
<meta name=\'geo.region\' content=\'BR-Sabará Centro MG\' />
',
                'slug' => 'sabara-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 693,
                'name' => 'Sabará Conjunto Morada da Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Conjunto Morada da Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Conjunto Morad',
                'slug' => 'sabara-conjunto-morada-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 694,
                'name' => 'Sabará Córrego da Ilha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Córrego da Ilha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8963064;-43.8033927\' />
<meta name=\'geo.region\' content=\'BR-Sabará Córrego da Ilha MG\' />
',
                'slug' => 'sabara-corrego-da-ilha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 695,
                'name' => 'Sabará Distrito Industrial Operário Raimundo Fantini MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Distrito Industrial Operário Raimundo Fantini MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9033911;-43.8158504\' />
<meta name=\'geo.region\' content=\'BR-',
                'slug' => 'sabara-distrito-industrial-operario-raimundo-fantini-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 696,
                'name' => 'Sabará Distrito Industrial Simão da Cunha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Distrito Industrial Simão da Cunha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8094379;-43.7745941\' />
<meta name=\'geo.region\' content=\'BR-Sabará Dist',
                'slug' => 'sabara-distrito-industrial-simao-da-cunha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 697,
                'name' => 'Sabará Esplanada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Esplanada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8867483;-43.7947885\' />
<meta name=\'geo.region\' content=\'BR-Sabará Esplanada MG\' />
',
                'slug' => 'sabara-esplanada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 698,
                'name' => 'Sabará Fogo Apagou MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Fogo Apagou MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8983692;-43.8148985\' />
<meta name=\'geo.region\' content=\'BR-Sabará Fogo Apagou MG\' />
',
                'slug' => 'sabara-fogo-apagou-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 699,
            'name' => 'Sabará General Carneiro (Chacreamento Ipê Amarelo) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará General Carneiro (Chacreamento Ipê Amarelo) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8951947;-43.7991612\' />
<meta name=\'geo.region\' content=\'BR-Sa',
                'slug' => 'sabara-general-carneiro-chacreamento-ipe-amarelo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 700,
                'name' => 'Sabará Granja de Freitas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Granja de Freitas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8904650;-43.8097854\' />
<meta name=\'geo.region\' content=\'BR-Sabará Granja de Freitas MG\'',
                'slug' => 'sabara-granja-de-freitas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 701,
                'name' => 'Sabará Itacolomi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Itacolomi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8755753;-43.8504558\' />
<meta name=\'geo.region\' content=\'BR-Sabará Itacolomi MG\' />
',
                'slug' => 'sabara-itacolomi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 702,
                'name' => 'Sabará Jardim Castanheiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Jardim Castanheiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Jardim Castanheiras',
                'slug' => 'sabara-jardim-castanheiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 703,
                'name' => 'Sabará Mangabeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Mangabeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8904718;-43.8443761\' />
<meta name=\'geo.region\' content=\'BR-Sabará Mangabeiras MG\' />
',
                'slug' => 'sabara-mangabeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 704,
                'name' => 'Sabará Mangueiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Mangueiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8766500;-43.7951678\' />
<meta name=\'geo.region\' content=\'BR-Sabará Mangueiras MG\' />
',
                'slug' => 'sabara-mangueiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 705,
                'name' => 'Sabará Morro da Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Morro da Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8959068;-43.8090263\' />
<meta name=\'geo.region\' content=\'BR-Sabará Morro da Cruz MG\' />
',
                'slug' => 'sabara-morro-da-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 706,
                'name' => 'Sabará Morro São Francisco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Morro São Francisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8901664;-43.8141459\' />
<meta name=\'geo.region\' content=\'BR-Sabará Morro São Francisco',
                'slug' => 'sabara-morro-sao-francisco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 707,
                'name' => 'Sabará Nações Unidas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Nações Unidas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8803652;-43.8633745\' />
<meta name=\'geo.region\' content=\'BR-Sabará Nações Unidas MG\' />
',
                'slug' => 'sabara-nacoes-unidas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 708,
                'name' => 'Sabará Nossa Senhora da Conceição MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Nossa Senhora da Conceição MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8838373;-43.8003573\' />
<meta name=\'geo.region\' content=\'BR-Sabará Nossa Senhor',
                'slug' => 'sabara-nossa-senhora-da-conceicao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 709,
                'name' => 'Sabará Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8842005;-43.8548027\' />
<meta name=\'geo.region\' content=\'BR-Sabará Nossa Senhora d',
                'slug' => 'sabara-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 710,
                'name' => 'Sabará Nossa Senhora do Ó MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Nossa Senhora do Ó MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8849775;-43.7947572\' />
<meta name=\'geo.region\' content=\'BR-Sabará Nossa Senhora do Ó M',
                'slug' => 'sabara-nossa-senhora-do-o-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 711,
                'name' => 'Sabará Nova Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Nova Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8883369;-43.8966658\' />
<meta name=\'geo.region\' content=\'BR-Sabará Nova Vista MG\' />
',
                'slug' => 'sabara-nova-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 712,
                'name' => 'Sabará Novo Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Novo Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8698601;-43.8945063\' />
<meta name=\'geo.region\' content=\'BR-Sabará Novo Alvorada MG\' />
',
                'slug' => 'sabara-novo-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 713,
                'name' => 'Sabará Novo Horizonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Novo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8898453;-43.8875895\' />
<meta name=\'geo.region\' content=\'BR-Sabará Novo Horizonte MG\' />
',
                'slug' => 'sabara-novo-horizonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 714,
                'name' => 'Sabará Novo Santa Inês MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Novo Santa Inês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8757813;-43.8961596\' />
<meta name=\'geo.region\' content=\'BR-Sabará Novo Santa Inês MG\' />
',
                'slug' => 'sabara-novo-santa-ines-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 715,
                'name' => 'Sabará Paciência MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Paciência MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9131808;-43.8219488\' />
<meta name=\'geo.region\' content=\'BR-Sabará Paciência MG\' />
',
                'slug' => 'sabara-paciencia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 716,
                'name' => 'Sabará Padre Chiquinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Padre Chiquinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8923107;-43.8028952\' />
<meta name=\'geo.region\' content=\'BR-Sabará Padre Chiquinho MG\' />
',
                'slug' => 'sabara-padre-chiquinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 717,
                'name' => 'Sabará Pompeu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Pompeu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8714301;-43.7791082\' />
<meta name=\'geo.region\' content=\'BR-Sabará Pompeu MG\' />
',
                'slug' => 'sabara-pompeu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 718,
                'name' => 'Sabará Praia dos Bandeirantes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Praia dos Bandeirantes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Praia dos Bandei',
                'slug' => 'sabara-praia-dos-bandeirantes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 719,
                'name' => 'Sabará Rio Negro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Rio Negro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8781305;-43.8972421\' />
<meta name=\'geo.region\' content=\'BR-Sabará Rio Negro MG\' />
',
                'slug' => 'sabara-rio-negro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 720,
                'name' => 'Sabará Roça Grande MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Roça Grande MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8973999;-43.8332652\' />
<meta name=\'geo.region\' content=\'BR-Sabará Roça Grande MG\' />
',
                'slug' => 'sabara-roca-grande-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 721,
                'name' => 'Sabará Rosário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Rosário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8878001;-43.8289581\' />
<meta name=\'geo.region\' content=\'BR-Sabará Rosário MG\' />
',
                'slug' => 'sabara-rosario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 722,
                'name' => 'Sabará Santana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Santana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9175558;-43.8716934\' />
<meta name=\'geo.region\' content=\'BR-Sabará Santana MG\' />
',
                'slug' => 'sabara-santana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 723,
            'name' => 'Sabará Santo Antônio (Roça Grande) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Santo Antônio (Roça Grande) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Santo Antôn',
                'slug' => 'sabara-santo-antonio-roca-grande-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 724,
                'name' => 'Sabará São Francisco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará São Francisco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8342521;-43.8447088\' />
<meta name=\'geo.region\' content=\'BR-Sabará São Francisco MG\' />
',
                'slug' => 'sabara-sao-francisco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 725,
                'name' => 'Sabará São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8665391;-43.8597840\' />
<meta name=\'geo.region\' content=\'BR-Sabará São José MG\' />
',
                'slug' => 'sabara-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 726,
                'name' => 'Sabará Siderúrgica MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Siderúrgica MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8765768;-43.7838438\' />
<meta name=\'geo.region\' content=\'BR-Sabará Siderúrgica MG\' />
',
                'slug' => 'sabara-siderurgica-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 727,
                'name' => 'Sabará Sobradinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Sobradinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8390403;-43.8921866\' />
<meta name=\'geo.region\' content=\'BR-Sabará Sobradinho MG\' />
',
                'slug' => 'sabara-sobradinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 728,
                'name' => 'Sabará Terra Santa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Terra Santa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8847265;-43.8087429\' />
<meta name=\'geo.region\' content=\'BR-Sabará Terra Santa MG\' />
',
                'slug' => 'sabara-terra-santa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 729,
                'name' => 'Sabará Valparaíso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Valparaíso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7732764;-43.7544412\' />
<meta name=\'geo.region\' content=\'BR-Sabará Valparaíso MG\' />
',
                'slug' => 'sabara-valparaiso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 730,
                'name' => 'Sabará Vila Amélia Moreira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Amélia Moreira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8094379;-43.7745941\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Amélia Moreira',
                'slug' => 'sabara-vila-amelia-moreira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 731,
                'name' => 'Sabará Vila Bom Retiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Bom Retiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8845263;-43.8267220\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Bom Retiro MG\' />
',
                'slug' => 'sabara-vila-bom-retiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 732,
                'name' => 'Sabará Vila Campinas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Campinas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8837816;-43.7949833\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Campinas MG\' />
',
                'slug' => 'sabara-vila-campinas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 733,
                'name' => 'Sabará Vila dos Coqueiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila dos Coqueiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8350706;-43.8920971\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila dos Coqueiros M',
                'slug' => 'sabara-vila-dos-coqueiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 734,
                'name' => 'Sabará Vila Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8876624;-43.8126758\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Esperança MG\' />
',
                'slug' => 'sabara-vila-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 735,
                'name' => 'Sabará Vila Eugênio Rossi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Eugênio Rossi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8837645;-43.8579975\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Eugênio Rossi M',
                'slug' => 'sabara-vila-eugenio-rossi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 736,
                'name' => 'Sabará Vila Francisco de Moura MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Francisco de Moura MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7732764;-43.7544412\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Francisco ',
                'slug' => 'sabara-vila-francisco-de-moura-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 737,
                'name' => 'Sabará Vila Marzagão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Marzagão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8958124;-43.8642263\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Marzagão MG\' />
',
                'slug' => 'sabara-vila-marzagao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 738,
                'name' => 'Sabará Vila Michel MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Michel MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8774869;-43.7948404\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Michel MG\' />
',
                'slug' => 'sabara-vila-michel-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 739,
                'name' => 'Sabará Vila Nova Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Nova Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8828056;-43.8949455\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Nova Vista MG\' />
',
                'slug' => 'sabara-vila-nova-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 740,
                'name' => 'Sabará Vila Rica MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Rica MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8842005;-43.8548027\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Rica MG\' />
',
                'slug' => 'sabara-vila-rica-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 741,
                'name' => 'Sabará Vila Santa Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Santa Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8801251;-43.7965172\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Santa Cruz MG\' />
',
                'slug' => 'sabara-vila-santa-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 742,
                'name' => 'Sabará Vila Santa Rita MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Santa Rita MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8683335;-43.8620449\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Santa Rita MG\' />
',
                'slug' => 'sabara-vila-santa-rita-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 743,
                'name' => 'Sabará Vila Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8876192;-43.8349514\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Santo Antônio M',
                'slug' => 'sabara-vila-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 744,
                'name' => 'Sabará Vila Santo Antônio de Pádua MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila Santo Antônio de Pádua MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8923137;-43.7983917\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila Santo ',
                'slug' => 'sabara-vila-santo-antonio-de-padua-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 745,
                'name' => 'Sabará Vila São Sebastião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Vila São Sebastião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8962759;-43.8161537\' />
<meta name=\'geo.region\' content=\'BR-Sabará Vila São Sebastião M',
                'slug' => 'sabara-vila-sao-sebastiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 746,
                'name' => 'Sabará Villa Real MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sabará Villa Real MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8991674;-43.8206290\' />
<meta name=\'geo.region\' content=\'BR-Sabará Villa Real MG\' />
',
                'slug' => 'sabara-villa-real-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 747,
                'name' => 'Lagoa Santa',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Lagoa Santa, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.6303019;-43.8983031\' />
<meta name=\'geo.region\' content=\'BR-Lagoa Santa\' />
<meta name=\'ICBM',
                'slug' => 'lagoa-santa',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 748,
                'name' => 'Caeté',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Caeté, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8852788;-43.6644238\' />
<meta name=\'geo.region\' content=\'BR-Caeté\' />
<meta name=\'ICBM\' content=\'-',
                'slug' => 'caete',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 749,
                'name' => 'Betim',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim, MG, Brasil\' />
<meta name=\'geo.position\' content=\';\' />
<meta name=\'geo.region\' content=\'BR-Betim\' />
<meta name=\'ICBM\' content=\', \'/>',
                'slug' => 'betim',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 750,
                'name' => 'Betim Açude MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Açude MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Açude MG\' />
',
                'slug' => 'betim-acude-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 751,
                'name' => 'Betim Alta Villa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Alta Villa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9296415;-44.1962656\' />
<meta name=\'geo.region\' content=\'BR-Betim Alta Villa MG\' />
',
                'slug' => 'betim-alta-villa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 752,
                'name' => 'Betim Alto das Flores MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Alto das Flores MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9345948;-44.1870352\' />
<meta name=\'geo.region\' content=\'BR-Betim Alto das Flores MG\' />
',
                'slug' => 'betim-alto-das-flores-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 753,
                'name' => 'Betim Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9492938;-44.1726187\' />
<meta name=\'geo.region\' content=\'BR-Betim Alvorada MG\' />
',
                'slug' => 'betim-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 754,
                'name' => 'Betim Amarante MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Amarante MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9445061;-44.1368394\' />
<meta name=\'geo.region\' content=\'BR-Betim Amarante MG\' />
',
                'slug' => 'betim-amarante-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 755,
                'name' => 'Betim Amazonas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Amazonas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9486994;-44.0980620\' />
<meta name=\'geo.region\' content=\'BR-Betim Amazonas MG\' />
',
                'slug' => 'betim-amazonas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 756,
                'name' => 'Betim Angola MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Angola MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Angola MG\' />
',
                'slug' => 'betim-angola-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 757,
                'name' => 'Betim Área Rural de Betim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Área Rural de Betim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Área Rural de Betim M',
                'slug' => 'betim-area-rural-de-betim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 758,
                'name' => 'Betim Aroeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Aroeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim Aroeiras MG\' />
',
                'slug' => 'betim-aroeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 759,
                'name' => 'Betim Arquipélago Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Arquipélago Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9845261;-44.1855986\' />
<meta name=\'geo.region\' content=\'BR-Betim Arquipélago Verde MG\' /',
                'slug' => 'betim-arquipelago-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 760,
                'name' => 'Betim Bandeirinhas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Bandeirinhas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Bandeirinhas MG\' />
',
                'slug' => 'betim-bandeirinhas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 761,
                'name' => 'Betim Betim Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Betim Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9627491;-44.1738742\' />
<meta name=\'geo.region\' content=\'BR-Betim Betim Industrial MG\' />
',
                'slug' => 'betim-betim-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 762,
                'name' => 'Betim Bodocó MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Bodocó MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Bodocó MG\' />
',
                'slug' => 'betim-bodoco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 763,
                'name' => 'Betim Bom Repouso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Bom Repouso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9379920;-44.2042609\' />
<meta name=\'geo.region\' content=\'BR-Betim Bom Repouso MG\' />
',
                'slug' => 'betim-bom-repouso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 764,
                'name' => 'Betim Bom Retiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Bom Retiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Bom Retiro MG\' />
',
                'slug' => 'betim-bom-retiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 765,
                'name' => 'Betim Brasiléia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Brasiléia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9729624;-44.1993824\' />
<meta name=\'geo.region\' content=\'BR-Betim Brasiléia MG\' />
',
                'slug' => 'betim-brasileia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 766,
                'name' => 'Betim Brodoski MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Brodoski MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Brodoski MG\' />
',
                'slug' => 'betim-brodoski-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 767,
                'name' => 'Betim Cachoeira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Cachoeira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9650929;-44.1994669\' />
<meta name=\'geo.region\' content=\'BR-Betim Cachoeira MG\' />
',
                'slug' => 'betim-cachoeira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 768,
                'name' => 'Betim Califórnia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Califórnia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9523485;-44.1847233\' />
<meta name=\'geo.region\' content=\'BR-Betim Califórnia MG\' />
',
                'slug' => 'betim-california-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 769,
                'name' => 'Betim Campos Elíseos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Campos Elíseos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9792817;-44.1472859\' />
<meta name=\'geo.region\' content=\'BR-Betim Campos Elíseos MG\' />
',
                'slug' => 'betim-campos-eliseos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 770,
                'name' => 'Betim Capelinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Capelinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9382337;-44.0998653\' />
<meta name=\'geo.region\' content=\'BR-Betim Capelinha MG\' />
',
                'slug' => 'betim-capelinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 771,
                'name' => 'Betim Casa Amarela MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Casa Amarela MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim Casa Amarela MG\' />
',
                'slug' => 'betim-casa-amarela-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 772,
                'name' => 'Betim Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9647118;-44.1939122\' />
<meta name=\'geo.region\' content=\'BR-Betim Centro MG\' />
',
                'slug' => 'betim-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 773,
                'name' => 'Betim Chácara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Chácara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9650286;-44.1782575\' />
<meta name=\'geo.region\' content=\'BR-Betim Chácara MG\' />
',
                'slug' => 'betim-chacara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 774,
                'name' => 'Betim Charneca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Charneca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0129261;-44.2242727\' />
<meta name=\'geo.region\' content=\'BR-Betim Charneca MG\' />
',
                'slug' => 'betim-charneca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 775,
                'name' => 'Betim Cidade Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Cidade Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9870017;-44.1960684\' />
<meta name=\'geo.region\' content=\'BR-Betim Cidade Verde MG\' />
',
                'slug' => 'betim-cidade-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 776,
                'name' => 'Betim Citrolândia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Citrolândia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim Citrolândia MG\' />
',
                'slug' => 'betim-citrolandia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 777,
                'name' => 'Betim Colônia Santa Isabel MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Colônia Santa Isabel MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9872729;-44.1497148\' />
<meta name=\'geo.region\' content=\'BR-Betim Colônia Santa Isabel',
                'slug' => 'betim-colonia-santa-isabel-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 778,
                'name' => 'Betim Conjunto Habitacional Bueno Franco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional Bueno Franco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Conjun',
                'slug' => 'betim-conjunto-habitacional-bueno-franco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 779,
                'name' => 'Betim Conjunto Habitacional Celso Alves Pedrosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional Celso Alves Pedrosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9409266;-44.1410938\' />
<meta name=\'geo.region\' content=\'BR-Betim',
                'slug' => 'betim-conjunto-habitacional-celso-alves-pedrosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 780,
                'name' => 'Betim Conjunto Habitacional Dicalino Cabral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional Dicalino Cabral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Con',
                'slug' => 'betim-conjunto-habitacional-dicalino-cabral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 781,
                'name' => 'Betim Conjunto Habitacional Homero Gil MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional Homero Gil MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9320556;-44.1889483\' />
<meta name=\'geo.region\' content=\'BR-Betim Conjunto',
                'slug' => 'betim-conjunto-habitacional-homero-gil-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 782,
                'name' => 'Betim Conjunto Habitacional Jalila Conceição Pedrosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional Jalila Conceição Pedrosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9292079;-44.1714730\' />
<meta name=\'geo.region\' content=\'BR-',
                'slug' => 'betim-conjunto-habitacional-jalila-conceicao-pedrosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 783,
                'name' => 'Betim Conjunto Habitacional José Gomes de Castro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Conjunto Habitacional José Gomes de Castro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Beti',
                'slug' => 'betim-conjunto-habitacional-jose-gomes-de-castro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 784,
                'name' => 'Betim Cruzeiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Cruzeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Cruzeiro MG\' />
',
                'slug' => 'betim-cruzeiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 785,
                'name' => 'Betim Cruzeiro do Sul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Cruzeiro do Sul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9354522;-44.1592297\' />
<meta name=\'geo.region\' content=\'BR-Betim Cruzeiro do Sul MG\' />
',
                'slug' => 'betim-cruzeiro-do-sul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 786,
                'name' => 'Betim Decamão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Decamão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9509681;-44.1172064\' />
<meta name=\'geo.region\' content=\'BR-Betim Decamão MG\' />
',
                'slug' => 'betim-decamao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 787,
                'name' => 'Betim Distrito Industrial Bandeirinhas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Distrito Industrial Bandeirinhas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9770438;-44.1897173\' />
<meta name=\'geo.region\' content=\'BR-Betim Distrito',
                'slug' => 'betim-distrito-industrial-bandeirinhas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 788,
                'name' => 'Betim Distrito Industrial Jardim Piemont Norte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Distrito Industrial Jardim Piemont Norte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9499943;-44.0721892\' />
<meta name=\'geo.region\' content=\'BR-Betim ',
                'slug' => 'betim-distrito-industrial-jardim-piemont-norte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 789,
                'name' => 'Betim Distrito Industrial Jardim Piemont Sul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Distrito Industrial Jardim Piemont Sul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9608206;-44.0742878\' />
<meta name=\'geo.region\' content=\'BR-Betim Di',
                'slug' => 'betim-distrito-industrial-jardim-piemont-sul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 790,
                'name' => 'Betim Distrito Industrial Paulo Camilo Norte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Distrito Industrial Paulo Camilo Norte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Di',
                'slug' => 'betim-distrito-industrial-paulo-camilo-norte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 791,
                'name' => 'Betim Distrito Industrial Paulo Camilo Sul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Distrito Industrial Paulo Camilo Sul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9592326;-44.1177873\' />
<meta name=\'geo.region\' content=\'BR-Betim Dist',
                'slug' => 'betim-distrito-industrial-paulo-camilo-sul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 792,
                'name' => 'Betim Dom Bosco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Dom Bosco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9533594;-44.1536449\' />
<meta name=\'geo.region\' content=\'BR-Betim Dom Bosco MG\' />
',
                'slug' => 'betim-dom-bosco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 793,
                'name' => 'Betim Duque de Caxias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Duque de Caxias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9374199;-44.1543908\' />
<meta name=\'geo.region\' content=\'BR-Betim Duque de Caxias MG\' />
',
                'slug' => 'betim-duque-de-caxias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 794,
                'name' => 'Betim Espírito Santo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Espírito Santo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9397689;-44.1925022\' />
<meta name=\'geo.region\' content=\'BR-Betim Espírito Santo MG\' />
',
                'slug' => 'betim-espirito-santo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 795,
                'name' => 'Betim Estância do Sereno PTB MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Estância do Sereno PTB MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0006645;-44.1475106\' />
<meta name=\'geo.region\' content=\'BR-Betim Estância do Sereno',
                'slug' => 'betim-estancia-do-sereno-ptb-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 796,
                'name' => 'Betim Estância do Sereno Sede MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Estância do Sereno Sede MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9947341;-44.1639573\' />
<meta name=\'geo.region\' content=\'BR-Betim Estância do Seren',
                'slug' => 'betim-estancia-do-sereno-sede-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 797,
                'name' => 'Betim Filadélfia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Filadélfia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9646049;-44.1934917\' />
<meta name=\'geo.region\' content=\'BR-Betim Filadélfia MG\' />
',
                'slug' => 'betim-filadelfia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 798,
                'name' => 'Betim Flores e Florestas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Flores e Florestas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Flores e Florestas MG\'',
                'slug' => 'betim-flores-e-florestas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 799,
                'name' => 'Betim Gentileza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Gentileza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8734823;-44.2750855\' />
<meta name=\'geo.region\' content=\'BR-Betim Gentileza MG\' />
',
                'slug' => 'betim-gentileza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 800,
                'name' => 'Betim Granja Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Granja Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9523485;-44.1847233\' />
<meta name=\'geo.region\' content=\'BR-Betim Granja Verde MG\' />
',
                'slug' => 'betim-granja-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 801,
                'name' => 'Betim Guanabara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Guanabara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9732358;-44.1421200\' />
<meta name=\'geo.region\' content=\'BR-Betim Guanabara MG\' />
',
                'slug' => 'betim-guanabara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 802,
                'name' => 'Betim Guarujá MG',
                'geoposition' => '<meta name="geo.region" content="BR-MG" />
<meta name="geo.placename" content="Betim" />
<meta name="geo.position" content="-19.969258;-44.208046" />
<meta name="ICBM" content="-19.969258, -44.208046" />',
                'slug' => 'betim-guaruja-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 803,
                'name' => 'Betim Guarujá Mansões MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Guarujá Mansões MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9629993;-44.2171145\' />
<meta name=\'geo.region\' content=\'BR-Betim Guarujá Mansões MG\' />
',
                'slug' => 'betim-guaruja-mansoes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 804,
                'name' => 'Betim Horto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Horto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9573996;-44.1984913\' />
<meta name=\'geo.region\' content=\'BR-Betim Horto MG\' />
',
                'slug' => 'betim-horto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 805,
                'name' => 'Betim Icaivera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Icaivera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0210555;-44.0916734\' />
<meta name=\'geo.region\' content=\'BR-Betim Icaivera MG\' />
',
                'slug' => 'betim-icaivera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 806,
                'name' => 'Betim Imbiruçu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Imbiruçu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Imbiruçu MG\' />
',
                'slug' => 'betim-imbirucu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 807,
                'name' => 'Betim Ingá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Ingá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9467559;-44.1921148\' />
<meta name=\'geo.region\' content=\'BR-Betim Ingá MG\' />
',
                'slug' => 'betim-inga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 808,
                'name' => 'Betim Ingá Alto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Ingá Alto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9562898;-44.1936272\' />
<meta name=\'geo.region\' content=\'BR-Betim Ingá Alto MG\' />
',
                'slug' => 'betim-inga-alto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 809,
                'name' => 'Betim Itacolomi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Itacolomi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9245559;-44.1744514\' />
<meta name=\'geo.region\' content=\'BR-Betim Itacolomi MG\' />
',
                'slug' => 'betim-itacolomi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 810,
                'name' => 'Betim Jardim Brasília MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim Brasília MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9570606;-44.1859223\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim Brasília MG\' />
',
                'slug' => 'betim-jardim-brasilia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 811,
                'name' => 'Betim Jardim Casa Branca MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim Casa Branca MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9786781;-44.1900449\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim Casa Branca MG\'',
                'slug' => 'betim-jardim-casa-branca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 812,
                'name' => 'Betim Jardim da Cidade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim da Cidade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9620136;-44.1971077\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim da Cidade MG\' />
',
                'slug' => 'betim-jardim-da-cidade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 813,
                'name' => 'Betim Jardim das Alterosas - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim das Alterosas - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9393848;-44.1629361\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim da',
                'slug' => 'betim-jardim-das-alterosas-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 814,
                'name' => 'Betim Jardim das Alterosas 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim das Alterosas 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9520741;-44.1641801\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim das ',
                'slug' => 'betim-jardim-das-alterosas-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 815,
                'name' => 'Betim Jardim Nazareno MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim Nazareno MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9963814;-44.1334139\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim Nazareno MG\' />
',
                'slug' => 'betim-jardim-nazareno-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 816,
                'name' => 'Betim Jardim Teresópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Jardim Teresópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Jardim Teresópolis MG\'',
                'slug' => 'betim-jardim-teresopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 817,
                'name' => 'Betim Laranjeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Laranjeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9465038;-44.1661325\' />
<meta name=\'geo.region\' content=\'BR-Betim Laranjeiras MG\' />
',
                'slug' => 'betim-laranjeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 818,
                'name' => 'Betim Marimbá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Marimbá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9419467;-44.1285860\' />
<meta name=\'geo.region\' content=\'BR-Betim Marimbá MG\' />
',
                'slug' => 'betim-marimba-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 819,
                'name' => 'Betim Marmeleiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Marmeleiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0185173;-44.2315919\' />
<meta name=\'geo.region\' content=\'BR-Betim Marmeleiros MG\' />
',
                'slug' => 'betim-marmeleiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 820,
                'name' => 'Betim Monte Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Monte Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9523485;-44.1847233\' />
<meta name=\'geo.region\' content=\'BR-Betim Monte Verde MG\' />
',
                'slug' => 'betim-monte-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 821,
                'name' => 'Betim Morada do Trevo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Morada do Trevo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9805216;-44.2029960\' />
<meta name=\'geo.region\' content=\'BR-Betim Morada do Trevo MG\' />
',
                'slug' => 'betim-morada-do-trevo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 822,
                'name' => 'Betim Niterói MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Niterói MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9100764;-44.2741183\' />
<meta name=\'geo.region\' content=\'BR-Betim Niterói MG\' />
',
                'slug' => 'betim-niteroi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 823,
                'name' => 'Betim Nova Baden MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Nova Baden MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9510863;-44.1400965\' />
<meta name=\'geo.region\' content=\'BR-Betim Nova Baden MG\' />
',
                'slug' => 'betim-nova-baden-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 824,
                'name' => 'Betim Novo Horizonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Novo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9420356;-44.1958797\' />
<meta name=\'geo.region\' content=\'BR-Betim Novo Horizonte MG\' />
',
                'slug' => 'betim-novo-horizonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 825,
                'name' => 'Betim Paquetá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Paquetá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim Paquetá MG\' />
',
                'slug' => 'betim-paqueta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 826,
                'name' => 'Betim Parque das Acácias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Parque das Acácias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9371856;-44.1275126\' />
<meta name=\'geo.region\' content=\'BR-Betim Parque das Acácias MG\'',
                'slug' => 'betim-parque-das-acacias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 827,
                'name' => 'Betim Parque das Indústrias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Parque das Indústrias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9581158;-44.1771369\' />
<meta name=\'geo.region\' content=\'BR-Betim Parque das Indústri',
                'slug' => 'betim-parque-das-industrias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 828,
            'name' => 'Betim Parque do Cedro (Icaivera) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Parque do Cedro (Icaivera) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Parque do Cedr',
                'slug' => 'betim-parque-do-cedro-icaivera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 829,
                'name' => 'Betim Parque Ipiranga MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Parque Ipiranga MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim Parque Ipiranga MG\' />
',
                'slug' => 'betim-parque-ipiranga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 830,
                'name' => 'Betim Paulo Camilo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Paulo Camilo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Paulo Camilo MG\' />
',
                'slug' => 'betim-paulo-camilo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 831,
                'name' => 'Betim Petrópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Petrópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9677034;-44.1770281\' />
<meta name=\'geo.region\' content=\'BR-Betim Petrópolis MG\' />
',
                'slug' => 'betim-petropolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 832,
                'name' => 'Betim Petrovale MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Petrovale MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9798282;-44.1882288\' />
<meta name=\'geo.region\' content=\'BR-Betim Petrovale MG\' />
',
                'slug' => 'betim-petrovale-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 833,
                'name' => 'Betim Pimentas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Pimentas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9350152;-44.1306990\' />
<meta name=\'geo.region\' content=\'BR-Betim Pimentas MG\' />
',
                'slug' => 'betim-pimentas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 834,
                'name' => 'Betim Pingo D\'água MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Pingo D\'água MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9767943;-44.2326935\' />
<meta name=\'geo.region\' content=\'BR-Betim Pingo D\'água MG\' />
',
                'slug' => 'betim-pingo-d-agua-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 835,
                'name' => 'Betim Ponte Alta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Ponte Alta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9261471;-44.1861619\' />
<meta name=\'geo.region\' content=\'BR-Betim Ponte Alta MG\' />
',
                'slug' => 'betim-ponte-alta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 836,
                'name' => 'Betim Presidente Kennedy MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Presidente Kennedy MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9665779;-44.1395793\' />
<meta name=\'geo.region\' content=\'BR-Betim Presidente Kennedy MG\'',
                'slug' => 'betim-presidente-kennedy-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 837,
                'name' => 'Betim Quintas do Godoy MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Quintas do Godoy MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Quintas do Godoy MG\' />
',
                'slug' => 'betim-quintas-do-godoy-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 838,
                'name' => 'Betim Renascer MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Renascer MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9461600;-44.0977321\' />
<meta name=\'geo.region\' content=\'BR-Betim Renascer MG\' />
',
                'slug' => 'betim-renascer-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 839,
                'name' => 'Betim Residencial Lagoa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Residencial Lagoa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9349623;-44.2135130\' />
<meta name=\'geo.region\' content=\'BR-Betim Residencial Lagoa MG\' /',
                'slug' => 'betim-residencial-lagoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 840,
                'name' => 'Betim Residencial Montserrat MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Residencial Montserrat MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Residencial Montse',
                'slug' => 'betim-residencial-montserrat-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 841,
                'name' => 'Betim Residencial Taquaril MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Residencial Taquaril MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9304859;-44.2052117\' />
<meta name=\'geo.region\' content=\'BR-Betim Residencial Taquaril',
                'slug' => 'betim-residencial-taquaril-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 842,
                'name' => 'Betim Riacho 3 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Riacho 3 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9322349;-44.1012605\' />
<meta name=\'geo.region\' content=\'BR-Betim Riacho 3 MG\' />
',
                'slug' => 'betim-riacho-3-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 843,
                'name' => 'Betim Salomé MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Salomé MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0146992;-44.0941833\' />
<meta name=\'geo.region\' content=\'BR-Betim Salomé MG\' />
',
                'slug' => 'betim-salome-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 844,
                'name' => 'Betim Santa Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santa Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9376048;-44.1918126\' />
<meta name=\'geo.region\' content=\'BR-Betim Santa Cruz MG\' />
',
                'slug' => 'betim-santa-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 845,
                'name' => 'Betim Santa Fé MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santa Fé MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9548178;-44.2073186\' />
<meta name=\'geo.region\' content=\'BR-Betim Santa Fé MG\' />
',
                'slug' => 'betim-santa-fe-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 846,
                'name' => 'Betim Santa Inês MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santa Inês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9638501;-44.2171272\' />
<meta name=\'geo.region\' content=\'BR-Betim Santa Inês MG\' />
',
                'slug' => 'betim-santa-ines-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 847,
                'name' => 'Betim Santa Lúcia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santa Lúcia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9763937;-44.2129964\' />
<meta name=\'geo.region\' content=\'BR-Betim Santa Lúcia MG\' />
',
                'slug' => 'betim-santa-lucia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 848,
                'name' => 'Betim Santo Afonso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santo Afonso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9403303;-44.1942256\' />
<meta name=\'geo.region\' content=\'BR-Betim Santo Afonso MG\' />
',
                'slug' => 'betim-santo-afonso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 849,
                'name' => 'Betim Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9660708;-44.1361583\' />
<meta name=\'geo.region\' content=\'BR-Betim Santo Antônio MG\' />
',
                'slug' => 'betim-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 850,
                'name' => 'Betim São Caetano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Caetano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9382204;-44.1159569\' />
<meta name=\'geo.region\' content=\'BR-Betim São Caetano MG\' />
',
                'slug' => 'betim-sao-caetano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 851,
                'name' => 'Betim São Cristóvão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Cristóvão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9390206;-44.1211363\' />
<meta name=\'geo.region\' content=\'BR-Betim São Cristóvão MG\' />
',
                'slug' => 'betim-sao-cristovao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 852,
                'name' => 'Betim São João MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São João MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9253856;-44.0621521\' />
<meta name=\'geo.region\' content=\'BR-Betim São João MG\' />
',
                'slug' => 'betim-sao-joao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 853,
                'name' => 'Betim São Jorge MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Jorge MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim São Jorge MG\' />
',
                'slug' => 'betim-sao-jorge-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 854,
                'name' => 'Betim São Luiz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9331954;-44.1300368\' />
<meta name=\'geo.region\' content=\'BR-Betim São Luiz MG\' />
',
                'slug' => 'betim-sao-luiz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 855,
                'name' => 'Betim São Marcos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Marcos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim São Marcos MG\' />
',
                'slug' => 'betim-sao-marcos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 856,
                'name' => 'Betim São Salvador MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Salvador MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8602513;-43.2259276\' />
<meta name=\'geo.region\' content=\'BR-Betim São Salvador MG\' />
',
                'slug' => 'betim-sao-salvador-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 857,
                'name' => 'Betim São Sebastião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim São Sebastião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8978901;-44.1626861\' />
<meta name=\'geo.region\' content=\'BR-Betim São Sebastião MG\' />
',
                'slug' => 'betim-sao-sebastiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 858,
                'name' => 'Betim Saraiva MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Saraiva MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9375065;-44.2308667\' />
<meta name=\'geo.region\' content=\'BR-Betim Saraiva MG\' />
',
                'slug' => 'betim-saraiva-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 859,
                'name' => 'Betim Senhora das Graças MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Senhora das Graças MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9514523;-44.1808258\' />
<meta name=\'geo.region\' content=\'BR-Betim Senhora das Graças MG\'',
                'slug' => 'betim-senhora-das-gracas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 860,
                'name' => 'Betim Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9339291;-44.1769614\' />
<meta name=\'geo.region\' content=\'BR-Betim Senhora de Fátima MG\' /',
                'slug' => 'betim-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 861,
                'name' => 'Betim Teixeirinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Teixeirinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Teixeirinha MG\' />
',
                'slug' => 'betim-teixeirinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 862,
                'name' => 'Betim Vale Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vale Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Vale Verde MG\' />
',
                'slug' => 'betim-vale-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 863,
                'name' => 'Betim Vargem das Flores MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vargem das Flores MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9673078;-44.2011904\' />
<meta name=\'geo.region\' content=\'BR-Betim Vargem das Flores MG\' /',
                'slug' => 'betim-vargem-das-flores-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 864,
                'name' => 'Betim Vianópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vianópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9489417;-44.2720461\' />
<meta name=\'geo.region\' content=\'BR-Betim Vianópolis MG\' />
',
                'slug' => 'betim-vianopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 865,
                'name' => 'Betim Vila Alpina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila Alpina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9738346;-44.1701966\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila Alpina MG\' />
',
                'slug' => 'betim-vila-alpina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 866,
                'name' => 'Betim Vila Boa Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila Boa Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9514742;-44.1018801\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila Boa Esperança MG\'',
                'slug' => 'betim-vila-boa-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 867,
                'name' => 'Betim Vila Cristina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila Cristina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9419467;-44.1285860\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila Cristina MG\' />
',
                'slug' => 'betim-vila-cristina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 868,
                'name' => 'Betim Vila das Flores MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila das Flores MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9998737;-44.1727356\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila das Flores MG\' />
',
                'slug' => 'betim-vila-das-flores-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 869,
                'name' => 'Betim Vila Universal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila Universal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9514523;-44.1808258\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila Universal MG\' />
',
                'slug' => 'betim-vila-universal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 870,
                'name' => 'Betim Vila Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Betim Vila Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9259575;-44.1020335\' />
<meta name=\'geo.region\' content=\'BR-Betim Vila Verde MG\' />
',
                'slug' => 'betim-vila-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 871,
                'name' => 'Ribeirão das Neves',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves, MG, Brasil\' />
<meta name=\'geo.position\' content=\';\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves\' />
<meta name=\'ICBM\' conten',
                'slug' => 'ribeirao-das-neves',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 872,
            'name' => 'Ribeirão das Neves Adriana (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Adriana (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7865269;-44.0188099\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-adriana-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 873,
                'name' => 'Ribeirão das Neves Alicante MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Alicante MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7488790;-44.0725437\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Alican',
                'slug' => 'ribeirao-das-neves-alicante-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 874,
                'name' => 'Ribeirão das Neves Alterosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Alterosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Altero',
                'slug' => 'ribeirao-das-neves-alterosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 875,
                'name' => 'Ribeirão das Neves Área Rural de Ribeirão das Neves MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Área Rural de Ribeirão das Neves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-R',
                'slug' => 'ribeirao-das-neves-area-rural-de-ribeirao-das-neves-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 876,
            'name' => 'Ribeirão das Neves Areias (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Areias (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7648029;-44.0039168\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-areias-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 877,
                'name' => 'Ribeirão das Neves Areias de Baixo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Areias de Baixo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7914943;-44.0833162\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-areias-de-baixo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 878,
            'name' => 'Ribeirão das Neves Atalaia (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Atalaia (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7936143;-44.0041437\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-atalaia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 879,
                'name' => 'Ribeirão das Neves Barcelona MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Barcelona MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Barce',
                'slug' => 'ribeirao-das-neves-barcelona-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 880,
                'name' => 'Ribeirão das Neves Bela Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Bela Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7658820;-44.0861923\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Bela',
                'slug' => 'ribeirao-das-neves-bela-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 881,
                'name' => 'Ribeirão das Neves Belo Vale MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Belo Vale MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7473058;-44.1537320\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Belo ',
                'slug' => 'ribeirao-das-neves-belo-vale-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 882,
                'name' => 'Ribeirão das Neves Belvedere MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Belvedere MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Belve',
                'slug' => 'ribeirao-das-neves-belvedere-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 883,
                'name' => 'Ribeirão das Neves Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7931573;-43.9970332\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Boa V',
                'slug' => 'ribeirao-das-neves-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 884,
                'name' => 'Ribeirão das Neves Bom Sossego MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Bom Sossego MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Bom',
                'slug' => 'ribeirao-das-neves-bom-sossego-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 885,
            'name' => 'Ribeirão das Neves Botafogo (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Botafogo (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7928844;-44.0143309\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-botafogo-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 886,
            'name' => 'Ribeirão das Neves Braúna ( Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Braúna ( Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7726043;-44.1435457\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-brauna-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 887,
                'name' => 'Ribeirão das Neves Caiapós MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Caiapós MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8348155;-44.0372945\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Caiapós',
                'slug' => 'ribeirao-das-neves-caiapos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 888,
                'name' => 'Ribeirão das Neves Campos Silveira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Campos Silveira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7665786;-44.0703299\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-campos-silveira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 889,
                'name' => 'Ribeirão das Neves Canoas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Canoas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7959282;-44.0046839\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Canoas M',
                'slug' => 'ribeirao-das-neves-canoas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 890,
                'name' => 'Ribeirão das Neves Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7650067;-44.0863043\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Centro M',
                'slug' => 'ribeirao-das-neves-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 891,
            'name' => 'Ribeirão das Neves Centro (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Centro (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7964649;-44.0137135\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-centro-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 892,
                'name' => 'Ribeirão das Neves Centro Comercial de Justinópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Centro Comercial de Justinópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7989281;-44.0242556\' />
<meta name=\'geo.region\' content=\'BR-R',
                'slug' => 'ribeirao-das-neves-centro-comercial-de-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 893,
            'name' => 'Ribeirão das Neves Cerejeira (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Cerejeira (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7994621;-44.0095020\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-cerejeira-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 894,
            'name' => 'Ribeirão das Neves Céu Anil (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Céu Anil (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8170835;-44.0159005\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-ceu-anil-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 895,
            'name' => 'Ribeirão das Neves Chácaras Bom Retiro (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Chácaras Bom Retiro (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8205388;-44.0276361\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ribeirao-das-neves-chacaras-bom-retiro-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 896,
                'name' => 'Ribeirão das Neves Chácaras do Baú MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Chácaras do Baú MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7665230;-44.0891727\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-chacaras-do-bau-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 897,
                'name' => 'Ribeirão das Neves Cidade Neviana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Cidade Neviana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7777875;-44.1094983\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves ',
                'slug' => 'ribeirao-das-neves-cidade-neviana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 898,
            'name' => 'Ribeirão das Neves Condomínio Recanto dos Pássaros (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Condomínio Recanto dos Pássaros (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7719057;-44.0790213\' />
<meta name=\'geo.region\'',
                'slug' => 'ribeirao-das-neves-condominio-recanto-dos-passaros-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 899,
                'name' => 'Ribeirão das Neves Condomínio Vale do Ouro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Condomínio Vale do Ouro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7810528;-44.1102198\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-condominio-vale-do-ouro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 900,
                'name' => 'Ribeirão das Neves Conjunto Henrique Sapori MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Conjunto Henrique Sapori MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7651913;-44.1403120\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-conjunto-henrique-sapori-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 901,
            'name' => 'Ribeirão das Neves Conjunto Nova Pampulha (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Conjunto Nova Pampulha (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7713771;-43.9844949\' />
<meta name=\'geo.region\' content=',
                'slug' => 'ribeirao-das-neves-conjunto-nova-pampulha-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 902,
            'name' => 'Ribeirão das Neves Cristais (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Cristais (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7732515;-43.9879288\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-cristais-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 903,
                'name' => 'Ribeirão das Neves Cruzeiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Cruzeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7902714;-44.0241922\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Cruzei',
                'slug' => 'ribeirao-das-neves-cruzeiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 904,
                'name' => 'Ribeirão das Neves Distrito Industrial João de Almeida MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Distrito Industrial João de Almeida MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7795368;-44.1357949\' />
<meta name=\'geo.region\' content=\'B',
                'slug' => 'ribeirao-das-neves-distrito-industrial-joao-de-almeida-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 905,
                'name' => 'Ribeirão das Neves Dona Clara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Dona Clara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Dona',
                'slug' => 'ribeirao-das-neves-dona-clara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 906,
                'name' => 'Ribeirão das Neves Dona Clarice MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Dona Clarice MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8191406;-44.0224767\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Do',
                'slug' => 'ribeirao-das-neves-dona-clarice-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 907,
            'name' => 'Ribeirão das Neves Eliane (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Eliane (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8133162;-44.0264374\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-eliane-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 908,
            'name' => 'Ribeirão das Neves Elizabeth (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Elizabeth (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8062834;-44.0178544\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-elizabeth-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 909,
            'name' => 'Ribeirão das Neves Esperança (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Esperança (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7825125;-44.0194177\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-esperanca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 910,
                'name' => 'Ribeirão das Neves Everest MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Everest MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8090044;-44.0111801\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Everest',
                'slug' => 'ribeirao-das-neves-everest-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 911,
                'name' => 'Ribeirão das Neves Fazenda Castro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Fazenda Castro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7675923;-43.9534194\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves ',
                'slug' => 'ribeirao-das-neves-fazenda-castro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 912,
            'name' => 'Ribeirão das Neves Felixlândia (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Felixlândia (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8087354;-44.0247380\' />
<meta name=\'geo.region\' content=\'BR-Ribeirã',
                'slug' => 'ribeirao-das-neves-felixlandia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 913,
            'name' => 'Ribeirão das Neves Flamengo (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Flamengo (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7892612;-44.0071267\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-flamengo-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 914,
                'name' => 'Ribeirão das Neves Florença MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Florença MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7634415;-44.1482175\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Floren',
                'slug' => 'ribeirao-das-neves-florenca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 915,
            'name' => 'Ribeirão das Neves Fortaleza (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Fortaleza (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7473058;-44.1537320\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-fortaleza-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 916,
                'name' => 'Ribeirão das Neves Franciscadriângela MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Franciscadriângela MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8565952;-44.0350931\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Ne',
                'slug' => 'ribeirao-das-neves-franciscadriangela-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 917,
                'name' => 'Ribeirão das Neves Girassol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Girassol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Girass',
                'slug' => 'ribeirao-das-neves-girassol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 918,
            'name' => 'Ribeirão das Neves Granjas Primavera (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Granjas Primavera (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8217911;-44.0261346\' />
<meta name=\'geo.region\' content=\'BR-R',
                'slug' => 'ribeirao-das-neves-granjas-primavera-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 919,
            'name' => 'Ribeirão das Neves Guadalajara (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Guadalajara (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8033772;-44.0066842\' />
<meta name=\'geo.region\' content=\'BR-Ribeirã',
                'slug' => 'ribeirao-das-neves-guadalajara-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 920,
            'name' => 'Ribeirão das Neves Hawaí (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Hawaí (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8110479;-44.0093257\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-hawai-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 921,
                'name' => 'Ribeirão das Neves Iolanda MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Iolanda MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Iolanda',
                'slug' => 'ribeirao-das-neves-iolanda-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 922,
                'name' => 'Ribeirão das Neves Itapoã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Itapoã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8024495;-44.0250421\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Itapoã M',
                'slug' => 'ribeirao-das-neves-itapoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 923,
            'name' => 'Ribeirão das Neves Jardim Alvorada (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim Alvorada (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8321422;-44.0391320\' />
<meta name=\'geo.region\' content=\'BR-Rib',
                'slug' => 'ribeirao-das-neves-jardim-alvorada-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 924,
                'name' => 'Ribeirão das Neves Jardim Colonial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim Colonial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-jardim-colonial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 925,
            'name' => 'Ribeirão das Neves Jardim de Alá (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim de Alá (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8050643;-44.0212791\' />
<meta name=\'geo.region\' content=\'BR-Ribei',
                'slug' => 'ribeirao-das-neves-jardim-de-ala-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 926,
            'name' => 'Ribeirão das Neves Jardim Florência (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim Florência (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ri',
                'slug' => 'ribeirao-das-neves-jardim-florencia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 927,
                'name' => 'Ribeirão das Neves Jardim Primavera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim Primavera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7473058;-44.1537320\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neve',
                'slug' => 'ribeirao-das-neves-jardim-primavera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 928,
            'name' => 'Ribeirão das Neves Jardim São Judas Tadeu (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim São Judas Tadeu (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7794706;-44.1114826\' />
<meta name=\'geo.region\' content=',
                'slug' => 'ribeirao-das-neves-jardim-sao-judas-tadeu-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 929,
                'name' => 'Ribeirão das Neves Jardim Verona MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Jardim Verona MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7785333;-44.1353569\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves J',
                'slug' => 'ribeirao-das-neves-jardim-verona-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 930,
                'name' => 'Ribeirão das Neves José Maria da Costa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves José Maria da Costa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7673957;-44.0016715\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das N',
                'slug' => 'ribeirao-das-neves-jose-maria-da-costa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 931,
            'name' => 'Ribeirão das Neves Kátia (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Kátia (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8125645;-44.0127901\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-katia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 932,
            'name' => 'Ribeirão das Neves Labanca (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Labanca (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7971688;-44.0238791\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-labanca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 933,
            'name' => 'Ribeirão das Neves Lagoa (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Lagoa (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8068056;-44.0038810\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-lagoa-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 934,
            'name' => 'Ribeirão das Neves Landi (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Landi (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7473058;-44.1537320\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-landi-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 935,
            'name' => 'Ribeirão das Neves Landi 2ª Seção (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Landi 2ª Seção (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7800731;-44.1110308\' />
<meta name=\'geo.region\' content=\'BR-Ribe',
                'slug' => 'ribeirao-das-neves-landi-2-secao-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 936,
            'name' => 'Ribeirão das Neves Laredo (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Laredo (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8752997;-44.0293079\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-laredo-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 937,
                'name' => 'Ribeirão das Neves Liberdade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Liberdade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7643228;-44.0832067\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Liber',
                'slug' => 'ribeirao-das-neves-liberdade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 938,
            'name' => 'Ribeirão das Neves Lidici (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Lidici (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7984492;-44.0021549\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-lidici-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 939,
            'name' => 'Ribeirão das Neves Luana (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Luana (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8240677;-44.0349198\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-luana-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 940,
            'name' => 'Ribeirão das Neves Luar da Pampulha (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Luar da Pampulha (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8250451;-44.0116562\' />
<meta name=\'geo.region\' content=\'BR-Ri',
                'slug' => 'ribeirao-das-neves-luar-da-pampulha-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 941,
            'name' => 'Ribeirão das Neves Maracanã (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Maracanã (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7898991;-44.0208333\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-maracana-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 942,
            'name' => 'Ribeirão das Neves Maracanã II (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Maracanã II (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7812471;-44.0231298\' />
<meta name=\'geo.region\' content=\'BR-Ribeirã',
                'slug' => 'ribeirao-das-neves-maracana-ii-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 943,
            'name' => 'Ribeirão das Neves Maria Helena (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Maria Helena (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7899748;-43.9930987\' />
<meta name=\'geo.region\' content=\'BR-Ribeir',
                'slug' => 'ribeirao-das-neves-maria-helena-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 944,
            'name' => 'Ribeirão das Neves Maria Helena 2 (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Maria Helena 2 (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7829911;-44.0181611\' />
<meta name=\'geo.region\' content=\'BR-Ribe',
                'slug' => 'ribeirao-das-neves-maria-helena-2-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 945,
            'name' => 'Ribeirão das Neves Menezes (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Menezes (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7645245;-44.0301834\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-menezes-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 946,
                'name' => 'Ribeirão das Neves Metropolitano MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Metropolitano MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves M',
                'slug' => 'ribeirao-das-neves-metropolitano-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 947,
                'name' => 'Ribeirão das Neves Monte Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Monte Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8004764;-44.0552447\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Mon',
                'slug' => 'ribeirao-das-neves-monte-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 948,
                'name' => 'Ribeirão das Neves Nápoli MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nápoli MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8793255;-44.0304488\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Nápoli M',
                'slug' => 'ribeirao-das-neves-napoli-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 949,
                'name' => 'Ribeirão das Neves Nossa Senhora da Conceição MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nossa Senhora da Conceição MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirã',
                'slug' => 'ribeirao-das-neves-nossa-senhora-da-conceicao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 950,
            'name' => 'Ribeirão das Neves Nossa Senhora da Piedade (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nossa Senhora da Piedade (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7851712;-44.0212755\' />
<meta name=\'geo.region\' conten',
                'slug' => 'ribeirao-das-neves-nossa-senhora-da-piedade-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 951,
                'name' => 'Ribeirão das Neves Nossa Senhora das Neves MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nossa Senhora das Neves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7907339;-44.0178729\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-nossa-senhora-das-neves-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 952,
                'name' => 'Ribeirão das Neves Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7965559;-43.9957070\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 953,
                'name' => 'Ribeirão das Neves Nova União MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Nova União MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Nova',
                'slug' => 'ribeirao-das-neves-nova-uniao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 954,
            'name' => 'Ribeirão das Neves Novo Laredo (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Novo Laredo (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8048902;-44.0070193\' />
<meta name=\'geo.region\' content=\'BR-Ribeirã',
                'slug' => 'ribeirao-das-neves-novo-laredo-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 955,
            'name' => 'Ribeirão das Neves Papine (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Papine (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8059768;-44.0170541\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das',
                'slug' => 'ribeirao-das-neves-papine-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 956,
            'name' => 'Ribeirão das Neves Paraíso das Piabas (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Paraíso das Piabas (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7772846;-44.0259880\' />
<meta name=\'geo.region\' content=\'BR-',
                'slug' => 'ribeirao-das-neves-paraiso-das-piabas-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 957,
            'name' => 'Ribeirão das Neves Pedra Branca (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Pedra Branca (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7777248;-43.9821719\' />
<meta name=\'geo.region\' content=\'BR-Ribeir',
                'slug' => 'ribeirao-das-neves-pedra-branca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 958,
            'name' => 'Ribeirão das Neves Penha (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Penha (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8088427;-44.0041822\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-penha-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 959,
                'name' => 'Ribeirão das Neves Porto Seguro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Porto Seguro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Po',
                'slug' => 'ribeirao-das-neves-porto-seguro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 960,
                'name' => 'Ribeirão das Neves Quintas de Vera Cruz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Quintas de Vera Cruz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-quintas-de-vera-cruz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 961,
                'name' => 'Ribeirão das Neves Quintas do Lago MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Quintas do Lago MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7498522;-44.1401413\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-quintas-do-lago-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 962,
                'name' => 'Ribeirão das Neves Rosana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Rosana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7625612;-44.0783401\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Rosana M',
                'slug' => 'ribeirao-das-neves-rosana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 963,
                'name' => 'Ribeirão das Neves Rosaneves MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Rosaneves MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7415645;-44.0808091\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Rosan',
                'slug' => 'ribeirao-das-neves-rosaneves-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 964,
            'name' => 'Ribeirão das Neves Rosimeire (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Rosimeire (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8331097;-44.0368441\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-rosimeire-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 965,
                'name' => 'Ribeirão das Neves San Genaro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves San Genaro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7473058;-44.1537320\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves San ',
                'slug' => 'ribeirao-das-neves-san-genaro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 966,
                'name' => 'Ribeirão das Neves San Marino MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves San Marino MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8352093;-44.0736119\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves San ',
                'slug' => 'ribeirao-das-neves-san-marino-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 967,
                'name' => 'Ribeirão das Neves San Remo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves San Remo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7643228;-44.0832067\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves San Re',
                'slug' => 'ribeirao-das-neves-san-remo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 968,
            'name' => 'Ribeirão das Neves Santa Branca (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Branca (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7723169;-44.0146493\' />
<meta name=\'geo.region\' content=\'BR-Ribeir',
                'slug' => 'ribeirao-das-neves-santa-branca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 969,
            'name' => 'Ribeirão das Neves Santa Fé (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Fé (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8080999;-44.0061776\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-santa-fe-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 970,
            'name' => 'Ribeirão das Neves Santa Isabel (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Isabel (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8195355;-44.0173443\' />
<meta name=\'geo.region\' content=\'BR-Ribeir',
                'slug' => 'ribeirao-das-neves-santa-isabel-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 971,
            'name' => 'Ribeirão das Neves Santa Margarida (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Margarida (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7837276;-44.0226609\' />
<meta name=\'geo.region\' content=\'BR-Rib',
                'slug' => 'ribeirao-das-neves-santa-margarida-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 972,
                'name' => 'Ribeirão das Neves Santa Marta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Marta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7763943;-44.0756499\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves San',
                'slug' => 'ribeirao-das-neves-santa-marta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 973,
                'name' => 'Ribeirão das Neves Santa Martinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Martinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves ',
                'slug' => 'ribeirao-das-neves-santa-martinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 974,
                'name' => 'Ribeirão das Neves Santa Matilde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Matilde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7938429;-43.9974817\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves S',
                'slug' => 'ribeirao-das-neves-santa-matilde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 975,
                'name' => 'Ribeirão das Neves Santa Paula MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santa Paula MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves San',
                'slug' => 'ribeirao-das-neves-santa-paula-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 976,
            'name' => 'Ribeirão das Neves Santana (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santana (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7609391;-44.0028530\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão da',
                'slug' => 'ribeirao-das-neves-santana-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 977,
                'name' => 'Ribeirão das Neves Santana 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santana 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7764704;-44.0885372\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Santa',
                'slug' => 'ribeirao-das-neves-santana-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 978,
                'name' => 'Ribeirão das Neves Santinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7491779;-44.0633632\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Santin',
                'slug' => 'ribeirao-das-neves-santinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 979,
                'name' => 'Ribeirão das Neves Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7653486;-44.0818044\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves S',
                'slug' => 'ribeirao-das-neves-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 980,
                'name' => 'Ribeirão das Neves São Geraldo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Geraldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7740818;-44.0828217\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves São',
                'slug' => 'ribeirao-das-neves-sao-geraldo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 981,
            'name' => 'Ribeirão das Neves São Januário (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Januário (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7995969;-44.0116934\' />
<meta name=\'geo.region\' content=\'BR-Ribeir',
                'slug' => 'ribeirao-das-neves-sao-januario-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 982,
            'name' => 'Ribeirão das Neves São João de Deus (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São João de Deus (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8124362;-44.0182196\' />
<meta name=\'geo.region\' content=\'BR-Ri',
                'slug' => 'ribeirao-das-neves-sao-joao-de-deus-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 983,
            'name' => 'Ribeirão das Neves São José (Justinópolis ) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São José (Justinópolis ) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8084573;-44.0092143\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-sao-jose-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 984,
                'name' => 'Ribeirão das Neves São Judas Tadeu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Judas Tadeu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7835951;-44.0835657\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-sao-judas-tadeu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 985,
                'name' => 'Ribeirão das Neves São Luiz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8133192;-44.1432397\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves São Lu',
                'slug' => 'ribeirao-das-neves-sao-luiz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 986,
            'name' => 'Ribeirão das Neves São Miguel Arcanjo (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Miguel Arcanjo (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-',
                'slug' => 'ribeirao-das-neves-sao-miguel-arcanjo-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 987,
                'name' => 'Ribeirão das Neves São Pedro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves São Pedro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves São P',
                'slug' => 'ribeirao-das-neves-sao-pedro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 988,
                'name' => 'Ribeirão das Neves Savassi MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Savassi MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7741773;-44.0877118\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Savassi',
                'slug' => 'ribeirao-das-neves-savassi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 989,
                'name' => 'Ribeirão das Neves Severina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Severina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7758360;-44.1303185\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Severi',
                'slug' => 'ribeirao-das-neves-severina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 990,
            'name' => 'Ribeirão das Neves Sevilha (1ª Seção) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Sevilha (1ª Seção) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7511941;-44.0706994\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Ne',
                'slug' => 'ribeirao-das-neves-sevilha-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 991,
            'name' => 'Ribeirão das Neves Sevilha (2ª Seção) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Sevilha (2ª Seção) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7504950;-44.0837288\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Ne',
                'slug' => 'ribeirao-das-neves-sevilha-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 992,
                'name' => 'Ribeirão das Neves Soares MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Soares MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8250503;-44.0223162\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Soares M',
                'slug' => 'ribeirao-das-neves-soares-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 993,
            'name' => 'Ribeirão das Neves Sônia (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Sônia (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8070858;-44.0113868\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-sonia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 994,
                'name' => 'Ribeirão das Neves Status MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Status MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7801621;-44.0785112\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Status M',
                'slug' => 'ribeirao-das-neves-status-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 995,
            'name' => 'Ribeirão das Neves Suely (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Suely (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-suely-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 996,
            'name' => 'Ribeirão das Neves Tancredo Neves (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Tancredo Neves (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8252241;-44.0190990\' />
<meta name=\'geo.region\' content=\'BR-Ribe',
                'slug' => 'ribeirao-das-neves-tancredo-neves-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 997,
                'name' => 'Ribeirão das Neves Tânia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Tânia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7939640;-43.9926759\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Tânia MG\'',
                'slug' => 'ribeirao-das-neves-tania-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 998,
            'name' => 'Ribeirão das Neves Tocantins (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Tocantins (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-tocantins-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 999,
            'name' => 'Ribeirão das Neves Tony (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Tony (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7951747;-44.0044574\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das N',
                'slug' => 'ribeirao-das-neves-tony-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1000,
            'name' => 'Ribeirão das Neves Tropical (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Tropical (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7950006;-44.0194021\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-tropical-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1001,
            'name' => 'Ribeirão das Neves Urca (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Urca (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7645245;-44.0301834\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das N',
                'slug' => 'ribeirao-das-neves-urca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1002,
                'name' => 'Ribeirão das Neves Vale da Prata MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vale da Prata MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7520432;-44.1479188\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves V',
                'slug' => 'ribeirao-das-neves-vale-da-prata-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1003,
                'name' => 'Ribeirão das Neves Vale das Acácias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vale das Acácias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7547853;-44.1387745\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neve',
                'slug' => 'ribeirao-das-neves-vale-das-acacias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1004,
                'name' => 'Ribeirão das Neves Vale Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vale Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Vale',
                'slug' => 'ribeirao-das-neves-vale-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1005,
                'name' => 'Ribeirão das Neves Várzea Alegre MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Várzea Alegre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves V',
                'slug' => 'ribeirao-das-neves-varzea-alegre-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1006,
                'name' => 'Ribeirão das Neves Veneza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Veneza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7711016;-44.1331283\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Veneza M',
                'slug' => 'ribeirao-das-neves-veneza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1007,
            'name' => 'Ribeirão das Neves Vera Lúcia (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vera Lúcia (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7969262;-44.0270758\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão',
                'slug' => 'ribeirao-das-neves-vera-lucia-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1008,
                'name' => 'Ribeirão das Neves Vereda MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vereda MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8267036;-44.0926130\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Vereda M',
                'slug' => 'ribeirao-das-neves-vereda-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1009,
                'name' => 'Ribeirão das Neves Verônica MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Verônica MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8316269;-44.0363818\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Verôni',
                'slug' => 'ribeirao-das-neves-veronica-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1010,
            'name' => 'Ribeirão das Neves Viena (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Viena (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das ',
                'slug' => 'ribeirao-das-neves-viena-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1011,
                'name' => 'Ribeirão das Neves Vila Aparecida MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Aparecida MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7772147;-44.0856263\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves ',
                'slug' => 'ribeirao-das-neves-vila-aparecida-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1012,
                'name' => 'Ribeirão das Neves Vila Bispo de Maura MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Bispo de Maura MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8348155;-44.0372945\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das N',
                'slug' => 'ribeirao-das-neves-vila-bispo-de-maura-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1013,
            'name' => 'Ribeirão das Neves Vila Delma (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Delma (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7722930;-44.0231969\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão',
                'slug' => 'ribeirao-das-neves-vila-delma-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1014,
                'name' => 'Ribeirão das Neves Vila do Cacique MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila do Cacique MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7605065;-44.0998817\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-vila-do-cacique-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1015,
                'name' => 'Ribeirão das Neves Vila do Sapé MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila do Sapé MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7560343;-44.0965444\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Vi',
                'slug' => 'ribeirao-das-neves-vila-do-sape-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1016,
                'name' => 'Ribeirão das Neves Vila Esplanada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Esplanada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9285446;-43.9070055\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves ',
                'slug' => 'ribeirao-das-neves-vila-esplanada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1017,
                'name' => 'Ribeirão das Neves Vila Fluminense MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Fluminense MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves',
                'slug' => 'ribeirao-das-neves-vila-fluminense-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1018,
                'name' => 'Ribeirão das Neves Vila Mariana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Mariana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7704252;-44.0951938\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neves Vi',
                'slug' => 'ribeirao-das-neves-vila-mariana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1019,
            'name' => 'Ribeirão das Neves Vila Real (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Real (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8181416;-44.0193200\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão ',
                'slug' => 'ribeirao-das-neves-vila-real-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1020,
            'name' => 'Ribeirão das Neves Vila Santa Branca (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Santa Branca (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8034475;-44.0023351\' />
<meta name=\'geo.region\' content=\'BR-R',
                'slug' => 'ribeirao-das-neves-vila-santa-branca-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1021,
            'name' => 'Ribeirão das Neves Vila Santa Cruz (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Santa Cruz (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7971649;-44.0032467\' />
<meta name=\'geo.region\' content=\'BR-Rib',
                'slug' => 'ribeirao-das-neves-vila-santa-cruz-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1022,
                'name' => 'Ribeirão das Neves Vila Terezópolis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vila Terezópolis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8291814;-44.0216818\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão das Neve',
                'slug' => 'ribeirao-das-neves-vila-terezopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1023,
            'name' => 'Ribeirão das Neves Vilage dos Chalés (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Vilage dos Chalés (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7619024;-44.0853572\' />
<meta name=\'geo.region\' content=\'BR-R',
                'slug' => 'ribeirao-das-neves-vilage-dos-chales-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1024,
            'name' => 'Ribeirão das Neves Xangrilá (Justinópolis) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ribeirão das Neves Xangrilá (Justinópolis) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8329491;-44.0309239\' />
<meta name=\'geo.region\' content=\'BR-Ribeirão d',
                'slug' => 'ribeirao-das-neves-xangrila-justinopolis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1025,
                'name' => 'Ibirité',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0310798;-44.0570074\' />
<meta name=\'geo.region\' content=\'BR-Ibirité\' />
<meta name=\'ICBM\' conten',
                'slug' => 'ibirite',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1026,
                'name' => 'Ibirité Águia Dourada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Águia Dourada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0253321;-44.0325779\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Águia Dourada MG\' />
',
                'slug' => 'ibirite-aguia-dourada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1027,
                'name' => 'Ibirité Alvorada - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Alvorada - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0238433;-44.0623300\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Alvorada - 1ª Seç',
                'slug' => 'ibirite-alvorada-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1028,
                'name' => 'Ibirité Alvorada - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Alvorada - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0269834;-44.0603364\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Alvorada - 2ª Seç',
                'slug' => 'ibirite-alvorada-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1029,
                'name' => 'Ibirité Alvorada - 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Alvorada - 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0306193;-44.0578134\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Alvorada - 3ª Seç',
                'slug' => 'ibirite-alvorada-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1030,
                'name' => 'Ibirité Alvorada - 4ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Alvorada - 4ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0238433;-44.0623300\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Alvorada - 4ª Seç',
                'slug' => 'ibirite-alvorada-4-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1031,
                'name' => 'Ibirité Alvorada - 5ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Alvorada - 5ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0230746;-44.0608772\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Alvorada - 5ª Seç',
                'slug' => 'ibirite-alvorada-5-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1032,
            'name' => 'Ibirité Aparecida (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Aparecida (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0022744;-44.0747014\' />
<meta name=\'geo.region\' content=\'BR-Ibirité A',
                'slug' => 'ibirite-aparecida-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1033,
                'name' => 'Ibirité Área Rural de Ibirité MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Área Rural de Ibirité MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0157279;-44.0826155\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Área Rural de I',
                'slug' => 'ibirite-area-rural-de-ibirite-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1034,
            'name' => 'Ibirité Bela Vista (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Bela Vista (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0280550;-44.0673698\' />
<meta name=\'geo.region\' content=\'BR-Ibirité ',
                'slug' => 'ibirite-bela-vista-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1035,
                'name' => 'Ibirité Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0112544;-44.1218972\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Boa Vista MG\' />
',
                'slug' => 'ibirite-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1036,
                'name' => 'Ibirité Bosques de Ibirité MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Bosques de Ibirité MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0362210;-44.0477341\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Bosques de Ibirité',
                'slug' => 'ibirite-bosques-de-ibirite-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1037,
                'name' => 'Ibirité Camargos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Camargos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0381248;-44.0646700\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Camargos MG\' />
',
                'slug' => 'ibirite-camargos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1038,
                'name' => 'Ibirité Campos Filho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Campos Filho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0141861;-44.0908480\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Campos Filho MG\' />
',
                'slug' => 'ibirite-campos-filho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1039,
                'name' => 'Ibirité Canaã - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Canaã - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9668235;-44.0268463\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Canaã - 1ª Seção MG\'',
                'slug' => 'ibirite-canaa-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1040,
                'name' => 'Ibirité Canaã - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Canaã - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9899636;-44.0633155\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Canaã - 2ª Seção MG\'',
                'slug' => 'ibirite-canaa-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1041,
                'name' => 'Ibirité Canal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Canal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0145809;-44.0889969\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Canal MG\' />
',
                'slug' => 'ibirite-canal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1042,
                'name' => 'Ibirité Canoas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Canoas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0204576;-44.0986969\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Canoas MG\' />
',
                'slug' => 'ibirite-canoas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1043,
            'name' => 'Ibirité Cascata (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Cascata (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9925542;-44.0797231\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Cas',
                'slug' => 'ibirite-cascata-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1044,
                'name' => 'Ibirité Central Park MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Central Park MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0247806;-44.0569977\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Central Park MG\' />
',
                'slug' => 'ibirite-central-park-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1045,
                'name' => 'Ibirité Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0216523;-44.0583735\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Centro MG\' />
',
                'slug' => 'ibirite-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1046,
                'name' => 'Ibirité Chácara MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Chácara MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0214998;-44.0643663\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Chácara MG\' />
',
                'slug' => 'ibirite-chacara-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1047,
                'name' => 'Ibirité Condomínio Bela Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Condomínio Bela Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9831640;-44.0752300\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Condomínio Bela',
                'slug' => 'ibirite-condominio-bela-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1048,
            'name' => 'Ibirité Condomínio das Palmeiras (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Condomínio das Palmeiras (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9360061;-44.1142851\' />
<meta name=\'geo.region\' conten',
                'slug' => 'ibirite-condominio-das-palmeiras-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1049,
                'name' => 'Ibirité Cruzeiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Cruzeiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0339689;-44.0582398\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Cruzeiro MG\' />
',
                'slug' => 'ibirite-cruzeiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1050,
                'name' => 'Ibirité Déa Marly MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Déa Marly MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0262875;-44.0707009\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Déa Marly MG\' />
',
                'slug' => 'ibirite-dea-marly-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1051,
            'name' => 'Ibirité Distrito Industrial (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Distrito Industrial (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9978066;-44.1007090\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-distrito-industrial-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1052,
                'name' => 'Ibirité Distrito Industrial de Ibirité MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Distrito Industrial de Ibirité MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0130143;-44.0919136\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Distri',
                'slug' => 'ibirite-distrito-industrial-de-ibirite-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1053,
                'name' => 'Ibirité Distrito Industrial Marsil MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Distrito Industrial Marsil MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0171803;-44.1192452\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Distrito I',
                'slug' => 'ibirite-distrito-industrial-marsil-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1054,
            'name' => 'Ibirité Eldorado (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Eldorado (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0021027;-44.0873390\' />
<meta name=\'geo.region\' content=\'BR-Ibirité El',
                'slug' => 'ibirite-eldorado-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1055,
                'name' => 'Ibirité Giácomo Aluotto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Giácomo Aluotto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0230746;-44.0608772\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Giácomo Aluotto MG\' /',
                'slug' => 'ibirite-giacomo-aluotto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1056,
            'name' => 'Ibirité Guanabara (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Guanabara (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9837217;-44.0262820\' />
<meta name=\'geo.region\' content=\'BR-Ibirité G',
                'slug' => 'ibirite-guanabara-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1057,
            'name' => 'Ibirité Industrial - 4ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Industrial - 4ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9824420;-44.0575092\' />
<meta name=\'geo.region\' content=\'',
                'slug' => 'ibirite-industrial-4-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1058,
                'name' => 'Ibirité Ipiranga MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Ipiranga MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0306193;-44.0578134\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Ipiranga MG\' />
',
                'slug' => 'ibirite-ipiranga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1059,
                'name' => 'Ibirité Jaçanã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jaçanã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0172049;-44.0901025\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jaçanã MG\' />
',
                'slug' => 'ibirite-jacana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1060,
                'name' => 'Ibirité Jardim das Flores MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim das Flores MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9734261;-44.0513323\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim das Flores M',
                'slug' => 'ibirite-jardim-das-flores-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1061,
                'name' => 'Ibirité Jardim das Oliveiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim das Oliveiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0020328;-44.0899412\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim das Olive',
                'slug' => 'ibirite-jardim-das-oliveiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1062,
            'name' => 'Ibirité Jardim das Rosas - 1ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim das Rosas - 1ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0263286;-44.0597721\' />
<meta name=\'geo.region\' con',
                'slug' => 'ibirite-jardim-das-rosas-1-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1063,
            'name' => 'Ibirité Jardim das Rosas - 2ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim das Rosas - 2ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0021027;-44.0873390\' />
<meta name=\'geo.region\' con',
                'slug' => 'ibirite-jardim-das-rosas-2-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1064,
                'name' => 'Ibirité Jardim Ibirité MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Ibirité MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0283482;-44.0553320\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim Ibirité MG\' />
',
                'slug' => 'ibirite-jardim-ibirite-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1065,
            'name' => 'Ibirité Jardim Industrial (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Industrial (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0029250;-44.0909493\' />
<meta name=\'geo.region\' content=\'BR-I',
                'slug' => 'ibirite-jardim-industrial-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1066,
                'name' => 'Ibirité Jardim Ipê MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Ipê MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0224994;-44.0672844\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim Ipê MG\' />
',
                'slug' => 'ibirite-jardim-ipe-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1067,
                'name' => 'Ibirité Jardim Monsenhor Horta - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Monsenhor Horta - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0387813;-44.0573139\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jar',
                'slug' => 'ibirite-jardim-monsenhor-horta-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1068,
                'name' => 'Ibirité Jardim Monsenhor Horta - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Monsenhor Horta - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0485980;-44.0538087\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jar',
                'slug' => 'ibirite-jardim-monsenhor-horta-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1069,
                'name' => 'Ibirité Jardim Montanhês MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Montanhês MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0485980;-44.0538087\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim Montanhês MG\'',
                'slug' => 'ibirite-jardim-montanhes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1070,
                'name' => 'Ibirité Jardim Montreal - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Montreal - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0148230;-44.1213971\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim Mon',
                'slug' => 'ibirite-jardim-montreal-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1071,
                'name' => 'Ibirité Jardim Rosário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Jardim Rosário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0363457;-44.0675633\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Jardim Rosário MG\' />
',
                'slug' => 'ibirite-jardim-rosario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1072,
            'name' => 'Ibirité José do Prado (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité José do Prado (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9849747;-44.0595295\' />
<meta name=\'geo.region\' content=\'BR-Ibiri',
                'slug' => 'ibirite-jose-do-prado-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1073,
                'name' => 'Ibirité Lago Azul - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Lago Azul - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0146557;-44.0946563\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Lago Azul - 1ª S',
                'slug' => 'ibirite-lago-azul-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1074,
                'name' => 'Ibirité Lago Azul - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Lago Azul - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0210555;-44.0975270\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Lago Azul - 2ª S',
                'slug' => 'ibirite-lago-azul-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1075,
                'name' => 'Ibirité Lago Azul - 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Lago Azul - 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0146557;-44.0946563\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Lago Azul - 3ª S',
                'slug' => 'ibirite-lago-azul-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1076,
            'name' => 'Ibirité Lajinha (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Lajinha (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9936458;-44.0752548\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Laj',
                'slug' => 'ibirite-lajinha-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1077,
                'name' => 'Ibirité Los Angeles MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Los Angeles MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0127173;-44.0449944\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Los Angeles MG\' />
',
                'slug' => 'ibirite-los-angeles-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1078,
                'name' => 'Ibirité Macaúbas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Macaúbas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0203741;-44.0634850\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Macaúbas MG\' />
',
                'slug' => 'ibirite-macaubas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1079,
                'name' => 'Ibirité Marilândia - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Marilândia - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0090486;-44.0466453\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Marilândia - 1ª',
                'slug' => 'ibirite-marilandia-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1080,
                'name' => 'Ibirité Marilândia - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Marilândia - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0090486;-44.0466453\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Marilândia - 2ª',
                'slug' => 'ibirite-marilandia-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1081,
                'name' => 'Ibirité Marilândia - 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Marilândia - 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0047293;-44.0476263\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Marilândia - 3ª',
                'slug' => 'ibirite-marilandia-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1082,
                'name' => 'Ibirité Morada da Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Morada da Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0248874;-44.0441265\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Morada da Serra MG\' /',
                'slug' => 'ibirite-morada-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1083,
                'name' => 'Ibirité Morada do Sol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Morada do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9997244;-44.0658436\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Morada do Sol MG\' />
',
                'slug' => 'ibirite-morada-do-sol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1084,
                'name' => 'Ibirité Nascimento MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Nascimento MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0191328;-44.0642544\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Nascimento MG\' />
',
                'slug' => 'ibirite-nascimento-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1085,
                'name' => 'Ibirité Nossa Senhora de Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Nossa Senhora de Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0341247;-44.0615078\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Nossa Senhora',
                'slug' => 'ibirite-nossa-senhora-de-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1086,
                'name' => 'Ibirité Nossa Senhora de Lourdes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Nossa Senhora de Lourdes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0235075;-44.0437277\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Nossa Senhor',
                'slug' => 'ibirite-nossa-senhora-de-lourdes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1087,
                'name' => 'Ibirité Novo Barreirinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Novo Barreirinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9660708;-44.1361583\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Novo Barreirinho MG\'',
                'slug' => 'ibirite-novo-barreirinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1088,
                'name' => 'Ibirité Novo Horizonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Novo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0293774;-44.0719776\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Novo Horizonte MG\' />
',
                'slug' => 'ibirite-novo-horizonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1089,
                'name' => 'Ibirité Ouro Negro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Ouro Negro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0248874;-44.0441265\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Ouro Negro MG\' />
',
                'slug' => 'ibirite-ouro-negro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1090,
            'name' => 'Ibirité Palmares - 1ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Palmares - 1ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9935102;-44.0681638\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-palmares-1-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1091,
            'name' => 'Ibirité Palmares - 2ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Palmares - 2ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9965853;-44.0715280\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-palmares-2-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1092,
            'name' => 'Ibirité Palmares - 4ª Seção (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Palmares - 4ª Seção (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0030879;-44.0886304\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-palmares-4-secao-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1093,
            'name' => 'Ibirité Palmeiras (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Palmeiras (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0280550;-44.0673698\' />
<meta name=\'geo.region\' content=\'BR-Ibirité P',
                'slug' => 'ibirite-palmeiras-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1094,
                'name' => 'Ibirité Pantana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Pantana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0209123;-44.0583327\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Pantana MG\' />
',
                'slug' => 'ibirite-pantana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1095,
                'name' => 'Ibirité Parque Afonso de Matos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Afonso de Matos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0216523;-44.0583735\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Parque Afonso ',
                'slug' => 'ibirite-parque-afonso-de-matos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1096,
                'name' => 'Ibirité Parque Antônio Amábile MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Antônio Amábile MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0216523;-44.0583735\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Parque Antônio',
                'slug' => 'ibirite-parque-antonio-amabile-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1097,
            'name' => 'Ibirité Parque Duval de Barros (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Duval de Barros (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9748342;-44.0703667\' />
<meta name=\'geo.region\' content=',
                'slug' => 'ibirite-parque-duval-de-barros-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1098,
                'name' => 'Ibirité Parque Elizabeth MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Elizabeth MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0129607;-44.0433499\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Parque Elizabeth MG\'',
                'slug' => 'ibirite-parque-elizabeth-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1099,
                'name' => 'Ibirité Parque Estrela do Sul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Estrela do Sul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0224994;-44.0672844\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Parque Estrela ',
                'slug' => 'ibirite-parque-estrela-do-sul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1100,
                'name' => 'Ibirité Parque Jardim 1º de Outubro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Parque Jardim 1º de Outubro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0321000;-44.0574174\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Parque Ja',
                'slug' => 'ibirite-parque-jardim-1-de-outubro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1101,
            'name' => 'Ibirité Petrolina (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Petrolina (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9970650;-44.0934358\' />
<meta name=\'geo.region\' content=\'BR-Ibirité P',
                'slug' => 'ibirite-petrolina-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1102,
                'name' => 'Ibirité Petrovale - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Petrovale - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9955123;-44.1118458\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Petrovale - 1ª S',
                'slug' => 'ibirite-petrovale-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1103,
                'name' => 'Ibirité Petrovale - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Petrovale - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9955123;-44.1118458\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Petrovale - 2ª S',
                'slug' => 'ibirite-petrovale-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1104,
            'name' => 'Ibirité Piratininga (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Piratininga (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9927550;-44.0555163\' />
<meta name=\'geo.region\' content=\'BR-Ibirité',
                'slug' => 'ibirite-piratininga-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1105,
                'name' => 'Ibirité Primavera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Primavera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0253321;-44.0325779\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Primavera MG\' />
',
                'slug' => 'ibirite-primavera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1106,
            'name' => 'Ibirité Professor Washington Pires (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Professor Washington Pires (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0256695;-44.0572964\' />
<meta name=\'geo.region\' cont',
                'slug' => 'ibirite-professor-washington-pires-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1107,
                'name' => 'Ibirité Quintas da Jangada - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Quintas da Jangada - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0256108;-44.0996747\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Quintas',
                'slug' => 'ibirite-quintas-da-jangada-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1108,
                'name' => 'Ibirité Quintas da Jangada - 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Quintas da Jangada - 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0239955;-44.0927259\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Quintas',
                'slug' => 'ibirite-quintas-da-jangada-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1109,
                'name' => 'Ibirité Recanto da Lagoa - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Recanto da Lagoa - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0191971;-44.1227708\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Recanto d',
                'slug' => 'ibirite-recanto-da-lagoa-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1110,
                'name' => 'Ibirité Recanto da Lagoa - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Recanto da Lagoa - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0191971;-44.1227708\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Recanto d',
                'slug' => 'ibirite-recanto-da-lagoa-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1111,
                'name' => 'Ibirité Recanto das Árvores MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Recanto das Árvores MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0293774;-44.0719776\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Recanto das Árvor',
                'slug' => 'ibirite-recanto-das-arvores-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1112,
                'name' => 'Ibirité Recanto Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Recanto Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9965853;-44.0715280\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Recanto Verde MG\' />
',
                'slug' => 'ibirite-recanto-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1113,
                'name' => 'Ibirité Recanto Verde - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Recanto Verde - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9796334;-44.0417218\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Recanto Verd',
                'slug' => 'ibirite-recanto-verde-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1114,
                'name' => 'Ibirité Redenção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Redenção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0262875;-44.0707009\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Redenção MG\' />
',
                'slug' => 'ibirite-redencao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1115,
            'name' => 'Ibirité Residencial Lajinha (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Residencial Lajinha (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9498551;-44.1269134\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-residencial-lajinha-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1116,
                'name' => 'Ibirité Residencial Metrópole MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Residencial Metrópole MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0281827;-44.0531327\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Residencial Met',
                'slug' => 'ibirite-residencial-metropole-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1117,
            'name' => 'Ibirité Residencial Palmira (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Residencial Palmira (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9936458;-44.0752548\' />
<meta name=\'geo.region\' content=\'BR',
                'slug' => 'ibirite-residencial-palmira-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1118,
                'name' => 'Ibirité Residencial Serra Verde MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Residencial Serra Verde MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0510393;-44.0512767\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Residencial S',
                'slug' => 'ibirite-residencial-serra-verde-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1119,
                'name' => 'Ibirité Santa Maria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Santa Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0269834;-44.0603364\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Santa Maria MG\' />
',
                'slug' => 'ibirite-santa-maria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1120,
                'name' => 'Ibirité Santa Rita MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Santa Rita MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0354837;-44.0508601\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Santa Rita MG\' />
',
                'slug' => 'ibirite-santa-rita-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1121,
                'name' => 'Ibirité Santa Terezinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Santa Terezinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0354837;-44.0508601\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Santa Terezinha MG\' /',
                'slug' => 'ibirite-santa-terezinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1122,
                'name' => 'Ibirité São Geraldo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité São Geraldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0230746;-44.0608772\' />
<meta name=\'geo.region\' content=\'BR-Ibirité São Geraldo MG\' />
',
                'slug' => 'ibirite-sao-geraldo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1123,
                'name' => 'Ibirité São João MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité São João MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0176923;-44.0520375\' />
<meta name=\'geo.region\' content=\'BR-Ibirité São João MG\' />
',
                'slug' => 'ibirite-sao-joao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1124,
            'name' => 'Ibirité São Judas Tadeu (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité São Judas Tadeu (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0137080;-44.0436844\' />
<meta name=\'geo.region\' content=\'BR-Ibi',
                'slug' => 'ibirite-sao-judas-tadeu-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1125,
                'name' => 'Ibirité São Pedro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité São Pedro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0101907;-44.0953484\' />
<meta name=\'geo.region\' content=\'BR-Ibirité São Pedro MG\' />
',
                'slug' => 'ibirite-sao-pedro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1126,
            'name' => 'Ibirité Serra Dourada (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Serra Dourada (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0028526;-44.0719942\' />
<meta name=\'geo.region\' content=\'BR-Ibiri',
                'slug' => 'ibirite-serra-dourada-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1127,
            'name' => 'Ibirité Sol Nascente (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Sol Nascente (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0148230;-44.1213971\' />
<meta name=\'geo.region\' content=\'BR-Ibirit',
                'slug' => 'ibirite-sol-nascente-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1128,
                'name' => 'Ibirité Trevo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Trevo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0214624;-44.0913640\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Trevo MG\' />
',
                'slug' => 'ibirite-trevo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1129,
                'name' => 'Ibirité Várzea MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Várzea MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0257384;-44.0557280\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Várzea MG\' />
',
                'slug' => 'ibirite-varzea-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1130,
            'name' => 'Ibirité Vila Bugarim (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Bugarim (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9970650;-44.0934358\' />
<meta name=\'geo.region\' content=\'BR-Ibirit',
                'slug' => 'ibirite-vila-bugarim-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1131,
                'name' => 'Ibirité Vila Canaã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Canaã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0136561;-44.0966420\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Canaã MG\' />
',
                'slug' => 'ibirite-vila-canaa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1132,
                'name' => 'Ibirité Vila Candelária MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Candelária MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0207776;-44.0639605\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Candelária MG\' /',
                'slug' => 'ibirite-vila-candelaria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1133,
                'name' => 'Ibirité Vila Carvalho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Carvalho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0203741;-44.0634850\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Carvalho MG\' />
',
                'slug' => 'ibirite-vila-carvalho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1134,
                'name' => 'Ibirité Vila dos Operários MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila dos Operários MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0081467;-44.0465769\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila dos Operários',
                'slug' => 'ibirite-vila-dos-operarios-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1135,
                'name' => 'Ibirité Vila Escorpião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Escorpião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9911888;-44.0669814\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Escorpião MG\' />
',
                'slug' => 'ibirite-vila-escorpiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1136,
            'name' => 'Ibirité Vila Ideal (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Ideal (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9925542;-44.0797231\' />
<meta name=\'geo.region\' content=\'BR-Ibirité ',
                'slug' => 'ibirite-vila-ideal-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1137,
                'name' => 'Ibirité Vila Nova Esperança - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Nova Esperança - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0203029;-44.0722542\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila N',
                'slug' => 'ibirite-vila-nova-esperanca-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1138,
                'name' => 'Ibirité Vila Nova Esperança - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Nova Esperança - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0206249;-44.0601254\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila N',
                'slug' => 'ibirite-vila-nova-esperanca-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1139,
                'name' => 'Ibirité Vila Nova Esperança - 3ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Nova Esperança - 3ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0206249;-44.0601254\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila N',
                'slug' => 'ibirite-vila-nova-esperanca-3-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1140,
                'name' => 'Ibirité Vila Nova Esperança - 4ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Nova Esperança - 4ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0203741;-44.0634850\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila N',
                'slug' => 'ibirite-vila-nova-esperanca-4-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1141,
                'name' => 'Ibirité Vila Nunes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Nunes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0141861;-44.0908480\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Nunes MG\' />
',
                'slug' => 'ibirite-vila-nunes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1142,
                'name' => 'Ibirité Vila Ouro Negro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Ouro Negro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0074478;-44.1206317\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Ouro Negro MG\' /',
                'slug' => 'ibirite-vila-ouro-negro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1143,
            'name' => 'Ibirité Vila Petrolina (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Petrolina (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9936458;-44.0752548\' />
<meta name=\'geo.region\' content=\'BR-Ibir',
                'slug' => 'ibirite-vila-petrolina-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1144,
                'name' => 'Ibirité Vila Pinheiros MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Pinheiros MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0203741;-44.0634850\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Pinheiros MG\' />
',
                'slug' => 'ibirite-vila-pinheiros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1145,
                'name' => 'Ibirité Vila Rosário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Rosário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0575602;-43.9920802\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila Rosário MG\' />
',
                'slug' => 'ibirite-vila-rosario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1146,
                'name' => 'Ibirité Vila São Luiz MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila São Luiz MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0205296;-44.0573383\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vila São Luiz MG\' />
',
                'slug' => 'ibirite-vila-sao-luiz-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1147,
            'name' => 'Ibirité Vila Serra Dourada (Parque Durval de Barros) MG',
            'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vila Serra Dourada (Parque Durval de Barros) MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9925542;-44.0797231\' />
<meta name=\'geo.region\' content=\'BR-',
                'slug' => 'ibirite-vila-serra-dourada-parque-durval-de-barros-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1148,
                'name' => 'Ibirité Vista Alegre - 1ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vista Alegre - 1ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0248874;-44.0441265\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vista Alegre ',
                'slug' => 'ibirite-vista-alegre-1-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1149,
                'name' => 'Ibirité Vista Alegre - 2ª Seção MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Ibirité Vista Alegre - 2ª Seção MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0337493;-44.0439569\' />
<meta name=\'geo.region\' content=\'BR-Ibirité Vista Alegre ',
                'slug' => 'ibirite-vista-alegre-2-secao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1150,
                'name' => 'BH',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Belo Horizonte, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.922732;-43.945095\' />
<meta name=\'geo.region\' content=\'BR-Belo Horizonte\' />
<meta nam',
                'slug' => 'bh',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1151,
                'name' => 'Sete Lagoas',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas\' />
<meta name=\'I',
                'slug' => 'sete-lagoas',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1152,
                'name' => 'Sete Lagoas Aeroporto Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Aeroporto Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4324057;-44.2289527\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Aeropo',
                'slug' => 'sete-lagoas-aeroporto-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1153,
                'name' => 'Sete Lagoas Alex Paiva MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Alex Paiva MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Alex Paiva MG\' /',
                'slug' => 'sete-lagoas-alex-paiva-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1154,
                'name' => 'Sete Lagoas Alto Coqueiral MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Alto Coqueiral MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Alto Coqueir',
                'slug' => 'sete-lagoas-alto-coqueiral-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1155,
                'name' => 'Sete Lagoas Alvorada MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Alvorada MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4189969;-44.2530163\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Alvorada MG\' />
',
                'slug' => 'sete-lagoas-alvorada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1156,
                'name' => 'Sete Lagoas Anchieta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Anchieta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Anchieta MG\' />
',
                'slug' => 'sete-lagoas-anchieta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1157,
                'name' => 'Sete Lagoas Área Rural de Sete Lagoas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Área Rural de Sete Lagoas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Á',
                'slug' => 'sete-lagoas-area-rural-de-sete-lagoas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1158,
                'name' => 'Sete Lagoas Areias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Areias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Areias MG\' />
',
                'slug' => 'sete-lagoas-areias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1159,
                'name' => 'Sete Lagoas Bandeirante MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bandeirante MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4512273;-44.2495798\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bandeirante MG\'',
                'slug' => 'sete-lagoas-bandeirante-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1160,
                'name' => 'Sete Lagoas Barreiro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Barreiro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4519634;-44.3185855\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Barreiro MG\' />
',
                'slug' => 'sete-lagoas-barreiro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1161,
                'name' => 'Sete Lagoas Barreiro de Baixo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Barreiro de Baixo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4741225;-44.2502956\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Barreiro ',
                'slug' => 'sete-lagoas-barreiro-de-baixo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1162,
                'name' => 'Sete Lagoas Barreiro de Cima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Barreiro de Cima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Barreiro d',
                'slug' => 'sete-lagoas-barreiro-de-cima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1163,
                'name' => 'Sete Lagoas Bela Vista 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bela Vista 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4389440;-44.2111629\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bela Vista 2 M',
                'slug' => 'sete-lagoas-bela-vista-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1164,
                'name' => 'Sete Lagoas Bela Vista 3 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bela Vista 3 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bela Vista 3 M',
                'slug' => 'sete-lagoas-bela-vista-3-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1165,
                'name' => 'Sete Lagoas Bela Vista l MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bela Vista l MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4378621;-44.2171997\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bela Vista l M',
                'slug' => 'sete-lagoas-bela-vista-l-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1166,
                'name' => 'Sete Lagoas Belo Vale MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Belo Vale MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4095673;-44.2248607\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Belo Vale MG\' />',
                'slug' => 'sete-lagoas-belo-vale-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1167,
                'name' => 'Sete Lagoas Belo Vale ll MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Belo Vale ll MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4093568;-44.2264594\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Belo Vale ll M',
                'slug' => 'sete-lagoas-belo-vale-ll-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1168,
                'name' => 'Sete Lagoas Blue Garden Safira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Blue Garden Safira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Blue Gar',
                'slug' => 'sete-lagoas-blue-garden-safira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1169,
                'name' => 'Sete Lagoas Boa Vista MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Boa Vista MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4599302;-44.2347356\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Boa Vista MG\' />',
                'slug' => 'sete-lagoas-boa-vista-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1170,
                'name' => 'Sete Lagoas Bom Jardim MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bom Jardim MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4427031;-44.2355162\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bom Jardim MG\' /',
                'slug' => 'sete-lagoas-bom-jardim-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1171,
                'name' => 'Sete Lagoas Bom Jesus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bom Jesus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4448814;-44.2306116\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bom Jesus MG\' />',
                'slug' => 'sete-lagoas-bom-jesus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1172,
                'name' => 'Sete Lagoas Bouganvile l MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bouganvile l MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4234288;-44.1923235\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bouganvile l M',
                'slug' => 'sete-lagoas-bouganvile-l-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1173,
                'name' => 'Sete Lagoas Bouganvile ll MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Bouganvile ll MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Bouganvile ll',
                'slug' => 'sete-lagoas-bouganvile-ll-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1174,
                'name' => 'Sete Lagoas Brasília MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Brasília MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4609571;-44.2048786\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Brasília MG\' />
',
                'slug' => 'sete-lagoas-brasilia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1175,
                'name' => 'Sete Lagoas Braz Filizola MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Braz Filizola MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4488858;-44.2319953\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Braz Filizola',
                'slug' => 'sete-lagoas-braz-filizola-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1176,
                'name' => 'Sete Lagoas Brejão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Brejão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Brejão MG\' />
',
                'slug' => 'sete-lagoas-brejao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1177,
                'name' => 'Sete Lagoas Brejinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Brejinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4492462;-44.2264840\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Brejinho MG\' />
',
                'slug' => 'sete-lagoas-brejinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1178,
                'name' => 'Sete Lagoas Campo de Aviação MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Campo de Aviação MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4570841;-44.2584442\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Campo de A',
                'slug' => 'sete-lagoas-campo-de-aviacao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1179,
                'name' => 'Sete Lagoas Canaã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Canaã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4679731;-44.2564494\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Canaã MG\' />
',
                'slug' => 'sete-lagoas-canaa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1180,
                'name' => 'Sete Lagoas Canadá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Canadá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4462932;-44.2090162\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Canadá MG\' />
',
                'slug' => 'sete-lagoas-canada-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1181,
                'name' => 'Sete Lagoas Canada 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Canada 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4412678;-44.2119502\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Canada 2 MG\' />
',
                'slug' => 'sete-lagoas-canada-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1182,
                'name' => 'Sete Lagoas Catarina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Catarina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4760942;-44.2541879\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Catarina MG\' />
',
                'slug' => 'sete-lagoas-catarina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1183,
                'name' => 'Sete Lagoas CDI MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas CDI MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4515594;-44.2119976\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas CDI MG\' />
',
                'slug' => 'sete-lagoas-cdi-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1184,
                'name' => 'Sete Lagoas Cedro e Cachoeira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Cedro e Cachoeira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Cedro e C',
                'slug' => 'sete-lagoas-cedro-e-cachoeira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1185,
                'name' => 'Sete Lagoas Centro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Centro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4646825;-44.2484656\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Centro MG\' />
',
                'slug' => 'sete-lagoas-centro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1186,
                'name' => 'Sete Lagoas Chácara do Paiva MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Chácara do Paiva MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4650755;-44.2350471\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Chácara do',
                'slug' => 'sete-lagoas-chacara-do-paiva-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1187,
                'name' => 'Sete Lagoas Chácara Esplanada do Moinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Chácara Esplanada do Moinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas',
                'slug' => 'sete-lagoas-chacara-esplanada-do-moinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1188,
                'name' => 'Sete Lagoas Chácaras Coronel Manoel Marques Ferreira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Chácaras Coronel Manoel Marques Ferreira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'B',
                'slug' => 'sete-lagoas-chacaras-coronel-manoel-marques-ferreira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1189,
                'name' => 'Sete Lagoas Cidade de Deus MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Cidade de Deus MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4378621;-44.2171997\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Cidade de De',
                'slug' => 'sete-lagoas-cidade-de-deus-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1190,
                'name' => 'Sete Lagoas Cidade Nova MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Cidade Nova MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.6743113;-43.9112788\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Cidade Nova MG\'',
                'slug' => 'sete-lagoas-cidade-nova-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1191,
                'name' => 'Sete Lagoas Condomínio Lago Azul MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Condomínio Lago Azul MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4296956;-44.1940991\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Condom',
                'slug' => 'sete-lagoas-condominio-lago-azul-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1192,
                'name' => 'Sete Lagoas Condomínio Lagoas do Moinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Condomínio Lagoas do Moinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas',
                'slug' => 'sete-lagoas-condominio-lagoas-do-moinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1193,
                'name' => 'Sete Lagoas Conjunto Habitacional Bernardo Valadares Vasconcelos MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Conjunto Habitacional Bernardo Valadares Vasconcelos MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4224419;-44.2266352\' />
<meta name=\'geo.region',
                'slug' => 'sete-lagoas-conjunto-habitacional-bernardo-valadares-vasconcelos-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1194,
                'name' => 'Sete Lagoas Dante Lanza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Dante Lanza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4684066;-44.2307413\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Dante Lanza MG\'',
                'slug' => 'sete-lagoas-dante-lanza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1195,
                'name' => 'Sete Lagoas Distrito Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Distrito Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4542745;-44.2113296\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Distrit',
                'slug' => 'sete-lagoas-distrito-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1196,
                'name' => 'Sete Lagoas Distrito Industrial Norte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Distrito Industrial Norte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4549968;-44.2377404\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas D',
                'slug' => 'sete-lagoas-distrito-industrial-norte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1197,
                'name' => 'Sete Lagoas Dona Dora MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Dona Dora MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4717296;-44.2340674\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Dona Dora MG\' />',
                'slug' => 'sete-lagoas-dona-dora-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1198,
                'name' => 'Sete Lagoas Eldorado MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Eldorado MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Eldorado MG\' />
',
                'slug' => 'sete-lagoas-eldorado-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1199,
                'name' => 'Sete Lagoas Emília MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Emília MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4452166;-44.2217803\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Emília MG\' />
',
                'slug' => 'sete-lagoas-emilia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1200,
                'name' => 'Sete Lagoas Esmeraldas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Esmeraldas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4769653;-44.2062143\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Esmeraldas MG\' /',
                'slug' => 'sete-lagoas-esmeraldas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1201,
                'name' => 'Sete Lagoas Esmeraldas 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Esmeraldas 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Esmeraldas 2 M',
                'slug' => 'sete-lagoas-esmeraldas-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1202,
                'name' => 'Sete Lagoas Esperança MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Esperança MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4386290;-44.2390497\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Esperança MG\' />',
                'slug' => 'sete-lagoas-esperanca-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1203,
                'name' => 'Sete Lagoas Fátima MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Fátima MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4747046;-44.2278474\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Fátima MG\' />
',
                'slug' => 'sete-lagoas-fatima-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1204,
                'name' => 'Sete Lagoas Fazenda Velha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Fazenda Velha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Fazenda Velha',
                'slug' => 'sete-lagoas-fazenda-velha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1205,
                'name' => 'Sete Lagoas Flora Bela Parque Residencial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Flora Bela Parque Residencial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-20.0383691;-45.5415810\' />
<meta name=\'geo.region\' content=\'BR-Sete Lago',
                'slug' => 'sete-lagoas-flora-bela-parque-residencial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1206,
                'name' => 'Sete Lagoas Flórida MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Flórida MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4920461;-44.2360860\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Flórida MG\' />
',
                'slug' => 'sete-lagoas-florida-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1207,
                'name' => 'Sete Lagoas Funcionários MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Funcionários MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4340714;-44.2316898\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Funcionários M',
                'slug' => 'sete-lagoas-funcionarios-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1208,
                'name' => 'Sete Lagoas Glória MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Glória MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4293410;-44.2347568\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Glória MG\' />
',
                'slug' => 'sete-lagoas-gloria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1209,
                'name' => 'Sete Lagoas Henrique Nery MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Henrique Nery MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4711875;-44.2630605\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Henrique Nery',
                'slug' => 'sete-lagoas-henrique-nery-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1210,
                'name' => 'Sete Lagoas Honorina Pontes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Honorina Pontes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Honorina Po',
                'slug' => 'sete-lagoas-honorina-pontes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1211,
                'name' => 'Sete Lagoas Industrial MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Industrial MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4701064;-44.2165642\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Industrial MG\' /',
                'slug' => 'sete-lagoas-industrial-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1212,
                'name' => 'Sete Lagoas Indústrias MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Indústrias MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4665865;-44.2091902\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Indústrias MG\' /',
                'slug' => 'sete-lagoas-industrias-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1213,
                'name' => 'Sete Lagoas Indústrias 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Indústrias 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4695801;-44.2063162\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Indústrias 2 M',
                'slug' => 'sete-lagoas-industrias-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1214,
                'name' => 'Sete Lagoas Interlagos 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Interlagos 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4340760;-44.2235458\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Interlagos 1 M',
                'slug' => 'sete-lagoas-interlagos-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1215,
                'name' => 'Sete Lagoas Interlagos 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Interlagos 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4340152;-44.2206561\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Interlagos 2 M',
                'slug' => 'sete-lagoas-interlagos-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1216,
                'name' => 'Sete Lagoas Iporanga MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Iporanga MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4878896;-44.2419781\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Iporanga MG\' />
',
                'slug' => 'sete-lagoas-iporanga-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1217,
                'name' => 'Sete Lagoas Iporanga 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Iporanga 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-18.5810303;-46.5224224\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Iporanga 2 MG\' /',
                'slug' => 'sete-lagoas-iporanga-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1218,
                'name' => 'Sete Lagoas Itapoã MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Itapoã MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4684680;-44.1987745\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Itapoã MG\' />
',
                'slug' => 'sete-lagoas-itapoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1219,
                'name' => 'Sete Lagoas Itapoã 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Itapoã 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4700758;-44.1950934\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Itapoã 2 MG\' />
',
                'slug' => 'sete-lagoas-itapoa-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1220,
                'name' => 'Sete Lagoas Jardim Arizona MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Arizona MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4569383;-44.2654990\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim Arizo',
                'slug' => 'sete-lagoas-jardim-arizona-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1221,
                'name' => 'Sete Lagoas Jardim Cambuí MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Cambuí MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4531932;-44.2497880\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim Cambuí',
                'slug' => 'sete-lagoas-jardim-cambui-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1222,
                'name' => 'Sete Lagoas Jardim dos Pequis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim dos Pequis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim do',
                'slug' => 'sete-lagoas-jardim-dos-pequis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1223,
                'name' => 'Sete Lagoas Jardim Europa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Europa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4356674;-44.2372006\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim Europa',
                'slug' => 'sete-lagoas-jardim-europa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1224,
                'name' => 'Sete Lagoas Jardim Primavera 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Primavera 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8223047;-43.9946619\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim P',
                'slug' => 'sete-lagoas-jardim-primavera-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1225,
                'name' => 'Sete Lagoas Jardim Primavera l MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Primavera l MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4317951;-44.2147478\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim P',
                'slug' => 'sete-lagoas-jardim-primavera-l-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1226,
                'name' => 'Sete Lagoas Jardim Universitário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Jardim Universitário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4898537;-44.2805933\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Jardim',
                'slug' => 'sete-lagoas-jardim-universitario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1227,
                'name' => 'Sete Lagoas JK MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas JK MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4171450;-44.2486999\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas JK MG\' />
',
                'slug' => 'sete-lagoas-jk-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1228,
                'name' => 'Sete Lagoas Kwait MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Kwait MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7634395;-44.1378265\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Kwait MG\' />
',
                'slug' => 'sete-lagoas-kwait-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1229,
                'name' => 'Sete Lagoas Lontra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Lontra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4091777;-44.4295585\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Lontra MG\' />
',
                'slug' => 'sete-lagoas-lontra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1230,
                'name' => 'Sete Lagoas Lontrinha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Lontrinha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4765720;-44.2273573\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Lontrinha MG\' />',
                'slug' => 'sete-lagoas-lontrinha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1231,
                'name' => 'Sete Lagoas Luxemburgo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Luxemburgo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4281057;-44.2233674\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Luxemburgo MG\' /',
                'slug' => 'sete-lagoas-luxemburgo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1232,
                'name' => 'Sete Lagoas Mangabeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Mangabeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4466795;-44.2585533\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Mangabeiras MG\'',
                'slug' => 'sete-lagoas-mangabeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1233,
                'name' => 'Sete Lagoas Manoa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Manoa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4392959;-44.2476067\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Manoa MG\' />
',
                'slug' => 'sete-lagoas-manoa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1234,
                'name' => 'Sete Lagoas Mata Grande MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Mata Grande MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4841699;-44.2531376\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Mata Grande MG\'',
                'slug' => 'sete-lagoas-mata-grande-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1235,
                'name' => 'Sete Lagoas Monte Carlo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Monte Carlo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Monte Carlo MG\'',
                'slug' => 'sete-lagoas-monte-carlo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1236,
                'name' => 'Sete Lagoas Montreal MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Montreal MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4484257;-44.2183163\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Montreal MG\' />
',
                'slug' => 'sete-lagoas-montreal-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1237,
                'name' => 'Sete Lagoas Montreal 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Montreal 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Montreal 2 MG\' /',
                'slug' => 'sete-lagoas-montreal-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1238,
                'name' => 'Sete Lagoas Morro do Claro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Morro do Claro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4744255;-44.2230243\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Morro do Cla',
                'slug' => 'sete-lagoas-morro-do-claro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1239,
                'name' => 'Sete Lagoas New York MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas New York MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4470629;-44.2359232\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas New York MG\' />
',
                'slug' => 'sete-lagoas-new-york-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1240,
                'name' => 'Sete Lagoas Nossa Senhora das Graças MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nossa Senhora das Graças MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4431840;-44.2443818\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas No',
                'slug' => 'sete-lagoas-nossa-senhora-das-gracas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1241,
                'name' => 'Sete Lagoas Nossa Senhora de Lourdes MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nossa Senhora de Lourdes MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4323059;-44.2135004\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas No',
                'slug' => 'sete-lagoas-nossa-senhora-de-lourdes-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1242,
                'name' => 'Sete Lagoas Nossa Senhora do Carmo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nossa Senhora do Carmo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4457877;-44.2520272\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Noss',
                'slug' => 'sete-lagoas-nossa-senhora-do-carmo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1243,
                'name' => 'Sete Lagoas Nossa Senhora do Carmo 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nossa Senhora do Carmo 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4368544;-44.2511669\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas No',
                'slug' => 'sete-lagoas-nossa-senhora-do-carmo-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1244,
                'name' => 'Sete Lagoas Nova Cidade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nova Cidade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4284625;-44.2282535\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Nova Cidade MG\'',
                'slug' => 'sete-lagoas-nova-cidade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1245,
                'name' => 'Sete Lagoas Nova Serrana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Nova Serrana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Nova Serrana M',
                'slug' => 'sete-lagoas-nova-serrana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1246,
                'name' => 'Sete Lagoas Novo Horizonte MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Novo Horizonte MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4830398;-44.2388472\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Novo Horizon',
                'slug' => 'sete-lagoas-novo-horizonte-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1247,
                'name' => 'Sete Lagoas Olinto Alvin MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Olinto Alvin MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4481858;-44.2253706\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Olinto Alvin M',
                'slug' => 'sete-lagoas-olinto-alvin-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1248,
                'name' => 'Sete Lagoas Ondina Vasconcelos de Oliveira MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Ondina Vasconcelos de Oliveira MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lag',
                'slug' => 'sete-lagoas-ondina-vasconcelos-de-oliveira-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1249,
                'name' => 'Sete Lagoas Orozimbo Macedo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Orozimbo Macedo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4202078;-44.2305339\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Orozimbo Ma',
                'slug' => 'sete-lagoas-orozimbo-macedo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1250,
                'name' => 'Sete Lagoas Ouro Branco MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Ouro Branco MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Ouro Branco MG\'',
                'slug' => 'sete-lagoas-ouro-branco-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1251,
                'name' => 'Sete Lagoas Padre Teodoro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Padre Teodoro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4964371;-44.2407933\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Padre Teodoro',
                'slug' => 'sete-lagoas-padre-teodoro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1252,
                'name' => 'Sete Lagoas Padre Teodoro ll MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Padre Teodoro ll MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Padre Teod',
                'slug' => 'sete-lagoas-padre-teodoro-ll-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1253,
                'name' => 'Sete Lagoas Panorama MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Panorama MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4510522;-44.2541529\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Panorama MG\' />
',
                'slug' => 'sete-lagoas-panorama-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1254,
                'name' => 'Sete Lagoas Papavento MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Papavento MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Papavento MG\' />',
                'slug' => 'sete-lagoas-papavento-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1255,
                'name' => 'Sete Lagoas Paredão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Paredão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4798392;-44.2178451\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Paredão MG\' />
',
                'slug' => 'sete-lagoas-paredao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1256,
                'name' => 'Sete Lagoas Parque das Nogueiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Parque das Nogueiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4798392;-44.2178451\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Parque',
                'slug' => 'sete-lagoas-parque-das-nogueiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1257,
                'name' => 'Sete Lagoas Pedras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Pedras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4478966;-44.2517149\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Pedras MG\' />
',
                'slug' => 'sete-lagoas-pedras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1258,
                'name' => 'Sete Lagoas Piedade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Piedade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4702346;-44.2536641\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Piedade MG\' />
',
                'slug' => 'sete-lagoas-piedade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1259,
                'name' => 'Sete Lagoas Planalto MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Planalto MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4125174;-44.2439531\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Planalto MG\' />
',
                'slug' => 'sete-lagoas-planalto-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1260,
                'name' => 'Sete Lagoas Portal da Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Portal da Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Portal da S',
                'slug' => 'sete-lagoas-portal-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1261,
                'name' => 'Sete Lagoas Primavera MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Primavera MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.3611525;-44.2540948\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Primavera MG\' />',
                'slug' => 'sete-lagoas-primavera-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1262,
                'name' => 'Sete Lagoas Progresso MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Progresso MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4487565;-44.2566069\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Progresso MG\' />',
                'slug' => 'sete-lagoas-progresso-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1263,
                'name' => 'Sete Lagoas Progresso 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Progresso 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4795122;-44.2213270\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Progresso 2 MG\'',
                'slug' => 'sete-lagoas-progresso-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1264,
                'name' => 'Sete Lagoas Quinducha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Quinducha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4698909;-44.2671994\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Quinducha MG\' />',
                'slug' => 'sete-lagoas-quinducha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1265,
                'name' => 'Sete Lagoas Quintas da Varginha MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Quintas da Varginha MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-18.5945792;-46.5108281\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Quintas',
                'slug' => 'sete-lagoas-quintas-da-varginha-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1266,
                'name' => 'Sete Lagoas Quintas do Lago 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Quintas do Lago 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4415872;-44.2225394\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Quintas d',
                'slug' => 'sete-lagoas-quintas-do-lago-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1267,
                'name' => 'Sete Lagoas Quintas do Lago 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Quintas do Lago 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4235519;-44.2310551\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Quintas d',
                'slug' => 'sete-lagoas-quintas-do-lago-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1268,
                'name' => 'Sete Lagoas Recanto da Gineta MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto da Gineta MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4799640;-44.2454248\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto d',
                'slug' => 'sete-lagoas-recanto-da-gineta-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1269,
                'name' => 'Sete Lagoas Recanto da Serra MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto da Serra MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4732807;-44.2417749\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto da',
                'slug' => 'sete-lagoas-recanto-da-serra-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1270,
                'name' => 'Sete Lagoas Recanto do Cedro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto do Cedro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4794235;-44.2467169\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto do',
                'slug' => 'sete-lagoas-recanto-do-cedro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1271,
                'name' => 'Sete Lagoas Recanto do Itororó MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto do Itororó MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-15.4793981;-44.3618786\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto ',
                'slug' => 'sete-lagoas-recanto-do-itororo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1272,
                'name' => 'Sete Lagoas Recanto do Yassu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto do Yassu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4454984;-44.2374122\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto do',
                'slug' => 'sete-lagoas-recanto-do-yassu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1273,
                'name' => 'Sete Lagoas Recanto São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Recanto São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Recanto Sã',
                'slug' => 'sete-lagoas-recanto-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1274,
                'name' => 'Sete Lagoas Residencial Campestre MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Campestre MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Resid',
                'slug' => 'sete-lagoas-residencial-campestre-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1275,
                'name' => 'Sete Lagoas Residencial Da Vinci MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Da Vinci MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8758566;-44.5718070\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Reside',
                'slug' => 'sete-lagoas-residencial-da-vinci-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1276,
                'name' => 'Sete Lagoas Residencial Dona Sílvia 1 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Dona Sílvia 1 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas R',
                'slug' => 'sete-lagoas-residencial-dona-silvia-1-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1277,
                'name' => 'Sete Lagoas Residencial Ermitage MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Ermitage MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4817725;-44.2193134\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Reside',
                'slug' => 'sete-lagoas-residencial-ermitage-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1278,
                'name' => 'Sete Lagoas Residencial Goiabeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Goiabeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.5085643;-42.5978087\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Resi',
                'slug' => 'sete-lagoas-residencial-goiabeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1279,
                'name' => 'Sete Lagoas Residencial Pôr do Sol MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Pôr do Sol MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Resi',
                'slug' => 'sete-lagoas-residencial-por-do-sol-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1280,
                'name' => 'Sete Lagoas Residencial Portal do Moinho MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Residencial Portal do Moinho MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoa',
                'slug' => 'sete-lagoas-residencial-portal-do-moinho-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1281,
                'name' => 'Sete Lagoas Riacho do Campo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Riacho do Campo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.9340358;-43.9353883\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Riacho do C',
                'slug' => 'sete-lagoas-riacho-do-campo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1282,
                'name' => 'Sete Lagoas Santa Eliza MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Eliza MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4723429;-44.2528850\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Eliza MG\'',
                'slug' => 'sete-lagoas-santa-eliza-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1283,
                'name' => 'Sete Lagoas Santa Felicidade MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Felicidade MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4207177;-44.2257566\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Feli',
                'slug' => 'sete-lagoas-santa-felicidade-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1284,
                'name' => 'Sete Lagoas Santa Helena MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Helena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4527935;-44.2555883\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Helena M',
                'slug' => 'sete-lagoas-santa-helena-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1285,
                'name' => 'Sete Lagoas Santa Luzia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Luzia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Luzia MG\'',
                'slug' => 'sete-lagoas-santa-luzia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1286,
                'name' => 'Sete Lagoas Santa Marcelina MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Marcelina MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4478867;-44.2338496\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Marce',
                'slug' => 'sete-lagoas-santa-marcelina-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1287,
                'name' => 'Sete Lagoas Santa Maria MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Maria MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4723304;-44.2131783\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Maria MG\'',
                'slug' => 'sete-lagoas-santa-maria-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1288,
                'name' => 'Sete Lagoas Santa Rita MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Rita MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4795122;-44.2213270\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Rita MG\' /',
                'slug' => 'sete-lagoas-santa-rita-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1289,
                'name' => 'Sete Lagoas Santa Rita de Cássia MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Rita de Cássia MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4436746;-44.2571511\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa ',
                'slug' => 'sete-lagoas-santa-rita-de-cassia-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1290,
                'name' => 'Sete Lagoas Santa Rosa MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santa Rosa MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4795122;-44.2213270\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santa Rosa MG\' /',
                'slug' => 'sete-lagoas-santa-rosa-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1291,
                'name' => 'Sete Lagoas Santo Antônio MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Santo Antônio MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4782945;-44.2656672\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Santo Antônio',
                'slug' => 'sete-lagoas-santo-antonio-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1292,
                'name' => 'Sete Lagoas São Cristóvão MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Cristóvão MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4772596;-44.2580572\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Cristóvão',
                'slug' => 'sete-lagoas-sao-cristovao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1293,
                'name' => 'Sete Lagoas São Cristóvão 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Cristóvão 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4794707;-44.2602756\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Cristóv',
                'slug' => 'sete-lagoas-sao-cristovao-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1294,
                'name' => 'Sete Lagoas São Dimas MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Dimas MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4717523;-44.2511320\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Dimas MG\' />',
                'slug' => 'sete-lagoas-sao-dimas-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1295,
                'name' => 'Sete Lagoas São Francisco de Assis MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Francisco de Assis MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4319824;-44.2460073\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São ',
                'slug' => 'sete-lagoas-sao-francisco-de-assis-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1296,
                'name' => 'Sete Lagoas São Geraldo MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Geraldo MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4681340;-44.2398135\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Geraldo MG\'',
                'slug' => 'sete-lagoas-sao-geraldo-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1297,
                'name' => 'Sete Lagoas São João MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São João MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4526473;-44.2293335\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São João MG\' />
',
                'slug' => 'sete-lagoas-sao-joao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1298,
                'name' => 'Sete Lagoas São João 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São João 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4440070;-44.2304483\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São João 2 MG\' /',
                'slug' => 'sete-lagoas-sao-joao-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1299,
                'name' => 'Sete Lagoas São Jorge MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Jorge MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4719475;-44.2565634\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Jorge MG\' />',
                'slug' => 'sete-lagoas-sao-jorge-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1300,
                'name' => 'Sete Lagoas São José MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São José MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4743318;-44.2479494\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São José MG\' />
',
                'slug' => 'sete-lagoas-sao-jose-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1301,
                'name' => 'Sete Lagoas São Pedro MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Pedro MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4442421;-44.2361598\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Pedro MG\' />',
                'slug' => 'sete-lagoas-sao-pedro-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1302,
                'name' => 'Sete Lagoas São Sebastião MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Sebastião MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4690257;-44.2157849\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Sebastião',
                'slug' => 'sete-lagoas-sao-sebastiao-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1303,
                'name' => 'Sete Lagoas São Vicente MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas São Vicente MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4421253;-44.2219249\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas São Vicente MG\'',
                'slug' => 'sete-lagoas-sao-vicente-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1304,
                'name' => 'Sete Lagoas Silva Xavier MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Silva Xavier MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.8266897;-43.9848783\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Silva Xavier M',
                'slug' => 'sete-lagoas-silva-xavier-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1305,
                'name' => 'Sete Lagoas Tamanduá MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Tamanduá MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4573800;-44.2416695\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Tamanduá MG\' />
',
                'slug' => 'sete-lagoas-tamandua-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1306,
                'name' => 'Sete Lagoas Titamar MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Titamar MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4193653;-44.2385398\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Titamar MG\' />
',
                'slug' => 'sete-lagoas-titamar-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1307,
                'name' => 'Sete Lagoas Universitário MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Universitário MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4856898;-44.2730801\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Universitário',
                'slug' => 'sete-lagoas-universitario-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1308,
                'name' => 'Sete Lagoas Vale das Palmeiras MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vale das Palmeiras MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4851819;-44.2525204\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vale das',
                'slug' => 'sete-lagoas-vale-das-palmeiras-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1309,
                'name' => 'Sete Lagoas Vale do Aritana MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vale do Aritana MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4681888;-44.2045795\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vale do Ari',
                'slug' => 'sete-lagoas-vale-do-aritana-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1310,
                'name' => 'Sete Lagoas Vapabuçu MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vapabuçu MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4682462;-44.2208723\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vapabuçu MG\' />
',
                'slug' => 'sete-lagoas-vapabucu-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1311,
                'name' => 'Sete Lagoas Várzea MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Várzea MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4811244;-44.2412699\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Várzea MG\' />
',
                'slug' => 'sete-lagoas-varzea-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1312,
                'name' => 'Sete Lagoas Várzea da Lagoa 2 MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Várzea da Lagoa 2 MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.7887758;-44.0220331\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Várzea da',
                'slug' => 'sete-lagoas-varzea-da-lagoa-2-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1313,
                'name' => 'Sete Lagoas Verde Vale MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Verde Vale MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4170512;-44.2264398\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Verde Vale MG\' /',
                'slug' => 'sete-lagoas-verde-vale-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1314,
                'name' => 'Sete Lagoas Vila Brasil MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vila Brasil MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4615771;-44.2355604\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vila Brasil MG\'',
                'slug' => 'sete-lagoas-vila-brasil-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1315,
                'name' => 'Sete Lagoas Vila Ipê MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vila Ipê MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4546521;-44.2570023\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vila Ipê MG\' />
',
                'slug' => 'sete-lagoas-vila-ipe-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1316,
                'name' => 'Sete Lagoas Vila Santa Helena MG',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Sete Lagoas Vila Santa Helena MG, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.4561075;-44.2520375\' />
<meta name=\'geo.region\' content=\'BR-Sete Lagoas Vila Sant',
                'slug' => 'sete-lagoas-vila-santa-helena-mg',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1317,
                'name' => 'Pedro Leopoldo',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Pedro Leopoldo, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.6189005;-44.0404979\' />
<meta name=\'geo.region\' content=\'BR-Pedro Leopoldo\' />
<meta n',
                'slug' => 'pedro-leopoldo',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1318,
                'name' => 'Matozinhos',
                'geoposition' => '<meta name=\'geo.placename\' content=\'Matozinhos, MG, Brasil\' />
<meta name=\'geo.position\' content=\'-19.5547969;-44.0871994\' />
<meta name=\'geo.region\' content=\'BR-Matozinhos\' />
<meta name=\'ICB',
                'slug' => 'matozinhos',
                'print' => 1,
                'state_id' => '0',
                'parent_local_id' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}