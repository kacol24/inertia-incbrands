<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">

    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @stack('before_styles')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('after_styles')
</head>
<body class="d-flex flex-column h-100">
<div class="flex-shrink-0">
    <header>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo@1x.png') }}" alt="logo Inc Brands" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                BabyGoinc
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Pureco
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Nuudo
                            </a>
                        </li>
                        {{--                    <li class="nav-item dropdown">--}}
                        {{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
                        {{--                           aria-expanded="false">--}}
                        {{--                            Dropdown--}}
                        {{--                        </a>--}}
                        {{--                        <ul class="dropdown-menu">--}}
                        {{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
                        {{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
                        {{--                            <li>--}}
                        {{--                                <hr class="dropdown-divider">--}}
                        {{--                            </li>--}}
                        {{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                        {{--                        </ul>--}}
                        {{--                    </li>--}}
                        {{--                    <li class="nav-item">--}}
                        {{--                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>--}}
                        {{--                    </li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</div>
<footer class="site-footer mt-auto py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-5 mb-md-0 col-8">
                <div class="text-center">
                    <div class="mb-1">
                        <img src="https://inc-brands.co/wp-content/uploads/2019/07/indogo-logo-footer-150x100.png"
                             alt="logo inc brands" class="img-fluid">
                    </div>
                    We offer premium products for baby, kids, and family
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0 col-8">
                <div class="text-center">
                    <div class="mb-1">
                        <img src="https://inc-brands.co/wp-content/uploads/2019/07/babygo-logo-footer-150x100.png"
                             alt="logo babygo" class="img-fluid">
                    </div>
                    Making parents life easier with fashionable diaper & cooler bags
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0 col-8">
                <div class="text-center">
                    <div class="mb-1">
                        <img src="https://inc-brands.co/wp-content/uploads/2019/07/pureco-logo-footer-150x100.png"
                             alt="logo inc brands" class="img-fluid">
                    </div>
                    Plant based home cleaning appliances, choose SAFE choose PURECO
                </div>
            </div>
            <div class="col-md-3 mb-5 mb-md-0 col-8">
                <div class="text-center">
                    <div class="mb-1">
                        <img src="{{ asset('images/logo-nuudo.png') }}"
                             alt="logo inc brands" class="img-fluid">
                    </div>
                    Where natural goodness meet everyday care
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
@stack('before_scripts')
<script src="{{ mix('/js/app.js') }}"></script>
@stack('after_scripts')
</body>
</html>
