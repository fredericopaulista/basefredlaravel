<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();

        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $data = Banner::create($request->validated());

        $extensionImage = $request->file('image')->extension();
        $newFileName = $request->title .'.'.$extensionImage;
        if($request->hasFile('image')){

            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('banners');
        }

        return redirect()->route('banners.index')->banner('Banner criado com sucesso.');;

    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::where('id', $id)->first();
        $media = $banner->getMedia('banners');
        return view('admin.banners.edit', compact('banner', 'media'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, $id)
    {

        $data = Banner::where('id', $id)->first();
        $data->fill($request->validated());
        $extensionImage = $request->file('image')->extension();
        $newFileName = $request->title .'.'.$extensionImage;
        if($request->hasFile('image')){
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('banners');
        }
        if (!$data->save()){
            return redirect()->route('banners.edit', $data->id)->banner('Ocorreu um erro ao atualizar o banner');;
        }



        return redirect()->route('banners.index')->banner('Banner atualizado com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bannerPhoto = Banner::find($id);
        $photo = $bannerPhoto->getMedia('banners')->where('id')->first();

        if($photo){
            $photo->delete();
        }
        $banner = Banner::where('id', $id)->delete();


        return redirect()->route('banners.index')->banner('Banner apagado com sucesso.');
    }
}
