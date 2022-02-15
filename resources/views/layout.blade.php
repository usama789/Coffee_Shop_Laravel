<!-- Fixed navbar -->
<html>
    @extends('layout.head')
</html>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route("/") }}">COFFEE SHOP</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/list">Order List</a></li>
        @if(Auth::check() && Auth::user()->role == 'waiter')
        <li><a href="/createorder">Create Order</a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="active"><a href="/logout">Logout<span class="sr-only">(current)</span></a></li>
        @else
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        @endif
      </ul>
      
    </div><!--/.nav-collapse -->
  </div>
</nav>