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
            <li><a href="{{ url('about') }}">About</a></li>
            <li class="active"><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href= "{{ url('gallery') }}" >Gallery</a></li>
           <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>

          </ul>
 </div><!--/.nav-collapse -->

</body>

@stop


@section('body')

<h2>Book Us and We Promise You Won't Regret :D</h2>

<h3>Phone: *************</h3>
<h3>Address: ******</h3>

@stop