@extends('Layouts/app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>
@section ('content')

<body>
	   <h1 class="heading">Gallery Welcome!</h1>
  	<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="{{ url('about') }}">About</a></li>
           <li><a href="#contact">Contact</a></li>
           <li  class = "active"><a href="{{ url('gallery') }}">Gallery</a></li>

          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop 

@section('body')
  
      <p class="lead">Here's a list of all your Images. <a href="{{ route('images.index') }}">Access your admin privilege</a></p>
        
        

@stop