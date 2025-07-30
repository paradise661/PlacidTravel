@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['service_title'] ?? 'Placid Tour & Travels PVT LTD',
        'title' => $setting['service_seo_title'] ?? 'Placid Tour & Travels PVT LTD',
        'description' => $setting['service_seo_description'] ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $setting['service_seo_keywords'] ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg"
                style="background-image:url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}')">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>.</span></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations-one destinations-page">
        <div class="container">
            <div class="row masonary-layout">
                @foreach ($services as $index => $service)
                    <div class="col-xl-3 col-lg-3 d-flex">
                        <div class="destinations-one__single flex-fill d-flex flex-column">
                            <div class="destinations-one__img">
                                <img src="{{ asset($service->image ?? '') }}" alt="">
                                <div class="destinations-one__content mt-auto">
                                    <h2 class="destinations-one__title">
                                        <a href="{{ route('show.services', $service->slug) }}">
                                            {{ $service->name ?? '' }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
