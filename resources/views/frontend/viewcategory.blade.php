@extends('layouts.app')
@section('tittle')
    {{ $category->name }}
@endsection
@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">Collections / {{ $category->name }}</h5>
        </div>
    </div>
    <div class="py-2">
        <div class="container">
            <div class="row">
                <h2>{{ $category->name }}</h2>
                @foreach ($products as $product)
                    <div class="col-md-3 mb-3">
                        <a style="color:#2c3e50 " href="{{ url('category/' . $category->slug . '/' . $product->slug) }}">
                            <div class="card">

                                <img src="{{ asset('img/' . $product->image) }}" alt="product-image">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                    <label class="me-3 text-decoration-line-through">original price
                                        :{{ $product->original_price }}</label>
                                    <label class="fw-bold">selling price :{{ $product->selling_price }}</label>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>



        </div>

    </div>
@endsection
