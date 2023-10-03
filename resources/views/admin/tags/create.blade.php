@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Cadastrar Tag</strong></h2>
                </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('tags.store') }}" >
                    @csrf

                    <div class="mt-4 px-4">
                        <x-label for="name" value="{{ __('Nome') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required placeholder="Nome" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="services" value="{{ __('Serviços') }}" />
                        @foreach ($services as $service )


                        <input id="name"  type="checkbox" name="services[]"
                        value="{{ $service->id }}"

                         /> {{ $service->name }}
                         <br>
                         @endforeach
                    </div>



                    <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                        {{ __('Cadastrar') }}
                    </button>

                </form>


            </div>
        </div>
    </div>
            </div>
        </div>
    </section>
    @endsection
