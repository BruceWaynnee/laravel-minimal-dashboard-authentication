<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Heading Content Block -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- page title -->
        <title>
            @section('title', 'Wayne Chat Application')
        </title>

        <!-- font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/fontawesome.css') }}">
        <!-- google fonts -->
        <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/googlefonts.css') }}">        
        <!-- bootstrap 4 stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/dashboard/libraries/bootstrap4.css') }}">
        <!-- custom stylesheet -->
        @yield('custom_stylesheet')

        <!--  -->
    </head>
    <!-- Body Content Block -->
    <body id="page-top">
    <!-- BEGIN:: Main Dashboard Page Content Wrapper -->
        <div id="wrapper">
            <!-- dashboard sidebar page -->
            @include('dashboard.partials.sidebar')

            <!-- dashboard content page -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- body content including ( navbar and main body) -->
                <div id="content">
                    <!-- dashboard navbar content -->
                    @include('dashboard.partials.navbar')

                    <!-- flash message -->
                    @include('flashmessage.index')

                    <!-- dashboard body content -->
                    @yield('content')

                </div>
                <!-- footer content including ( footer only ) -->
                <footer class="sticky-footer bg-white">
                    @include('dashboard.partials.footer')
                </footer>
                <!--  -->
            </div>
            <!--  -->
        </div>
    <!-- END::   Main Dashboard Page Content Wrapper -->

    <!-- BEGIN:: Scroll Back To The Top Of Page Button -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    <!-- END::   Scroll Back To The Top Of Page Button -->

    <!-- BEGIN:: custom script -->
        <!-- vendors script -->
        <script src="{{ asset('js/dashboard/vendors/jquery.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/chart.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/vendors/font-awesome.min.js') }}"></script>
        
        <!-- custom script -->
        <script src="{{ asset('js/dashboard/libraries/bootstrap4.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/libraries/chart-area-demo.js') }}"></script>
        <script src="{{ asset('js/dashboard/libraries/chart-pie-demo.js') }}"></script> --}}
                
        <!-- custom script -->
        @yield('custom_script')

    <!-- END::   custom script -->

    </body>
</html>
