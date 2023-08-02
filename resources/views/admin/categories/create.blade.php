<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('categorias.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 px-4">
                        @livewire('form-checkbox-element')
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
</x-app-layout>
