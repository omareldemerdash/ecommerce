@extends('layouts.app')


@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
<div class="container">
    <h5 class="mb-0">
        <a href="{{url('/')}}">Home</a> / 
        <a href="{{route('wishlist.index')}}">Wishlist</a>
    </h5>
</div>
</div>
<div class="container my-5">
<div class="card shadow">
 <div class="card-body">
     @if ($wishlist->count() > 0)
     <div class="card-body">
        <table class="table table-borderles">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">control</th>
                </tr>
            </thead>
            <tbody>
              
                @foreach ($wishlist as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="{{ URL::asset('img/') }}/{{ $item->products->image }}" height="70vh"></td>
                        <td>{{ $item->products->name }}</td>
                        <td>{{ $item->products->selling_price }}</td>
                        
                        <td>
                            <form action="{{url('add-to-cart')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $item->products->id }}"
                                    name="product_id">
                                    <input type="hidden" value="1"
                                    name="product_qty">
                            <button type="submit" class="btn btn-success me-3 float-start">Add to Cart<i
                                class="fa fa-shopping-cart"></i></button>
                            </form>
                            <form method="POST" action="{{ route('wishlist.destroy', $item->prod_id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove <i class="fa fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                
                @endforeach

            </tbody>
        </table>
        
    </div>
     @else
         <h4>There are no products in wishlist</h4>
     @endif
 </div>
</div>
</div>
@endsection