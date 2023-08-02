<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        $data = Category::create($request->validated());


        if($request->hasFile('image')){

            $data->addMediaFromRequest('image')->toMediaCollection('categories');
        }

        return redirect()->route('categorias.index')->banner('Categoria criada com sucesso.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        $media = $category->getMedia('categories');
        return view('admin.categories.edit', compact('category', 'media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {

        $data = Category::where('id', $id)->first();
        $data->fill($request->validated());
        $extensionImage = $request->file('image')->extension();
        $newFileName = $request->title .'.'.$extensionImage;
        if($request->hasFile('image')){
            $data->media()->delete();
            $data->addMediaFromRequest('image')->usingFileName($newFileName)->toMediaCollection('categories');
        }
        if (!$data->save()){
            return redirect()->route('categorias.edit', $data->id)->banner('Ocorreu um erro ao atualizar a categoria');;
        }



        return redirect()->route('categorias.index')->banner('Categoria atualizada com sucesso.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoryPhoto = Category::find($id);
        $photo = $categoryPhoto->getMedia('categories')->where('id')->first();

        if($photo){
            $photo->delete();
        }
        $category = Category::where('id', $id)->delete();


        return redirect()->route('categorias.index')->banner('Categoria apagada com sucesso.');
    }

    public function deletePhoto($categoryId, $photoId){

        $category = Category::findOrfail($categoryId);
        $photo = $category->getMedia('categories')->where('id', $photoId)->first();

        if($photo){
            $photo->delete();
        }

        return redirect()->route('categorias.edit', $categoryId)->banner('Imagem apagada com sucesso.');

    }
}
