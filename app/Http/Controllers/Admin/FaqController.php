<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $faq = Faq::create($request->validated());


        return redirect()->route('faqs.index')->banner('FAQ criada com sucesso.');;


    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = Faq::find($id)->first();

        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, $id)
    {
        $faq = Faq::where('id', $id)->first();

        $faq->fill($request->all());
        $faq->save();
        return redirect()->route('faqs.index')->banner('Faq atualizado com sucesso.');;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $faq = Faq::where('id', $id)->delete();

        return redirect()->route('faqs.index')->banner('Faq apagado com sucesso.');
    }
}
