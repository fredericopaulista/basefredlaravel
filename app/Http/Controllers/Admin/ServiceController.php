<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Category;
use App\Models\Service;
use App\Models\Tag;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.services.index', compact(['services', 'tags', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = Service::create($request->validated());


        if($request->hasFile('image')){

            $data->addMediaFromRequest('image')->toMediaCollection('services');
        }

        return redirect()->route('servicos.index')->banner('Serviço criado com sucesso.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::where('id', $id)->first();
        $media = $service->getMedia('services');
        return view('admin.services.edit', compact('services', 'media'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $data = Service::where('id', $id)->first();
        $data->fill($request->validated());
        $extensionImage = $request->file('image')->extension();
        $newFileName = $request->title .'.'.$extensionImage;
        if($request->hasFile('image')){
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('services');
        }
        if (!$data->save()){
            return redirect()->route('servicos.edit', $data->id)->banner('Ocorreu um erro ao atualizar o serviço');;
        }



        return redirect()->route('servicos.index')->banner('Serviço atualizada com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servicePhoto = Service::find($id);
        $photo = $servicePhoto->getMedia('services')->where('id')->first();

        if($photo){
            $photo->delete();
        }
        $service = Service::where('id', $id)->delete();


        return redirect()->route('servicos.index')->banner('Serviço apagada com sucesso.');
    }
}
