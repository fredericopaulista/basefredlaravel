<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="frontted">
    <title>Painel Administrativo</title>

    <!-- BEGIN: CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
    <link type="text/css" href="{{ asset('admin/assets/css/vendor-materialicons.css') }}" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('admin/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet">


    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('admin/assets/vendor/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="{{ asset('admin/assets/css/vendor-flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/assets/css/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
{{-- CKEditor CDN --}}


@yield('css')
    <!-- Global site tag (gtag.js) - Google Analytics -->


</head>

<body class="antialiased bg-gray-light layout-default">


    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">
                <!-- NAVBAR -->

                @include('admin.layouts.header')

                <!-- // END HEADER -->
            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">


                    <!-- PAGE CONTENT -->

                    <!-- <section class="max-w-6xl  mx-auto px-8 my-8"> -->
                    <section class="px-8 my-8">

                        @yield('content')





                        <!-- // END PAGE CONTENT -->


                </div>
                <!-- // END drawer-layout__content -->

                @include('admin.layouts.sidebar')
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <script src="{{ asset('admin/assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/dom-factory/dist/dom-factory.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/material-design-kit/dist/material-design-kit.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.js') }}"></script>


    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <!-- // END FOOTER -->



    <!-- Chart.js -->
    <script src="{{ asset('admin/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/chartjs-rounded-bar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/charts.js') }}"></script>

    <!-- Vector Maps -->
    <script src="{{ asset('admin/assets/vendor/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/vector-maps.js') }}"></script>

    <!-- Flatpickr -->
    <script src="{{ asset('admin/assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/flatpickr.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    @yield('scriptsfooter')
</body>

</html>
