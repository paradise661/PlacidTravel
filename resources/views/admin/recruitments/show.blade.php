@extends('layouts.admin.master')
@section('title', 'Recruitments')

@section('content')
    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recruitment</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('recruitments.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Back</a>
                </small>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $recruitment->name }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $recruitment->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $recruitment->email }}</td>
                        </tr>
                        <tr>
                            <td>Page</td>
                            <td><a class="btn btn-success" href="{{ asset($recruitment->Url) }}"><i
                                        class="fa-solid fa-eye"></i> View</a></td>
                        </tr>
                        <tr>
                            <td>Vacancy Page</td>
                            <td><a class="btn btn-success" href="{{ asset($recruitment->Url) }}"><i
                                        class="fa-solid fa-eye"></i> View</a></td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td>{{ $recruitment->created_at->diffForHumans() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
