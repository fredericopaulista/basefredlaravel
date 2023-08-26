@extends('admin.layouts.app')
@section('content')
    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">


                <!-- PAGE CONTENT -->

                <section class="max-w-6xl  mx-auto px-4">
                    <div class="row">
                        <h1 class="my-2">Serviços</h1>
                        <a class="btn btn-success " href="{{ route('servicos.create') }}">
                            {{ __('Cadastrar Serviço') }}
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-4">
                                <!-- This is an example component -->
                                <div class="relative text-gray-darker hidden lg:flex flex-grow">
                                    <input type="search" name="search" placeholder=" Pesquisar " class="pl-12">
                                    <button type="submit" class="absolute left-0 top-0 mt-3 ml-4 hover:text-primary">
                                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                            x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                            style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                            width="512px" height="512px">
                                            <path
                                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="overflow-x-scroll lg:overflow-hidden">
                                <table class="table table-list w-full table-striped-primary">
                                    <thead>
                                        <tr>

                                            <th>Imagem</th>
                                            <th>Serviços</th>
                                            <th></th>
                                            <th></th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="bg-primary text-white w-12 h-12 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl mx-4">
                                                        <img width="70%" height="70%"
                                                            src="{{ $service->getFirstMediaUrl('services', 'thumb') }}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('servicos.edit', $service->id) }}"
                                                        class="font-bold hover:text-primary text-sm">
                                                        {{ $service->name }}</a>


                                                </td>
                                                <td class="">
                                                    <div class="flex items-center">


                                                    </div>
                                                </td>
                                                <td>

                                                </td>


                                                <td><a class="btn btn-success"
                                                        href="{{ route('servicos.edit', $service->id) }}"><i
                                                            class="material-icons mx-2"> edit</i>Editar</a>

                                                </td>
                                                <td>
                                                    <form method="post"
                                                        action="{{ route('servicos.destroy', $service->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="material-icons mx-2">delete</i>Apagar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>



            </div>
        </div>
    </div>
@endsection
