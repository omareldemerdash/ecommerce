@extends('layouts.app')
@section('content')
    @include('layouts.includes.slider')
  
     

        {{-- <div class="py-2">
            <div class="container">
                <div class="row">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $product)
                    <div class="item">
                        <div class="card">
                            <img src="{{asset('img/' . $product->image)}}" alt="product-image">
                            <div class="card-body">
                                <h5>{{$product->name}}</h5>
                                <small>{{$product->selling_price}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    
                </div>
                
                    

            </div>

        </div> --}}
    @endsection
    {{-- @section('scripts')
        <script>
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
            </script>
    @endsection --}}
