@extends('layouts.app')
@section('tittle')
    E-shop
@endsection

@section('content')
    @include('layouts.includes.slider')
    {{-- start collections --}}
    <div class="collections container pt-5">
        <div class="row">
            <div class="women col-6">
                <div class="card mb-3">
                    <img src="{{ asset('img/women_collection.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Hot Collection</h5>

                        <h2 class="card-title">New Trend For Women</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, molestiae?
                            Facere debitis eos corrupti accusantium alias accusamus labore perferendis in ducimus vel,
                            eligendi ut molestias. Saepe omnis vero ex iusto.</p>
                        <a href="#" class="btn btn-outline-dark">shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="right-boxes row g-0">
                    <div class=" text-center mb-2 col-12 position-relative">
                        <img class="img-fluid" src="{{ asset('img/bags.png') }}" alt="">
                        <div class="descripe text-center position-absolute top-0 start-0">
                            <a href="{{ url('viewcategory/accessories') }}"
                                class="btn border-light link-light btn-lg w-50 position-absolute top-50 start-50 translate-middle">view
                                collection</a>
                        </div>

                    </div>
                    <div class=" text-center mt-3 col-12 position-relative">
                        <img class="img-fluid" src="{{ asset('img/men_collection.png') }}" alt="">
                        <div class="descripe text-center position-absolute top-0 start-0">
                            <a href="{{ url('viewcategory/men') }}"
                                class="btn border-light link-light btn-lg w-50 position-absolute top-50 start-50 translate-middle">view
                                collection</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Divider-->
        <hr class="my-4" />
        {{-- end collections --}}
        <div class="row g-0 ads">
            <div class="col-lg-6 col-md-12  position-relative">
                <img src="{{ asset('img/ad.png') }}" alt="">
                <div class="overlay position-absolute top-0 start-0">
                    <div class="position-absolute top-50 start-50 textleft">
                        <h2>70%</h2>
                        <p>off</p>
                        <p>Tao Kinben Na?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  position-relative">
                <img src="{{ asset('img/sale.png') }}" alt="">
                <div class="overlay text-center position-absolute top-0 start-0">
                    <div class="position-absolute top-50 start-50 translate-middle textright">
                        <p>AMR SHEHARA KHARAP NA</p>
                        <h2><span>SHEHARA</span> Dia ki Hoy</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Divider-->
        {{-- start categories --}}
        <hr class="my-4" />
        <h3 class="text-center">Categories</h3>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All</a>
            </li>
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('viewcategory/' . $category->slug) }}">{{ $category->name }}</a>
                </li>
            @endforeach

        </ul>
       
        <!-- Divider-->
        <hr class="my-4" />
        {{-- start trending --}}

        <div class="py-2">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">trending items</h2>
                    @foreach ($trending_products as $product)
                        <div class="col-md-3 mb-3 trending">
                            <a href="{{ url('category/' . $category->slug . '/' . $product->slug) }}">
                            <div class="card">
                                <img src="{{ asset('img/' . $product->image) }}" height="400vh" alt="product-image">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                    <small>{{ $product->selling_price }}</small>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($allproducts as $product)
                        <div class="col-md-3 mb-3 all" style="display: none">
                            <div class="card">
                                <img src="{{ asset('img/' . $product->image) }}" height="400vh" alt="product-image">
                                <div class="card-body">
                                    <h5>{{ $product->name }}</h5>
                                    <small>{{ $product->selling_price }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="show-more position-relative mt-5">
                    <button class="btn btn-outline-dark text-center position-absolute top-50 start-50 translate-middle">show
                        more</button>
                </div>
                <div class="show-less position-relative mt-5">
                    <button class="btn btn-outline-dark text-center position-absolute top-50 start-50 translate-middle"
                        style="display: none">show less</button>
                </div>



            </div>

        </div>
    @endsection
