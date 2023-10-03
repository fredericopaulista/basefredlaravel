@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Editar SEO Manual</strong></h2>
                </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('seomanual.update', $seomanual->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mt-4 px-4">
                        <x-label for="seo_title" value="{{ __('Título SEO') }}" />
                        <x-input id="seo_title" class="block mt-1 w-full" type="text" name="seo_title" :value="$seomanual->seo_title"
                            required placeholder="Título SEO" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seo_url" value="{{ __('URL') }}" />
                        <x-input id="seo_url" class="block mt-1 w-full" type="text" name="seo_url" :value="$seomanual->seo_url"
                            required placeholder="https://www.xxxx.com" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seo_description" value="{{ __('Description SEO') }}" />
                        <x-input id="seo_description" class="block mt-1 w-full" type="text" name="seo_description" :value="$seomanual->seo_description"
                            required placeholder="Description SEO" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seo_og_title" value="{{ __('OG Title') }}" />
                        <x-input id="seo_og_title" class="block mt-1 w-full" type="text" name="seo_og_title" :value="$seomanual->seo_og_title"
                            required placeholder="OG Title" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seo_og_description" value="{{ __('OG Description ') }}" />
                        <x-input id="seo_og_description" class="block mt-1 w-full" type="text" name="seo_og_description" :value="$seomanual->seo_og_description"
                            required placeholder="OG Description" />
                    </div>
                    <div
                    class="bg-primary text-white w-12 h-12  inline-flex items-center align-middle justify-center font-bold text-4xl mx-4">
                    <img width="90%" height="90%"
                        src="{{ $seomanual->seo_og_image }}">
                </div>
                    <div class="mt-4 px-4">
                        <x-label for="seo_og_image" value="{{ __('OG Imagem') }}" />
                        <x-input id="seo_og_image" class="block mt-1 w-full" type="file" name="seo_og_image" />
                    </div>




                    <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                        {{ __('Atualizar') }}
                    </button>

                </form>


            </div>
        </div>
    </div>
            </div>
        </div>
    </section>
    @endsection
