@extends('admin.layouts.app')
@section('content')
<div class="mdk-header-layout__content">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
      <div class="mdk-drawer-layout__content page">


        <!-- PAGE CONTENT -->

<section class="max-w-6xl  mx-auto px-4">
    <div class="row">
        <h1 class="my-2">Páginas</h1>
        <a class="btn btn-success "
                        href="{{ route('paginas.create') }}">
                        {{ __('Nova Página') }}
                    </a>
    </div>

  <!-- COL -->
  {{-- <div class="card">
    <div class="overflow-x-scroll lg:overflow-hidden">
    <table class="table table-sm table-border rounded">
      <thead>
        <tr>
          <th></th>
          <th class="text-center">#</th>
          <th>Client</th>
          <th>Date</th>
          <th>Message</th>
          <th>Status</th>
          <th class="text-right">Amount</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      <tr>
        <td class="">
          <input type="checkbox" class="w-4 h-4 m-1 inline-flex">
        </td>
        <td class="text-center">
          <i class="material-icons text-muted" style="font-size: 20px; vertical-align:middle">email</i>
        </td>
        <td>
          <a href="#" class="flex items-center text-primary">
            <div class="avatar w-6 mr-2">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar" class="rounded-full">
            </div>
            Sherri J. Cardenas
          </a>
          </td>
        <td class="text-sm">3 days ago</td>
        <td class=" text-gray-dark">Improve spacings on Projects page</td>
        <td class="">
          <span class="badge badge-soft-success rounded">
            PAID
          </span>
        </td>
        <td class="text-right font-bold">
          $612
        </td>
        <td class="text-right">
          <a href="#" class="btn btn-outline-primary btn-sm">Action </a>
        </td>

      </tr>

      <tr>
        <td class="">
          <input type="checkbox" class="w-4 h-4 m-1 inline-flex">
        </td>
        <td class="text-center">
          <i class="material-icons text-muted" style="font-size: 20px; vertical-align:middle">monetization_on</i>
        </td>
        <td>
          <a href="#" class="flex items-center text-primary">
            <div class="avatar w-6 mr-2">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar" class="rounded-full">
            </div>
            Joseph S. Ferland
          </a>
          </td>
        <td class="text-sm">2 days ago</td>
        <td class=" text-gray-dark">You unlocked a new Badge</td>
        <td class="">
          <span class="badge badge-soft-success rounded">
            PAID
          </span>
        </td>
        <td class="text-right font-bold">
          $244
        </td>
        <td class="text-right">
          <a href="#" class="btn btn-outline-primary btn-sm">Action </a>
        </td>

      </tr>

      <tr>
        <td class="">
          <input type="checkbox" class="w-4 h-4 m-1 inline-flex">
        </td>
        <td class="text-center">
          <i class="material-icons text-muted" style="font-size: 20px; vertical-align:middle">monetization_on</i>
        </td>
        <td>
          <a href="#" class="flex items-center text-primary">
            <div class="avatar w-6 mr-2">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar" class="rounded-full">
            </div>
            Bryan K. Davis
          </a>
          </td>
        <td class="text-sm">1 day ago</td>
        <td class=" text-gray-dark">Meeting on Friday</td>
        <td class="">
          <span class="badge badge-soft-success rounded">
            PAID
          </span>
        </td>
        <td class="text-right font-bold">
          $664
        </td>
        <td class="text-right">
          <a href="#" class="btn btn-outline-primary btn-sm">Action </a>
        </td>

      </tr>

      <tr>
        <td class="">
          <input type="checkbox" class="w-4 h-4 m-1 inline-flex">
        </td>
        <td class="text-center">
          <i class="material-icons text-muted" style="font-size: 20px; vertical-align:middle">description</i>
        </td>
        <td>
          <a href="#" class="flex items-center text-primary">
            <div class="avatar w-6 mr-2">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Avatar" class="rounded-full">
            </div>
            Kaci M. Langston
          </a>
          </td>
        <td class="text-sm">just now</td>
        <td class=" text-gray-dark">Design a new Brochure</td>
        <td class="">
          <span class="badge badge-soft-success rounded">
            PAID
          </span>
        </td>
        <td class="text-right font-bold">
          $631
        </td>
        <td class="text-right">
          <a href="#" class="btn btn-outline-primary btn-sm">Action </a>
        </td>

      </tr>

      </tbody>
    </table>
    </div>
  </div> --}}

  <div class="card">
    <div class="card-body">
    <div class="pb-4">
       <!-- This is an example component -->
      <div class="relative text-gray-darker hidden lg:flex flex-grow">
          <input type="search" name="search" placeholder=" Pesquisar " class="pl-12">
          <button type="submit" class="absolute left-0 top-0 mt-3 ml-4 hover:text-primary">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
              viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
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
          <th>Página</th>
          <th></th>
          <th></th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
@foreach ($pages as  $page)


          <tr>
            <td>
              <div class="bg-primary text-white w-12 h-12 rounded-full inline-flex items-center align-middle justify-center font-bold text-4xl mx-4">
                <img width="70%" height="70%" src="{{ $page->getFirstMediaUrl('pages', 'thumb') }}">
              </div>
            </td>
            <td>
                <a href="{{ route('paginas.edit', $page->id) }}" class="font-bold hover:text-primary text-sm">  {{ $page->title }}</a>


            </td>
            <td class="">
              <div class="flex items-center">

              
              </div>
            </td>
            <td>
              <img src="../public/vendor/svg-country-flags/png250px/us.png" alt="" class="rounded-sm w-6">
            </td>


            <td><a class="btn btn-success"
                href="{{ route('paginas.edit', $page->id) }}"><i class="material-icons mx-2" > edit</i>Editar</a>

        </td>
        <td> <form method="post" action="{{ route('paginas.destroy', $page->id) }}">
            @csrf
            @method('delete')
            <button type="submit"
                class="btn btn-danger"><i class="material-icons mx-2" >delete</i>Apagar</button>
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

@endsection
