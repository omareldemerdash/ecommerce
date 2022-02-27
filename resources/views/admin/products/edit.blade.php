@extends("layouts.admin")
@section('content')
    <div class="container">
        <h1 class="text-center">edit product</h1>
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="">category</label>
                <select class="form-select" name="cate_id" aria-label="Default select example">
                    <option value="{{$product->category->id}}" selected>{{$product->category->name}}</option>
                
                  </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}"
                    name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">slug</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" value="{{ $product->slug }}"
                    name="slug">
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control @error('small_description') is-invalid @enderror"
                    placeholder="Leave a description here" id="floatingTextarea2" name="small_description">{{ $product->small_description }}</textarea>
                <label for="floatingTextarea2">small description</label>
                @error('small_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror"
                        placeholder="Leave a description here" id="floatingTextarea2" style="height: 100px"
                        name="description">{{ $product->description }}</textarea>
                    <label for="floatingTextarea2">Description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">original price</label>
                <input type="number" class="form-control @error('original_price') is-invalid @enderror" value="{{ $product->original_price }}" name="original_price">
                @error('original_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">selling price</label>
                <input type="number" class="form-control @error('selling_price') is-invalid @enderror" value="{{ $product->selling_price }}" name="selling_price">
                @error('selling_price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <label for="exampleInputEmail1" class="form-label">tax</label>
                    <input type="number" class="form-control @error('tax') is-invalid @enderror" value="{{ $product->tax }}" name="tax">
                    @error('tax')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md">
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    <input type="number" class="form-control @error('qty') is-invalid @enderror" value="{{ $product->qty }}" name="qty">
                    @error('qty')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                        {{ $product->status == '1' ? 'checked' : '' }} name="status">
                    <label class="form-check-label" for="inlineCheckbox1">status</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                        {{ $product->trending == '1' ? 'checked' : '' }} name="trending">
                    <label class="form-check-label" for="inlineCheckbox2">trending</label>
                </div>
            </div>
            <div class="mb-3">
                @if ($product->image)
                    <img src="{{URL::asset('img/')}}/{{$product->image}}" height="400vh" alt="image">
                @endif
                <input type="file" class="form-control" name="image">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta tittle</label>
                <input type="text" class="form-control @error('meta_tittle') is-invalid @enderror"
                    value="{{ $product->meta_tittle }}" name="meta_tittle">
                @error('meta_tittle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta description</label>
                <input type="text" class="form-control @error('meta_description') is-invalid @enderror"
                    value="{{ $product->meta_description }}" name="meta_description">
                @error('meta_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">meta keywords</label>
                <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"
                    value="{{ $product->meta_keywords }}" name="meta_keywords">
                @error('meta_keywords')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">update</button>
        </form>
    </div>
@endsection
