<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon-->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/scripts.js', 'resources/js/app.js'])
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome')  }}">
                <img src="{{ asset('images/logos/blue-eco.png') }}" alt="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">{{ (trans('navigation.about')) }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">{{ (trans('navigation.products')) }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('project.index') }}">{{ (trans('navigation.projects')) }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">{{ (trans('navigation.contact')) }}</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Ecological Block System 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-light btn-social mx-2" href="https://www.facebook.com/ecoblocksystems?mibextid=LQQJ4d" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mx-2" href="https://www.linkedin.com/company/ecological-block-systems/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="{{ route('privacy') }}">Políticas de Privacidad</a>
                    <a class="link-dark text-decoration-none" href="{{ route('terms') }}">Términos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
