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
           <li><a href="{{ url('contact') }}">Contact</a></li>
           <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>

          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop


@section('body')

<h1>{{ $image->title }}</h1>
<p>{{ $image->flavor }}</p>
<p class="lead">{{ $image->description }}</p>
<h1>{{  'tk. '. number_format($image->price) }}</h1> 
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('images.index',$image->id) }}" class="btn btn-info">Back to all Products</a>
        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary">Edit Product</a>
    <!-- </div>
    <div class="col-md-6 text-right"> -->
    <hr>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['images.destroy', $image->id]
        ]) !!}
            {!! Form::submit('Delete this Product?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>


<form action="/{{ $image->id }}/photos" method="POST" class="dropzone">
  {{ csrf_field()}}
</form>

@stop

@section('scripts.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>

@stop
