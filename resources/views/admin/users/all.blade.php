@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">users page</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">created_at</th>
            <th scope="col">control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
    

          <tr>
            <th scope="row">1</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td class="d-flex">
              <a href="{{route('users.show' , $user->id)}}" class="btn btn-info me-2">show</a>
              @if (Auth::user()->role_id == 1)
              <a href="{{route('users.edit' , $user->id)}}" class="btn btn-warning me-2">edit</a>
              <form method="post" action="{{route('users.destroy',$user->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <a class="btn btn-primary" href="{{route('users.create')}}">add user</a>
    </div>
@endsection