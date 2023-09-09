@extends('site.layout.master')


@section('content')

    <style>
    .accordion-button:not(.collapsed) {
    background-color: #4a4a4b;
    color: #fff;
    }

    .accordion-button:focus {
    border-color: #4a4a4b;
    outline: 0;
    box-shadow: 0 0 0 0 rgb(13 110 253 / 25%);
    }
    </style>

@foreach($cities as $city)

    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                            class="breadcrumb-item"><a itemprop="item" href="{{ env('APP_URL') }}" title="Início"><span itemprop="name">Início</span></a>
                            <meta itemprop="position" content="1" />
                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                            class="breadcrumb-item"><a itemprop="item" href="{{ route('site.mapadosite') }}"><span itemprop="name">Mapa do Site</span></a>
                            <meta itemprop="position" content="2" />
                        </li>


                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                            class="breadcrumb-item"><a itemprop="item" href="{{ route('site.mapadosite') }}" title="Mapa do Site"><span itemprop="name">{{ $city->name }}</span></a>
                            <meta itemprop="position" content="3" />
                        </li>

                         </ol>

                      </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="mb-5">
            <div class="row">

            <div class="col-md-12 mb-4">
                <h4 class="list-group-item list-group-item-action">{{ $city->name}}</h4>
            </div>




            <div class="col-md-3 mb-4">

                <div id="ocean_contact_info-3" class="sidebar-box widget-oceanwp-contact-info clr" style="overflow: hidden">
                    <div class="list-group" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <div class="list-group-item list-group-item-action active">Empresa</div>
                        <a class="list-group-item list-group-item-action" title="Início" href="{{ env('APP_URL') }}" target="_blank">Início</a>
                        @foreach($pages as $menu)
                        <a class="list-group-item list-group-item-action" title="{{ $menu->title}}" href="{{  $menu->link }}" target="{{  $menu->window }}">{{ $menu->title}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-3 mb-4">

                <div id="ocean_contact_info-3" class="sidebar-box widget-oceanwp-contact-info clr" style="overflow: hidden">
                    <div class="list-group" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <div class="list-group-item list-group-item-action active">Categorias</div>
                        @foreach($categories as $category)
                        <a class="list-group-item list-group-item-action" title="{{ $category->name}}" href="{{ route('site.single', $category->slug . '-' . $city->slug) }}">{{ $category->name}}</a>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="col-md-3 mb-4">

                <div id="ocean_contact_info-3" class="sidebar-box widget-oceanwp-contact-info clr" style="overflow: hidden">
                    <div class="list-group" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <div class="list-group-item list-group-item-action active">Serviços</div>
                        @foreach($services as $service)
                        <a class="list-group-item list-group-item-action" title="{{ $service->name}}" href="{{ route('site.single', $service->slug . '-' . $city->slug) }}">{{ $service->name}} {{  $city->name }}</a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-3 mb-4">

                <div id="ocean_contact_info-3" class="sidebar-box widget-oceanwp-contact-info clr" style="overflow: hidden">
                    <div class="list-group" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <div class="list-group-item list-group-item-action active">Tags</div>
                        @foreach($service->tags as $tag)
                        <a class="list-group-item list-group-item-action" title="{{ $tag->name}}" href="{{ route('site.tags', ['tag' => $tag->slug . '-' .  $city->slug, 'tagid' => $tag->id, 'service' => $service->id] ) }}">{{ $tag->name}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    @endforeach




@endsection
