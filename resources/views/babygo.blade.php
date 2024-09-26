@extends('layouts.master')

@push('after_styles')
    <style>
        :root {
            --brand-color: #068046;
            --brand-color-light: rgb(7.1417910448, 152.3582089552, 83.3208955224);
        }
    </style>
@endpush

@section('content')
    <section id="hero">
        @php($banner = 'images/banners/banner-hero-babygo.jpeg')
        <img src="{{ Croppa::url($banner, width: 100, options: ['filters' => 'blur', 'quality' => 50]) }}"
             data-src="{{ asset($banner) }}" alt="banner hero babygo"
             class="img-fluid w-100 lozad">
    </section>
    <section id="intro">
        <div class="container">
            <hr style="color: #4c4c4c">
            <div class="text-center text-uppercase font:gotham-rounded fs-2 fw-medium mx-auto mt-5"
                 style="color: #504f4f; max-width: 875px">
                BABYGO IS A COMPANY SPECIALIZED IN DIAPER BAGS, COOLER BAGS AND OTHER BABY GEAR ACCESSORIES. OUR
                PRODUCTS ARE DESIGNED AND EQUIPPED WITH SMART FEATURES THAT WILL <span
                    style="color: var(--brand-color)">MAKE PARENTS' LIFE EASIER</span>
            </div>
            <div class="mt-3 mb-5 text-center">
                <img src="{{ asset('images/illustration-1.png') }}" alt="" class="img-fluid">
            </div>
            <hr style="color: #4c4c4c">
        </div>
    </section>
    <section id="usage" class="mt-5">
        <div class="container">
            <h2 class="h1 font:gotham-rounded text-center mx-auto" style="color: var(--brand-color)">
                Designed to Ease Every Parent’s Life,<br class="d-none d-md-block">
                Discover Your Perfect Fit with babyGo’s Product
            </h2>
            <div class="mt-5">
                <div class="row justify-content-center"
                     style="--color-border: #ffa600; --color-text: #504f4f; --margin-text: -1rem;">
                    <div class="col-md-3 col-8">
                        <div class="d-flex align-items-center flex-column mb-3 mb-md-0"
                             data-aos="fade-down">
                            <div class="rounded-circle border"
                                 style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                <img src="{{ asset('images/babygo/Photo-2.jpeg') }}" alt=""
                                     class="img-fluid rounded-circle">
                            </div>
                            <div class="badge rounded-pill font:gotham-rounded fw-bold py-2 fs-3 w-75"
                                 style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                Diaper Bag
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-8">
                        <div class="d-flex align-items-center flex-column mb-3 mb-md-0"
                             data-aos="fade-down">
                            <div class="rounded-circle border"
                                 style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                <img src="{{ asset('images/babygo/Photo-3.jpeg') }}" alt=""
                                     class="img-fluid rounded-circle">
                            </div>
                            <div class="badge rounded-pill font:gotham-rounded fw-bold py-2 fs-3 w-75"
                                 style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                Cooler Bag
                            </div>
                        </div>
                    </div>
                    <div class="w-100 my-3 d-none d-md-block"></div>
                    <div class="col-md-3 col-8">
                        <div class="d-flex align-items-center flex-column mb-3 mb-md-0"
                             data-aos="fade-down">
                            <div class="rounded-circle border"
                                 style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                <img src="{{ asset('images/babygo/Photo-4.jpeg') }}" alt=""
                                     class="img-fluid rounded-circle">
                            </div>
                            <div class="badge rounded-pill font:gotham-rounded fw-bold py-2 fs-3 w-75"
                                 style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                Organizer
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-8">
                        <div class="d-flex align-items-center flex-column mb-3 mb-md-0"
                             data-aos="fade-down">
                            <div class="rounded-circle border"
                                 style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                <img src="{{ asset('images/babygo/Photo-5.jpeg') }}" alt=""
                                     class="img-fluid rounded-circle">
                            </div>
                            <div class="badge rounded-pill font:gotham-rounded fw-bold py-2 fs-3 w-75"
                                 style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                Accessories
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-8">
                        <div class="d-flex align-items-center flex-column mb-3 mb-md-0"
                             data-aos="fade-down">
                            <div class="rounded-circle border"
                                 style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                <img src="{{ asset('images/babygo/Photo-6.jpeg') }}" alt=""
                                     class="img-fluid rounded-circle">
                            </div>
                            <div class="badge rounded-pill font:gotham-rounded fw-bold py-2 fs-3 w-75"
                                 style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                Hooks
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefits" class="mt-5 pt-md-5">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="rounded-pill text-white font:gotham-rounded fw-bold h2 d-inline-block px-4 py-2 lh-1"
                    style="background-color:var(--brand-color);">
                    babyGo Top 3 Benefits
                </h2>
            </div>
            <div class="row justify-content-between fs-5 font:gotham-rounded text-center overflow-hidden">
                <div class="col-md-3" data-aos="fade-right">
                    <h4 class="rounded-pill fw-bold mb-0 px-3 py-3 text-white text-uppercase font:gotham-rounded lh-1 d-inline-block position-relative"
                        style="background-color:#4f4e4e;font-size: 24px;">
                        <img src="{{ asset('images/icons/Icon-1.png') }}" alt=""
                             class="img-fluid position-absolute top-0 start-0"
                             style="width: 56px;">
                        <span class="ms-5">
                            Strong
                        </span>
                    </h4>
                    <div class="mt-3">
                        Not only it looks great for outing, babyGo’s diaper bag is also <span
                            style="color: var(--brand-color)">well-built and study</span>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mt-md-0" data-aos="fade-down">
                    <h4 class="rounded-pill fw-bold mb-0 px-3 py-3 text-white text-uppercase font:gotham-rounded lh-1 d-inline-block position-relative"
                        style="background-color:#4f4e4e;font-size: 24px;">
                        <img src="{{ asset('images/icons/Icon-2.png') }}" alt=""
                             class="img-fluid position-absolute top-0 start-0"
                             style="width: 56px;">
                        <span class="ms-5">Smart</span>
                    </h4>
                    <div class="mt-3">
                        Our goal is not only to create something that will compliment your style, but will also provide
                        the basic quality needed in order to <span style="color: var(--brand-color)">answer to your needs as parents</span>.
                        With babyGo, parents’ life
                        will be much easier.
                    </div>
                </div>
                <div class="col-md-3 mt-5 mt-md-0" data-aos="fade-left">
                    <h4 class="rounded-pill fw-bold mb-0 px-3 py-3 text-white text-uppercase font:gotham-rounded lh-1 d-inline-block position-relative"
                        style="background-color:#4f4e4e;font-size: 24px;">
                        <img src="{{ asset('images/icons/Icon-3.png') }}" alt=""
                             class="img-fluid position-absolute top-0 start-0"
                             style="width: 56px;">
                        <span class="ms-5">Simple</span>
                    </h4>
                    <div class="mt-3">
                        Being simple and unisex, our bags are also well known as daddy friendly diaper bags. Our
                        <span style="color: var(--brand-color)">simplicity adds more value</span> in a baby bag
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr style="color: #4c4c4c" class="my-5">
    </div>
    <section id="testimonials">
        <div class="container">
            <div class="card rounded-5"
                 style="--bs-card-bg: #fff2ec; --bs-card-border-width: 0; --bs-border-radius-xxl: 32px">
                <div class="card-body p-3 p-md-5 pt-0">
                    <div class="text-center">
                        <h2 class="rounded-pill mb-3 text-white font:gotham-rounded fw-bold h2 d-inline-block px-4 py-2 lh-1"
                            style="background-color:var(--brand-color);margin-top: -20px;">
                            babyGo
                        </h2>
                        <div style="max-width: 620px;color: var(--brand-color)"
                             class="fs-4 font:gotham-rounded mx-auto">
                            BabyGo stands as a trusted choice for family Providing exceptional comfort and easier
                            mobility for family's journey with their little ones
                        </div>
                    </div>
                    <div class="mt-3" style="--color-border: #ffa600; --color-text: #fff; --margin-text: -1rem;">
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-7.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        Vicky Shu
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-8.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        Chef Arnold & Tiffany
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-9.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        Karina Salim
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 mb-md-5"></div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-10.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        dr. Reisa Brotoasmoro
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-11.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        Alice Norin
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex align-items-center flex-column mb-3 mb-md-0" data-aos="fade-down">
                                    <div class="rounded-5 border"
                                         style="--bs-border-width: 5px; --bs-border-color: var(--color-border)">
                                        <img src="{{ asset('images/babygo/Photo-12.jpeg') }}" alt=""
                                             class="img-fluid rounded-5" style="--bs-border-radius-xxl: 27px;">
                                    </div>
                                    <div class="badge rounded-pill font:gotham-rounded fw-medium py-2 px-4 fs-5"
                                         style="color: var(--color-text); background-color:var(--color-border);margin-top: var(--margin-text);">
                                        Joanna Alexandra
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr style="color: #4c4c4c" class="my-5">
    </div>
    <section>
        <div class="container">
            <div class="position-relative">
                <div class="position-relative">
                    <img src="{{ asset('images/Photo-13.jpeg') }}" alt="" class="img-fluid w-100">
                    <div class="position-absolute bottom-0 start-0 w-100">
                        <img src="{{ asset('images/Object-01.png') }}" alt="" class="img-fluid w-100">
                    </div>
                    <div class="position-absolute bottom-0 start-0 w-100 text-center pb-3 pb-md-4">
                        <img src="{{ asset('images/babygo-2.png') }}" alt="" class="img-fluid" style="max-width: 250px">
                    </div>
                </div>
                <div class="position-md-absolute start-0 top-0 w-100 p-md-5 p-3">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="fw-bold font:gotham-rounded fs-1"
                                 style="color: #0e8447; text-shadow: -3px -3px 2px #fff, -3px 3px 2px #fff, 3px -3px 2px #fff, 3px 3px 2px #fff, -1px -1px 0 #fff, -1px 1px 0 #fff, 1px -1px 0 #fff, 1px 1px 0 #fff;">
                                A stylish design paired with smart features ideal for accommodating the diverse needs of
                                parents while traveling
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta" class="mt-5">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-medium font:gotham-rounded fs-4 text-uppercase" style="color: #504f4f">
                    Visit Us
                </h3>
            </div>
            <div class="row justify-content-around mt-3">
                <div class="col-md-auto mb-3 mb-md-0">
                    <a href="" target="_blank" class="px-4 py-2 rounded-pill btn fw-bold font:gotham-rounded fs-5"
                       style="--bs-btn-color: #fff;--bs-btn-hover-color: #fff; --bs-btn-bg:var(--brand-color);--bs-btn-hover-border-color:var(--brand-color-light);--bs-btn-hover-bg: var(--brand-color-light)">
                        <div style="width: 1em;" class="d-inline-block me-2">
                            {{-- @formatter:off --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9l2.3 0c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm144.5 92.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z"/></svg>
                            {{-- @formatter:on --}}
                        </div>
                        www.babygoinc.com
                    </a>
                </div>
                <div class="col-md-auto">
                    <a href="https://www.instagram.com/babygoinc/" target="_blank"
                       class="px-4 py-2 rounded-pill btn fw-bold font:gotham-rounded fs-5 lh-1"
                       style="--bs-btn-color: #fff;--bs-btn-hover-color: #fff; --bs-btn-bg:var(--brand-color);--bs-btn-hover-border-color:var(--brand-color-light);--bs-btn-hover-bg: var(--brand-color-light)">
                        <div style="width: 1em;" class="d-inline-block me-2">
                            {{-- @formatter:off --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            {{-- @formatter:on --}}
                        </div>
                        @babygoinc
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
