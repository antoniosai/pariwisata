<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/lumen.min.css') }}">

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/style.js') }}"></script>
    @yield('custom_styles')

</head>
<body>
    @include('templates.frontend.header')
    
    @yield('content')

    @include('templates.frontend.footer')

    @yield('custom_scripts')
</body>
</html>