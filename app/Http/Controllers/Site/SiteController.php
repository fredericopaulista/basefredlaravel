<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\Controller;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Service;
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
        $configuration = Configuration::get()->first();
        return view('site.home', compact('configuration', 'navlinks'));
    }

    public function category($slug){
        $navlinks = Category::all();
        $category = Category::where('slug', $slug )->first();
        $services = Service::all();;


        return view('site.category',compact('category', 'services', 'navlinks'));
    }

    public function service($id){
        $navlinks = Category::all();
        $service = Service::findOrfail('id', $id)->get();;

        dd($service);

        return view('site.service', compact('service', 'navlinks'));
    }
}
