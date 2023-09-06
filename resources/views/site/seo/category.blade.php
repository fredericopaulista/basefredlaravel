@php

use App\Models\SeoManual;
if (isset($category->image))
$imagem = asset('storage/' . $single->image);
else
$imagem = asset(env('APP_IMG_POSTER'));
//. PHP_EOL .
$imagemcat = '';
$imagempre = '';
$canonical = Request::url();
$categoria = explode(env('APP_URL')."/", $canonical);
$seoM = SeoManual::where('seo_url', $canonical)->first();

if($seoM){
    //SEO MANUAL CATEGORIA
    if ($seoM->seo_og_image){
        $imagem = asset('storage/' . $seoM->seo_og_image);
    }else{

        if (isset($single->image))
            $imagem = asset('storage/' . $single->image);
        else
            $imagem = asset(config('site')->poster);
    }

    $titulo = $seoM->seo_title;

    $description = $seoM->seo_description;
    $iniciotags = $description;
  $ogdescription = $seoM->seo_og_description;
    $sitename =$seoM->seo_title;
    $tituloDescription = $seoM->seo_description;
    $tags =  $seoM->seo_description;

}else{
    //SEO DINÂMICO CATEGORIA
    // foreach ($items as $item) {
    //   $imagemcat = $imagemcat . '<meta name="twitter:image" content="'. asset('storage/' . $item->image) .'" /><meta property="og:image" content="'. asset('storage/' . $item->image) .'" />';
    //   $imagempre = $imagempre . '<link rel="preload" as="image" href="'. asset('storage/' . $item->image) .'">';
    // }
    if ($single->title) $title = $single->title; else $title = $single->name;

    if ($single->description_seo) $description = $single->description_seo; else $description = $title;


    config('APP_CIDADE') ? $emcidade = ' em ' . config('APP_CIDADE') : $emcidade = '';

    if(config('APP_CIDADE'))
    $titulo = $title . ' ' . config('APP_CIDADE') . ' | ' . $title . $emcidade;
    else
    $titulo = $title . ' | ' . trim(config('site')->title);

    //$titulo = $title . ' ' . config('APP_CIDADE') . ' | ' . $title . $emcidade;
    // segundo titulo vem da tabela seo - title cuja url eh igual a esta.

    $sitename = trim(config('site')->title . ' ' . config('APP_CIDADE'));

    // pega as tags dos servicos para criar mais tags

    $listaservicos = [];
    foreach ($single->services as $key => $service) {
    array_push($listaservicos,$service->name);
    }

    if(config('APP_CIDADE')){

        $tags = $titulo. ', ' . $title . $emcidade . ', ' . $description;

        if ($single->description_seo){
            $description = $single->description_seo;

            $description = $description;

        }else {
            $description = $titulo.' ✔ ' . implode(", ",$listaservicos);

        }

    }else {
    $tags = $description.' ✔ ' . implode(", ",$listaservicos);
    $description = $description .' , ' . implode(", ",$listaservicos);

    $description = str_replace(",", "✔", $description);

    }
}


@endphp

@section('titulo', $titulo)

@section('sitename', $sitename)
@section('titulonet', $titulo)

@section('description', $description)
@section('descriptionnet', $description)
@section('seoogdescription', $ogdescription ?? '')
@section('keywords', $tags)
@section('imagem', $imagem)
@section('imagemcat', $imagemcat)
@section('imagempre', $imagempre)
