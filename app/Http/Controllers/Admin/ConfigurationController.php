<?php

namespace App\Http\Controllers\Admin;

use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{


    public function index(){

        $configuration = Configuration::get()->first();
        return view('admin.configurations.index', compact('configuration'));
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

        $data = $request->all();
		$config = Configuration::find($id)->first();

        if ($request->hasFile('image')) {
			if (Storage::disk('public')->exists($config->image)) {
				Storage::disk('public')->delete($config->image);
			}

            $filePath = Storage::disk('public')->put('site/img', request()->file('image'));
            $data['image'] = $filePath;
		}
        if ($request->hasFile('logoheader')) {
			if (!empty($config->logoheader)) {
				Storage::disk('public')->delete($config->logoheader);
			}

			$filePath = Storage::disk('public')->put('site/img', request()->file('logoheader'));
            $data['logoheader'] = $filePath;
		}
        if ($request->hasFile('banner_gif')) {
			if (!empty($config->banner_gif)) {
				Storage::disk('public')->delete($config->banner_gif);
			}

			$filePath = Storage::disk('public')->put('site/img', request()->file('banner_gif'));
            $data['banner_gif'] = $filePath;
		}
        if ($request->hasFile('favicon')) {
			if (!empty($config->favicon)) {
				Storage::disk('public')->delete($config->favicon);
			}

			$filePath = Storage::disk('public')->put('site/img', request()->file('favicon'));
            $data['favicon'] = $filePath;
		}

		if ($request->hasFile('logofooter')) {
			if (!empty($config->logofooter)) {
				Storage::disk('public')->delete($config->logofooter);
			}

			$filePath = Storage::disk('public')->put('site/img', request()->file('logofooter'));
            $data['logofooter'] = $filePath;
		}

        $config->update($data);

        return redirect()->back()->banner('Configurações atualizadas com sucesso.');;



    }
}
