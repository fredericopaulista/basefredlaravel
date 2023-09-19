@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Cadastrar Categoria</strong></h2>
                </div>
                <a href="{{ route('site.gerasitemap') }}"> Gerar o Sitemap</a>
                <form name="form_main" method="POST" ">
                    @csrf
                    <div class="card">


                    </div>
                    <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                        {{ __('Cadastrar') }}
                    </button>
                </form>
            </div>
        </div>
    @endsection
    @section('scriptsfooter')
    @endsection
