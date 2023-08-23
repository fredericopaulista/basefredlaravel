<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(){

        return view('admin.pages.create');
    }

    public function store(StorePageRequest $request){

        $data = Page::create($request->validated());


        if($request->hasFile('image')){
            $extensionImage = $request->file('image')->extension();
            $newFileName = $request->title .'.'.$extensionImage;
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('pages');
        }

        return redirect()->route('paginas.index')->banner('Página criada com sucesso.');;
    }

    public function edit($id)
    {
        $page = Page::where('id', $id)->first();
        $media = $page->getMedia('pages');
        return view('admin.pages.edit', compact('page', 'media'));
    }
   
    public function update(StorePageRequest $request, $id)
    {

        $data = Page::where('id', $id)->first();
        $data->fill($request->validated());

        if($request->hasFile('image')){
            $extensionImage = $request->file('image')->extension();
            $newFileName = $request->title .'.'.$extensionImage;
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('pages');
        }
        if (!$data->save()){
            return redirect()->route('paginas.edit', $data->id)->banner('Ocorreu um erro ao atualizar a página');;
        }



        return redirect()->route('paginas.index')->banner('Página atualizada com sucesso.');;
    }

    public function destroy($id)
    {
        $pagePhoto = Page::find($id);
        $photo = $pagePhoto->getMedia('pages')->where('id')->first();

        if($photo){
            $photo->delete();
        }
        $page = Page::where('id', $id)->delete();


        return redirect()->route('paginas.index')->banner('Página apagada com sucesso.');
    }
}
