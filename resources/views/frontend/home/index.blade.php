@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['homepage_title'] ?? 'Home',
        'title' => $setting['homepage_seo_title'] ?? 'Placid Tour & Travels PVT LTD',
        'description' => $setting['homepage_seo_description'] ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $setting['homepage_seo_keywords'] ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider">

        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            <div class="swiper-wrapper">
                @foreach ($slider as $sliders)
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('{{ asset($sliders->image) }}"
                            alt="{{ $sliders->name ?? '' }}">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h2>{{ $sliders->name ?? '' }}</h2>
                                        <p>{{ strip_tags($sliders->description) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="main-slider-nav">
                    <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                    <div class="main-slider-button-next"><span class="icon-right-arrow"></span></div>
                </div>
            </div>
    </section>

    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="{{ asset($setting['scholorship_image']) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Learn about us</span>
                            <h2 class="section-title__title">{{ $setting['scholorship_title'] ?? '' }}</h2>
                        </div>
                        <p class="about-page__text-1">A Simply Perfect Place to Get Lost</p>

                        @php
                            use Illuminate\Support\Str;

                            $rawText = strip_tags($setting['scholorship_description'] ?? '');
                            $limitedText = Str::words($rawText, 100, '...');
                        @endphp

                        <p class="about-page__text-2">{!! nl2br(e($limitedText)) !!}</p>
                    </div>
                </div>

                <style>
                    .custom-btn {
                        background-color: #012c7b !important;
                        color: #fff !important;
                        border: none;
                    }

                    .custom-btn:hover {
                        background-color: #787780 !important;
                        color: #fff !important;
                    }

                    .btn-wrapper {
                        text-align: center;
                        margin-top: 20px;
                    }
                </style>

                <div class="btn-wrapper">
                    <a class="thm-btn custom-btn" href="/about">View More</a>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="destinations-two">
        <div class="destinations-two-shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="{{ asset('frontend/assets/images/shapes/destinations-two-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="destinations-two__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="destinations-two__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">{{ $setting['service_title'] ?? 'Our Service' }}</span>
                                <h2 class="section-title__title">{{ $setting['service_description'] ?? 'Our Service' }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="destinations-two__bottom">
                <div class="row g-3"> <!-- g-3 adds gutter space between columns -->
                    @foreach ($services->take(7) as $index => $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="destinations-two__top-single wow fadeInUp"
                                data-wow-delay="{{ ($index + 1) * 100 }}ms">
                                <div class="destinations-two__top-img ratio-box">
                                    <img class="img-fluid" src="{{ asset($service->image ?? '') }}" alt="">
                                    <div class="destinations-two__top-content">
                                        <h2 class="destinations-two__top-title">
                                            <a class="service-link" href="{{ route('show.services', $service->slug) }}">
                                                {{ $service->name ?? '' }}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="destinations-two__top-single wow fadeInUp" data-wow-delay="800ms">
                            <div class="destinations-two__top-banner d-flex flex-column justify-content-center align-items-center"
                                style="height: 100%; min-height: 285px;">
                                <h2>View <span>All Services</span></h2>
                                <a class="thm-btn destinations-two__btn mt-3" href="{{ route('services') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book-now">
        <div class="book-now-shape"
            style="background-image: url('{{ asset('frontend/assets/images/shapes/book-now-shape.png') }}');"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="book-now__inner">
                        <div class="book-now__left">
                            <p>{{ $setting['abroads_title'] ?? '' }}</p>
                            <h2>{{ $setting['abroads_description'] ?? '' }}</h2>
                        </div>
                        <div class="book-now__right">
                            <a class="thm-btn book-now__btn" href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="news-two_left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">{{ $setting['blogs_title'] ?? '' }}</h2>
                        </div>
                        <p class="news-two__text">{{ $setting['blogs_description'] ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="news-two__right">
                        <div class="news-two__carousel owl-theme owl-carousel">
                            @foreach ($blogs as $blog)
                                <!--News One Single-->
                                <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="news-one__img">
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->name ?? '' }}">
                                        <a href="news-details.html"><span class="news-one__plus"></span></a>
                                        <div class="news-one__date">
                                            <div class="news-one__date">
                                                <p>{{ $blog->created_at->format('d') }} <br>
                                                    <span>{{ $blog->created_at->format('M') }}</span>
                                                </p>
                                            </div>
                                            </span></p>
                                        </div>
                                    </div>
                                    <div class="news-one__content">
                                        <h3 class="news-one__title"><a
                                                href="{{ route('show.blogs', $blog->slug) }}">{{ $blog->name ?? '' }}</a>
                                        </h3>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        {{-- Centered Button --}}
                        <div style="text-align: center; margin-top: 30px;">
                            <style>
                                .custom-btn {
                                    background-color: #0a58ca !important;
                                    color: #fff !important;
                                    border: none;
                                    padding: 12px 30px;
                                    display: inline-block;
                                    transition: background-color 0.3s ease;
                                }

                                .custom-btn:hover {
                                    background-color: #787780 !important;
                                    color: #fff !important;
                                }
                            </style>
                            <a class="thm-btn custom-btn" href="{{ route('blogs') }}">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section -->
    <!-- Gallery Section -->
    @if ($galleries->isNotEmpty())
        <section class="gallery-section py-5">
            <div class="container">
                <div class="section-title text-center mb-4">
                    <h2 class="section-title__title">Our Gallery</h2>
                    <p>Explore beautiful moments from our tours</p>
                </div>
                <div class="row g-3">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="gallery-item">
                                <a data-lightbox="gallery" data-title="{{ $gallery->title ?? 'Gallery Image' }}"
                                    href="{{ asset($gallery->image) }}">
                                    <img class="img-fluid rounded shadow-sm" src="{{ asset($gallery->image) }}"
                                        alt="{{ $gallery->title ?? 'Gallery Image' }}"
                                        onerror="this.onerror=null; this.src='{{ asset('frontend/assets/img/default-image.jpg') }}';">
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
