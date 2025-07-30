@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['blogs_title'] ?? 'Placid Tour & Travels PVT LTD',
        'title' => $setting['blogs_seo_title'] ?? 'Placid Tour & Travels PVT LTD',
        'description' => $setting['blogs_seo_description'] ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $setting['blogs_seo_keywords'] ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg"
                style="background-image: url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}');"></div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Latest Blogs</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}">
                                <a href="{{ route('show.blogs', $blog->slug) }}">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>{{ $blog->created_at->format('d') }} <br>
                                        <span>{{ $blog->created_at->format('M') }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="{{ route('show.blogs', $blog->slug) }}">{{ $blog->name }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('frontend/assets/images/blog/news-page-2.jpg') }}" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="news-details.html">Journeys are Best Measured in New Friends</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('frontend/assets/images/blog/news-page-3.jpg') }}" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="news-details.html">Travel the Most Beautiful Places in the World</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('frontend/assets/images/blog/news-page-4.jpg') }}" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="news-details.html">Things to See and Do When Visiting Japan</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('frontend/assets/images/blog/news-page-5.jpg') }}" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="news-details.html">Journeys are Best Measured in New Friends</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('frontend/assets/images/blog/news-page-6.jpg') }}" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">

                                <h3 class="news-one__title">
                                    <a href="news-details.html">Travel the Most Beautiful Places in the World</a>
                                </h3>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
@endsection
