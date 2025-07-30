@extends('layouts.admin.master')
@section('title', 'Edit ' . $slider->name ?? '')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Slider - {{ $slider->name ?? '' }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('slider.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('slider.update', $slider->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4">
                            {{-- Name --}}
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name', $slider->name) }}" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Slug --}}
                            <div class="form-group mb-3">
                                <label for="name">Slug</label>
                                <input class="form-control br-8 @error('slug') is-invalid @enderror" type="text"
                                    name="slug" value="{{ old('slug', $slider->slug) }}" placeholder="Enter slug">
                                @error('slug')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- links --}}
                            <div class="form-group mb-3">
                                <label for="name">Link</label>
                                <input class="form-control br-8 @error('link') is-invalid @enderror" type="text"
                                    name="link" value="{{ old('link', $slider->link) }}" placeholder="Enter link">
                                @error('link')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Link --}}
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter Description">{{ old('description', $slider->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Short description -->
                            <!-- short description -->
                            <div class="form-group mb-3">
                                <label for="name">Short Description</label>
                                <textarea class="form-control br-8 @error('short_description') is-invalid @enderror" type="text"
                                    name="short_description" value="{{ old('short_description', $slider->short_description) }}"
                                    placeholder="Enter title">
                                {{ old('short_description', $slider->short_description) }}
                                </textarea>
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="card card-body seo my-5 shadow br-8 p-4">
                            <fieldset class="border p-3">
                                <legend class="float-none w-auto legend-title">SEO</legend>
                                <div class="form-group mb-3">
                                    <label for="seo_title">Seo Title</label>
                                    <input type="text" name="seo_title" value="{{ old('seo_title',$slider->seo_title) }}" class="form-control br-8" placeholder="Enter Seo Title">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_description">Seo Description</label>
                                    <textarea name="seo_description" rows="4" class="form-control br-8"
                                    placeholder="Enter Seo Description">{{ old('seo_description',$slider->seo_description) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="seo_keywords">Seo Keywords</label>
                                    <input type="text" name="seo_keywords" value="{{ old('seo_keywords',$slider->seo_keywords) }}" class="form-control br-8" placeholder="Enter Seo Keywords">
                                </div>
                            </fieldset>
                        </div> --}}
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="0" @if ($slider->status == 0) selected @endif>
                                        Draft</option>
                                    <option class="p-3"@if ($slider->status == 1) selected @endif value="1">
                                        Publish</option>
                                </select>
                            </div>

                            {{-- order --}}
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $slider->order) }}" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 mt-2">
                                <label for="image">Featured Image</label>
                                <div class="custom-file">
                                    <input class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-show-remove="false" data-default-file="{{ $slider->image }}" type="file"
                                        name="image">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button class="btn btn-lg btn-primary" type="submit"><i class="fa-solid fa-rotate"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
