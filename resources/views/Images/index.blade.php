@extends('layouts.app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

@section('content')

<h1 class="heading">Admin Panel</h1>
  	<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="{{ url('about') }}">About</a></li>
           <li><a href="#contact">Contact</a></li>
           <li><a href="{{ url('gallery') }}">Gallery</a></li>

          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop

@section('body')

<h1>Images List</h1>

<p class="lead">Here's a list of all your tasks. <a href="{{ route('images.create') }}">Add a new one?</a></p>
<hr>

@foreach($images as $image)
    <h3>{{ $image->title }}</h3>
    <p>{{ $image->description}}</p>
    <p>
        <a href="{{ route('images.show', $image->id) }}" class="btn btn-info">View Image</a>
        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary">Edit Image</a>
    </p>
    <hr>
@endforeach

@stop

<!-- <a href="/images/create"> -->