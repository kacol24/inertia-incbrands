<?php

use App\Models\NuudoPackaging;
use App\Models\Testimonial;
use function Laravel\Folio\name;

name('static.nuudo');
$testimonials = Testimonial::where('product', 'nuudo')->get();
$packagings = NuudoPackaging::get();
?>

@extends('layouts.master')

@push('after_styles')
    <style>
        :root {
            --brand-color: #ff9700;
            --brand-color-light: #ffaa30;
            --text-color-base: #435058;

            --brand-color-alt: #a0d7f5;
        }

        body {
            color: #6f7579;
        }

        .text-color\:brand {
            color: var(--brand-color);
        }
    </style>
@endpush

@section('content')
    <section id="hero">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-7">
                    <img
                        src="{{ Croppa::url('images/banners/Nuudo-9.jpeg', width: 100, options: ['filters' => 'blur', 'quality' => 50]) }}"
                        data-src="{{ asset('images/banners/Nuudo-9.jpeg') }}" alt="banner hero"
                        class="img-fluid w-100 lozad">
                </div>
                <div class="col-md">
                    <div style="background-color:#f3f3f3;" class="h-100 p-md-5 p-3 d-flex align-items-center">
                        <div>
                            <div class="mb-4" style="max-width: 200px">
                                <img src="{{ asset('images/nuudo/logo-nuudo.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="font:gotham-rounded fs-4 mb-4">
                                Where <strong class="text-color:brand">natural goodness</strong> meet<br>
                                everyday care
                            </div>
                            <div data-aos="fade-down">
                                <img src="{{ asset('images/nuudo/5-icon-orange.png') }}" alt=""
                                     class="img-fluid w-100">
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
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-8">
                <img
                    src="{{ Croppa::url('images/banners/081A7000.jpeg', width: 100, options: ['filters' => 'blur', 'quality' => 50]) }}"
                    data-src="{{ asset('images/banners/081A7000.jpeg') }}" alt="banner all products"
                    class="img-fluid w-100 lozad">
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex align-items-center">
                    <div class="p-md-4 p-3">
                        <div class="font:gotham-rounded fs-4 mb-3">
                            In Nuudo, we focused on using
                            <strong class="text-color:brand">plant based</strong> ingredients infused with goodness of
                            <strong class="text-color:brand">natural
                                origins</strong> for <strong class="text-color:brand">baby & kid's</strong> daily
                            essentials.
                        </div>
                        <div class="font:gotham-rounded fs-4">
                            We believe human skin's needs are di erent and deserves the best care
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr style="color: #4c4c4c" class="my-5">
    </div>
    <section id="product_showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="showcase mb-5">
                        <div class="showcase__header mb-3">
                            <div class="showcase__brand mb-2">
                                <img src="{{ asset('images/nuudo/logo-nuudo.png') }}" alt="" class="img-fluid"
                                     style="max-height: 55px">
                            </div>
                            <h3 class="showcase__subtitle fw-bold font:gotham-rounded fs-3">
                                for normal to sensitive skin
                            </h3>
                        </div>
                        <div class="showcase__body">
                            <img src="{{ asset('images/nuudo/Nuudo-10.jpeg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="showcase__footer mt-3">
                            <div class="row">
                                <div class="col-md-auto text-color:brand fs-4 font:gotham-rounded fw-bold">
                                    Baby Wash<br>
                                    Kids Wash<br>
                                    Body Lotion
                                </div>
                                <div class="col-md font:gotham-rounded fs-5">
                                    <div class="d-flex align-items-center h-100">
                                        <div style="max-width: 100px">
                                            <img src="{{ asset('images/icons/formulate.png') }}" alt=""
                                                 class="img-fluid">
                                        </div>
                                        <div class="ms-3">
                                            Formulated using blends of plant extract and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="showcase mb-5">
                        <div class="showcase__header mb-3">
                            <div class="showcase__brand mb-2">
                                <img src="{{ asset('images/nuudo/Asset-2.png') }}" alt="" class="img-fluid"
                                     style="max-height: 55px">
                            </div>
                            <h3 class="showcase__subtitle fw-bold font:gotham-rounded fs-3">
                                for sensitive to dry & atopic prone skin
                            </h3>
                        </div>
                        <div class="showcase__body">
                            <img src="{{ asset('images/nuudo/Nuudo-3.jpeg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="showcase__footer mt-3">
                            <div class="row">
                                <div class="col-md-auto fs-4 font:gotham-rounded fw-bold"
                                     style="color: var(--brand-color-alt)">
                                    Gentle Cleanser<br>
                                    Body & Face Cream<br>
                                    Barrier Balm
                                </div>
                                <div class="col-md font:gotham-rounded fs-5">
                                    <div class="d-flex align-items-center h-100">
                                        <div style="max-width: 100px">
                                            <img src="{{ asset('images/icons/formulate.png') }}" alt=""
                                                 class="img-fluid">
                                        </div>
                                        <div class="ms-3">
                                            Formulated using blends of plant butter and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="showcase mb-5">
                        <div class="showcase__header mb-3">
                            <div class="showcase__brand mb-2">
                                <img src="{{ asset('images/nuudo/logo-nuudo-haricare.png') }}" alt="" class="img-fluid"
                                     style="max-height: 55px">
                            </div>
                            <h3 class="showcase__subtitle fw-bold font:gotham-rounded fs-3">
                                for baby and kids healthy hair
                            </h3>
                        </div>
                        <div class="showcase__body">
                            <img src="{{ asset('images/nuudo/nuudo-23.jpeg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="showcase__footer mt-3">
                            <div class="row">
                                <div class="col-md-4 text-color:brand fs-4 font:gotham-rounded fw-bold">
                                    Kids Shampoo<br>
                                    Hair Lotion
                                </div>
                                <div class="col-md-8 font:gotham-rounded fs-5">
                                    <div class="d-flex align-items-center h-100">
                                        <div style="max-width: 100px">
                                            <img src="{{ asset('images/icons/formulate.png') }}" alt=""
                                                 class="img-fluid">
                                        </div>
                                        <div class="ms-3">
                                            Formulated using blends of plant extract and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="showcase mb-5">
                        <div class="showcase__header mb-3">
                            <div class="showcase__brand mb-2">
                                <img src="{{ asset('images/nuudo/logo-nuudo.png') }}" alt="" class="img-fluid"
                                     style="max-height: 55px">
                            </div>
                            <h3 class="showcase__subtitle fw-bold font:gotham-rounded fs-3">
                                for irritated skin
                            </h3>
                        </div>
                        <div class="showcase__body">
                            <img src="{{ asset('images/nuudo/Nuudo-7.jpeg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="showcase__footer mt-3">
                            <div class="font:gotham-rounded fs-5 mb-3">
                                Irritated skin can be caused by Wet Rash or Dry Rash
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="text-color:brand fs-4 font:gotham-rounded fw-bold">
                                        Nuudo Rash Cream
                                    </div>
                                    <div class="font:gotham-rounded fs-5">
                                        For Wet Rash caused by sweat, such as diaper rash
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2 mt-md-0">
                                    <div class="fs-4 font:gotham-rounded fw-bold" style="color: var(--brand-color-alt)">
                                        Nuudo Barrier Balm
                                    </div>
                                    <div class="font:gotham-rounded fs-5">
                                        For Dry Rash on dry & atopic skin and other conditions such as sun burn, minor
                                        burn & minor cut
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
    <section id="packaging">
        <div class="container text-center">
            <h2 class="font:gotham-rounded fw-bold display-5 text-color:brand">
                Our packaging features<br class="d-none d-md-block"> some wonderful animals in the world
            </h2>
            <div class="fs-3">
                These animals take care of their children, some of them also socialize with others, just like what
                humans do.
            </div>
        </div>
        <div class="py-5 mt-3" style="background-color:#dedcdf;">
            <div class="container">
                <div class="row">
                    @foreach($packagings as $packaging)
                        <div class="col-md-3 col-6">
                            <div data-aos="fade-down" data-aos-delay="{{ $loop->index * 100 }}">
                                <img src="{{ asset($packaging->image_path) }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr style="color: #4c4c4c" class="my-5">
    </div>
    <section id="testimonials">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="rounded-pill px-4 py-2 font:gotham-rounded fw-bold display-5 text-white d-inline-block lh-1"
                     style="background-color:var(--brand-color);">
                    Where Natural Goodness Meets Everyday Care
                </div>
            </div>
            <div class="row mt-4 overflow-hidden">
                @foreach($testimonials as $testimonial)
                    <div class="col-md-3 mb-3">
                        <div data-aos="fade-left" data-aos-delay="{{ $loop->index * 50 }}">
                            <img src="{{ asset($testimonial->image_path) }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container">
        <hr style="color: #4c4c4c" class="my-5">
    </div>
    <section id="cta" class="mt-5">
        <div class="container">
            <div class="text-center my-5">
                <h3 class="fw-bold font:gotham-rounded fs-1">
                    Nuudo accommodates the needs of all types of skin from <span class="text-color:brand">normal, sensitive, dry & atopic skin</span>
                </h3>
            </div>
        </div>
        <img
            src="{{ Croppa::url('images/nuudo/jonathan-borba-RWgE9_lKj_Y-unsplash.jpeg', width: 100, options: ['filters' => 'blur', 'quality' => 50]) }}"
            data-src="{{ asset('images/nuudo/jonathan-borba-RWgE9_lKj_Y-unsplash.jpeg') }}" alt="banner hero"
            class="img-fluid w-100 lozad">
        <div class="container mt-5">
            <div class="text-center">
                <h3 class="fw-medium font:gotham-rounded fs-4 text-uppercase" style="color: #504f4f">
                    Visit Us
                </h3>
            </div>
            <div class="row justify-content-around mt-3">
                <div class="col-md-auto mb-3 mb-md-0">
                    <a href="https://nuudo.id/" target="_blank"
                       class="px-4 py-2 rounded-pill btn fw-bold font:gotham-rounded fs-5"
                       style="--bs-btn-color: #fff;--bs-btn-hover-color: #fff; --bs-btn-bg:#6f7579;--bs-btn-hover-border-color:#5f6365;--bs-btn-hover-bg: #5f6365">
                        <div style="width: 1em;" class="d-inline-block me-2">
                            {{-- @formatter:off --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M51.7 295.1l31.7 6.3c7.9 1.6 16-.9 21.7-6.6l15.4-15.4c11.6-11.6 31.1-8.4 38.4 6.2l9.3 18.5c4.8 9.6 14.6 15.7 25.4 15.7c15.2 0 26.1-14.6 21.7-29.2l-6-19.9c-4.6-15.4 6.9-30.9 23-30.9l2.3 0c13.4 0 25.9-6.7 33.3-17.8l10.7-16.1c5.6-8.5 5.3-19.6-.8-27.7l-16.1-21.5c-10.3-13.7-3.3-33.5 13.4-37.7l17-4.3c7.5-1.9 13.6-7.2 16.5-14.4l16.4-40.9C303.4 52.1 280.2 48 256 48C141.1 48 48 141.1 48 256c0 13.4 1.3 26.5 3.7 39.1zm407.7 4.6c-3-.3-6-.1-9 .8l-15.8 4.4c-6.7 1.9-13.8-.9-17.5-6.7l-2-3.1c-6-9.4-16.4-15.1-27.6-15.1s-21.6 5.7-27.6 15.1l-6.1 9.5c-1.4 2.2-3.4 4.1-5.7 5.3L312 330.1c-18.1 10.1-25.5 32.4-17 51.3l5.5 12.4c8.6 19.2 30.7 28.5 50.5 21.1l2.6-1c10-3.7 21.3-2.2 29.9 4.1l1.5 1.1c37.2-29.5 64.1-71.4 74.4-119.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm144.5 92.1c-2.1 8.6 3.1 17.3 11.6 19.4l32 8c8.6 2.1 17.3-3.1 19.4-11.6s-3.1-17.3-11.6-19.4l-32-8c-8.6-2.1-17.3 3.1-19.4 11.6zm92-20c-2.1 8.6 3.1 17.3 11.6 19.4s17.3-3.1 19.4-11.6l8-32c2.1-8.6-3.1-17.3-11.6-19.4s-17.3 3.1-19.4 11.6l-8 32zM343.2 113.7c-7.9-4-17.5-.7-21.5 7.2l-16 32c-4 7.9-.7 17.5 7.2 21.5s17.5 .7 21.5-7.2l16-32c4-7.9 .7-17.5-7.2-21.5z"/></svg>
                            {{-- @formatter:on --}}
                        </div>
                        www.nuudo.id
                    </a>
                </div>
                <div class="col-md-auto">
                    <a href="https://www.instagram.com/nuudo.inc/" target="_blank"
                       class="px-4 py-2 rounded-pill btn fw-bold font:gotham-rounded fs-5 lh-1"
                       style="--bs-btn-color: #fff;--bs-btn-hover-color: #fff; --bs-btn-bg:#6f7579;--bs-btn-hover-border-color:#5f6365;--bs-btn-hover-bg: #5f6365">
                        <div style="width: 1em;" class="d-inline-block me-2">
                            {{-- @formatter:off --}}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            {{-- @formatter:on --}}
                        </div>
                        @nuudo.inc
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
