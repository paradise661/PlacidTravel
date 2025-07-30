@extends('layouts.admin.master')
@section('title', 'Create New Posts')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Update Test</h5>
                <small class="text-muted float-end">
                    <a href="{{ route('test.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <form method="POST" class="row" action="{{ route('test.update', $test->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')

                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4">
                            <!-- name -->
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name', $test->name) }}"
                                    class="form-control br-8 @error('name') is-invalid @enderror" placeholder="Enter Name">
                                @error('name')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- slug  -->
                            <div class="form-group mb-3">
                                <label for="name">Slug</label>
                                <input type="text" name="slug" value="{{ old('slug', $test->slug) }}"
                                    class="form-control br-8 @error('slug') is-invalid @enderror" placeholder="Enter Name">
                                @error('slug')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Order -->
                            <div class="form-group mb-3">
                                <label for="name">Order</label>
                                <input type="number" name="order" value="{{ old('order', $test->order) }}"
                                    class="form-control br-8 @error('order') is-invalid @enderror"
                                    placeholder="order Should be unique">
                                @error('slug')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="10"
                                    class="form-control ckeditor br-8 @error('description') is-invalid @enderror" placeholder="Enter Description">{{ old('description', $test->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- other description --}}
                            <div class="form-group mb-3">
                                <label for="other_description">Description</label>
                                <textarea name="other_description" id="other_description" rows="10"
                                    class="form-control ckeditor1 br-8 @error('description') is-invalid @enderror"
                                    placeholder="Enter other_description">{{ old('other_description', $test->other_description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            {{-- additional description --}}
                            <div class="form-group mb-3">
                                <label for="additional_description">Additional description</label>
                                <textarea name="additional_description" id="additional_description" rows="10"
                                    class="form-control ckeditor2 br-8 @error('additional_description') is-invalid @enderror"
                                    placeholder="Enter additional_description">{{ old('additional_description', $test->additional_description) }}</textarea>
                                @error('additional_description')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- short description -->
                            <div class="form-group mb-3">
                                <label for="name">Short Description</label>
                                <textarea rows="5" name="short_description" value="{{ old('short_description', $test->short_description) }}"
                                    class="form-control br-8 @error('short_description') is-invalid @enderror">{{ old('short_description', $test->short_description) }}  </textarea>
                                @error('slug')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-body seo my-5 shadow br-8 p-4">
                            <fieldset class="border p-3">
                                <legend class="float-none w-auto legend-title">SEO</legend>
                                @php
                                    $seoFields = [
                                        ['field' => 'seo_title', 'label' => 'Seo Title', 'type' => 'text'],
                                        [
                                            'field' => 'seo_description',
                                            'label' => 'Seo Description',
                                            'type' => 'textarea',
                                        ],
                                        ['field' => 'seo_keywords', 'label' => 'Seo Keywords', 'type' => 'text'],
                                        ['field' => 'seo_schema', 'label' => 'Seo Keywords', 'type' => 'text'],
                                    ];
                                @endphp
                                @foreach ($seoFields as $field)
                                    <div class="form-group mb-3">
                                        <label for="{{ $field['field'] }}">{{ $field['label'] }}</label>
                                        @if ($field['type'] === 'text')
                                            <input type="text" name="{{ $field['field'] }}"
                                                value="{{ old($field['field'], isset($test) ? $test->{$field['field']} : '') }}"
                                                class="form-control br-8" placeholder="Enter {{ $field['label'] }}">
                                        @elseif($field['type'] === 'textarea')

                                        @elseif($field['type'] === 'textarea')
                                            <textarea name="{{ $field['field'] }}" rows="4" class="form-control br-8"
                                                placeholder="Enter {{ $field['label'] }}">{{ old($field['field'], isset($test) ? $test->{$field['field']} : '') }}</textarea>
                                        @endif
                                    </div>
                                @endforeach
                            </fieldset>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select name="status" id="status" class="form-select ms-5">
                                    <option value="1" class="p-3">Publish</option>
                                    <option value="0" class="p-3">Draft</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <!-- banner image -->
                            <div class="form-group mb-3 mt-2">
                                <label for="image">Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" data-show-remove="false"
                                        class="dropify @error('image') is-invalid @enderror" id="image"
                                        data-default-file="{{ $test->image }}">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 mt-2">
                                <label for="banner_image">Banner Image</label>
                                <div class="custom-file">
                                    <input type="file" name="banner_image" data-show-remove="false"
                                        class="dropify @error('image') is-invalid @enderror" id="banner_image"
                                        data-default-file="{{ $test->banner_image }}">
                                    @error('image')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="shadow-sm">

                            <div class="card-footers">
                                <button type="submit" class="btn btn-lg btn-primary"><i class="fa-solid fa-plus"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
