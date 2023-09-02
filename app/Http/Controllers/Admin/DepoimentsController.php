<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDepoimentsRequest;
use App\Http\Requests\UpdateDepoimentsRequest;
use App\Models\Depoiments;
use App\Http\Controllers\Controller;
class DepoimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depoiments = Depoiments::all();

        return view('admin.depoiments.index', compact('depoiments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.depoiments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepoimentsRequest $request)
    {
        $data = Depoiments::create($request->validated());


        if($request->hasFile('image')){

            $data->addMediaFromRequest('image')->toMediaCollection('depoiments');
        }

        return redirect()->route('depoimentos.index')->banner('Depoimento cadastrado com sucesso.');;

    }

    /**
     * Display the specified resource.
     */
    public function show(Depoiments $depoiments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $depoiment = Depoiments::where('id', $id)->first();
        $media = $depoiment->getMedia('depoiments');
        return view('admin.depoiments.edit', compact('depoiment', 'media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepoimentsRequest $request, $id)
    {

        $data = Depoiments::where('id', $id)->first();
        $data->fill($request->validated());
        $extensionImage = $request->file('image')->extension();
        $newFileName = $request->title .'.'.$extensionImage;
        if($request->hasFile('image')){
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('depoiments');
        }
        if (!$data->save()){
            return redirect()->route('depoimentos.edit', $data->id)->banner('Ocorreu um erro ao atualizar o depoimento');;
        }



        return redirect()->route('depoimentos.index')->banner('Depoimento atualizado com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $depoiment = Depoiments::find($id);
        $photo = $depoiment->getMedia('depoiments')->where('id')->first();

        if($photo){
            $photo->delete();
        }
        $depoiment = Depoiments::where('id', $id)->delete();


        return redirect()->route('depoimentos.index')->banner('Depoimento apagado com sucesso.');
    }
}
