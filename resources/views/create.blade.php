@extends('layout.master')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title mb-5">New Magazine</h5>
            <span class="divider"></span>
            <div class="mt-6">
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="title">
                            </div>
                            <div class="mb-4">
                                {{-- <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" placeholder="Islamic > Gozol"> --}}
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>-- Select --</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <label for="basic-url" class="form-label">URL(optional)</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3">
                                </div>
                            </div>
                            <div class="mb-4">
                                {{-- <label for="">Images (Optional) (Max-10)</label> --}}
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Images (Optional) (Max-10)</label>
                                    <input class="dropify" type="file" id="formFileMultiple" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        {{-- <label for="">Description</label>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iusto earum dolore veniam non ea, vel autem ut dolor molestias atque eaque accusamus quibusdam voluptas tempore voluptatibus et consequatur officiis?
                            </textarea>
                        </div> --}}
                        <label for="editor" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control" name="description" id="editor" rows="6">{!! old('description') !!}</textarea>
                    </div>
                    <a href="{{ route('index') }}" class="btn btn-outline-dark">
                        <i class="fa-solid fa-angles-left"></i> Cancel
                    </a>
                    <a href="{{ route('index') }}" class="btn btn-primary">
                        Save
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
