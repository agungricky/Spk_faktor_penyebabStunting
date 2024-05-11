<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Spk Penyebab Stunting</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('/public/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/plugins/uplot/uPlot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/Css_custom/style.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <header>
        {{-- @include('website.main.loading_screen') --}}
        @include('website.main.header')
        @include('website.main.aside')
    </header>

    <body>
        @yield('content')
    </body>
    <footer>
        @include('website.main.footer')
    </footer>

    <script src="{{ asset('/public/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('/public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('/public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('/public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('/public/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('/public/dist/js/demo.js') }}"></script>
    <script src="{{ asset('/public/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/uplot/uPlot.iife.min.js') }}"></script>

    <script src="{{ url('https://kit.fontawesome.com/5b3710b119.js') }}" crossorigin="anonymous"></script>
</body>

</html>
