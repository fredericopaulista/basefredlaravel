@extends('admin.layouts.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
@section('content')
    <section class="max-w-6xl  mx-auto px-4">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden  sm:rounded-lg">
                <div class="mt-4 p-8">
                    <h2><strong class="headings-color">Atualizar Serviço {{ $service->name }}</strong></h2>
                </div>

                <form method="POST" action="{{ route('servicos.update', $service->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="lg:flex">
                            <div class="lg:w-6/6 p-6">



                                <div class="mt-3 ">
                                    <span class="form-label"></span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center ">
                                            <input name="print" type="checkbox" value="1"
                                                {{ $service->print == 1 ? 'checked' : '0' }} class="form-radio"
                                                style="appearance: auto!important;">
                                            <span class="ml-2">Ativar Serviço</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <span class="form-label"></span>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-radio" name="home" type="checkbox"
                                                value="1" {{ $service->home == 1 ? 'checked' : '0' }}
                                                style="appearance: auto!important;">
                                            <span class="ml-2">Mostrar na Home</span>
                                        </label>
                                    </div>
                                </div>
                                <label class="block">
                                    <span class="form-label">Nome</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="name"
                                        placeholder="Nome" value="{{ $service->name }}">
                                </label>
                                <label class="block">
                                    <span class="form-label">Título</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="title"
                                        placeholder="Título" value="{{ $service->title }}">
                                </label>
                                <label class="block">
                                    <span class="form-label">Sub Título</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="subtitle"
                                        placeholder="Sub Título" value="{{ $service->subtitle }}">
                                </label>
                                <label class="block">
                                    <span class="form-label">Breve Descrição</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="briefDescription"
                                        placeholder="Breve Descrição" value="{{ $service->briefDescription }}">
                                </label>

                                <label class="block">
                                    <div class="col-md-9">
                                        <span class="form-label">Conteúdo</span>
                                        <textarea class="form-control bodyfield" id="description" placeholder="Insira o texto" name="description">{{ $service->description }}</textarea>
                                    </div>
                                </label>

                                <div class="mt-4 px-4">
                                    <x-label for="image" value="{{ __('OG Imagem') }}" />
                                    <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
                                </div>
                                <label class="block">
                                    <span class="form-label">Título Vídeo</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="videoTitle"
                                        placeholder="Título Vídeo" value="{{ $service->videoTitle }}">
                                </label>
                                <label class="block">
                                    <span class="form-label">Código Vídeo do Youtube</span>
                                    <input class="form-input mt-1 block w-full placeholder-muted" name="video"
                                        placeholder="Código Vídeo do Youtube" value="{{ $service->video }}">
                                </label>
                                <label class="block">
                                    <span class="form-label">Categoria</span><br>

                                    <select class="js-example-basic-single" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" selected="selected">{{ $category->name }}
                                        @endforeach
                                    </select>
                                </label>
                                <label class="block">
                                    <span class="form-label">Tags</span><br>

                                    <input name="tags" id="tags" value="@foreach($service->tags as $tag) {{ $tag->name }}, @endforeach" class="form-control">

                                </label>

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
