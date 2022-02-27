@extends('layouts.app')
@section('title',$products->name)

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h5 class="mb-0">Collections / {{$products->category->name}} / {{$products->name}}</h5>
    </div>
</div>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{asset('img/'.$products->image)}}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name}}
                            @if ($products->trending == '1')
                            <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                            @endif
                        </h2>
                        <hr>
                        <label class="fw-bold"> price :{{$products->selling_price}}</label>
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
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3">
                                    <input type="number" class="w-50" min="1" value="1">

                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="button" class="btn btn-success me-3 float-start">Add to Cart<i class="fa fa-shopping-cart"></i></button>
                                <button type="button" class="btn btn-primary me-3 float-start">Add to Wishlist <i class="fa fa-heart"></i></button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h3>Description</h3>
                    <p class="mt-3">
                        {{$products->description}}
                    </p>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Rate this product
  </button>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <form action="{{url('add-rating')}}" method="POST">
            @csrf
            <input type="hidden" name="prod_id" value="{{$products->id}}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rate {{$products->name}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
                    

                </div>
            </div>
        </div>
    </div>
@endsection
