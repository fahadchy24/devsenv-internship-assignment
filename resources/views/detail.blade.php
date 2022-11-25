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
                                    placeholder="{{ $magazine->title }}" disabled>
                                <div id="slug" class="form-text mt-2">
                                    <a
                                        href="http://localhost:8000/magazines/{{ $magazine->slug }}">http://localhost:8000/magazines/{{ $magazine->slug }}</a>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category"
                                    placeholder="{{ $magazine->category }}" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="my-4">
                                <label for="">Images</label>
                                <div class="mt-2">
                                    <picture>
                                        @foreach ($magazine->image as $image)
                                            <img src="{{ Storage::url($image) }}" width="100" height="100" class="img-fluid img-thumbnail"
                                                alt="...">
                                        @endforeach
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="">Description</label>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" style="height: 100px">{{ strip_tags($magazine->description) }}</textarea>
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
