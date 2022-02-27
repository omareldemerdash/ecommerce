@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">categories page</h1>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">created_at</th>
            <th scope="col">control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
    

          <tr>
            <th scope="row">1</th>
            <td><img src="{{URL::asset('img/')}}/{{$category->image}}" height="70vh"></td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->created_at->diffForHumans()}}</td>
            <td>
              <a href="{{route('categories.show' , $category->id)}}" class="btn btn-info mb-2">show products</a>
              <a href="{{route('categories.edit' , $category->id)}}" class="btn btn-info mb-2">edit</a>
              <form method="post" action="{{route('categories.destroy',$category->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a class="btn btn-primary" href="{{route('categories.create')}}">add category</a>
    </div>
@endsection