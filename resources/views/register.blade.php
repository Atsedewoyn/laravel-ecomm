@extends('master')
@section("content")
<div class="container custem-login">
   <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <form action="register" method="POST">
      @csrf
      <div class="form-group">
    <label for="exampleInputEmail1">user name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Register </button>
</form>
      </div>
   </div>
</div>
@endsection