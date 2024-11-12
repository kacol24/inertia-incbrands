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

    <title>@yield('site_title', 'INDOGO CORP. | Inc Brands')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5faa52">
    <meta name="msapplication-TileColor" content="#5faa52">
    <meta name="theme-color" content="#5faa52">

    <script src="https://cdn.jsdelivr.net/npm/lozad@1.16.0/dist/lozad.min.js" async></script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/combine/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css,npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.css">
    @stack('before_styles')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('after_styles')
    <style>
        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<div class="flex-shrink-0">
    <header>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo@1x.png', ! config('app.debug')) }}" alt="logo Inc Brands" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-image: none;width: 1em;height: 1em;">
                        {{-- @formatter:off --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#5faa52" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                        {{-- @formatter:on --}}
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => request()->routeIs('home')])
                               href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => request()->routeIs('static.babygo')])
                               href="{{ route('static.babygo') }}">
                                BabyGoinc
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => request()->routeIs('static.pureco')])
                               href="{{ route('static.pureco') }}">
                                Pureco
                            </a>
                        </li>
                        <li class="nav-item">
                            <a @class(['nav-link', 'active' => request()->routeIs('static.nuudo')])
                               href="{{ route('static.nuudo') }}">
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
    <main class="mb-5">
        @yield('content')
    </main>
</div>
<footer class="site-footer mt-auto py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md mb-5 mb-md-0">
                <a href="https://wa.me/6289676717676" target="_blank" style="display: flex;margin-bottom: 20px;align-items: center;">
                    <div style="width: 30px; margin-right: 16px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </div>
                    <div>
                        <strong>Customer Service</strong><br>+62 896-7671-7676
                    </div>
                </a>

                <a href="https://wa.me/628983915105" target="_blank" style="display: flex;margin-bottom: 20px; align-items: center;">
                    <div style="width: 30px; margin-right: 16px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                    </div>
                    <div>
                        <strong>Reseller Inquiries</strong><br>+62 89-8391-5105
                    </div>
                </a>

                <a href="mailto:hello@inc-brands.co" target="_blank" style="display: flex;margin-bottom: 20px;align-items:center">
                    <div style="width: 30px; margin-right: 16px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/></svg>
                    </div>
                    <div>
                        <strong>Inquiry</strong>
                    </div>
                </a>

                <div style="margin-bottom: 20px">
                    For Sponsorship Inquiry:
                    <br>
                    <a href="mailto:sponsorship@inc-brands.co"><strong>sponsorship@inc-brands.co</strong></a>
                </div>

                <div style="margin-bottom: 20px">
                    For Reseller Opportunity:
                    <br>
                    <a href="mailto:reseller@inc-brands.co"><strong>reseller@inc-brands.co</strong></a>
                </div>

                <div>
                    For B2B Opportunity:
                    <br>
                    <a href="mailto:commerce@inc-brands.co"><strong>commerce@inc-brands.co</strong></a>
                </div>
            </div>
            <div class="col-md-9 col-8">
                <div class="row">
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="text-center">
                            <div class="mb-1">
                                <img src="{{ asset('images/indogo-logo-footer-150x100.png', ! config('app.debug')) }}"
                                     alt="logo inc brands" class="img-fluid">
                            </div>
                            We offer premium products for baby, kids, and family
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="text-center">
                            <div class="mb-1">
                                <img src="{{ asset('images/babygo-logo-footer-150x100.png', ! config('app.debug')) }}"
                                     alt="logo babygo" class="img-fluid">
                            </div>
                            Making parents life easier with fashionable diaper & cooler bags
                        </div>
                    </div>
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="text-center">
                            <div class="mb-1">
                                <img src="{{ asset('images/pureco-logo-footer-150x100.png', ! config('app.debug')) }}"
                                     alt="logo inc brands" class="img-fluid">
                            </div>
                            Plant based home cleaning appliances, choose SAFE choose PURECO
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="mb-1">
                                <img src="{{ asset('images/logo-nuudo.png', ! config('app.debug')) }}"
                                     alt="logo inc brands" class="img-fluid">
                            </div>
                            Where natural goodness meet everyday care
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script
    src="https://cdn.jsdelivr.net/combine/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js,npm/aos@2.3.4"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.js"></script>
@stack('before_scripts')
{{--<script src="{{ mix('/js/app.js') }}"></script>--}}
<script>
    (lozad()).observe();

    AOS.init();
</script>
@stack('after_scripts')
<div
    style='display: flex; align-items:center;justify-content:center;width:65px;height:65px;background-color: #25d366; border-radius: 50%; position:fixed;bottom: 25px;right: 25px;z-index: 9010'>
    <a href='https://wa.me/6289676717676' target='_blank' class='text-decoration-none' style='color: #ADCC3E'>
        <svg style="width: 50px; height: 50px" xmlns='http://www.w3.org/2000/svg' viewbox='0 0 448 512'>
            <path fill="#ffffff"
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
    </a></div>
</body>
</html>
