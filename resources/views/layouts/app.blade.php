<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    data-layout="vertical" 
    data-topbar="light" 
    data-sidebar="dark" 
    data-sidebar-size="lg"
    data-sidebar-image="none" 
    data-preloader="disable" 
    data-theme="default" 
    data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>DentalFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistema de Gestión Dental" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/assets/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/assets/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/assets/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/assets/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/assets/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/assets/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/assets/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/assets/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/assets/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/assets/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/assets/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css" />

    @yield('styles')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ========== Header Top Menu ========== -->
        @include('layouts.top-navigation')
        <!-- ========== Fin Header Top Menu ========== -->
        
        <!-- ========== App Menu ========== -->
        @include('layouts.navigation')
        <!-- ========== Fin App Menu ========== -->
        
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    @yield('scripts')
    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script>
        let fechaActual = new Date(); // Fecha actual
        const diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        function actualizarCalendario() {
            document.querySelector(".calendar-day").textContent = diasSemana[fechaActual.getDay()];
            document.querySelector(".calendar-date").textContent = fechaActual.getDate();
            document.querySelector(".calendar-month").textContent = `${meses[fechaActual.getMonth()]} ${fechaActual.getFullYear()}`;
        }

        function cambiarFecha(dias) {
            fechaActual.setDate(fechaActual.getDate() + dias);
            actualizarCalendario();
        }

        actualizarCalendario(); // Mostrar la fecha actual al cargar la página
    </script>
    
</body>

</html>