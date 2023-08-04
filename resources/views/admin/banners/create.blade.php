<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4 px-4">
                        <x-label for="image" value="{{ __('Banner') }}" />
                        <x-input id="image" class="block mt-1 w-full" type="file" name="image"  />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="title" value="{{ __('OG Title') }}" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                            required placeholder="Título para SEO" />
                    </div>


                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Cadastrar') }}
                    </x-button>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
