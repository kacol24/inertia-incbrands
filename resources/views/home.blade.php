@php
    $banners = [
        'images/banners/Banner-BabyGo-2.jpeg',
        'images/banners/Banner-Pureco.jpeg',
        'images/banners/nuudo-img.jpeg',
    ];
@endphp

@extends('layouts.master')

@push('before_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.css">
@endpush

@push('before_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.14/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.min.js"></script>
    <script>
        new Swiper('.hero-swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
        new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 50,
            startDelay: 500,
            loop: true,
            backDelay: 2000
        });
    </script>
@endpush

@section('content')
    <section id="section_hero">
        <div class="hero-swiper swiper" style="--swiper-theme-color: var(--theme-color-green)">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        <img
                            src="{{ Croppa::url($banner, width: 100, options: ['filters' => 'blur', 'quality' => 50]) }}"
                            data-src="{{ asset($banner) }}" alt="banner {{ $loop->iteration }}"
                            class="img-fluid w-100 lozad">
                        <div class="swiper-lazy-preloader"></div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section id="section_intro" class="mt-4">
        <div class="container">
            <div class="text-center">
                <div class="mb-4">
                    <img src="{{ asset('images/BBGO-PNG-400x100px-2-300x75.png') }}" alt="indogo corp illustration"
                         class="img-fluid">
                </div>
                <div class="intro__content m-auto fs-3">
                    We are <span class="text-color:green">INDOGO CORPORATION (<span style="color: #ef8a21">I</span><span
                            style="color: #24c0da">N</span><span style="color: #e14b37">C</span>)</span>,
                    a company specialized in producing<br>
                    goods for <span id="typed" class="text-color:green"></span>
                    <div id="typed-strings">
                        <p>baby</p>
                        <p>kid</p>
                        <p>family</p>
                    </div>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/BBGO-PNG-400x100px-inc-300x75.png') }}" alt="indogo corp illustration"
                         class="img-fluid">
                </div>
            </div>
            <div class="mt-md-5 mt-3">
                <div class="row justify-content-around overflow-hidden">
                    <div class="col-md-3">
                        <div class="text-center px-5"
                             data-aos="fade-right">
                            <img src="{{ asset('images/icons/ourvision.png') }}" alt="" class="img-fluid">
                            <div class="mt-3">
                                To <strong class="font:gotham-rounded text-color:orange">INNOVATE</strong> products that
                                will give solutions to a family
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center px-5"
                             data-aos="fade-up">
                            <img src="{{ asset('images/icons/ourmission.png') }}" alt="" class="img-fluid">
                            <div class="mt-3">
                                Provide useful products to help parents taking care of their babies since <strong
                                    class="font:gotham-rounded text-color:blue">NEWBORN</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center px-5"
                             data-aos="fade-left">
                            <img src="{{ asset('images/icons/ourvalue.png') }}" alt="" class="img-fluid">
                            <div class="mt-3">
                                Because we know how much you <strong
                                    class="font:gotham-rounded text-color:red">CARE</strong> for your little ones, and
                                so do we
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_brands" class="mt-5">
        <div class="container">
            <h2 class="section-title fs-2 text-uppercase text-center text-md-start">
                Our Brands
            </h2>
            <div class="mt-3">
                <div class="row justify-content-around">
                    <div class="col-md-3 mb-3 mb-md-0 col-10">
                        <a href="" data-aos="fade-down">
                            <img src="{{ asset('images/Our-Brands_Babygo.png') }}" alt="babygo brand"
                                 class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 col-10">
                        <a href="" data-aos="fade-down">
                            <img src="{{ asset('images/Our-Brands_Pureco.png') }}" alt="pureco brand"
                                 class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0 col-10">
                        <a href="" data-aos="fade-down">
                            <img src="{{ asset('images/Our-Brands_Nuudo.png') }}" alt="nuudo brand"
                                 class="img-fluid w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_csr" class="mt-5">
        <div class="container">
            <h2 class="section-title fs-2 text-uppercase text-center text-md-start">
                WE ARE A COMPANY WITH A PURPOSE
            </h2>
            <p class="font:gotham-rounded" style="color: #8d97ad">
                We would like to create a better world for our future generation by supporting some non profits
                organizations in various fields:
            </p>
            <div class="mt-3" style="--highlight-color: #0a914b">
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="row align-items-center g-0 mb-3 mb-md-0">
                            <div class="col-6 text-center">
                                <img src="{{ asset('images/Logo-Babygo.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-6 overflow-hidden">
                                <img src="{{ asset('images/Icon-CSR-Babygo.jpeg') }}" alt="" class="img-fluid"
                                     data-aos="fade-left">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('images/icons/Sea-turtle-preserve.png') }}" alt="" class="img-fluid"
                             style="max-height: 38px; width:auto;">
                        <div class="mt-3">
                            <span style="color: var(--highlight-color)">BabyGo</span> committed to help preserving sea
                            turtles, which are classified as endangered animals
                        </div>
                        <div class="mt-3">
                            <a href="https://babygoinc.com/company-social-responsibility/" class="text-decoration-none"
                               target="_blank" style="color: var(--highlight-color);">
                                More Info >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" style="--highlight-color: #62d10c">
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="row align-items-center g-0 mb-3 mb-md-0">
                            <div class="col-6 text-center">
                                <img src="{{ asset('images/Logo-pureco-inc-RGB-01.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-6 overflow-hidden">
                                <img src="{{ asset('images/Icon-CSR-Pureco.png') }}" alt="" class="img-fluid"
                                     data-aos="fade-left">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('images/icons/CARBON-OFFSET.png') }}" alt="" class="img-fluid"
                             style="max-height: 38px; width:auto;">
                        <div class="mt-3">
                            <span style="color: var(--highlight-color)">Pureco</span> committed to support environmental
                            projects to balance greenhouse gas emission
                        </div>
                        <div class="mt-3">
                            <a href="https://babygoinc.com/company-social-responsibility/" class="text-decoration-none"
                               target="_blank" style="color: var(--highlight-color);">
                                More Info >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" style="--highlight-color: #ff9400">
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="row align-items-center g-0 mb-3 mb-md-0">
                            <div class="col-6 text-center">
                                <img src="{{ asset('images/nuudo-logo-no-tagline.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-6 overflow-hidden">
                                <img src="{{ asset('images/Icon-CSR-Nuudo.png') }}" alt="" class="img-fluid"
                                     data-aos="fade-left">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="{{ asset('images/icons/Kids-Education.png') }}" alt="" class="img-fluid"
                             style="max-height: 38px; width:auto;">
                        <div class="mt-3">
                            <span style="color: var(--highlight-color)">Nuudo</span> committed to support kids
                            educational program on Rote Island, NTT
                        </div>
                        <div class="mt-3">
                            <a href="https://babygoinc.com/company-social-responsibility/" class="text-decoration-none"
                               target="_blank" style="color: var(--highlight-color);">
                                More Info >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section_contact" class="mt-5">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <h3 class="section-title fs-3 mb-md-5 mb-3">
                        CONTACT US
                    </h3>
                    <div>
                        <a href="https://wa.me/6289676717676" class="text-decoration-none font:gotham-rounded fw-bold"
                           style="--bs-link-color-rgb: #8d97ad" target="_blank">
                            <div class="d-flex align-items-center">
                                <svg style="width: 1.25em;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#8d97ad"
                                          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                                </svg>
                                <div class="ms-2">
                                    Customer Service
                                </div>
                            </div>
                        </a>
                    </div>
                    <dl class="mt-md-5 mt-3">
                        <dt>For General Inquiry</dt>
                        <dd>
                            <a href="mailto:hello@inc-brands.co" target="_blank">
                                hello@inc-brands.co
                            </a>
                        </dd>
                    </dl>
                    <dl class="mt-md-5 mt-3">
                        <dt>For Sponsorship Inquiry</dt>
                        <dd>
                            <a href="mailto:sponsorship@inc-brands.co" target="_blank">
                                sponsorship@inc-brands.co
                            </a>
                        </dd>
                    </dl>
                    <dl class="mt-md-5 mt-3">
                        <dt>For Reseller Inquiry</dt>
                        <dd>
                            <a href="mailto:reseller@inc-brands.co" target="_blank">
                                reseller@inc-brands.co
                            </a>
                        </dd>
                    </dl>
                    <dl class="mt-md-5 mt-3">
                        <dt>For B2B Opportunity</dt>
                        <dd>
                            <a href="mailto:commerce@inc-brands.co" target="_blank">
                                commerce@inc-brands.co
                            </a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <h3 class="section-title fs-2 section-title--sm mb-md-5 mb-3 mt-5 mt-md-0">
                        LET US HEAR FROM YOU
                    </h3>
                    <form action="">
                        <div class="mb-3 mb-md-5">
                            <label for="contact_name" class="form-label">
                                Your Name (required)
                            </label>
                            <input type="text" class="form-control" id="contact_name" name="name">
                        </div>
                        <div class="mb-3 mb-md-5">
                            <label for="contact_email" class="form-label">
                                Your Email (required)
                            </label>
                            <input type="email" class="form-control" id="contact_email" name="email">
                        </div>
                        <div class="mb-3 mb-md-5">
                            <label for="contact_subject" class="form-label">
                                Subject
                            </label>
                            <input type="text" class="form-control" id="contact_subject" name="subject">
                        </div>
                        <div class="mb-3 mb-md-5">
                            <label for="contact_message" class="form-label">
                                Your Message
                            </label>
                            <textarea class="form-control" id="contact_message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn font:gotham-rounded fw-bold text-color:green fs-5">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
