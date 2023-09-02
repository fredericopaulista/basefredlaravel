<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Contact;
use App\Models\Customization;
use App\Models\Page;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navlinks = Category::all();
        $pages = Page::where('visible', 1)->get();;
        $configuration = Configuration::get()->first();
        $customization = Customization::get()->first();
        return view('site.contact', compact( 'navlinks', 'configuration', 'pages', 'customization'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    //    $contato = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'whatsapp' => 'required|digits:10|numeric',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);

        Contact::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Agradecemos pelo contato. Em breve entraremos em contato.']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
