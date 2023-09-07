<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Configuration;
use App\Models\Contact;
use App\Models\Customization;
use App\Models\Depoiments;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function links(){


        $url = file_get_contents('http://www.seopara.com.br/holdingbr-backlink/index.php');

        $fred = html_entity_decode($url);

        $backlinks = json_decode($fred, true);

        return view('site.home')->with('backlinks', $backlinks);
    }

    public function home(){

        $configuration = Configuration::get()->first();
        $cities = City::where('slug', $configuration->city_slug)->get();

        if ($cities->count() == 1) {
          $city = $cities[0]->name;

          $cityslug = '-' . $cities[0]->slug;

          config(['APP_CIDADE' => $city]);
            Session::put('city', $city);
            config(['APP_CIDADE_SLUG' => $cityslug]);
            Session::put('cityslug', $cityslug);



         $services = Service::where('home', 1)->with('category')->get();

        $faqs = Faq::all();
        $depoiments = Depoiments::all();
        $pages = Page::where('visible', 1)->get();
        }
        return view('site.home', compact('faqs', 'depoiments', 'pages', 'cityslug', 'city', 'services'));
    }

    public function category($slug){

    $city = $this->checaCidades();

    $itemsemcidade = $slug;
    $cityslug = $city;
    $len = Str::length($city);

    if ($len != 0){
        $itemsemcidade2 = substr($slug, 0, -$len);

        $servicetags = null;
        $cityfind = substr($cityslug, 1, $len);

        $citydata = City::where('slug', $cityfind)->first();;


        $category = Category::whereSlug($itemsemcidade2)->first();

        $services = Service::where('category_id',$category->id)->get();



    }

        return view('site.category',compact('category', 'services', 'cityslug', 'citydata'));
    }


    public function services($category, $service){


        $city = $this->checaCidades();

    $cityslug = $city;


    $len = Str::length($city);
    if ($len != 0){

        $cityfind = substr($cityslug, 1, $len);

        $citydata = City::where('slug', $cityfind)->first();;


    $itemsemcidade = substr($category, 0, -$len);
    $servsemcidade = substr($service, 0, -$len);
    $servicetags = null;

        $categoryc = Category::where('slug', $itemsemcidade)->first();

        $servicec = Service::where('slug', $servsemcidade   )->first();
        $related= Service::where('category_id', '=', $servicec->category->id)
        ->where('id', '!=', $servicec->id)
        ->get();


    }
        return view('site.service', compact('servicec', 'categoryc', 'cityslug', 'citydata', 'related'));

}


    public function tags($tagSlug, $tagi, $service)
    {

        $tag = Tag::where('id', $tagi)->first();

        $cityslug = str_replace($tag->slug . '-' , "", $tagSlug);

        $city = $this->checaCidades($cityslug);

        $len = Str::length($city);
        if ($len != 0){

            $cityfind = substr($city, 1, $len);

            $citydata = City::where('slug', $cityfind)->first();;

            $servicec = Service::where('id', $service   )->first();
            $related= Service::where('category_id', '=', $servicec->category->id)
            ->where('id', '!=', $servicec->id)
            ->get();

        $servsemcidade = substr($service, 0, -$len);
        $servicetags = null;
        $servicePhoto = Service::where('id', $service)->first();;

        // $category = Category::find($servicePhoto)->category()->first();
        }
        return view('site.tags', compact('tag', 'servicePhoto', 'citydata', 'related', 'cityslug'));
    }

    public function service(Request $request){
        dd($request->all());
        $configuration = Configuration::get()->first();
        $cities = City::where('slug', $configuration->city_slug)->get();

        if ($cities->count() == 1) {
          $city = $cities[0]->name;

          $cityslug = '-' . $cities[0]->slug;

          config(['APP_CIDADE' => $city]);
            Session::put('city', $city);
            config(['APP_CIDADE_SLUG' => $cityslug]);
            Session::put('cityslug', $cityslug);



         $services = Service::where('home', 1)->with('category')->get();

        $faqs = Faq::all();
        $depoiments = Depoiments::all();
        $pages = Page::where('visible', 1)->get();
        }
        return view('site.sevicesingle', compact('faqs', 'depoiments', 'pages', 'cityslug', 'city', 'services'));


    }

    public function single($slug)
{
    $city = $this->checaCidades();
    $cityslug = $city;
    // dataslug é o que sobra na slug sem a geo
    $dataslug = str_replace($city . '' , "", $slug);

    $citydataslug = str_replace($dataslug . '-' , "", $slug);
    $citydata = City::where('slug', $citydataslug)->first();
    $category = Category::where('slug', $dataslug)->first();

    if(!$category){
        $city = $this->checaCidades();


        $dataslug = str_replace($city . '' , "", $slug);
        $citydataslug = str_replace($dataslug . '-' , "", $slug);
        $servicec = Service::where('slug', $dataslug   )->first();
        $categoryc = Category::where('id', $servicec->category_id)->first();
        $related= Service::where('category_id', '=', $servicec->category->id)
        ->where('id', '!=', $servicec->id)
        ->get();
        $citydata = City::where('slug', $citydataslug)->first();
        $tags = Service::where('service_id', $servicec->tag_id)->get();
        dd($tags);
        $cityslug = '-' .$city;

        return view('site.servicesingle', compact('servicec', 'categoryc', 'cityslug', 'citydata', 'related', 'tags'));
    }


            $services = Service::where('category_id',$category->id)->get();


            return view('site.category',compact('category', 'services', 'cityslug', 'citydata'));


}

    public function policy(){

        return view ('site.policy');
    }
    public function terms(){

        return view ('site.terms');
    }






}
