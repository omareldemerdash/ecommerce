@extends("layouts.admin")
@section('content')
<div class="container">
<form method="post" action="{{route('users.update' , $user->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" value="{{$user->name}}" name="name">
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email">
      @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control @error('password') is-invalid  @enderror" name="password">
      @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>
@endsection