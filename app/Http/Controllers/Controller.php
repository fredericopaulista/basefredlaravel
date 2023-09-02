<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Configuration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $tituloSEO;
    public $keywordsSEO;
    public $ogimageSEO;
    public $ogTitle;
    public $imageSEO;
    public $tituloContent;
    public $subtituloContent;
    public $descricacaoContent;
    public $em;
    public $banco;
    public $cidadeNome;
    public $cidadeSlug;
    public $geoposition;
    public $categoriesMenu;

    /**
     * @return mixed
     */
    public function getTituloSEO()
    {
        return $this->tituloSEO;
    }

    /**
     * @param mixed $tituloSEO
     */
    public function setTituloSEO($tituloSEO)
    {
        $this->tituloSEO = $tituloSEO;
    }

    /**
     * @return mixed
     */
    public function getKeywordsSEO()
    {
        return $this->keywordsSEO;
    }

    /**
     * @param mixed $keywordsSEO
     */
    public function setKeywordsSEO($keywordsSEO)
    {
        $this->keywordsSEO = $keywordsSEO;
    }

    /**
     * @return mixed
     */
    public function getOgimageSEO()
    {
        return $this->ogimageSEO;
    }

    /**
     * @param mixed $ogimageSEO
     */
    public function setOgimageSEO($ogimageSEO)
    {
        $this->ogimageSEO = $ogimageSEO;
    }

    /**
     * @return mixed
     */
    public function getOgTitle()
    {
        return $this->ogTitle;
    }

    /**
     * @param mixed $ogTitle
     */
    public function setOgTitle($ogTitle)
    {
        $this->ogTitle = $ogTitle;
    }

    /**
     * @return mixed
     */
    public function getImageSEO()
    {
        return $this->imageSEO;
    }

    /**
     * @param mixed $imageSEO
     */
    public function setImageSEO($imageSEO)
    {
        $this->imageSEO = $imageSEO;
    }

    /**
     * @return mixed
     */
    public function getTituloContent()
    {
        return $this->tituloContent;
    }

    /**
     * @param mixed $tituloContent
     */
    public function setTituloContent($tituloContent)
    {
        $this->tituloContent = $tituloContent;
    }

    /**
     * @return mixed
     */
    public function getSubtituloContent()
    {
        return $this->subtituloContent;
    }

    /**
     * @param mixed $subtituloContent
     */
    public function setSubtituloContent($subtituloContent)
    {
        $this->subtituloContent = $subtituloContent;
    }

    /**
     * @return mixed
     */
    public function getDescricacaoContent()
    {
        return $this->descricacaoContent;
    }

    /**
     * @param mixed $descricacaoContent
     */
    public function setDescricacaoContent($descricacaoContent)
    {
        $this->descricacaoContent = $descricacaoContent;
    }

    /**
     * @return mixed
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param mixed $em
     */
    public function setEm($em)
    {
        $this->em = $em;
    }

    /**
     * @return mixed
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * @param mixed $banco
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    /**
     * @return mixed
     */
    public function getCidadeNome()
    {
        return $this->cidadeNome;
    }

    /**
     * @param mixed $cidadeNome
     */
    public function setCidadeNome($cidadeNome)
    {
        $this->cidadeNome = $cidadeNome;
    }

    /**
     * @return mixed
     */
    public function getCidadeSlug()
    {
        return $this->cidadeSlug;
    }

    /**
     * @param mixed $cidadeSlug
     */
    public function setCidadeSlug($cidadeSlug)
    {
        $this->cidadeSlug = $cidadeSlug;
    }

    /**
     * @return mixed
     */
    public function getGeoposition()
    {
        return $this->geoposition;
    }

    /**
     * @param mixed $geoposition
     */
    public function setGeoposition($geoposition)
    {
        $this->geoposition = $geoposition;
    }

    /**
     * @return mixed
     */
    public function getCategoriesMenu()
    {
        return $this->categoriesMenu;
    }

    /**
     * @param mixed $categoriesMenu
     */
    public function setCategoriesMenu($categoriesMenu)
    {
        $this->categoriesMenu = $categoriesMenu;
    }


    /** **************************************** **/

    private function formatPhone($phone)
    {
        return str_replace(['-', '(', ')', ' '], ['', '', '', ''], $phone);
    }

    protected function GUID()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function multiexplode($delimiters, $string)
    {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

    public function seoManual()
    {
        $expressao = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $sitemapSeo = Seo::where('url', 'like', "{$expressao}")->get();
        if (isset($sitemapSeo) && count($sitemapSeo) > 0) {
            $this->setTituloSEO($sitemapSeo->getTitle());
            $this->setKeywordsSEO($sitemapSeo->getDescription());
            $arrayOgImage = array();
            foreach ($sitemapSeo->Photos() as $image) :
                $arrayOgImage[] = $image->image;
            endforeach;
            $this->setOgimageSEO($arrayOgImage);
            $this->setOgTitle($sitemapSeo->ogTitle);
        }
    }

    public function checaCidades($ultimoGet = '', $expod = '')
    {

        $e = '';
        $possiveis = [];
        $compara = '';

        if (stristr($_SERVER['HTTP_HOST'], '-em-')) {
            $e = 'em ';
        }
        if ($ultimoGet == '') {
            $Get = $this->multiexplode(array("/", "&"), $_SERVER['REQUEST_URI']);

            $Get = preg_replace('~(\?|&)page=[^&]*~', '$1', $Get);
            $Get = preg_replace('/[?]/', '', $Get);

            $numero = intval($Get[count($Get) - 1]);
            if ($numero > 0) {
                $ultimoGet = $Get[count($Get) - 2];
            } else if ($Get[count($Get) - 1] != '' && !stristr($Get[count($Get) - 1], 'page')) {
                $ultimoGet = $Get[count($Get) - 1];
            } else {
                $ultimoGet = $Get[count($Get) - 2];
            }

            $i = 0;
            $contExpd = count(explode('-', $ultimoGet));

            while ($i < $contExpd) {

                $i++;
                $expod = implode('-', explode('-', $ultimoGet, ($contExpd - $i) - $contExpd));

                $expressao = str_replace(array(
                    $expod . '-',
                    $expod . '-em-'
                ), '', $ultimoGet);

                $cidade = City::where('slug', 'like', "{$expressao}")->first();

                if (isset($cidade)) {
                    array_push($possiveis, $cidade->slug);
                }

            }

            $j = 0;
            while ($j < sizeof($possiveis) ) {
                $conta = strlen($possiveis[$j]);
                $item = substr($ultimoGet,-$conta);
                if($item == $possiveis[$j]) {
                    $compara = $item;
                } else {
                    $compara = $ultimoGet;
                }
                $j++;
            }

           //if ($compara == '') {$compara = $ultimoGet;}

           if ($compara) {
                $cidade = City::where('slug', 'like', "{$compara}")->first();

                $city = '-' . $cidade->slug;
                config(['APP_GEO' => $cidade->geoposition]);
                Session::put('geo', $cidade->geoposition);
                config(['APP_CIDADE' => $cidade->name]);
                Session::put('city', $cidade->name);
                config(['APP_CIDADE_SLUG' => $city]);
                Session::put('cityslug', $city);
                return $city;
           }

        }

        $cidade = City::where('slug', 'like', "{$ultimoGet}")->get();
        if ($cidade->count() == 0) {
            $slugCity = str_replace(array($expod . '-em-', $expod . '-'), '', $ultimoGet);
            $cidade = City::where('slug', 'like', "%{$slugCity}%")->get();
        }

       // dd($cidade);

        if (isset($cidade) && $cidade->count() > 0) {
            $city = '-' . $cidade[0]->slug;
            config(['APP_GEO' => $cidade[0]->geoposition]);
            Session::put('geo', $cidade[0]->geoposition);
            config(['APP_CIDADE' => $cidade[0]->name]);
            Session::put('city', $cidade[0]->name);
            config(['APP_CIDADE_SLUG' => $city]);
            Session::put('cityslug', $city);
            return $city;
        } else {
            $store = Configuration::find(1)->first();
            if($store->level == 2){

            $city = '-' . $store->city_slug;
            $expressao = $store->city_slug;
            $cidade = City::where('slug', 'like', "{$expressao}")->first();

            config(['APP_GEO' => $cidade->geoposition]);
            Session::put('geo', $cidade->geoposition);
            config(['APP_CIDADE' => $cidade->name]);
            Session::put('city', $cidade->name);
            config(['APP_CIDADE_SLUG' => '-'.$store->city_slug]);
            Session::put('cityslug', '-'.$store->city_slug);


            }

            return '';
        }
    }

    public function addImagens($url, $image)
    {
        $this->setImageSEO('<meta property="og:image" content="' . env('APP_URL') . $url . $image . '" />' . $this->getImageSEO());
        $this->setImageSEO('<meta name="twitter:image" content="' . env('APP_URL') . $url . $image . '" />' . $this->getImageSEO());
    }

    public function getFooterAddress()
    {
        $business  = Configuration::find(1)->first();
        return $business->address;
    }


}
