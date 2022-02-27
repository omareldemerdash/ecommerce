@extends("layouts.admin")
@section('content')
    <div class="container">
        <h1 class="text-center">create category</h1>
        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror"
                        placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                    <label for="floatingTextarea2">Description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="status">
                    <label class="form-check-label" for="inlineCheckbox1">status</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="popular">
                    <label class="form-check-label" for="inlineCheckbox2">popular</label>
                </div>
            </div>
            <div class="mb-3">

                <input type="file" class="form-control" name="image">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta tittle</label>
                <input type="text" class="form-control @error('meta_tittle') is-invalid @enderror" name="meta_tittle">
                @error('meta_tittle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta description</label>
                <input type="text" class="form-control @error('meta_description') is-invalid @enderror"
                    name="meta_description">
                @error('meta_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta keywords</label>
                <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords">
                @error('meta_keywords')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
@endsection
