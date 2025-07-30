@extends('layouts.admin.master')
@section('title', 'Website Settings')

@section('content')
@include('admin.includes.message')
<div class="content">
    <div class="container-fluid">
        <div class="">
            <div class="card-body p-0">
                {{-- <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    @method('POST')
                    <div class="card card-primary shadow br-8">
                        <div class="card-body">
                            <div class="row">
                                @include('admin.setting.sidenav')
                                <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">
                                    {{-- Global --}}
                                    <div class="tab-pane fade show active" id="v-pills-global" role="tabpanel" aria-labelledby="v-pills-global-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_logo">Site Main Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="site_main_logo" class="mainlogo" id="site_logo" data-show-remove="false" data-default-file="{{ $settings['site_main_logo'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="footer_logo">Site Fav Icon</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="site_fav_icon" class="footerlogo" id="footer_logo" data-show-remove="false" data-default-file="{{ $settings['site_fav_icon'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="site_information">Site Information</label>
                                                    <textarea name="site_information" rows="4" class="form-control br-8" placeholder="Enter Site Information">{{ $settings['site_information'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_phone">Phone Number</label>
                                                    <input type="tel" name="site_phone" value="{{ $settings['site_phone'] }}" class="form-control br-8" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_email">Email</label>
                                                    <input type="email" name="site_email" value="{{ $settings['site_email'] }}" class="form-control br-8" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_location">Location</label>
                                                    <input type="text" name="site_location" value="{{ $settings['site_location'] }}" class="form-control br-8" placeholder="Enter Location">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_location_url">Location Url</label>
                                                    <input type="text" name="site_location_url" value="{{ $settings['site_location_url'] }}" class="form-control br-8" placeholder="Enter Location Url">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_facebook">Facebook</label>
                                                    <input type="url" name="site_facebook" value="{{ $settings['site_facebook'] }}" class="form-control br-8" placeholder="Enter Facebook">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_youtube">Youtube</label>
                                                    <input type="url" name="site_youtube" value="{{ $settings['site_youtube'] }}" class="form-control br-8" placeholder="Enter Youtube">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_instagram">Instagram</label>
                                                    <input type="url" name="site_instagram" value="{{ $settings['site_instagram'] }}" class="form-control br-8" placeholder="Enter Instagram">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="site_linkedin">Linkedin</label>
                                                    <input type="url" name="site_linkedin" value="{{ $settings['site_linkedin'] }}" class="form-control br-8" placeholder="Enter linkedin">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="site_copyright">Site Copyright</label>
                                                    <textarea name="site_copyright" rows="4" class="form-control br-8" placeholder="Enter Site Copyright">{{ $settings['site_copyright'] }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Home page --}}

                                    @include('admin.setting.component.home')


                                    {{-- Seo page --}}

                                    @include('admin.setting.component.seo')

                                    {{-- About Page --}}

                                    @include('admin.setting.component.about')

                                   {{-- contact --}}
                                   @include('admin.setting.component.faq') 

                                   {{-- Scholarship --}}
                                   @include('admin.setting.component.scholarship')                         

                                   {{-- Teams --}}
                                    <div class="tab-pane fade" id="v-pills-member" role="tabpanel" aria-labelledby="v-pills-member-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="member_title">Enter Team Title</label>
                                                    <input type="text" name="member_title" value="{{ $settings['member_title'] }}" class="form-control br-8" placeholder="Enter Team Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="member_image">Enter Team Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="member_image" class="memberimage" id="member_image" data-show-remove="false" data-default-file="{{ $settings['member_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="member_description">Enter Team Description</label>
                                                    <textarea name="member_description" rows="4" class="form-control ckeditor br-8">{{ $settings['member_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="member_seo_title">Enter Team Seo
                                                                    Title</label>
                                                                <input type="text" name="member_seo_title" value="{{ $settings['member_seo_title'] }}" class="form-control br-8" placeholder="Enter Team Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="member_seo_description">Enter Team Seo
                                                                    Keywords</label>
                                                                <input type="text" name="member_seo_description" value="{{ $settings['member_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="member_seo_keywords">Enter Team Seo
                                                                    Description</label>
                                                                <textarea name="member_seo_keywords" rows="4" class="form-control br-8">{{ $settings['member_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Services --}}
                                    <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="service_title">Enter Service Title</label>
                                                    <input type="text" name="service_title" value="{{ $settings['service_title'] }}" class="form-control br-8" placeholder="Enter Service Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="service_image">Enter Service Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="service_image" class="serviceimage" id="service_image" data-show-remove="false" data-default-file="{{ $settings['service_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="service_description">Enter Service Description</label>
                                                    <textarea name="service_description" rows="4" class="form-control ckeditor br-8">{{ $settings['service_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="service_seo_title">Enter Service Seo
                                                                    Title</label>
                                                                <input type="text" name="service_seo_title" value="{{ $settings['service_seo_title'] }}" class="form-control br-8" placeholder="Enter Service Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="service_seo_description">Enter Service Seo
                                                                    Keywords</label>
                                                                <input type="text" name="service_seo_description" value="{{ $settings['service_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="service_seo_keywords">Enter Service Seo
                                                                    Description</label>
                                                                <textarea name="service_seo_keywords" rows="4" class="form-control br-8">{{ $settings['service_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                      {{-- Test preperation --}}
                                      @include('admin.setting.component.testprep')

                                    {{-- Blogs --}}
                                    @include('admin.setting.component.blog')


                                    <div class="tab-pane fade" id="v-pills-gallerys" role="tabpanel" aria-labelledby="v-pills-gallerys-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="gallerys_title">Enter Gallerys Title</label>
                                                    <input type="text" name="gallerys_title" value="{{ $settings['gallerys_title'] }}" class="form-control br-8" placeholder="Enter Gallerys Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="gallerys_image">Enter Gallerys Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="gallerys_image" class="gallerysimage" id="gallerys_image" data-show-remove="false" data-default-file="{{ $settings['gallerys_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="gallerys_description">Enter Gallerys
                                                        Description</label>
                                                    <textarea name="gallerys_description" rows="4" class="form-control ckeditor br-8">{{ $settings['gallerys_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">

                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="gallerys_seo_title">Enter Gallerys Seo
                                                                    Title</label>
                                                                <input type="text" name="gallerys_seo_title" value="{{ $settings['gallerys_seo_title'] }}" class="form-control br-8" placeholder="Enter Gallerys Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="gallerys_seo_description">Enter Gallerys
                                                                    Seo Keywords</label>
                                                                <input type="text" name="gallerys_seo_description" value="{{ $settings['gallerys_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="gallerys_seo_keywords">Enter Gallerys Seo
                                                                    Description</label>
                                                                <textarea name="gallerys_seo_keywords" rows="4" class="form-control br-8">{{ $settings['gallerys_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                   
                                    {{-- Locations --}}
                                    <div class="tab-pane fade" id="v-pills-location" role="tabpanel" aria-labelledby="v-pills-location-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="location_title">Enter Location Title</label>
                                                    <input type="text" name="location_title" value="{{ $settings['location_title'] }}" class="form-control br-8" placeholder="Enter location Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="location_image">Enter location Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="location_image" class="locationimage" id="location_image" data-show-remove="false" data-default-file="{{ $settings['location_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="location_description">Enter location
                                                        Description</label>
                                                    <textarea name="location_description" rows="4" class="form-control ckeditor br-8">{{ $settings['location_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="location_seo_title">Enter location Seo
                                                                    Title</label>
                                                                <input type="text" name="location_seo_title" value="{{ $settings['location_seo_title'] }}" class="form-control br-8" placeholder="Enter location Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="location_seo_description">Enter location
                                                                    Seo Keywords</label>
                                                                <input type="text" name="location_seo_description" value="{{ $settings['location_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="location_seo_keywords">Enter location Seo
                                                                    Description</label>
                                                                <textarea name="location_seo_keywords" rows="4" class="form-control br-8">{{ $settings['location_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Study Abroad  --}}

                                    <div class="tab-pane fade" id="v-pills-abroadss" role="tabpanel" aria-labelledby="v-pills-abroadss-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="abroads_title">Enter abroads Title</label>
                                                    <input type="text" name="abroads_title" value="{{ $settings['abroads_title'] }}" class="form-control br-8" placeholder="Enter abroads Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="abroads_image">Enter abroads Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="abroads_image" class="abroadsimage" id="abroads_image" data-show-remove="false" data-default-file="{{ $settings['abroads_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="abroads_description">Enter abroads Description</label>
                                                    <textarea name="abroads_description" rows="4" class="form-control ckeditor br-8">{{ $settings['abroads_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="abroads_seo_title">Enter abroads Seo
                                                                    Title</label>
                                                                <input type="text" name="abroads_seo_title" value="{{ $settings['abroads_seo_title'] }}" class="form-control br-8" placeholder="Enter abroads Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="abroads_seo_description">Enter abroads Seo
                                                                    Keywords</label>
                                                                <input type="text" name="abroads_seo_description" value="{{ $settings['abroads_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="abroads_seo_keywords">Enter abroads Seo
                                                                    Description</label>
                                                                <textarea name="abroads_seo_keywords" rows="4" class="form-control br-8">{{ $settings['abroads_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Review/Testimonials --}}

                                    <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="review_title">Enter Review Title</label>
                                                    <input type="text" name="review_title" value="{{ $settings['review_title'] }}" class="form-control br-8" placeholder="Enter Review Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="review_image">Enter Review Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="review_image" class="reviewimage" id="review_image" data-show-remove="false" data-default-file="{{ $settings['review_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="review_description">Enter Review Description</label>
                                                    <textarea name="review_description" rows="4" class="form-control ckeditor br-8">{{ $settings['review_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="review_seo_title">Enter Review Seo
                                                                    Title</label>
                                                                <input type="text" name="review_seo_title" value="{{ $settings['review_seo_title'] }}" class="form-control br-8" placeholder="Enter Review Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="review_seo_description">Enter Review Seo
                                                                    Keywords</label>
                                                                <input type="text" name="review_seo_description" value="{{ $settings['review_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="review_seo_keywords">Enter Review Seo
                                                                    Description</label>
                                                                <textarea name="review_seo_keywords" rows="4" class="form-control br-8">{{ $settings['review_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Videos --}}
                                    <div class="tab-pane fade" id="v-pills-videos" role="tabpanel" aria-labelledby="v-pills-videos-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="video_title">Enter Video Title</label>
                                                    <input type="text" name="video_title" value="{{ $settings['video_title'] }}" class="form-control br-8" placeholder="Enter Video Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="video_image">Enter Video Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="video_image" class="videoimage" id="video_image" data-show-remove="false" data-default-file="{{ $settings['video_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="video_description">Enter Video Description</label>
                                                    <textarea name="video_description" rows="4" class="form-control ckeditor br-8">{{ $settings['video_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="video_seo_title">Enter Video Seo
                                                                    Title</label>
                                                                <input type="text" name="video_seo_title" value="{{ $settings['video_seo_title'] }}" class="form-control br-8" placeholder="Enter Video Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="video_seo_description">Enter Video Seo
                                                                    Keywords</label>
                                                                <input type="text" name="video_seo_description" value="{{ $settings['video_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="video_seo_keywords">Enter Video Seo
                                                                    Description</label>
                                                                <textarea name="video_seo_keywords" rows="4" class="form-control br-8">{{ $settings['video_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                     
                                    {{-- Downloads --}}
                                    <div class="tab-pane fade" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-download-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="download_title">Enter Download Title</label>
                                                    <input type="text" name="download_title" value="{{ $settings['download_title'] }}" class="form-control br-8" placeholder="Enter Download Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="download_image">Enter Download Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="download_image" class="downloadimage" id="download_image" data-show-remove="false" data-default-file="{{ $settings['download_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="download_description">Enter Download
                                                        Description</label>
                                                    <textarea name="download_description" rows="4" class="form-control ckeditor br-8">{{ $settings['download_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="download_seo_title">Enter Download Seo
                                                                    Title</label>
                                                                <input type="text" name="download_seo_title" value="{{ $settings['download_seo_title'] }}" class="form-control br-8" placeholder="Enter Download Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="download_seo_description">Enter Download
                                                                    Seo Keywords</label>
                                                                <input type="text" name="download_seo_description" value="{{ $settings['download_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="download_seo_keywords">Enter Download Seo
                                                                    Description</label>
                                                                <textarea name="download_seo_keywords" rows="4" class="form-control br-8">{{ $settings['download_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Partners --}}
                                    <div class="tab-pane fade" id="v-pills-partners" role="tabpanel" aria-labelledby="v-pills-partners-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="partner_title">Enter Partner Title</label>
                                                    <input type="text" name="partner_title" value="{{ $settings['partner_title'] }}" class="form-control br-8" placeholder="Enter Partner Title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="partner_image">Enter Partner Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="partner_image" class="partnerimage" id="partner_image" data-show-remove="false" data-default-file="{{ $settings['partner_image'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="partner_description">Enter Partner Description</label>
                                                    <textarea name="partner_description" rows="4" class="form-control ckeditor br-8">{{ $settings['partner_description'] }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="border p-3">
                                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="partner_seo_title">Enter Partner Seo
                                                                    Title</label>
                                                                <input type="text" name="partner_seo_title" value="{{ $settings['partner_seo_title'] }}" class="form-control br-8" placeholder="Enter Partner Seo Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="partner_seo_description">Enter Partner Seo
                                                                    Keywords</label>
                                                                <input type="text" name="partner_seo_description" value="{{ $settings['partner_seo_description'] }}" class="form-control br-8" placeholder="Enter Homepage Seo Keywords">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-3">
                                                                <label for="partner_seo_keywords">Enter Partner Seo
                                                                    Description</label>
                                                                <textarea name="partner_seo_keywords" rows="4" class="form-control br-8">{{ $settings['partner_seo_keywords'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-footers">
                                <button type="submit" class="btn btn-lg btn-primary"><i class="fa-solid fa-rotate"></i> Update Setting</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection