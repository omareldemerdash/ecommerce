@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">{{__('Dashboard')}}</h1>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset('img/customer.jpg')}}" height="400vh" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Users</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="{{route('users.index')}}" class="btn btn-primary">Customize</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/roles.jpg')}}" height="400vh" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Roles</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="{{route('roles.index')}}" class="btn btn-primary">Customize</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/Categories.jpg')}}" height="400vh" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              <a href="{{route('categories.index')}}" class="btn btn-primary">Customize</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('img/Products.jpg')}}" height="400vh" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="{{route('products.index')}}" class="btn btn-primary">Customize</a>
            </div>
          </div>
        </div>
      </div>
</div>
    
@endsection