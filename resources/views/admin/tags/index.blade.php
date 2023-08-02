<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Tags') }}
        </h2>
        <div class="flex items-center justify-end ">

            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4"
                href="{{ route('tags.create') }}">
                {{ __('Cadastrar Tag') }}
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4">

                <table>
                    <thead>
                        <tr>
                            <th class="relative px-6 py-3 col-span-2">ID</th>
                            <th class="relative px-6 py-3 col-span-2"></th>
                            <th class="relative px-6 py-3 col-span-2">Tags</th>
                            <th class="relative px-6 py-3 col-span-2"></th>
                            <th class="relative px-6 py-3 col-span-2"></th>
                            <th class="relative px-6 py-3 col-span-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $tag->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $tag->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>

                                <td><a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4"
                                        href="{{ route('tags.edit', $tag->id) }}">Editar</a>

                                </td>
                                <td> <form method="post" action="{{ route('tags.destroy', $tag->id) }}">
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
