<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>@yield('title')</title>
        @yield('css')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
