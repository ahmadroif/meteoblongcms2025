<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', 'Mete Oblong')</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>