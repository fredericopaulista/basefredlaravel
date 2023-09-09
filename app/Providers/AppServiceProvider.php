<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use App\Models\Configuration;
use App\Models\Customization;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            return base_path() . '/public';
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $configuration = Configuration::first();
        $navlinks = Category::where('main', 1)->get();
        $customization = Customization::first();
        $pages = Page::where('visible', 1)->get();

        
        view()->share('configuration', $configuration);
        view()->share('navlinks', $navlinks);
        view()->share('pages', $pages);
        view()->share('customization', $customization);
    }
}
