<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/auth.css') }}">
        @yield('css')
    </head>
    <body>
        @section('navbar')
            <nav class="fixed-top d-flex">
                <a href="{{ url('/') }}" class="w-100">
                <img class="w-100" src="{{ asset('/mailing/header-mail1.png') }}" alt="">
                </a>
                <img class="navbar-desktop" src="{{ asset('/mailing/header-mail2.png') }}" alt="">
            </nav>
        @show
        <div class="container h-100">
            @yield('content')
        </div>
        <footer class="d-flex bg-black w-100">
            <img class="m-auto footer-img" src="{{ asset('/mailing/footer-mail1.png') }}" alt="">
        </footer>
    </body>
</html>
