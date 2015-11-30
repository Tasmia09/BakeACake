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
           <li><a href="{{ url('contact') }}">Contact</a></li>
           <li  class = "active"><a href="{{ url('gallery') }}">Gallery</a></li>
          <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>


          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop 

@section('body')
  

      <p class="lead">Here's a list of all your Images.</p>

      @if(Auth::user()->id==1)
              <a href="{{ route('images.index') }}">Access your admin privilege</a>
     @endif 


     <hr>

      @foreach($tasmia as $tasmias)
       <h3>{{ $tasmias->title }}</h3>
       <h4>Flavor:{{ $tasmias->flavor}}</h4>
       

       <p>{{ 'tk. '. number_format($tasmias->price)}}</p>

       <p>{{ $tasmias->description}}</p>

        <a href="/add" class="btn btn-info">Add To Cart</a>

       <hr>

  



     @endforeach


       
        
      
@stop
