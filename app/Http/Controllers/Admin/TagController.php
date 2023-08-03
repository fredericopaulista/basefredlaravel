<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Service;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.tags.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        $tag = Tag::create($request->validated());

        $tag->services()->attach($request->services);

        return redirect()->route('tags.index')->banner('Tag criada com sucesso.');;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tag = Tag::where('id', $id)->first();
        $services = Service::all();;
        return view('admin.tags.show', compact('tag', 'services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $tag = Tag::where('id', $id)->first();

        $services = Service::all();;

        return view('admin.tags.edit', compact('tag', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, $id)
    {
        $tag = Tag::where('id', $id)->first();
        $tag->services()->sync($request->services);

        $tag->fill($request->all());

        if (!$tag->save()){
            return redirect()->back();
        }
        // $data->fill($request->validated());



        return redirect()->route('tags.index')->banner('Tag criada com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);

        $tag->services()->detach();

        $tag->delete();

        return redirect()->route('tags.index')->banner('Tag apagada com sucesso.');
    }

    public function deleteService(){


    }
}
