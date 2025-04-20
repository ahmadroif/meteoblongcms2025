<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mete Oblong')</title>

    <!-- Fonts dan Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">

    <!-- CSS Lokal -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- JS Lokal -->
    <script src="{{ asset('assets/js/require.min.js') }}"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/plugin.js') }}"></script>
</body>
</html>
