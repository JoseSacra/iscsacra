<!DOCTYPE html>
<html class="scroll-smooth overflow-x-hidden dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ISC SACRA') }}</title>
        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
        
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />        
        <!-- Nucleo Icons -->
        <link rel="stylesheet" href="./css/dashboardcss/nucleo-icons.css" />
        <link rel="stylesheet" href="./css/dashboardcss/nucleo-svg.css">
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">        
        <!-- Styles -->
        <link id="pagestyle" rel="stylesheet" href="./css/dashboardcss/material-dashboard.css?v=3.0.4" />
  {{--       <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Styles -->
        @livewireStyles --}}
    </head>
    {{-- <body class="font-sans antialiased"> --}}
    <body class="font-sans antialiased">
            {{-- <x-banner /> --}}

            <!-- Page Heading -->
            @if (isset($header))
                {{ $header }}
            @endif

            <!-- Page Content -->
                {{ $slot }}
        </div>
 
        {{--         @stack('modals')

                @livewireScripts
        --}}        
        <script src="/js/dashboardjs/core/popper.min.js"></script>
        <script src="/js/dashboardjs/core/bootstrap.min.js"></script>
        <script src="/js/dashboardjs/plugins/perfect-scrollbar.min.js"></script>
        <script src="/js/dashboardjs/plugins/smooth-scrollbar.min.js"></script>
        @stack('js')
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }

        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="/js/dashboardjs/material-dashboard.min.js?v=3.0.0"></script>



    </body>
</html>
