@extends('admin.layouts.app')
@section('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- PAGE CONTENT -->

    <section class="max-w-6xl  mx-auto px-4">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-validation-errors class="mb-4" />
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form method="POST" action="{{ route('categorias.update', $category->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card">
                            <div class="lg:flex">
                                <div class="lg:w-2/6 p-8">
                                    <p><strong class="headings-color">Atualizar Categoria</strong></p>

                                </div>
                                <div class="lg:w-4/6 card-dark p-8">
                                    <div class="mt-3">
                                        <span class="form-label"></span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" name="print" type="checkbox"
                                                    value="1" {{ old('print') == 1 ? 'checked' : '0' }}>
                                                <span class="ml-2">Ativar Categoria</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <span class="form-label"></span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-radio" name="main" type="checkbox"
                                                    value="1" {{ old('print') == 1 ? 'checked' : '0' }}>
                                                <span class="ml-2">Mostrar na Home</span>
                                            </label>
                                        </div>
                                    </div>
                                    <label class="block">
                                        <span class="form-label">Nome</span>
                                        <input class="form-input mt-1 block w-full placeholder-muted" name="name"
                                            placeholder="Nome" value="{{ $category->name }}">
                                    </label>
                                    <label class="block">
                                        <span class="form-label">Título</span>
                                        <input class="form-input mt-1 block w-full placeholder-muted" name="title"
                                            placeholder="Título" value="{{ $category->title }}">
                                    </label>
                                    <label class="block">
                                        <span class="form-label">Descrição SEO</span>
                                        <input class="form-input mt-1 block w-full placeholder-muted" name="seoDescription"
                                            placeholder="Descrição SEO" value="{{ $category->seoDescription }}">
                                    </label>
                                    <label class="block">
                                        <div class="col-md-9">
                                            <span class="form-label">Texto</span>
                                            <textarea class="form-control" id="description" placeholder="Insira o texto" name="description">{{ $category->description }}</textarea>
                                        </div>
                                    </label>
                                    <div class="mt-4 px-4">
                                        <img width="70%" height="70%"
                                            src="{{ $category->getFirstMediaUrl('categories', 'thumb') }}">
                                    </div>
                                    <div class="mt-4 px-4">
                                        <x-label for="image" value="{{ __('OG Imagem') }}" />
                                        <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
                                    </div>
                                    <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                                        {{ __('Atualizar') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scriptsfooter')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
