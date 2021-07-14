<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#FFFFFF" />
    <meta name="author" content="Ahmad Chebbo">
    <meta name="keywords" content="{{ Config::get('settings.seo_meta_title') }}">
    <meta name="description" content="{{ Config::get('settings.seo_meta_description') }}">
    <meta name="keywords" content="{{ Config::get('settings.seo_meta_keywords') }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset(Config::get('settings.site_favicon')) }}" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Manage/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ asset('Manage/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Manage/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Manage/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Manage/vendor/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Manage/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('Manage/css/argon.css?v=1.2.0')}}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Manage/css/custom.css')}}" type="text/css">
    <title>{{ Config::get('settings.site_name') }} - {{ $subTitle }}</title>
    <style>
        :root {
            --primary: {{ Config::get('settings.dashboard_color') }};
        }
    </style>
</head>
<body class="text-gray-800 antialiased">

<div id="app">
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('Manage.includes.sidebar')
    @yield('content')

</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('Manage/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{ asset('Manage/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{ asset('Manage/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{ asset('Manage/vendor/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('Manage/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('Manage/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}} "></script>
<script src="{{ asset('Manage/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>

<!-- Argon JS -->
<script src="{{ asset('Manage/js/argon.js?v=1.2.0')}}"></script>

@stack('scripts')

</body>

</html>
