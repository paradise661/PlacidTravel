@extends('layouts.admin.master')
@section('title', 'Edit ' . $location->name ?? '')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Location - {{ $location->name ?? '' }}</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('locations.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0 mb-5">
                <form class="row" method="POST" action="{{ route('locations.update', $location->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-9">
                        <div class="card card-body main-description shadow br-8 p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="name">Name</label>
                                        <input class="form-control br-8 @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name', $location->name) }}"
                                            placeholder="Enter Name">
                                        @error('name')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="member_location">Member Location</label>
                                        <input class="form-control br-8 @error('member_location') is-invalid @enderror"
                                            type="text" name="member_location"
                                            value="{{ old('member_location', $location->member_location) }}"
                                            placeholder="Enter Member Location">
                                        @error('member_location')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="location">location</label>
                                <input class="form-control br-8 @error('location') is-invalid @enderror" type="text"
                                    name="location" value="{{ old('location', $location->location) }}"
                                    placeholder="Enter location">
                                @error('location')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="location_url">location_url</label>
                                <input class="form-control br-8 @error('location_url') is-invalid @enderror" type="url"
                                    name="location_url" value="{{ old('location_url', $location->location_url) }}"
                                    placeholder="Enter location_url">
                                @error('location_url')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="phone">phone</label>
                                <input class="form-control br-8 @error('phone') is-invalid @enderror" type="tel"
                                    name="phone" value="{{ old('phone', $location->phone) }}" placeholder="Enter phone">
                                @error('phone')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">email</label>
                                <input class="form-control br-8 @error('email') is-invalid @enderror" type="email"
                                    name="email" value="{{ old('email', $location->email) }}" placeholder="Enter email">
                                @error('email')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body card shadow br-8">
                            <div class="form-group mb-3 d-flex align-items-center">
                                <label class="m-0 p-0">Status</label>
                                <select class="form-select ms-5" id="status" name="status">
                                    <option class="p-3" value="0" @if ($location->status == 0) selected @endif>
                                        Draft</option>
                                    <option class="p-3"@if ($location->status == 1) selected @endif value="1">
                                        Publish</option>
                                </select>
                            </div>

                            <hr class="shadow-sm">

                            <div class="form-group mb-3 d-flex align-items-center">
                                <label for="order">Order</label>
                                <input class="form-control ms-5 @error('order') is-invalid @enderror" type="number"
                                    name="order" value="{{ old('order', $location->order) }}" placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
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
