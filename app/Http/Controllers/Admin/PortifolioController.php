<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portifolio;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function index(){

        $portifolios = Portifolio::all();

        return view('admin.portifolio.index', compact('portifolios'));
    }
}
