@extends('Layouts/app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>


@section ('content')
<body>

	<h1 class = "heading">Welcome To Our Shop</h1>
	<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li  class = "active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            

          </ul>
    </div><!--/.nav-collapse --> 

 </body>



@stop


@section('body')

<div class="row">
 <div class="col-md-6 col-md-offset-3">


      <form method = "POST" action ="/auth/login">
          {!! csrf_field() !!}
         
          <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id ="email" class="form-control" value ="{{ old('email') }}">
          </div>

          <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id ="password" class="form-control">
          </div>

          <div class="form-group">
                  <input type="checkbox" name="remember">Remember me
          </div>

          <div class="form-group">
                  <button type ="submit" class ="btn btn-primary">Login</button>
          </div>         

      </form>
            @include('partials.alerts.errors')

  </div> 
  </div> 
@stop

