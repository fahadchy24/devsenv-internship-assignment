@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-4">All Magazine</h3>
                <a href="{{ route('magazine.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fa-solid fa-plus"></i> Create new </a>
            </div>
            <div>
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">URL</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($magazines as $magazine)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <td>{{ $magazine->title }}</td>
                                <td>{{ $magazine->slug }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('show', $magazine->slug) }}">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
