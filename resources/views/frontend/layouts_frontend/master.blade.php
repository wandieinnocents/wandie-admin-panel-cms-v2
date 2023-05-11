<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

</head>

<body>


    @include('frontend.includes_frontend.header_frontend')

    {{-- homepage --}}
    @yield('content')
    @include('frontend.includes_frontend.footer')



<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>



</body>


</html>
