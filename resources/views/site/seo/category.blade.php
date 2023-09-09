@php


    use App\Models\SeoManual;
    if (isset($category->image)) {
        $imagem = asset('storage/' . $single->image);
    } else {
        $imagem = asset(env('APP_IMG_POSTER'));
    }
    //. PHP_EOL .
    $imagemcat = '';
    $imagempre = '';
    $canonical = Request::url();
    $categoria = explode(env('APP_URL') . '/', $canonical);

    $seoM = SeoManual::where('seo_url', $canonical)->first();

    if ($seoM) {
        //SEO MANUAL CATEGORIA
        if ($seoM->seo_og_image) {
            $imagem = asset('storage/' . $seoM->seo_og_image);
        } else {
            if (isset($single->image)) {
                $imagem = asset('storage/' . $single->image);
            } else {
                $imagem = asset(config('site')->poster);
            }
        }

        $titulo = $seoM->seo_title;

        $description = $seoM->seo_description;
        $iniciotags = $description;
        $ogdescription = $seoM->seo_og_description;
        $sitename = $seoM->seo_title;
        $tituloDescription = $seoM->seo_description;
        $tags = $seoM->seo_description;
        $citydata = $citydata->geoposition;
    } else {

        if ($category->title) {
            $title = $category->title;

        } else {
            $title = $category->title;
        }
        $titulo2 = $title . ' ' . config('APP_CIDADE');

        if ($category->seoDescription) {
            $description = $category->seoDescription;
        } else {
            $description = $title;
        }

         config('APP_CIDADE') ? ($emcidade = ' em ' . config('APP_CIDADE')) : ($emcidade = '');

        if (config('APP_CIDADE')) {
            $titulo = $title . ' ' . config('APP_CIDADE') . ' | ' . $title . $emcidade;

        } else {
            $titulo = $title . ' | ' . trim(config('site')->title);
        }

        //$titulo = $title . ' ' . config('APP_CIDADE') . ' | ' . $title . $emcidade;
        // segundo titulo vem da tabela seo - title cuja url eh igual a esta.

        $sitename = trim($configuration->title . ' ' . config('APP_CIDADE'));

        // pega as tags dos servicos para criar mais tags

        $listaservicos = [];
        foreach ($services as $service) {
            array_push($listaservicos, $service->name);
        }

        if (config('APP_CIDADE')) {
            $tags = $titulo2 . ', ' . $title . $emcidade . ', ' . $description;

            if ($category->description_seo) {
                $description = $category->description_seo;

                $description = $description;
            } else {
                $description = $titulo2 . ' ✔ ' . implode(', ', $listaservicos);

            }
        } else {
            $tags = $description . ' ✔ ' . implode(', ', $listaservicos);
            $description = $description . ' , ' . implode(', ', $listaservicos);

            $description = str_replace(',', '✔', $description);
        }
        $ogdescription = $tags . ' , ' . implode(', ', $listaservicos);
        $cityinfo = str_replace("\n"," ", $citydata->geoposition);


    }

@endphp

@section('titulo', $titulo)

@section('sitename', $sitename)
@section('titulonet', $titulo)

@section('description', $description)
@section('descriptionnet', $description)
@section('seoogdescription', $ogdescription ?? '')
@section('cityinfo', $cityinfo)

@section('keywords', $tags)
@section('imagem', $imagem)
@section('imagemcat', $imagemcat)
@section('imagempre', $imagempre)
