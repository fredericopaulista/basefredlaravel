<?php

namespace App\View\Components\site\seo;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headgeral extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seo.headgeral');
    }
}
