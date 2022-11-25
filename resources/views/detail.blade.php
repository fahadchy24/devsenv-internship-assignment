@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">View Magazine - Awesome Magazine</h5>
            <div class="mt-6">
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="slug"
                                    placeholder="Beautiful Islamic Gozol" disabled>
                                <div id="slug" class="form-text mt-2">
                                    <a href="http://www.google.com/">http://www.google.com/</a>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" placeholder="Islamic > Gozol"
                                    disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-4">
                                <label for="">Images</label>
                                <div class="mt-2">
                                    <picture>
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                        <img src="https://via.placeholder.com/100" class="img-fluid img-thumbnail"
                                            alt="...">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="">Description</label>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iusto earum dolore veniam non ea, vel autem ut dolor molestias atque eaque accusamus quibusdam voluptas tempore voluptatibus et consequatur officiis?
                            </textarea>
                        </div>
                    </div>
                    <a href="{{ route('index') }}" class="btn btn-primary">
                        <i class="fa-solid fa-angles-left"></i> Go Back
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
