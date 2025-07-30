@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $services->name ?? 'Placid Tour & Travels PVT LTD',
        'title' => $services->seo_title ?? $services->name,
        'description' => $services->meta_description ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $services->keywords ?? 'Placid Tour & Travels PVT LTD',
        'schema' => $services->seo_schema ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => $services->created_at,
        'updated_at' => $services->updated_at,
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
                    <h2>{{ $services->name ?? '' }}</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>.</span></li>
                        <li>Services</li>
                        <li><span>.</span></li>
                        <li class="active">{{ $services->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Destinations Details Start-->
    <section class="destinations-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="destinations-details__left">
                        <div class="destinations-details__img">
                            <img src="{{ asset($services->image) }}" alt="{{ $services->name ?? '' }}"
                                style="height: 500px;">
                        </div>
                        <div class="destinations-details__discover">
                            <h3 class="destinations-details__title">{{ $services->name ?? '' }}</h3>
                            <div class="news-details__content">

                                {!! $services->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-lg-5">
                    <div class="destinations-details__right">
                        <div class="tour-details-two__last-minute tour-details-two__last-minute-2">
                            <h3 class="tour-details-two__sidebar-title">Our Services</h3>
                            <ul class="tour-details-two__last-minute-list list-unstyled">
                                @foreach ($popular_services as $blgs)
                                    <li>
                                        <div class="tour-details-two__last-minute-image">
                                            <img src="{{ asset($blgs->image) }}" alt="{{ $blgs->name ?? 'Service Image' }}">
                                        </div>

                                        <div class="tour-details-two__last-minute-content">
                                            <h5>
                                                <a href="{{ route('show.services', $blgs->slug) }}">
                                                    {{ $blgs->name ?? '' }}
                                                </a>
                                            </h5>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="destinations-details__discount">
                            <img src="{{ asset('assets/images/resources/destinations-details__discount-img.jpg') }}"
                                alt="Discount Image">
                            <div class="destinations-details__discount-content">
                                <h2>30%</h2>
                                <h4>Discount on Spain <br> Tours</h4>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Our Services</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($popular_services as $blgs)
                                    @if ($blgs->slug !== request()->route('slug'))
                                        <!-- Exclude current blog -->
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="{{ asset($blgs->image) }}" alt="{{ $blgs->name ?? '' }}">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <h3>
                                                    <a class="sidebar__post-content_meta" href="#"></a>
                                                    <a
                                                        href="{{ route('show.blogs', $blgs->slug) }}">{{ $blgs->name ?? '' }}</a>
                                                </h3>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
