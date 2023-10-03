<?php

namespace App\Http\Controllers\Admin;

use App\Models\SeoManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeomanualRequest;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use File;

class SeoManualController extends Controller
{




    public function index(){

        $seomanual = SeoManual::all();

        return view('admin.seomanual.index', compact('seomanual'));
    }
     public function create(){

         return view('admin.seomanual.create');
    }
     public function store(SeomanualRequest $request){

       // dd($request->all());
        $data = $request->validated();
        $webp = Webp::make($request->file('seo_og_image'));
        $name_image = $request->seo_title .'.'.$data['seo_og_image']->getClientOriginalExtension();

    if ($webp->save(public_path('imagens/seomanual'.$name_image))) {
        // File is saved successfully
    }
        // if ($request->hasFile('seo_og_image')) {
        //     $image = $request->file('seo_og_image');
        //     $destinationPath = public_path('/imagens/seomanual');
        //     $input['seo_og_image'] = time().'.'.$image->getClientOriginalExtension();

        //     $destinationPath = public_path('/imagens/seomanual');
        //     $imgFile = Image::make($image->getRealPath());

        //     $imgFile->resize(1200, 628)->save($destinationPath.'/'.$input['seo_og_image']);

        //     $destinationPath = public_path('/imagens/seomanual');

        //     $save_url = 'images/seomanual/'.$input['seo_og_image'];

        //   }
        // if($request->hasFile('seo_og_image')){
        //     $image = $request->file('seo_og_image');

        //     $name_image = $request->seo_title .'.'.$image->getClientOriginalExtension();

        //         Image::make($request->file('seo_og_image'))->resize(1200,628)
        //         ->encode('webp', 70)
        //         ->save('imagens/seomanual/'.$name_image);
        //     $save_url = 'images/seomanual/'.$name_image;

        //  }

         $seommanual = SeoManual::create([
            'seo_title' => $request->seo_title,
            'seo_url' => $request->seo_url,
            'seo_description' => $request->seo_description,
            'seo_og_title' => $request->seo_og_title,
            'seo_og_description' => $request->seo_og_description,
            'seo_og_image' => public_path('imagens/seomanual'.$name_image),
         ]);

        Alert::success('Parabéns','SEO Manual Cadastrado com Sucesso!');
        return redirect()->route('seomanual.index');

    }
     public function edit($id){

        $seomanual = SeoManual::findOrFail($id);


        return view('admin.seomanual.edit', compact('seomanual'));
    }
     public function update(SeomanualRequest $request, $seomanual){

         $data = $request->validated();
         $seomanual = SeoManual::find($seomanual);
         if ($request->hasFile('seo_og_image')) {
            $path = storage_path()."/app/public/";
            if($seomanual->seo_og_image){
             unlink($path.$seomanual->seo_og_image);
            }
            $data['seo_og_image'] = $seomanual->imageUploadAll($request->file('seo_og_image'), 'seo');
        }
        //  if($request->hasFile('seo_og_image')){
        //     $image = $request->file('seo_og_image');

        //     $name_image = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        //         Image::make($request->file('seo_og_image'))->resize(1200,628)
        //         ->encode('webp', 70)
        //         ->save('imagens/seomanual/'.$name_image);
        //     $save_url = 'images/seomanual/'.$name_image;

        //  } else{
        //     Alert::error('Ops', 'Ocorreu um erro ao atualizar o serviço');
        //     return redirect()->route('seomanual.edit', $data->id);
        // }



        $seomanual->update([
            'seo_title' => $request->seo_title,
            'seo_url' => $request->seo_url,
            'seo_description' => $request->seo_description,
            'seo_og_title' => $request->seo_og_title,
            'seo_og_description' => $request->seo_og_description,
            'seo_og_image' => $save_url,
        ]);

        Alert::success('Parabéns','SEO Manual Atualizado com Sucesso!');
        return redirect()->route('seomanual.index');
    }
     public function destroy($id){

        $seomanual = SeoManual::find($id);
        $image_path = $seomanual->seo_og_image;


        if(File::exists($image_path)) {
            File::delete($image_path);

            }else{
                dd('File does not exists.');
            }
        //  if($seomanual->seo_og_image){
        //      unlink($path.$seomanual->seo_og_image);
        //     }
        $seomanual->delete();

        Alert::success('Parabéns','SEO Manual Apagado com Sucesso!');
        return redirect()->route('seomanual.index');
    }
}
