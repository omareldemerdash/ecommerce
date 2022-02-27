@extends("layouts.admin")
@section('content')
    <div class="container">
        <h1 class="text-center">create product</h1>
        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <select class="form-select" name="cate_id" aria-label="Default select example">
                    <option selected>Select a Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
            </div>
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
                    <textarea class="form-control @error('small_description') is-invalid @enderror"
                        placeholder="Leave a description here" id="floatingTextarea2" name="small_description"></textarea>
                    <label for="floatingTextarea2">small description</label>
                    @error('small_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                <label for="exampleInputEmail1" class="form-label">original price</label>
                <input type="number" class="form-control @error('original_price') is-invalid @enderror" name="original_price">
                @error('original_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">selling price</label>
                <input type="number" class="form-control @error('selling_price') is-invalid @enderror" name="selling_price">
                @error('selling_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <label for="exampleInputEmail1" class="form-label">tax</label>
                    <input type="number" class="form-control @error('tax') is-invalid @enderror" name="tax">
                    @error('tax')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md">
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty">
                    @error('qty')
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="trending">
                    <label class="form-check-label" for="inlineCheckbox2">trending</label>
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
