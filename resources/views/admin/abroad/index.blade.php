@extends('layouts.admin.master')
@section('title', 'All Countries')

@section('content')
    @include('admin.includes.message')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0 text-capitalize font-weight-bold ">Study Abroads ({{ $abroads->total() }})</h3>
            <small class="text-muted float-end">
                <a href="{{ route('abroad.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>
                    Create</a>
            </small>
        </div>

        <div class="table-responsive text-nowrap text-capitalize ">
            @if (!$abroads->isEmpty())
                <table class="table">
                    <thead>
                        <tr class="text-lg">
                            <th>SN</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($abroads as $key => $blog)
                            <tr>
                                <td><strong>{{ $key + $abroads->firstItem() }}</strong></td>
                                <td class="">
                                    <a href="{{ asset($blog->image) }}"
                                        data-fancybox="demo" class="fancybox">
                                        <img src="{{ asset($blog->image) }}"
                                            alt="{{ $blog->name }}" width="120px">
                                    </a>
                                </td>
                                <td><strong>{{ $blog->name ?? '' }}</strong></td>
                                <td><strong>{{ $blog->order ?? '' }}</strong></td>
                                <td><span class="badge rounded-pill bg-label-{{  $blog->status ==1?'success':'danger'  }}">{{ $blog->status ==1?'Publish':'Draft' }}</span></td>
                                <td>
                                    <!-- <a href="/abroads/{{ $blog['slug'] }}"
                                        style="float: left;margin-right: 5px;" target="_blank" class="btn btn-sm btn-success"><i
                                            class="fa-solid fa-eye"></i> View</a> -->

                                    <a href="{{ route('abroad.edit', $blog->id) }}"
                                        style="float: left;margin-right: 5px; font-size:15px" class="btn btn-sm btn-primary"><i
                                            class="fa-solid fa-pen-to-square"></i> Edit</a>


                                    <form class="delete-form" action="{{ route('abroad.destroy', $blog->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete_abroads mr-2 text-lg" id=""
                                            title="Delete" data-type="confirm" style="font-size:15px"><i class="fa fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $abroads->links() }}
            @else
                <div class="card-body">
                    <h6>No Data Found!</h6>
                </div>
            @endif
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $('.delete_abroads').click(function(e) {
            e.preventDefault();
            swal({
                    title: `Are you sure?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $(this).closest("form").submit();
                    }
                });

        });
    </script>
@endsection
