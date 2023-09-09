

@php

$cidade = '';
if (config('APP_CIDADE') != '') { $cidade = ' em ' . config('APP_CIDADE'); }


$tituloservico = '';

if (isset($byTag)) {
    $t1 = $byTag->name . ' ' . config('APP_CIDADE');
    $t2 = $servicec->name . ' ' . config('APP_CIDADE');
    $tituloservico = Str::limit($t1, $limit = 120, $end = '') . ' | ' . Str::limit($t2, $limit = 120, $end = '');
} else {
    $t1 = $servicec->name . ' ' . config('APP_CIDADE');
    $t2 = $servicec->name . $cidade;


    if (isset($area)) {
        $tituloservico = Str::limit($t1, $limit = 120, $end = '');
    }else{
        $tituloservico = Str::limit($t1, $limit = 120, $end = '') . ' | ' . Str::limit($t2, $limit = 120, $end = '');
    }
}
if (config('APP_CIDADE') == ''){
    $tituloservico = Str::limit($t1, $limit = 120, $end = '') . '| ' . trim(config('site')->title);
}

if(isset($area)){
    $canonical = Request::url();
    $areas = $area->name;
    $categoria = str_replace($areas.'-'.config('APP_CIDADE'), $canonical, $areas.'-'.config('APP_CIDADE'));

    if(isset($categoria)){
        $tituloservico =  $area->name.' '. config('APP_CIDADE').' | '.str_replace('|', '', $tituloservico); ;
    }
}
$tags = '';

if (isset($servicetags)) {
    $output = array_map(function ($object) { return $object->name; }, json_decode($servicetags));
    if(config('APP_CIDADE') != ''){
        $str = str_replace('|', '✔', $tituloservico);
        $tags = $str . ', ' . implode(', ', $output) . ',';
    }else{
        $str = str_replace('|', '✔', $tituloservico);
        $tags = $str . ', ' . implode(', ', $output) . ',';
    }

} else {
    if(config('APP_CIDADE') != ''){
    $tags = $servicec->name . ', ' . $servicec->name . '' .$cidade . config('APP_CIDADE');
    }else{
    $tags = $servicec->name  . ', ';
    }
}
if ($servicec->image)
$imagem = asset('storage/' . $servicec->image);
else
$imagem = asset(env('APP_IMG_POSTER'));

if (strlen($servicec->name) <= 30){
//$sitename = trim($servicec->name . ' ' . config('site')->segment . ' ' . config('APP_CIDADE'));

     $sitename = trim($tituloservico);

}else{
    $sitename = $sitename = trim($tituloservico);

}

//if (!$servicec->description) $description = str_replace(",", "✔", $tags); else $description = $servicec->description;
$description = str_replace(",", " ✔", $tags);
//$description = str_replace([',','.'], "✔", $tags);

@endphp

@section('titulo', trim($tituloservico))
@section('titulonet', $sitename)

@section('sitename', $sitename)

@section('keywords', $tags)

@section('description', Str::limit($description, $limit = 209, $end = ''))
@section('descriptionnet', Str::limit($description, $limit = 209, $end = ''))

@section('imagem', $imagem)


