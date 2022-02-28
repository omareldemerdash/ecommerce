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
            @if (Auth::user()->role_id == 1)
            <td class="d-flex">
              <a href="{{route('roles.show' , $role->id)}}" class="btn btn-info me-2">show users</a>              
           
            </td>
            @endif
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
@endsection