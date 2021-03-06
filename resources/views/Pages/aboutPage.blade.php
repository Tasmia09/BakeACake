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
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href= "{{ url('gallery') }}" >Gallery</a></li>
           <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>

          </ul>
 </div><!--/.nav-collapse -->

</body>

@stop

@section('body')

<h1>Services we offer:</h1>

<p>1.Wedding Cake</p>
<p>2.Birthday Cake</p>
<p>3.Bridal Shower Cake</p>
<p>4.Anniversary Cake</p>
<p>5.Customized Cake</p>

<h4>Please visit our <a href="{{ url('gallery') }}">Gallery</a> to see our works and don't forget to visit our <a href="{{url('contact')}}">Contact</a> page to know where to find us! ^_^</h4>
@stop