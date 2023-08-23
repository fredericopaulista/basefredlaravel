<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customization;
use Illuminate\Http\Request;

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

        return view('admin.customiza.index');
    }
}
