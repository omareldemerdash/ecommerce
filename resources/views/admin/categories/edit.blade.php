@extends("layouts.admin")
@section('content')
    <div class="container">
        <h1 class="text-center">edit category</h1>

        <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}"
                    name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">slug</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" value="{{ $category->slug }}"
                    name="slug">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror"
                        placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"
                        name="description">{{ $category->description }}</textarea>
                    <label for="floatingTextarea2">Description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        {{ $category->status == '1' ? 'checked' : '' }} name="status">
                    <label class="form-check-label" for="inlineCheckbox1">status</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                        {{ $category->popular == '1' ? 'checked' : '' }} name="popular">
                    <label class="form-check-label" for="inlineCheckbox2">popular</label>
                </div>
            </div>
            <div class="mb-3">
                @if ($category->image)
                    <img src="{{URL::asset('img/')}}/{{$category->image}}" height="400vh" alt="image">
                @endif
                <input type="file" class="form-control" name="image">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta tittle</label>
                <input type="text" class="form-control @error('meta_tittle') is-invalid @enderror"
                    value="{{ $category->meta_tittle }}" name="meta_tittle">
                @error('meta_tittle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta description</label>
                <input type="text" class="form-control @error('meta_description') is-invalid @enderror"
                    value="{{ $category->meta_description }}" name="meta_description">
                @error('meta_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta keywords</label>
                <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"
                    value="{{ $category->meta_keywords }}" name="meta_keywords">
                @error('meta_keywords')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">update</button>
        </form>
    </div>
@endsection
