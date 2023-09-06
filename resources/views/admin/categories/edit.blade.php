@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Atualizar Categoria</strong></h2>
                </div>

                <form method="POST" action="{{ route('categorias.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="lg:flex">
                            <div class="lg:w-6/6 p-6">



                                <div class="mt-3 ">
                                    <span class="form-label"></span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center ">
                                            <input type="checkbox" class="form-radio" name="print" type="checkbox"
                                                value="1" {{ old('print') == 1 ? 'checked' : '0' }}
                                                style="appearance: auto!important;">
                                            <span class="ml-2">Ativar Categoria</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="form-label"></span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-radio" name="main" type="checkbox"
                                                value="1" {{ old('print') == 1 ? 'checked' : '0' }}
                                                style="appearance: auto!important;">
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
                                        <span class="form-label">Conteúdo</span>
                                        <textarea class="form-control bodyfield" id="description" placeholder="Insira o texto" name="description">{!! $category->description !!}</textarea>
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
    </section>
@endsection
@section('scriptsfooter')
<script src="{{ asset('/js/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.bodyfield',
            height: '600',
            menubar: 'false',
            plugins: [
                'link', 'table', 'image', 'autoresize', 'lists', 'code'
            ],
            toolbar: [
                'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist | code',
            ],
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>

@endsection
