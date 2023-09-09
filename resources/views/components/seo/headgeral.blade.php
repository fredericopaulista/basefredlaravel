<?php
$cityinfo = View::getSection('cityinfo');

$titulo = View::getSection('titulo', $configuration->segment . ' ' . config('APP_CIDADE'));
$titulonet = View::getSection('titulonet', $configuration->segment . ' ' . config('APP_CIDADE'));
$descricao = View::getSection('description', $configuration->description);
$descricaonet = View::getSection('descriptionnet', $configuration->description);
$ogdescription = View::getSection('seoogdescription');
$keywords = View::getSection('keywords', $configuration->keywords);
$imagem = View::getSection('imagem', asset('storage/' . $configuration->image));
$imagemcat = html_entity_decode(View::getSection('imagemcat', ''));
$imagempre = html_entity_decode(View::getSection('imagempre', ''));
$sitename = View::getSection('sitename', $configuration->segment . ' ' . config('APP_CIDADE'));
$Checa = substr(substr(url()->full(), strrpos(url()->full(), '?page')), 1, 4);
if ($Checa == 'page') {
    $canonical = env('APP_URL');
} else {
    $canonical = Request::url();
}

?>



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:type" content="website" />
<title>{{ $titulo }}</title>
<meta name="title" content="{{ $titulo }}" />
<meta name="twitter:title" content="{{ $titulonet }}" />
<meta property="og:title" content="{{ $titulonet }}" />
<meta property="og:site_name" content="{{ $sitename }}" />
<meta name="twitter:image" content="{{ $imagem }}" />
<meta property="og:image" content="{{ $imagem }}" />
@php
    if (!empty($ogdescription)) {
        echo '<meta name="twitter:description" content="' .
            $ogdescription .
            '" />
<meta property="og:description" content="' .
            $ogdescription .
            '" />';
    } else {
        echo '
<meta name="twitter:description" content="' .
            $descricaonet .
            '" />
<meta property="og:description" content="' .
            $descricaonet .
            '" />';
    }
@endphp

@php
    echo html_entity_decode($imagemcat);
@endphp
<meta name="description" content="{{ $descricao }}" />
<meta name="abstract" content="{{ $descricao }}" />
<meta name="keywords" content="{{ $keywords }}" />
<meta name="dc.keywords" content="{{ $keywords }}" />
<meta name="contactCity" content="{{ config('APP_CIDADE') }}" />
<meta name="robots" content="all" />
<meta name="googlebot" content="all" />
<meta name="InktomiSlurp" content="all" />
<meta name="Unknownrobot" content="all" />
<meta name="language" content="portuguese" />
<meta name="distribution" content="global" />
<meta name="msvalidate.01" content="7DFC93F5AEFED46CA419BAD1395C6802" />
<meta name="rating" content="general" />

<meta name="author" content="Frederico Moura">
<link href="{{ $configuration->email }}" rel="publisher" />
<link href="{{ $configuration->email }}?rel=author" rel="publisher" />
<meta name="email" content="{{ $configuration->email }}" />

@php

if (config('APP_GEO')){
    echo(config('APP_GEO'));
}else{
    if(config('APP_CIDADE')){
        echo (Session::get('geo', ''));
    }else{
        echo '<meta name="geo.region" content="BR" />
            <meta name="geo.position" content="-10.333333;-53.2" />
             <meta name="ICBM" content="-10.333333, -53.2" />';
    }
}
@endphp


<link rel="canonical" href="{{ $canonical }}">
<meta name="url" content="{{ $canonical }}" />
<link rel="alternate" hreflang="pt-br" href="{{ $canonical }}" />
<meta property="og:url" content="{{ $canonical }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ $configuration->twitter }}" />
<meta name="twitter:url" content="{{ $canonical }}" />

@php
    if (isset($imagempre)) {
        echo html_entity_decode($imagempre);
    }
@endphp

@if (($imagem != env('APP_URL')) & ($imagem != env('APP_URL') . 'storage/pages/home-0-17.webp'))
    <link rel="preload" as="image" href="{{ $imagem }}">
@endif




<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('site/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('site/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('site/assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('site/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="{{ asset('site/assets/css/variables.css') }}" rel="stylesheet">
<!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

<!-- Template Main CSS File -->
<link href="{{ asset('site/assets/css/main.css') }}" rel="stylesheet">
@yield('topscripts')
<style>
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .pulse-button {
        animation-name: pulse;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
</style>
@yield('stylesheets')
