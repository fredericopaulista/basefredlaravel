@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Cadastrar Categoria</strong></h2>
                </div>

                <form name="form_main" method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="lg:flex">
                            <div class="lg:w-6/6 p-6">

                                <x-validation-errors class="mb-4" />

                                <div class="mt-3 ">
                                    <span class="form-label"></span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center ">
                                            <input type="checkbox" class="form-radio" name="print" type="checkbox"
                                                value="1" {{ old('print') == 1 ? 'checked' : '0' }}
                                                style="appearance: auto!important;">
                                            <span class="ml-2"><b>Ativar Categoria</b></span>
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
                                            <span class="ml-2"><b>Mostrar na Home</b></span>
                                        </label>
                                    </div>
                                </div>
                                <label class="block">
                                    <span class="form-label"><b>Nome</b></span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="name"
                                        placeholder="Nome" value="{{ old('name')}}">
                                </label>
                                <label class="block">
                                    <span class="form-label"><b>Título</b></span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="title"
                                        placeholder="Título" oninput="countText()" id="text" value="{{  old('title') }}">
                                        <label for="characters">Caracteres: </label><span id="characters"></span>
                                        <label for="words"> / Palavras: </label><span id="words"></span><br>
                                </label>
                                <label class="block">
                                    <span class="form-label"><b>Descrição SEO</b></span>
                                    <textarea class="form-control bodyfield" id="seoDescription" placeholder="Insira o texto" name="seoDescription" >{{ old('seoDescription') }}</textarea>

                                </label>
                                <label class="block">
                                    <div class="col-md-9">
                                        <span class="form-label"><b>Conteúdo</b></span>
                                        <textarea class="form-control bodyfield" id="description" placeholder="Insira o texto" name="description" >{{ old('description') }}</textarea>

                                    </div>
                                </label>

                                <div class="mt-4 px-4">
                                    <x-label for="image" value="{{ __('OG Imagem') }}" />
                                    <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
                                </div>
                                <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                                    {{ __('Cadastrar') }}
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
    function countText() {
  let text = document.form_main.title.value;
  document.getElementById('characters').innerText = text.length;
  document.getElementById('words').innerText = text.length == 0 ? 0 : text.split(/\s+/).length;
    }
  </script>
  {{-- <script>
    function countText() {
  let text = document.form_main.seoDescription.value;
  document.getElementById('character').innerText = seoDescription.length;
  document.getElementById('word').innerText = seoDescription.length == 0 ? 0 : seoDescription.split(/\s+/).length;
    }
  </script> --}}

    <script>
        tinymce.init({
            selector: 'textarea.bodyfield',
            height: '600',
            menubar: 'false',
            plugins: [
                'link', 'table', 'image', 'autoresize', 'lists', 'code', 'wordcount'
            ],
            toolbar: [
                'wordcount | undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist | code',
            ],
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>

@endsection
