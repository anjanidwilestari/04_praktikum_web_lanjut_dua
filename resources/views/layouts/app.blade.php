
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Educastudio Modify @yield('tittle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
        <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{ asset('style/css/font-awesome.min.css') }}">
        <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/css/normalize.min.css') }}">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('style/css/templatemo-style.css') }}">
    <script src="{{ asset('style/js/vendor/modernizr-2.6.2.min.js') }}"></script>
</head>

<body>
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
    
	<script src="{{ asset('style/js/vendor/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins.js') }}"></script>
    <script src="{{ asset('style/js/main.js') }}"></script>    
    
</body>
</html>