<x-app-layout>
    @section('personalcss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }
        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('servicos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 px-4">
                        <div>
                            <label>
                                <input  name="print" type="checkbox" value="1" {{  old('print') == 1 ? 'checked' : '0' }}>
                                Ativar Serviço
                            </label>
                            <br>
                            <label>
                                <input  name="home"  type="checkbox" value="1" {{  old('home') == 1 ? 'checked' : '0' }} >
                                Mostrar na Home
                            </label>

                        </div>

                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="name" value="{{ __('Nome') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required placeholder="Nome" />
                    </div>

                    <div class="mt-4 px-4">
                        <x-label for="title" value="{{ __('Título') }}" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required
                            :value="old('title')" placeholder="Título" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="subtitle" value="{{ __('SubTítulo') }}" />
                        <x-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" required
                            :value="old('subtitle')" placeholder="SubTítulo" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="briefDescription" value="{{ __('Breve Descrição') }}" />
                        <x-input id="briefDescription" class="block mt-1 w-full" type="text" name="briefDescription" required
                            :value="old('briefDescription')" placeholder="Breve Descrição" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="seoDescription" value="{{ __('Descrição SEO') }}" />
                        <x-input id="seoDescription" class="block mt-1 w-full" type="text" name="seoDescription"
                            required :value="old('seoDescription')" placeholder="Descrição SEO" />
                    </div>

                    <div wire:ignore class="form-group row mt-4 px-4">
                        <x-label for="description" value="{{ __('Conteúdo') }}" />
                        <div class="col-md-9">
                            <textarea wire:model="message" class="form-control required" name="description" id="message">{{ old('description') }}</textarea>

                        </div>
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="image" value="{{ __('OG Imagem') }}" />
                        <x-input id="image" class="block mt-1 w-full" type="file" name="image"  />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="videoTitle" value="{{ __('Título do Vídeo') }}" />
                        <x-input id="videoTitle" class="block mt-1 w-full" type="text" name="videoTitle"
                            required :value="old('videoTitle')" placeholder="Título do Vídeo" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="video" value="{{ __('Url do Video') }}" />
                        <x-input id="video" class="block mt-1 w-full" type="text" name="video"
                            required :value="old('video')" placeholder="Url do Video" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="categories" value="{{ __('Categorias') }}" />
                        @foreach ($categories as $category )


                        <input id="categories"  type="checkbox" name="categories[]"
                        value="{{ $category->id }}"

                         /> {{ $category->name }}
                         <br>
                         @endforeach
                    </div>
                    {{-- <div class="mt-4 px-4">
                        <x-label for="tags" value="{{ __('Tags') }}" />
                        <x-input id="tags" class="block mt-1 w-full" type="text" name="tags" data-role="tagsinput"
                            required :value="old('tags')" placeholder="Insira as Tags separadas por vírgula" />
                    </div> --}}
<div class="mt-4 px-4">
    <x-label for="tags" value="{{ __('Tags') }}" />
    <input class="form-control" type="text" data-role="tagsinput" name="tags">
</div>


                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Cadastrar') }}
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
@section('personalscript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

</script>

@endsection
</x-app-layout>
