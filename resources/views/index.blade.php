@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-4">All Magazine</h3>
                <a href="{{ route('magazines.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fa-solid fa-plus"></i> Create new </a>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
