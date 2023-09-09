<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Sitemap;
use App\Models\City;
use Carbon\Carbon;
use Artisan;
use View;
use DateTime;
use DB;
use Session;
use File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    private $sitemap;

    public function __construct(Sitemap $sitemap)
    {
        $this->sitemap = $sitemap;
    }
    public function index(){

        $sitemaps = $this->sitemap->paginate(10);

        return view('admin.sitemaps.index', compact('sitemaps'));
    }

    public function create()
    {
        $services = Service::all();
        $categories = Category::all();
        return view('admin.sitemaps.create', compact('services','categories'));
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $name = '';
        $sitemaps = [];
        $resumo = [];
        $url = '';
        $totalgeral = 0;
        $totalpartes = 0;

        if (isset($data['services'])) {
          $arrayservices = $data['services'];
        } else {
          $arrayservices = null;
        }

        if (isset($data['categories'])) {
          $arraycategories = $data['categories'];
        } else {
          $arraycategories = null;
        }

        if (isset($data['checktags'])) {
          $checktags = $data['checktags'];
        } else {
          $checktags = null;
        }

        if (isset($data['qtd'])) {
          $qtd = $data['qtd'];
        } else {
          $qtd = 5000;
        }

        if (isset($data['uf'])) {
          $uf = $data['uf'];
        } else {
          $uf = 'basic';
        }

        if (isset($data['name'])) {
          $name = $data['name'];
        } else {
          $name = 'sitemap-' . time();
        }



        //File::delete(File::glob(storage_path('app/public/*.xml')));
        //File::delete(File::glob(public_path('*.xml')));

        if ($uf != 'basic') {
          $cities = City::where('print', 1)->where('slug','like', "%{$uf}")->inRandomOrder()->get();
        } else {
          $cities = City::where('print', 1)->inRandomOrder()->get();
        }

        if ($uf == 'basic')
        {

        $name = 'sitemap-' . time();
        $url = env('APP_URL') . 'sitemaps/basic/' . $name . '.xml';


        if ($arraycategories == null && $arrayservices == null) {

        $pages = Page::where('visible', '1')->inRandomOrder()->get();
        $totalgeral = $totalgeral + $pages->count();
        $result = View::make('sitemap.sitemap-pages', ['pages' => $pages]);
        Storage::put('public/sitemaps/basic/'. $name .'-pages-' . $pages->count() . '.xml', $result);
        array_push($sitemaps, 'sitemaps/basic/'. $name .'-pages-' . $pages->count() . '.xml');

        $cidades = City::where('print', '1')->inRandomOrder()->get();
        $totalgeral = $totalgeral + $cidades->count();
        $result = View::make('sitemap.sitemap-cities', ['cities' => $cidades]);
        Storage::put('public/sitemaps/basic/'. $name .'-cities-' . $cidades->count() . '.xml', $result);
        array_push($sitemaps, 'sitemaps/basic/'. $name .'-cities-' . $cidades->count() . '.xml');

        $categories = Category::where('print', '1')->inRandomOrder()->get();
        $totalgeral = $totalgeral + $categories->count();
        $result = View::make('sitemap.sitemap-categories', ['categories' => $categories]);
        Storage::put('public/sitemaps/basic/'. $name .'-categories-' . $categories->count() . '.xml', $result);
        array_push($sitemaps, 'sitemaps/basic/'. $name .'-categories-' . $categories->count() . '.xml');

        $services = Service::where('print', '1')->inRandomOrder()->get();
        $totalgeral = $totalgeral + $services->count();
        $result = View::make('sitemap.sitemap-services-basic', ['services' => $services]);
        Storage::put('public/sitemaps/basic/'. $name .'-services-' . $services->count() . '.xml', $result);
        array_push($sitemaps, 'sitemaps/basic/'. $name .'-services-' . $services->count() . '.xml');

        $tags = ServiceTags::where('visible', '1')->inRandomOrder()->get();
        $totalgeral = $totalgeral + $tags->count();
        $result = View::make('sitemap.sitemap-tags', ['tags' => $tags]);
        Storage::put('public/sitemaps/basic/'. $name .'-tags-' . $tags->count() . '.xml', $result);
        array_push($sitemaps, 'sitemaps/basic/'. $name .'-tags-' . $tags->count() . '.xml');

        $totalpartes = $totalpartes + $totalgeral;
        array_push($resumo, 'Total: ' . $totalgeral . ' urls');

        }

        if ($arraycategories) {
          $categories = Category::where('print', '1')->whereIn('id',$arraycategories)->inRandomOrder()->get();
          $temp = [];
          $count = 0;
          $page = 1;
          $total = 0;

          $num_cidades = $cities->count();
          $num_categories = $categories->count();

          $min_palavras = 200;
          $max_palavras = $qtd;


              $i = 0;
              while ($i < $num_cidades) {

                $urls = rand($min_palavras, $max_palavras);

                if($urls % 2 == 0 && $num_categories % 2 == 0) {

                } else {
                  $urls = $urls + 1;
                }

                $j = 0;
                while ($j < $urls && $i < $num_cidades) {

                  $k = 0;
                  while ($k < $num_categories && $j < $urls) {
                  array_push($temp, ['slug' => env('APP_URL') . $categories[$k]->slug . '-' . $cities[$i]->slug, 'updated_at' => $categories[$k]->updated_at->format(DateTime::ATOM)]);
                  $k++;
                  $j++;
                  }

                  $i++;

                }

                $totalgeral = $totalgeral + count($temp);
                $totalpartes = $totalpartes + $totalgeral;
                $result = View::make('sitemap.sitemap-general', ['items' => $temp]);
                Storage::put('public/sitemaps/'. $uf .'/'. $name .'-categories-city-' . count($temp) . '-' . $page . '.xml', $result);
                array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-categories-city-' . count($temp) . '-' . $page . '.xml');
                array_push($resumo, 'Cat: ' . $totalgeral . ' urls');
                $temp = [];
                $count = 0;
                $totalgeral = 0;
                $page = $page + 1;

              }

          }

          if ($arrayservices) {
          $totalgeral = 0;
          $services = Service::where('print', '1')->whereIn('id', $arrayservices)->inRandomOrder()->get();
          $temp = [];
          $count = 0;
          $page = 1;
          $total = 0;

          $num_cidades = $cities->count();
          $num_servicos = $services->count();

          $min_palavras = 200;
          $max_palavras = $qtd;


              $i = 0;
              while ($i < $num_cidades) {

                $urls = rand($min_palavras, $max_palavras);

                if($urls % 2 == 0 && $num_servicos % 2 == 0) {

                } else {
                  $urls = $urls + 1;
                }

                $j = 0;
                while ($j < $urls && $i < $num_cidades) {

                  $k = 0;
                  while ($k < $num_servicos && $j < $urls) {
                  array_push($temp, ['name' => $services[$k]->name, 'image' => env('APP_URL') . 'storage/' . $services[$k]->image, 'slug' => env('APP_URL') . $services[$k]->slug . '-' . $cities[$i]->slug, 'updated_at' => $services[$k]->updated_at->format(DateTime::ATOM)]);
                  $k++;
                  $j++;
                  }

                  $i++;

                }

                $totalgeral = $totalgeral + count($temp);
                $totalpartes = $totalpartes + $totalgeral;
                $result = View::make('sitemap.sitemap-general-image', ['items' => $temp]);
                Storage::put('public/sitemaps/'. $uf .'/'. $name .'-services-city-' . count($temp) . '-' . $page . '.xml', $result);
                array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-services-city-' . count($temp) . '-' . $page . '.xml');
                array_push($resumo, 'Serv: ' . $totalgeral . ' urls');
                $temp = [];
                $count = 0;
                $totalgeral = 0;
                $page = $page + 1;

              }

          }



          if ($arrayservices && $checktags) {

            foreach ($arrayservices as $serv) {

              $totalgeral = 0;
              $services = Service::where('id', $serv)->first();
              $tags = $services->tags()->get();
              $temp = [];
              $count = 0;
              $page = 1;
              $total = 0;


              $num_cidades = $cities->count();
              $num_tags = $tags->count();

              $min_palavras = 200;
              $max_palavras = $qtd;


                  $i = 0;
                  while ($i < $num_cidades) {

                    $urls = rand($min_palavras, $max_palavras);

                    if($urls % 2 == 0 && $num_tags % 2 == 0) {

                    } else {
                      $urls = $urls + 1;
                    }

                    $j = 0;
                    while ($j < $urls && $i < $num_cidades) {

                      $k = 0;
                      while ($k < $num_tags && $j < $urls) {
                        array_push($temp, ['slug' => env('APP_URL') . $tags[$k]->slug . '-' . $cities[$i]->slug . '/' . $tags[$k]->id, 'updated_at' => $tags[$k]->updated_at->format(DateTime::ATOM)]);
                      $k++;
                      $j++;
                      }

                      $i++;

                    }

                    $totalgeral = $totalgeral + count($temp);
                    $totalpartes = $totalpartes + $totalgeral;
                    $result = View::make('sitemap.sitemap-general', ['items' => $temp]);
                    Storage::put('public/sitemaps/'. $uf .'/'. $name .'-tags-city-' . count($temp) . '-' . $page . '-' . $serv . '.xml', $result);
                    array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-tags-city-' . count($temp) . '-' . $page . '-' . $serv . '.xml');
                    array_push($resumo, 'Tags: ' . $totalgeral . ' urls');
                    $temp = [];
                    $count = 0;
                    $totalgeral = 0;
                    $page = $page + 1;

                  }

            }

            }


        } else {

        $name = 'sitemap-' . $uf . time();
        $url = env('APP_URL') . 'sitemaps/'. $uf .'/' . $name . '.xml';
        $totalgeral = 0;

          $categories = Category::where('visible', '1')->inRandomOrder()->get();
          $temp = [];
          $count = 0;
          $page = 1;
          $total = 0;


          $num_cidades = $cities->count();
          $num_categories = $categories->count();

          $min_palavras = 200;
          $max_palavras = $qtd;


              $i = 0;
              while ($i < $num_cidades) {

                $urls = rand($min_palavras, $max_palavras);

                if($urls % 2 == 0 && $num_categories % 2 == 0) {

                } else {
                  $urls = $urls + 1;
                }

                $j = 0;
                while ($j < $urls && $i < $num_cidades) {

                  $k = 0;
                  while ($k < $num_categories && $j < $urls) {
                  array_push($temp, ['slug' => env('APP_URL') . $categories[$k]->slug . '-' . $cities[$i]->slug, 'updated_at' => $categories[$k]->updated_at->format(DateTime::ATOM)]);
                  $k++;
                  $j++;
                  }

                  $i++;

                }

                $totalgeral = $totalgeral + count($temp);
                $totalpartes = $totalpartes + $totalgeral;
                $result = View::make('sitemap.sitemap-general', ['items' => $temp]);
                Storage::put('public/sitemaps/'. $uf .'/'. $name .'-categories-city-' . count($temp) . '-' . $page . '.xml', $result);
                array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-categories-city-' . count($temp) . '-' . $page . '.xml');
                array_push($resumo, 'Cat: ' . $totalgeral . ' urls');
                $temp = [];
                $count = 0;
                $totalgeral = 0;
                $page = $page + 1;

              }



          $totalgeral = 0;
          $services = Service::where('visible', '1')->inRandomOrder()->get();
          $temp = [];
          $count = 0;
          $page = 1;
          $total = 0;


          $num_cidades = $cities->count();
          $num_servicos = $services->count();

          $min_palavras = 200;
          $max_palavras = $qtd;


              $i = 0;
              while ($i < $num_cidades) {

                $urls = rand($min_palavras, $max_palavras);

                if($urls % 2 == 0 && $num_servicos % 2 == 0) {

                } else {
                  $urls = $urls + 1;
                }

                $j = 0;
                while ($j < $urls && $i < $num_cidades) {

                  $k = 0;
                  while ($k < $num_servicos && $j < $urls) {
                  array_push($temp, ['name' => $services[$k]->name, 'image' => env('APP_URL') . 'storage/' . $services[$k]->image, 'slug' => env('APP_URL') . $services[$k]->slug . '-' . $cities[$i]->slug, 'updated_at' => $services[$k]->updated_at->format(DateTime::ATOM)]);
                  $k++;
                  $j++;
                  }

                  $i++;

                }

                $totalgeral = $totalgeral + count($temp);
                $totalpartes = $totalpartes + $totalgeral;
                $result = View::make('sitemap.sitemap-general-image', ['items' => $temp]);
                Storage::put('public/sitemaps/'. $uf .'/'. $name .'-services-city-' . count($temp) . '-' . $page . '.xml', $result);
                array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-services-city-' . count($temp) . '-' . $page . '.xml');
                array_push($resumo, 'Serv: ' . $totalgeral . ' urls');
                $temp = [];
                $count = 0;
                $totalgeral = 0;
                $page = $page + 1;

              }



          $totalgeral = 0;
          $tags = ServiceTags::where('visible', '1')->inRandomOrder()->get();
          $temp = [];
          $count = 0;
          $page = 1;
          $total = 0;

          $num_cidades = $cities->count();
          $num_tags = $tags->count();

          $min_palavras = 200;
          $max_palavras = $qtd;


              $i = 0;
              while ($i < $num_cidades) {

                $urls = rand($min_palavras, $max_palavras);

                if($urls % 2 == 0 && $num_tags % 2 == 0) {

                } else {
                  $urls = $urls + 1;
                }

                $j = 0;
                while ($j < $urls && $i < $num_cidades) {

                  $k = 0;
                  while ($k < $num_tags && $j < $urls) {
                    array_push($temp, ['slug' => env('APP_URL') . $tags[$k]->slug . '-' . $cities[$i]->slug . '/' . $tags[$k]->id, 'updated_at' => $tags[$k]->updated_at->format(DateTime::ATOM)]);
                  $k++;
                  $j++;
                  }

                  $i++;

                }

                $totalgeral = $totalgeral + count($temp);
                $totalpartes = $totalpartes + $totalgeral;
                $result = View::make('sitemap.sitemap-general', ['items' => $temp]);
                Storage::put('public/sitemaps/'. $uf .'/'. $name .'-tags-city-' . count($temp) . '-' . $page  . '.xml', $result);
                array_push($sitemaps, 'sitemaps/'. $uf .'/'. $name .'-tags-city-' . count($temp) . '-' . $page . '.xml');
                array_push($resumo, 'Tags: ' . $totalgeral . ' urls');
                $temp = [];
                $count = 0;
                $totalgeral = 0;
                $page = $page + 1;

              }


        }

        $result = View::make('sitemap.sitemapindexsimples', ['sitemaps' => $sitemaps]);
        Storage::disk('public_uploads')->put('sitemaps/'. $uf . '/' . $name . '.xml', $result);

        $data['body'] = json_encode($resumo) . ' Somatorio Geral: '. $totalpartes . ' urls.';
        $data['name'] = $name;
        $data['url'] = $url;

        $sitemaps = $this->sitemap->create($data);

        flash('Sitemaps Criados com Sucesso!')->success();
        return redirect()->route('admin.sitemaps.index');
    }
}
