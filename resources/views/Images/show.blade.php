@extends('layouts.app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

@section('content')

<h1 class="heading">Admin Panel-Display</h1>
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

<h1>{{ $image->title }}</h1>
<p class="lead">{{ $image->description }}</p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('images.index') }}" class="btn btn-info">Back to all images</a>
        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary">Edit Image</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['images.destroy', $image->id]
        ]) !!}
            {!! Form::submit('Delete this image?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop
