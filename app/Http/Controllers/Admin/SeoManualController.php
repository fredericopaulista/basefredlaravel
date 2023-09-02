<?php

namespace App\Http\Controllers\Admin;

use App\Models\SeoManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoManualController extends Controller
{
    private $seom;

  public function __construct(SeoManual $seom)
  {
    $this->seo = $seom;
  }

    public function index(){

        $seomanual = SeoManual::all();

        return view('admin.seomanual.index', compact('seomanual'));
    }
     public function create(){

         return view('admin.seomanual.create');
    }
     public function store(Request $request){

        $data = $request->all();

        if($request->hasFile('seo_og_image')){
            $extensionImage = $request->file('seo_og_image')->extension();
            $newFileName = $request->title .'.'.$extensionImage;

            $data->addMediaFromRequest('seo_og_image')->usingFileName($newFileName)->toMediaCollection('seomanuals');
        }

        $seo = $this->seo->create($data);


        return redirect()->route('admin.seomanual.index');

    }
     public function edit($id){

        $seomanual = $this->seo->findOrFail($id);


        return view('admin.seomanual.edit', compact('seomanual'));
    }
     public function update(Request $request, $seomanual){

         $data = $request->all();
         $seomanual = $this->seo->find($seomanual);
        if ($request->hasFile('seo_og_image')) {
            $path = storage_path()."/app/public/";
            if($seomanual->seo_og_image){
             unlink($path.$seomanual->seo_og_image);
            }
            $data['seo_og_image'] = $this->imageUploadAll($request->file('seo_og_image'), 'seo');
        }



        $seomanual->update($data);

        flash('SEO Atualizada com Sucesso!')->success();
        return redirect()->route('admin.seomanual.index');
    }
     public function destroy($id){

        $seomanual = $this->seo->find($id);
        $path = storage_path()."/app/public/";
         if($seomanual->seo_og_image){
             unlink($path.$seomanual->seo_og_image);
            }
        $seomanual->delete();

        flash('SEO Removido com Sucesso!')->success();
        return redirect()->route('admin.seomanual.index');
    }
}
