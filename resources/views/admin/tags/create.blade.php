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



                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Cadastrar') }}
                    </x-button>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
