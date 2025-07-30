<div class="page-wrapper">
    <header class="main-header clearfix">
        {{-- Top Bar --}}
        <div class="main-header__top">
            <div class="container">
                <div class="main-header__top-inner clearfix">
                    <div class="main-header__top-left">
                        <ul class="list-unstyled main-header__top-address">
                            <li>
                                <div class="icon"><span class="icon-phone-call"></span></div>
                                <div class="text">
                                    <a href="tel:{{ $setting['site_phone'] ?? '' }}">
                                        {{ $setting['site_phone'] ?? '' }}
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="icon-at"></span></div>
                                <div class="text">
                                    <a href="mailto:{{ $setting['site_email'] ?? '' }}">
                                        {{ $setting['site_email'] ?? '' }}
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header__top-right">
                        <div class="main-header__top-right-inner">
                            <div class="main-header__top-right-social">
                                @foreach (getsocialmedia() as $key => $social)
                                    <a class="social-icon" href="{{ $social->link }}" target="_blank">
                                        <i class="{{ $social->icon ?? '' }}"></i>
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Navigation --}}
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper clearfix">
                <div class="container clearfix">
                    <div class="main-menu-wrapper-inner clearfix">
                        <div class="main-menu-wrapper__left clearfix">
                            <div class="main-menu-wrapper__logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset($setting['site_main_logo']) }}" alt="Logo"
                                        style="max-width: 130px; height: auto;">
                                </a>
                            </div>

                            <div class="main-menu-wrapper__main-menu">
                                <a class="mobile-nav__toggler" href="#"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown {{ request()->is('/') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('services') }}">Our Services</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('blogs') }}">Blogs</a>

                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li>
                                        <a class="thm-btn mt-0" href="{{ route('contact') }}"
                                            style="color: white; margin-left: 20px;">Inquiry</a>

                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    {{-- Sticky Header --}}
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
</div>
