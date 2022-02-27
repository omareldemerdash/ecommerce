@extends("layouts.admin")
@section('content')
<div class="container">
    <h1>users page</h1>
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
            @foreach ($role_users as $user)
    

          <tr>
            <th scope="row">1</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td class="d-flex">
              <a href="{{route('users.show' , $user->id)}}" class="btn btn-info">show</a>
              <a href="{{route('users.edit' , $user->id)}}" class="btn btn-warning">edit</a>
              <form method="post" action="{{route('users.destroy',$user->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
              </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <a class="btn btn-primary" href="{{route('users.create')}}">add user</a>
    </div>
@endsection