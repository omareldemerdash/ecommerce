@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">show {{$user->name}} info</h1>
<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}" readonly>
       
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control " name="email" value="{{$user->email}}" readonly>
      
      
    </div>
    <a href="{{route('users.index')}}" class="btn btn-dark">back</a>
  </form>
</div>
@endsection