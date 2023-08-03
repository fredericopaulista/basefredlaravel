<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('tags.update', $tag->id ) }}" >
                    @csrf
                    @method('put')

                    <div class="mt-4 px-4">
                        <x-label for="name" value="{{ __('Nome') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$tag->name"
                            required  />
                    </div>

                    <div class="mt-4 px-4">
                        <x-label for="services" value="{{ __('Serviços') }}" />
                        @foreach($services as $service)
                            <input
                                type="checkbox"
                                name="services[]"
                                value="{{ $service->id }}"
                                @if (in_array($service->id, $tag->services->pluck('id')->toArray()))
                                    checked
                                @endif />
                            {{ $service->name }}
                            <br />
                        @endforeach
                    </div>

                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Atualizar') }}
                    </x-button>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
