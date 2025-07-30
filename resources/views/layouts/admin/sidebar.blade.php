<aside class="layout-menu menu-vertical menu bg-menu-theme" id="layout-menu">
    <div class="app-brand demo p-0">
        <a class="app-brand-link mx-auto my-0" href="{{ route('dashboard') }}" target="_blank">
            {{-- @if ($setting['site_main_logo'])
                <img style="max-width: 210px;" src="{{ asset($setting['site_main_logo']) }}" alt="logo">
            @else
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Travel</span>
            @endif --}}
        </a>

        <a class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" href="javascript:void(0);">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <br>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ Request::segment(1) == 'menus' ? 'active' : '' }}">
            <a class="menu-link {{ Request::segment(2) == 'menus' ? 'active' : '' }}"
                href="{{ route('admin.menu.index') }}">
                <i class="menu-icon tf-icons bx bx-menu-alt-right"></i>
                <div data-i18n="Accordion">Menu</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Request::segment(1) == 'contacts' ? 'active' : '' }}">
            <a class="menu-link {{ Request::segment(2) == 'contacts' ? 'active' : '' }}"
                href="{{ route('contacts.index') }}">
                <i class="menu-icon tf-icons bx bxs-contact"></i>
                <div data-i18n="Accordion">Inquiries</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ Request::segment(1) == 'enquiry' ? 'active' : '' }}">
            <a class="menu-link {{ Request::segment(2) == 'enquiry' ? 'active' : '' }}"
                href="{{ route('enquiry.index') }}">
                <i class="menu-icon tf-icons bx bxs-contact"></i>
                <div data-i18n="Accordion">Student Registration</div>
            </a>
        </li> --}}
        <!-- CMS -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">CMS</span></li>
        <!-- Cards -->

        <!-- Abroad -->

        <!-- services -->
        <!-- Services -->

        <li class="menu-item {{ Request::segment(2) == 'services' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('services.index') }}">
                <i class="menu-icon tf-icons bx bx-analyse"></i>
                <div data-i18n="General Setting">Services</div>
            </a>
        </li>
        <!-- Posts  -->

        <li class="menu-item {{ Request::segment(2) == 'blog' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('blog.index') }}">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="General Setting">Blogs</div>
            </a>
        </li>

        <li class="menu-item {{ Request::segment(2) == 'members' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('members.index') }}">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="General Setting">Members</div>
            </a>
        </li>

        <!-- Pages Start from Here  -->
        <li class="menu-item {{ Request::segment(2) == 'page' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('page.index') }}">
                <i class="menu-icon tf-icons bx bxs-file-plus"></i>
                <div data-i18n="General Setting">Pages</div>
            </a>
        </li>

        {{-- testimonials --}}
        <li class="menu-item {{ Request::segment(2) == 'review' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('review.index') }}">
                <i class="menu-icon tf-icons bx bxs-quote-alt-left"></i>
                <div data-i18n="General Setting">Testimonials</div>
            </a>
        </li>

        <!-- End of Posts  -->

        <!-- Teams starts -->

        <!-- <li class="menu-item @if (Request::segment(2) == 'members') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-user-pin"></i>
                <div data-i18n="General Setting">Teams</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'members' && Request::segment(3) == '' ? 'active' : '' }}" href="{{ route('members.index') }}">
                        <i class="menu-icon tf-icons bx bx-user-pin"></i>
                        <div data-i18n="Accordion">All Teams</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'members' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('members.create') }}">
                        <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                        <div data-i18n="Accordion">Create Team</div>
                    </a>
                </li>

            </ul>
        </li> -->

        <!-- End Of Teams -->

        <!-- End of Services -->

        <!--  Dashboard -->

        <!-- <li class="menu-item @if (Request::segment(2) == 'download') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-download"></i>
                <div data-i18n="General Setting">Downloads</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'download' && Request::segment(3) == '' ? 'active' : '' }}" href="{{ route('download.index') }}">
                        <i class="menu-icon tf-icons bx bx-download"></i>
                        <div data-i18n="Accordion">All Downloads</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'download' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('download.create') }}">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Accordion">Create Download</div>
                    </a>
                </li>

            </ul>
        </li> -->

        <!-- End of Download -->
        {{-- <li class="menu-item @if (Request::segment(2) == 'download') {{ 'active open' }} @endif">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-download"></i>
                <div data-i18n="General Setting">Downloads</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('download.index') }}"
                        class="menu-link {{ (Request::segment(2) == 'download'&&Request::segment(3) == '') ? 'active' : '' }}">
                        <i class="menu-icon tf-icons bx bx-download"></i>
                        <div data-i18n="Accordion">All Downloads</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('download.create') }}"
                        class="menu-link {{ (Request::segment(2) == 'download' && Request::segment(3) == 'create') ? 'active' : '' }}">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Accordion">Create Download</div>
                    </a>
                </li>

            </ul>
        </li> --}}

        <!-- Partners -->
        <!-- <li class="menu-item @if (Request::segment(2) == 'partner') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="General Setting">Partners</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'partner' && Request::segment(3) == '' ? 'active' : '' }}" href="{{ route('partner.index') }}">
                        <i class="menu-icon tf-icons bx bx-group"></i>
                        <div data-i18n="Accordion">All Partners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'partner' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('partner.create') }}">
                        <i class="menu-icon tf-icons bx bxs-file-plus"></i>
                        <div data-i18n="Accordion">Create Partner</div>
                    </a>
                </li>

            </ul>
        </li> -->

        <li class="menu-item {{ Request::segment(2) == 'faq' ? 'active open' : '' }}">
            <a class="menu-link" id="slider-link" href="{{ route('faq.index') }}">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="General Setting">FAQs</div>
            </a>
        </li>

        <!-- <li class="menu-item @if (Request::segment(2) == 'video') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div data-i18n="General Setting">Videos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'video' && Request::segment(3) == '' ? 'active' : '' }}" href="{{ route('video.index') }}">
                        <i class="menu-icon tf-icons bx bxs-videos"></i>
                        <div data-i18n="Accordion">All Videos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'video' && Request::segment(3) == 'create' ? 'active' : '' }}" href="{{ route('video.create') }}">
                        <i class="menu-icon tf-icons bx bx-video-plus"></i>
                        <div data-i18n="Accordion">Create Video</div>
                    </a>
                </li>

            </ul>
        </li> -->

        <!-- General Settings  -->
        <li class="menu-item @if (Request::segment(2) == 'setting' || Request::segment(2) == 'galleries') {{ 'active open' }} @endif">
            <a class="menu-link menu-toggle" href="javascript:void(0)">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="General Setting">Global Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'setting' ? 'active' : '' }}"
                        href="{{ route('admin.setting.index') }}">
                        <i class="menu-icon tf-icons bx bx-cog"></i>
                        <div data-i18n="Accordion">Settings</div>
                    </a>
                </li>
                {{-- <li class="menu-item">
                    <a href="{{ route('galleries.index') }}"
                        class="menu-link {{ Request::segment(2) == 'galleries' ? 'active' : '' }}">
                        <i class="menu-icon tf-icons bx bx-images"></i>
                        <div data-i18n="Accordion">Gallery</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a class="menu-link {{ Request::segment(2) == 'galleries' ? 'active' : '' }}"
                        href="{{ route('counter.index') }}">
                        <i class="menu-icon tf-icons bx bx-images"></i>
                        <div data-i18n="Accordion">Counter</div>
                    </a>
                </li> --}}
                {{-- sliders --}}
                <li class="menu-item {{ Request::segment(2) == 'slider' ? 'active open' : '' }}">
                    <a class="menu-link" id="slider-link" href="{{ route('slider.index') }}">
                        <i class="menu-icon tf-icons bx bx-news"></i>
                        <div data-i18n="General Setting">Sliders</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::segment(2) == 'social' ? 'active open' : '' }}">
                    <a class="menu-link" href="{{ route('social.index') }}">
                        <i class="menu-icon tf-icons bx bx-news"></i>
                        <div data-i18n="General Setting">Social Medias</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::segment(2) == 'popup' ? 'active open' : '' }}">
                    <a class="menu-link" id="popup-link" href="{{ route('popup.index') }}">
                        <i class="menu-icon tf-icons bx bx-news"></i>
                        <div data-i18n="General Setting">PopUp</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<style>
    .menu-vertical .menu-item .menu-link {
        font-size: 16px;
        background-color: rgba(237, 240, 240, 0.233)
    }
</style>
