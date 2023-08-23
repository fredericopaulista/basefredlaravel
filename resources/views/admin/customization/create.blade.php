@extends('admin.layouts.app')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css"
        rel="stylesheet">

@endsection
@section('content')
    <div class="mdk-header-layout__content">

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">


                <!-- PAGE CONTENT -->

                <section class="max-w-6xl  mx-auto px-4">

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <x-validation-errors class="mb-4" />
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                                <form method="POST" action="{{ route('customiza.store') }}" >
                                    @csrf
                                    <div class="card">
                                        <div class="lg:flex">
                                            <div class="lg:w-2/6 p-8">
                                                <p><strong class="headings-color">Customizar Site</strong></p>

                                            </div>
                                            <div class="lg:w-4/6 card-dark p-8">
                                                <div class="mt-3">
                                                    <span class="form-label"></span>
                                                    <div class="mt-2">
                                                        <label for="exampleColorInput" class="form-label">Cor do Background do Header</label>
                                                        <input type="text" class="form-control form-control-color" name="back_headcolor"
                                                            id="exampleColorInput" 
                                                            title="Cor do Background do Header">

                                                    </div>
                                                </div>
                                                <div class="mt-8">
                                                    <span class="form-label"></span>
                                                    <div class="mt-2">
                                                        <label for="exampleColorInput" class="form-label">Cor do Texto do Header</label>
                                                        <input type="color" class="form-control form-control-color" name="header_textcolor"
                                                            id="exampleColorInput" value="#563d7c"
                                                            title="Cor do Background do Header">

                                                    </div>
                                                </div>


                                                <button class="btn btn-success mb-6 mt-6 ml-8" type="submit">
                                                    {{ __('Cadastrar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
@section('scriptsfooter')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js">
    </script>
    <script>
        $('.colorpicker').colorpicker();
    </script>
@stop
@endsection
