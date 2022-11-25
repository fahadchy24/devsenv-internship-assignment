@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title mb-5">New Magazine</h5>
            <span class="divider"></span>
            <div class="mt-6">
                <form action="{{ route('magazine.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    aria-describedby="title">
                            </div>
                            <div class="mb-4">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" name="category" id="inputGroupSelect01">
                                    <option selected disabled>-- Select --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['name'] }}">{{  $category['name']  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <label for="basic-url" class="form-label">URL(optional)</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">http://localhost/magazines/</span>
                                    <input type="text" class="form-control" id="basic-url" name="slug"
                                        aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Images (Optional) (Max-10)</label>
                                    <input class="dropify" type="file" name="image[]" id="formFileMultiple" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="editor" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control" name="description" id="editor" rows="6"></textarea>
                    </div>
                    <a href="{{ route('index') }}" class="btn btn-sm btn-outline-dark">
                        <i class="fa-solid fa-angles-left"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
