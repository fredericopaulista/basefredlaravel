@extends('admin.layouts.app')
@section('content')
    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">


                <!-- PAGE CONTENT -->

                <section class="max-w-6xl  mx-auto px-4">
                    <div class="row">
                        <h1 class="my-2">SEO Manual</h1>
                        <a class="btn btn-success " href="{{ route('seomanual.create') }}">
                            {{ __('Cadastrar SEO Manual') }}
                        </a>
                    </div>




                    <div>
                        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                            <div class="block mb-1">
                                <a href="{{ route('seomanual.create') }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Cadastrar
                                    SEO Manual</a>
                            </div>
                            <div class="flex flex-col">
                                <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="table table-list w-full table-striped-primary">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="50"
                                                            class="px-6 py-1 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            ID
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-1 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Link
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-1 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Título
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-1 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                                        </th>
                                                        <th scope="col" width="200"
                                                            class="px-6 py-1 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Ações
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @foreach ($seomanual as $seo)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                {{ $seo->id }}
                                                            </td>

                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                {{ $seo->seo_url }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                {{ $seo->seo_title }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                                {{-- @dd($seo->services());
                                                                @foreach ($seo->serviceseos as $service)
                                                                    @dd($seo->service);
                                                                    {{ $service->name }} /
                                                                @endforeach --}}

                                                            </td>

                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                                <a href="{{ route('seomanual.edit', $seo->id) }}"
                                                                    class="btn btn-success"><i class="material-icons mx-2">
                                                                        edit</i>Editar</a>
                                                                <form class="inline-block"  action="{{ route('seomanual.destroy', $seo->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger"><i class="material-icons mx-2">delete</i>Apagar</button>

                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
