<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Category;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Imports\ServicesImport;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;


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
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {

        $service = Service::create($request->validated());
        $alltags = explode(',' , $request->tags);

        $newtags = collect([]);

        foreach($alltags as $newtag){

            $tag = Tag::firstOrCreate(
                ['name' => $newtag],
                ['body' => $newtag],
                ['briefDescription' => $newtag]

            );

            $newtags->push([
                'tag_id' => $tag->id
            ]);

        }
        $service->tags()->sync($newtags);


        if($request->hasFile('image')){
            $extensionImage = $request->file('image')->extension();
            $newFileName = $request->title .'.'.$extensionImage;
            $service->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('services');
        }
        Alert::success('Parabéns','Serviço Cadastrado com Sucesso!');

        return redirect()->route('servicos.index');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $serviceId = Service::findOrfail($id);
        return view('admin.services.show', compact('serviceId'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();

        $tags = Tag::all();
        $service = Service::where('id', $id)->first();
        $media = $service->getMedia('services');
        return view('admin.services.edit', compact('service', 'media', 'categories', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $id)
    {

        $data = Service::where('id', $id)->first();
        $data->fill($request->validated());
        $alltags = explode(',' , $request->tags);
        $newtags = collect([]);

        foreach($alltags as $newtag){

            $tag = Tag::firstOrCreate(
                ['name' => $newtag],
                ['body' => $newtag],
                ['briefDescription' => $newtag]
            );
            $newtags->push([
                'tag_id' => $tag->id
            ]);

        }
        $data->tags()->sync($newtags);

        if($request->hasFile('image')){
            $extensionImage = $request->file('image')->extension();
            $newFileName = $request->title .'.'.$extensionImage;
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('services');
        }
        if (!$data->save()){
            Alert::error('Ops', 'Ocorreu um erro ao atualizar o serviço');
            return redirect()->route('servicos.edit', $data->id);
        }

        Alert::success('Parabéns', 'Serviço atualizado com sucesso.');

        return redirect()->route('servicos.index');
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
        $servicePhoto->tags()->detach();
        $service = Service::where('id', $id)->delete();
        Alert::success('Parabéns', 'Serviço apagada com sucesso.');

        return redirect()->route('servicos.index');
    }

    public function createFaq($serviceId)
    {
        $service = Service::findOrfail($serviceId)->get();

        return view('admin.services.faq.create', compact('service'));


    }
    public function storeFaq(Request $request)
    {
        $serviceFaq = ServiceFaq::create($request->all());

        return redirect()->route('servicos.index')->banner('Faq do Serviço criado com sucesso.');


    }
    public function showFaq($serviceId)
    {
        $serviceFaq = ServiceFaq::findOrfail($serviceId);

        dd($serviceFaq);

        return view('admin.services.faq.show', compact('serviceFaq'));


    }
    public function ImportarServicos(){


        return view('admin.services.import');
    }
    public function import(Request $request){

        Excel::import(new ServicesImport, $request->file('import_file'));

        Alert::success('Parabéns', 'Upload realizado com sucesso.');

        return redirect()->route('servicos.index');
    }
}
