@extends('layouts.admin.master')
@section('title', 'Inquiry')

@section('content')
    @include('admin.includes.message')

    <div class="content">
        <div class="card container-fluid mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Inquiry</h5>
                <small class="text-muted float-end">
                    <a class="btn btn-primary" href="{{ route('contacts.index') }}"><i class="fa-solid fa-arrow-left"></i>
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
                        @if ($contact->name)
                            <tr>
                                <td>Name</td>
                                <td>{{ $contact->name }}</td>
                            </tr>
                        @endif

                        @if ($contact->number)
                            <tr>
                                <td>Phone</td>
                                <td>{{ $contact->number }}</td>
                            </tr>
                        @endif

                        @if ($contact->email)
                            <tr>
                                <td>Email</td>
                                <td>{{ $contact->email }}</td>
                            </tr>
                        @endif

                        @if ($contact->date)
                            <tr>
                                <td>Appointment Date</td>
                                <td>{{ $contact->date }}</td>
                            </tr>
                        @endif

                        @if ($contact->address)
                            <tr>
                                <td>Address</td>
                                <td>{!! $contact->address !!}</td>
                            </tr>
                        @endif

                        @if ($contact->message)
                            <tr>
                                <td>Message</td>
                                <td>{!! $contact->message !!}</td>
                            </tr>
                        @endif

                        @if ($contact->created_at)
                            <tr>
                                <td>Time</td>
                                <td>{{ $contact->created_at->diffForHumans() }}</td>
                            </tr>
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
