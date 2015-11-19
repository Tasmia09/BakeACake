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


<p> We are here to serve you with the best desserts in town! :D </p>


@stop

