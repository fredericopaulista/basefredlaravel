@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Importar Serviços</strong></h2>
                </div>

                <form method="POST" action="{{ route('servicos.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="lg:flex">
                            <div class="lg:w-6/6 p-6">


                                <div class="mt-4 px-4">
                                    <x-label for="file" value="{{ __('Arquivo em Excel - xls/xsls/csv') }}" />
                                    <x-input id="file" class="block mt-1 w-full" type="file" name="import_file" />
                                </div>


                                <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                                    {{ __('Fazer Upload') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
@section('scriptsfooter')
   

@endsection
