@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">roles page</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">control</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
    

          <tr>
            <th scope="row">1</th>
            <td>{{$role->name}}</td>
            
            <td class="d-flex">
              <a href="{{route('roles.show' , $role->id)}}" class="btn btn-info me-2">show users</a>
              <a href="{{route('roles.edit' , $role->id)}}" class="btn btn-warning me-2">edit</a>
              
              <form method="post" action="{{route('users.destroy',$role->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">delete</button>
              </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <a class="btn btn-primary" href="{{route('roles.create')}}">add role</a>
    </div>
@endsection