@extends('layouts.app')


@section('content')
    <main class="my-5">
        <div class="py-3 mb-4 shadow-sm bg-warning border-top">
            <div class="container">
                <h5 class="mb-0">
                    <a href="{{url('/')}}">Home</a> / 
                    <a href="{{url('cart')}}">My cart</a>
                </h5>
            </div>
        </div>
        <div class="card shadow product_data">
            <div class="card-body">
                <table class="table table-borderles">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            <th scope="col">name</th>
                            <th scope="col">price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cartitems as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{ URL::asset('img/') }}/{{ $item->products->image }}" height="70vh"></td>
                                <td>{{ $item->products->name }}</td>
                                <td>{{ $item->products->selling_price }}</td>
                                <td>
                                    <form action="{{route('carts.update',$item->prod_id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{ $item->prod_id }}"
                                            name="prod_id">
                                        <div class="input-group text-center">
                                            <input type="number" name="prod_qty" class="qty-input" min="1"
                                                value="{{ $item->prod_qty }}">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                                        </div>
                                    </form>
                                </td>

                                <td>

                                    <form method="POST" action="{{ route('carts.destroy', $item->prod_id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Remove <i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $total += $item->products->selling_price * $item->prod_qty;
                            @endphp
                        @endforeach

                    </tbody>
                </table>
                <div class="card-footer">
                    <h5>Total price: {{ $total }}</h5>
                </div>
            </div>
        </div>
    </main>
@endsection
