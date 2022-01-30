<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
$total_Orders=ProductController::myorders();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="/">E-Commerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item">
      @if(Session::has('user'))
        <a class="nav-link" href="/myorderlist">Orders({{$total_Orders}})</a>
        @endif
      </li>
     <li class="nav-item">
     <form action="search" class="form-inline my-2 my-lg-0">
      <input style="width:400px" class="form-control" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
     </li>
     @if(Session::has('user'))
     <li class="nav-item">
     <a class="nav-link" href="/cartlist"> Cart({{$total}})</a>
      </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        {{Session::get('user')['Name']}}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </li>
    @else
    <li class="nav-item">
     <a class="nav-link" href="/login">LogIn</a>
     </li>
     <li class="nav-item">
     <a class="nav-link" href="/signup">Sign Up</a>
     </li>
     @endif
    </ul>

  </div>
</nav>
