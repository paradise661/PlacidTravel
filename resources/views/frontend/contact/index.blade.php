@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo.seo', [
        'name' => $setting['contact_title'] ?? 'Placid Tour & Travels PVT LTD',
        'title' => $setting['contact_seo_title'] ?? 'Placid Tour & Travels PVT LTD',
        'description' => $setting['contact_seo_description'] ?? 'Placid Tour & Travels PVT LTD',
        'keyword' => $setting['contact_seo_keywords'] ?? 'Placid Tour & Travels PVT LTD',
        'created_at' => '2024-04-26T08:09:15+00:00',
        'updated_at' => '2024-04-26T10:54:05+00:00',
    ])
@endsection
@section('content')
    <main class="flex-grow-1">
        <!-- Breadcrumb Section with Background Image -->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg"
                    style="background-image: url('{{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }}')">
                </div>
                <div class="page-header-bg-overly">
                </div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>.</span></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Talk with our team</span>
                                <h2 class="section-title__title">{{ $setting['homepage_contacttitle'] }}</h2>
                            </div>
                            <div class="contact-page__social">
                                @foreach (getsocialmedia() as $key => $social)
                                    <a class="social-icon" href="{{ $social->link }}" target="_blank">
                                        <i class="{{ $social->icon ?? '' }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="comment-form">
                                <form class="comment-one__form contact-form-validated" id="contact-form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name * " name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address * " name="email"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Address * " name="address" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone Number * " name="number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <textarea name="message" placeholder="Write Message * " required></textarea>
                                            </div>
                                            <button class="thm-btn comment-form__btn" type="submit">Send a message</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div><!-- /.result -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Toaster Notifications -->
        <div class="toast" id="toast">
            <div class="toast-message">Form submitted successfully!</div>
        </div>

        <!-- JS for Validation and Toast Notification -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('contact-form');

                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Validation
                    let valid = true;
                    const inputs = form.querySelectorAll('input, textarea');
                    inputs.forEach(function(input) {
                        if (!input.value) {
                            input.classList.add('is-invalid');
                            valid = false;
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    });

                    if (valid) {
                        // Show success toast
                        showToast('Form submitted successfully!');
                        form.reset();
                    } else {
                        // Show error toast
                        showToast('Please fill out all fields.');
                    }
                });

                // Show toast notification
                function showToast(message) {
                    const toast = document.getElementById('toast');
                    toast.querySelector('.toast-message').textContent = message;
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 3000);
                }
            });
        </script>

        <!-- Toast CSS -->
        <style>
            .toast {
                visibility: hidden;
                min-width: 250px;
                margin-left: -125px;
                background-color: #28a745;
                color: white;
                text-align: center;
                border-radius: 2px;
                padding: 16px;
                position: fixed;
                z-index: 1;
                bottom: 30px;
                left: 50%;
                font-size: 17px;
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }

            .toast.show {
                visibility: visible;
                opacity: 1;
            }

            .is-invalid {
                border-color: red;
            }
        </style>

        <!--Contact Page End-->

        <!--Information Start-->
        <section class="information">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-place"></span>
                            </div>
                            <div class="information__text">
                                <p>{{ $setting['site_location'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="tel:{{ $setting['site_phone'] }}">{{ $setting['site_phone'] ?? '' }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Information Single-->
                        <div class="information__single">
                            <div class="information__icon">
                                <span class="icon-at"></span>
                            </div>
                            <div class="information__text">
                                <h4>
                                    <a href="mailto:{{ $setting['site_email'] ?? 'info@example.com' }}">
                                        {{ $setting['site_email'] ?? 'info@example.com' }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Information End-->

        <!--Google Map Start-->
        <section class="contact-page-google-map">
            <iframe class="contact-page-google-map__one" src="{{ $setting['site_map'] }}" allowfullscreen></iframe>

        </section>
    @endsection
