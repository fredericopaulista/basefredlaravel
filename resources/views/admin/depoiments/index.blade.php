<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Depoimentos') }}
        </h2>
        <div class="flex items-center justify-end ">

            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4"
                href="{{ route('depoimentos.create') }}">
                {{ __('Cadastrar Depoimentos') }}
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4">

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Depoimento</th>
                            <th></th>
                            <th class="relative px-6 py-3 col-span-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($depoiments as $depoiment)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $depoiment->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><img width="70%" height="70%" src="{{ $depoiment->getFirstMediaUrl('depoiments', 'thumb') }}"></td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $depoiment->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{!! $depoiment->description !!}</td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>

                                <td><a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4"
                                        href="{{ route('depoimentos.edit', $depoiment->id) }}">Editar</a>

                                </td>
                                <td> <form method="post" action="{{ route('depoimentos.destroy', $depoiment->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">Apagar</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>
        </div>
    </div>
</x-app-layout>
