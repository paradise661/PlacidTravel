@extends('layouts.admin.master')
@section('title', 'Create New abroads')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create Abroads</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('abroaduniversity.index', $abroad_id) }}"><i
                            class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form class="row" method="POST" action="{{ route('abroadcourse.store', $abroad_id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4">

                            <!-- name -->
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Slugs -->
                            <div class="form-group mb-3">
                                <label for="name">Slug</label>
                                <input class="form-control br-8 @error('slug') is-invalid @enderror" type="text"
                                    name="slug" value="{{ old('slug') }}" placeholder="Enter slug">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control ckeditor br-8 @error('description') is-invalid @enderror" id="description"
                                    name="description" rows="10" placeholder="Enter Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- short description -->
                            <div class="form-group mb-3">
                                <label for="name">Short Description</label>
                                <textarea class="form-control br-8 @error('short_description') is-invalid @enderror"
                                    placeholder="Enter Short description" rows="4" type="text" name="short_description"
                                    value="{{ old('short_description') }}" placeholder="Enter Name"> </textarea>
                                @error('short_description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="card card-body seo my-5 shadow br-8 p-4">

                                <fieldset class="border p-3">
                                    <legend class="float-none w-auto legend-title">SEO</legend>
                                    <div class="form-group mb-3">
                                        <label for="seo_title">Seo Title</label>
                                        <input class="form-control br-8" type="text" name="seo_title" value="{{ old('seo_title') }}" placeholder="Enter Seo Title">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="seo_description">Description</label>
                                        <textarea class="form-control br-8" name="seo_description" rows="4" placeholder="Enter Seo Description">{{ old('seo_description') }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="seo_keywords">Seo Keywords</label>
                                        <input class="form-control br-8" type="text" name="seo_keywords" value="{{ old('seo_keywords') }}" placeholder="Enter Seo Keywords">
                                    </div>
                                </fieldset>
                            </div> -->
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="1">Publish</option>
                                    <option class="p-3" value="0">Draft</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order') }}" placeholder="Enter Order">
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
                                        data-show-remove="false" type="file" name="image">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button class="btn btn-lg btn-primary" type="submit"><i class="fa-solid fa-plus"></i>
                                    Publish</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
