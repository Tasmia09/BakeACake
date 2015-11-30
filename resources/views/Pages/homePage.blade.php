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
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>


          </ul>
    </div><!--/.nav-collapse --> 

 </body>



@stop


@section('body')


<h1> We are here to serve you with the best desserts in town! :D </h1>


<div class="row">
<div class="col-md-6">
<div id="wrapper">
      <section><img src="image/layer-cake.jpg" alt="Photograph" width="500" height="500" class="photo"></section>
      <section><img src="image/recipe-image-legacy-id--50826_11.jpg" alt="Photograph" width="500" height="500" class="photo"></section>
      
</div>
</div>


<div class="col-md-6">
<div id="wrapper">
      <section><img src="image/ig0807_cake.jpg" alt="Photograph" width="500" height="500" class="photo"></section>
      <section><img src="image/Kit-Kat-Cake-Cover_Photo.jpg" alt="Photograph" width="500" height="500" class="photo"></section>
      
</div>
</div>
</div>
@stop

