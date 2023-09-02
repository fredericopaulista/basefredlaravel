<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CustomizationController extends Controller
{
    public function index(){

        $customizations = Customization::all();
        return view('admin.customization.index', compact('customizations'));
    }

    public function create(){

        return view('admin.customization.create');
    }

    public function store(Request $request){


        $data = Customization::create($request->all());

        return redirect()->route('customiza.index')->banner('Dados cadastrados com sucesso.');;
    }

    public function edit($id){

        $customiza = Customization::findOrfail($id);
        return view('admin.customization.edit', compact('customiza'));
    }

    public function update(Request $request, $id){

        $customiza = Customization::where('id', $id)->first();

        $customiza->fill($request->all());
        $customiza->save();

        return redirect()->route('customiza.index')->banner('Dados atualizados com sucesso.');;
    }
}
