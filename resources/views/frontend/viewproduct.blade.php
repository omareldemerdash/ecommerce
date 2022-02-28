@extends('layouts.app')
@section('title', $products->name)

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">Collections / {{ $products->category->name }} / {{ $products->name }}</h5>
        </div>
    </div>
    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('img/' . $products->image) }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if ($products->trending == '1')
                                <label style="font-size:16px;"
                                    class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="me-3 text-decoration-line-through">original price
                            :{{ $products->original_price }}</label>
                        <label class="fw-bold">selling price :{{ $products->selling_price }}</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <hr>
                        @if ($products->qty > 0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                            <label class="badge bg-danger">Out of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <form action="{{url('add-to-cart')}}" method="post">
                                    @csrf
                                <input type="hidden" value="{{ $products->id }}" name="product_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <input type="number" name="product_qty" class="w-50 qty-input" min="1" value="1">

                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="submit" class="btn btn-success me-3 float-start">Add to Cart<i
                                        class="fa fa-shopping-cart"></i></button>
                                    </form>
                                <form action="{{route('wishlist.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $products->id }}" name="product_id">
                                    <button type="submit" class="btn btn-primary me-3 float-start">Add to Wishlist
                                        <i class="fa fa-heart"></i></button>
                                </form>
                                    

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h3>Description</h3>
                    <p class="mt-3">
                        {{ $products->description }}
                    </p>
                   
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


