@extends('master')
@section("content")
<div class="container">
    <div class="card login">
<div class="card header">
<h4>Sign Up New User</h4>
</div>
<form action="/signup" method="POST">
    <br/>
    <div class="form-group row">
    @csrf
    <label for="staticEmail" class="col-sm-3 col-form-label">User Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="username"  placeholder="User Name">
    </div>
</div>
  <div class="form-group row">
    @csrf
    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="email"  placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="password"  placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-9"> </div>
    <div class="col-sm-2">
    <input type="submit" class="btn btn-primary" value="SignUp">
    </div>
  </div>
</form>
</div>
</div>
@endsection
