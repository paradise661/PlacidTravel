@extends('layouts.admin.master')
@section('title', 'Website Settings')
@section('content')
    @include('admin.includes.message')
    <div class="content">
        <div class="container-fluid">
            <div class="">
                <div class="card-body p-0">
                    <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card card-primary shadow br-8">
                            <div class="card-body">
                                <div class="row">
                                    @include('admin.setting.sidenav')
                                    <div class="col-9 col-sm-10 tab-content" id="v-pills-tabContent">

                                        {{-- Global --}}
                                        @include('admin.setting.component.global')

                                        {{-- Home  --}}
                                        @include('admin.setting.component.home')

                                        {{-- Seo  --}}
                                        @include('admin.setting.component.seo')

                                        {{-- About --}}
                                        @include('admin.setting.component.about')

                                        {{-- Contact Us --}}
                                        @include('admin.setting.component.contact')

                                        {{-- Banners --}}
                                        @include('admin.setting.component.banner')

                                    </div>
                                </div>

                                <div class="card-footers">
                                    <button class="btn btn-lg btn-primary" type="submit"><i class="fa-solid fa-rotate"></i>
                                        Update Setting</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
