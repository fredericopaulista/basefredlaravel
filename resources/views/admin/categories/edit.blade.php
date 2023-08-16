@extends('admin.layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('categorias.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mt-4 px-4">
                        @livewire('form-checkbox-element')
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="name" value="{{ __('Nome') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$category->name"
                            required  />
                    </div>

                    <div class="mt-4 px-4">
                        <x-label for="title" value="{{ __('Título') }}" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required
                            :value=" $category->title " />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seoDescription" value="{{ __('Descrição SEO') }}" />
                        <x-input id="seoDescription" class="block mt-1 w-full" type="text" name="seoDescription"
                            required :value=" $category->seoDescription " />
                    </div>

                    <div wire:ignore class="form-group row mt-4 px-4">
                        <x-label for="description" value="{{ __('Conteúdo') }}" />
                        <div class="col-md-9">
                            <textarea wire:model="message" class="form-control required" name="description" id="message">{{ $category->description }}</textarea>

                        </div>
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="image" value="{{ __('OG Imagem') }}" />
                       <div class="mt-2 mb-4">
                        @if(isset($media[0]))
                        <img width="40%" src="{{ $media[0]->getUrl('thumb') }}" >
                        <br>
                        <a class="underline" href="{{ route('categorias.deletePhoto', [$category->id, $media[0]->id ]) }}" onclick="return confirm('Tem certeza que deseja apagar a imagem?')">Apagar Imagem</a>
                        <br>
                        @endif
                       </div>

                        <x-input id="image" class="block mt-1 w-full" type="file" name="image"  />
                    </div>

                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Atualizar') }}
                    </x-button>

                </form>

                @push('scripts')

                    <script>
                        const editor = CKEDITOR.replace('message');
                        editor.on('change', function(event) {
                            console.log(event.editor.getData())
                            this.set('message', event.editor.getData());
                        })
                    </script>
                @endpush
            </div>
        </div>
    </div>
@endsection
