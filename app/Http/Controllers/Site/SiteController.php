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
        $navlinks = Category::all();
        $services = Service::where('home', 1)->get();
        $faqs = Faq::all();
        $configuration = Configuration::get()->first();
        $depoiments = Depoiments::all();
        $pages = Page::where('visible', 1)->get();
        $customization = Customization::get()->first();
        return view('site.home', compact('configuration', 'navlinks', 'services', 'faqs', 'depoiments', 'pages', 'customization'));
    }

    public function category($slug){
        $navlinks = Category::all();
        $category = Category::where('slug', $slug )->first();
        $services = Service::all();;
        $customization = Customization::get()->first();
        $configuration = Configuration::get()->first();

        $pages = Page::where('visible', 1)->get();

        return view('site.category',compact('configuration','category', 'services', 'navlinks', 'customization', 'pages'));
    }

    public function service($categorySlug, $serviceSlug){
        $navlinks = Category::all();
        $category = Category::where('slug', $categorySlug)->first();
        $service = Service::where('slug', $serviceSlug)->first();
        $customization = Customization::get()->first();
        $configuration = Configuration::get()->first();
        $pages = Page::where('visible', 1)->get();

        return view('site.service', compact('configuration','pages','service', 'navlinks', 'category', 'customization'));
    }
    public function tag($tagSlug, $tagId){

        $navlinks = Category::all();

        $byTag = Tag::whereSlug($tagSlug)->where('id', $tagId)->first();
        $customization = Customization::get()->first();
        $pages = Page::where('visible', 1)->get();

        $configuration = Configuration::get()->first();
dd($byTag);


        return view('site.tags', compact('configuration','service', 'pages','navlinks', 'category', 'customization'));
    }




}
