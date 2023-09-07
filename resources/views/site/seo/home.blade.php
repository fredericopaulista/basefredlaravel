@php
    use App\Models\SeoManual;
    use App\Models\City;

    $imagemcat = '';

    $canonical = Request::url();
    // $city_slug = City::where('slug', $configuration->city_slug)->get();
    // $slug = substr($cityslug, 1);
    // $cidade = strpos($canonical, $slug);

    $seoM = SeoManual::where('seo_url', $canonical)->first();
    //echo "<pre>";
    //print_r($seoM);exit;
    if ($seoM) {
        //SEO MANUAL HOME
        if ($seoM->seo_og_image) {
            $imagem = asset('storage/' . $seoM->seo_og_description);
        } else {
            if (isset($configuration->image)) {
                $imagem = asset('storage/' . $configuration->image);
            } else {
                $imagem = asset('storage/' . $configuration->image);
            }
        }

        $titulo = $seoM->seo_title;

        $description = $seoM->seo_description;
        $iniciotags = $description;

        $ogdescription = $seoM->seo_description;

        $sitename = $seoM->seo_title;
        $tituloDescription = $seoM->seo_description;
        $tags = $seoM->seo_description;
    } else {
        //SEO DINÂMICO HOME

        if (isset($page->image)) {
            $imagem = asset('storage/' . $page->image);
        } else {
            $imagem = asset('storage/' . $configuration->image);
        }

        if (config('APP_CIDADE')) {
            $emcidade = $configuration->title . ' em ' . config('APP_CIDADE');
        } else {
            $emcidade = $configuration->title;
        }

        if (strlen($configuration->title) <= 70) {
            $titulo = $configuration->title . ' ' . $configuration->segment . ' ' . config('APP_CIDADE');
        } elseif (config('APP_CIDADE')) {
            $titulo = $configuration->title . ' ' . config('APP_CIDADE') . ' | ' . $emcidade;
        } else {
            $titulo = $configuration->title . ' ' . config('APP_CIDADE');
        }

        $iniciotags = $configuration->description . ': ';

        // if ($configuration->keywords) {
        //     $output = array_map(function ($object) {
        //         return $object->value;
        //     }, json_decode($page->tags));
        //     $tags = $configuration->title . ': ' . implode(', ', $output) . '.';
        // } else {
        //     $tags = $configuration->title . ' ' . config('APP_CIDADE') . ', ' . $emcidade . '.';
        // }

        if (strlen($configuration->title) <= 50) {
            $sitename = trim($configuration->title . ' ' . $configuration->segment . ' ' . config('APP_CIDADE'));
        } else {
            $sitename = trim($configuration->title . ' ' . config('APP_CIDADE'));
        }



        $description = $configuration->title . ' ' . config('APP_CIDADE') . ' ' . str_replace([',', '.'], '✔', $configuration->description);


        $ogdescription = $description;
    }

@endphp

@section('titulo', $titulo)

@section('sitename', $sitename)
@section('titulonet', $sitename)

@section('descriptionnet', $description)
@section('seoogdescription', $ogdescription)

{{-- @section('keywords', $tags) --}}
@section('description', $description)
@section('imagem', $imagem)
@section('imagemcat', $imagemcat)
