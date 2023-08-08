<?php

namespace App\Http\Controllers\Admin;

use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    public function index(){

        return view('admin.configurations.index');
    }
    public function create(){

        return view('admin.configurations.create');
    }
    public function store(Request $request){

        $validated = $request->all();

        if ($request->hasFile('image')) {
             // put image in the public storage
            $filePath = Storage::disk('public')->put('site/img', request()->file('image'));
            $validated['image'] = $filePath;
        }
        $create = Configuration::create($validated);
        return redirect()->back()->banner('Configurações atualizadas com sucesso.');;
    }

    public function edit($id){

        $configuration = Configuration::findOrfail($id);
        return view('admin.configurations.edit', compact('configuration'));
    }

    public function update(Request $request, $id){

        $data = Configuration::where('id', $id)->first();

        $fileName = $request->segment.'.'.$request->image->extension();

        $request->image->move(public_path('site/img'), $fileName);
        $data->image = Str::slug($fileName);
        $save = new Photo;

        $save->name = $name;
        $save->path = $path;

        $save->save();

        return redirect()->back()->banner('Configurações atualizadas com sucesso.');;



    }
}
