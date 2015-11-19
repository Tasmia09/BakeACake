@extends('Layouts/app')

<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>
@section ('content')

<body>
	<h1 class="heading">About Us</h1>


<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href= "{{ url('/') }}" >Home</a></li>
            <li class = "active"><a href="{{ url('about') }}">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href= "{{ url('gallery') }}" >Gallery</a></li>
           
          </ul>
 </div><!--/.nav-collapse -->

</body>

@stop