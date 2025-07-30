<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="/"><img src="{{ asset($setting['footer_logo']) }}" alt="Logo"
                                        style="max-width: 140px; height: auto;"></a>
                            </div>
                            <p class="footer-widget__about-text">{{ $setting['site_information'] }}</p>
                            <ul class="footer-widget__about-contact list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:{{ $setting['site_phone'] ?? '' }}">
                                            {{ $setting['site_phone'] ?? '' }}
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:{{ $setting['site_email'] ?? '' }}">
                                            {{ $setting['site_email'] ?? '' }}
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>{{ $setting['site_location'] ?? '' }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__company clearfix">
                            <h3 class="footer-widget__title">Company</h3>
                            <ul class="footer-widget__company-list list-unstyled">
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/blogs">Blog</a></li>
                                <li><a href="Services">Services</a></li>
                                <li><a href="/contact">Work with Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__explore">
                            <h3 class="footer-widget__title">Explore</h3>
                            <ul class="list-unstyled footer-widget__explore-list">
                                <li><a href="/">Home</a></li>
                                <li><a href="/blogs">News</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/services">What We Offer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <h3 class="footer-widget__title">Social</h3>
                        <div class="footer-widget__social">
                            @foreach (getsocialmedia() as $key => $social)
                                <a class="social-icon" href="{{ $social->link }}" target="_blank">
                                    <i class="{{ $social->icon ?? '' }}"></i>
                                </a>
                            @endforeach
                        </div>
                        <div class="site-footer__bottom-right">
                            <p>@ All Copyright 2025, Placid Travel and Tours| Designed by <a
                                    href="https://paradiseit.com.np/">Paradise
                                    InfoTech</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
