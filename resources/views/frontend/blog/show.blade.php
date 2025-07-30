@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $blog->name ?? 'Placid Tour & Travels PVT LTD',
        'title' => $blog->seo_title ?? $blog->name,
        'description' => $blog->meta_description ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $blog->keywords ?? 'Placid Tour & Travels PVT LTD',
        'schema' => $blog->seo_schema ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => $blog->created_at,
        'updated_at' => $blog->updated_at,
    ])
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg"
                style="background-image: url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}');">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>{{ $blog->name }}</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>.</span></li>
                        <li>Blog</li>
                        <li><span>.</span></li>
                        <li class="active">{{ $blog->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News One Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->name ?? '' }}"
                                style="height: 500px; object-fit: cover;">
                            <div class="news-one__date">
                                <p>{{ $blog->created_at->format('d') }} <br>
                                    <span>{{ $blog->created_at->format('M') }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="news-details__content">

                            {!! $blog->description ?? '' !!}
                        </div>
                        <div class="news-details__bottom">

                            <div class="news-details__social-list">
                                @foreach (getsocialmedia() as $key => $social)
                                    <a class="social-icon" href="{{ $social->link }}" target="_blank">
                                        <i class="{{ $social->icon ?? '' }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Recent News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($popular_blog as $blgs)
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
