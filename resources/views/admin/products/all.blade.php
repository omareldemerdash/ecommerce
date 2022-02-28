@extends("layouts.admin")
@section('content')
    <div class="container">
        <h1 class="text-center">products page</h1>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">category</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">original price</th>
                    <th scope="col">selling price</th>
                    <th scope="col">created_at</th>
                    <th scope="col">control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $product->category->name }}</td>
                        <td><img src="{{ URL::asset('img/') }}/{{ $product->image }}" height="70vh"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->original_price }}</td>
                        <td>{{ $product->selling_price }}</td>
                        <td>{{ $product->created_at->diffForHumans() }}</td>
                        @if (Auth::user()->role_id == 1)
                        <td>
                            
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info mb-2">edit</a>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('products.create') }}">add product</a>
    </div>
@endsection
