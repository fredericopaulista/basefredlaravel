<x-app-layout>
    @section('personalcss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />
        <style>
            .tagify {
                height: 30vh !important;
                line-height: 30vh !important;
            }
        </style>
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('servicos.update', $service->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
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
    <input name="tags" id="tags" value="{{old('tags')}}" class="form-control">
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
 <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
 <script>


     // The DOM element you wish to replace with Tagify
     var input = document.querySelector('input[name=tags]');

     // initialize Tagify on the above input node reference
     new Tagify(input)

     new Tagify(input)

         var myEditor;

         ClassicEditor.create( document.querySelector( '#editor' ), {

             licenseKey: '',

             link: {
                     decorators: {
                         toggleDownloadable: {
                             mode: 'manual',
                             label: 'Downloadable',
                             attributes: {
                                 download: 'file'
                             }
                         },
                         openInNewTab: {
                             mode: 'manual',
                             label: 'Open in a new tab',
                             defaultValue: true,			// This option will be selected by default.
                             attributes: {
                                 target: '_blank',
                                 rel: 'noopener noreferrer'
                             }
                         }
                     }
                 },
             htmlEmbed: {
                 showPreviews: true,
             }


         } )
         .then( editor => {
             window.editor = editor;
             myEditor = editor;
             // Set a custom container for the toolbar.
            //  document.querySelector( '.document-editor__toolbar' ).appendChild( editor.ui.view.toolbar.element );
           //   document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
         } )
         .catch( error => {
             console.error( 'Oops, something went wrong!' );
             console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
             console.warn( 'Build id: 9i9i9hewfymf-ak8ig74wt7az' );
             console.error( error );
         } );

         const video = document.getElementById('video');
         video.onblur = function onblur(e){
         var value = e.currentTarget.value;
         console.log (value);
         var url = '';
         if (validURL(value)) {
         url = new URL(value);
         if (url.searchParams.has("v")) {
         value = url.searchParams.get("v");
         }
         video.value = value;
         }
     }

         function validURL(str) {
             var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
             '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
             '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
             '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
             '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
             '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
             return !!pattern.test(str);
         }

 </script>
                @endpush
            </div>
        </div>
    </div>

</x-app-layout>
