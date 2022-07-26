<?php
use App\Http\controllers\productcontroller;
$total=0;
if(Session::has('user'))
{
  $total=productController::cartItem();
}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E_comm</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class=""><a href="#">Home </a></li>
        <li class=""><a href="#">About </a></li>
        <li class=""><a href="/myorders">Orders </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Aluminium</a></li>
            <li><a href="#">furniture </a></li>
            <li><a href="#">  Metals</a></li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box " placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">cart ({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">logout</a></li>
        </ul>
      </li>
      @else
      <a href="/login">login</a>
      <a href="/register">Register</a>
      @endif 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>