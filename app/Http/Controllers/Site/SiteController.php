<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\SendContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Contact;
use App\Models\Customization;
use App\Models\Depoiments;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function links(){


        $url = file_get_contents('http://www.seopara.com.br/holdingbr-backlink/index.php');

        $fred = html_entity_decode($url);

        $backlinks = json_decode($fred, true);

        return view('site.home')->with('backlinks', $backlinks);
    }

    public function home(){

        $services = Service::where('home', 1)->get();
        $faqs = Faq::all();
        $depoiments = Depoiments::all();
        $pages = Page::where('visible', 1)->get();

        return view('site.home', compact('services', 'faqs', 'depoiments', 'pages'));
    }

    public function category($slug){

        $category = Category::where('slug', $slug )->first();
        $services = Service::all();;


        return view('site.category',compact('category', 'services'));
    }

    public function services($category, $service){

        $categoryc = Category::where('slug', $category)->first();

        $servicec = Service::where('slug', $service)->first();



        return view('site.service', compact('servicec', 'categoryc'));
    }
    public function tags($tag, $tagi, $service)
    {

        $tag = Tag::findOrfail($tagi)->where('slug', $tag)->first();;
        $servicePhoto = Service::where('id', $service)->first();;

        return view('site.tags', compact('tag', 'servicePhoto'));
    }

    public function routes(){


        //
    }




}
