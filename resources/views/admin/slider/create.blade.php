@extends('layouts.admin.master')

@section('title', 'Create New slider')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4 p-6">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Create Slider</h3>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('slider.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>

            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- functions -->
                    @php
                        $fields = [
                            'name' => 'Name',
                            'slug' => 'Slug',
                            'link' => 'link',
                            'description' => 'Description',
                            'short_description' => 'Short Description',
                        ];
                        $seo = [
                            'seo_title' => 'Seo Title',
                            'seo_keywords' => 'SEO Keyword',
                            'seo_description' => 'Seo Description',
                            'seo_schema' => 'Seo Schema',
                        ];
                    @endphp

                    <div class="col-md-8">
                        <div class="card-body card font-weight-bold br-8 mb-3">

                            @foreach ($fields as $name => $label)
                                <div class="form-group font-weight-bold mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if ($name == 'description')
                                        <textarea class="form-control ckeditor br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="10" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @elseif($name == 'short_description')
                                        <textarea class="form-control br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="4" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input class="form-control br-8 @error($name) is-invalid @enderror" type="text"
                                            name="{{ $name }}" value="{{ old($name) }}"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>

                        <!-- seo sections -->
                        <div class="card-body card shadow br-8">

                            @foreach ($seo as $name => $label)
                                <div class="form-group mb-3">
                                    <label for="{{ $name }}">{{ $label }}</label>
                                    @if ($name == 'seo_Description')
                                        <textarea class="form-control ckeditor br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="10" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @elseif($name == 'seo_description')
                                        <textarea class="form-control br-8 @error($name) is-invalid @enderror" id="{{ $name }}"
                                            name="{{ $name }}" rows="3" placeholder="Enter {{ strtolower($label) }}">{{ old($name) }}</textarea>
                                    @else
                                        <input class="form-control br-8 @error($name) is-invalid @enderror" type="text"
                                            name="{{ $name }}" value="{{ old($name) }}"
                                            placeholder="Enter {{ strtolower($label) }}">
                                    @endif
                                    @error($name)
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    @include('admin.global.global')

                </form>
            </div>

        </div>
    </div>
@endsection

<!-- style -->

<style>
    label {
        font-weight: 500 !important;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 200%;
    }
</style>
