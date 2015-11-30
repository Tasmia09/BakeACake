@extends('layouts.app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

@section('content')

<h1 class="heading">Write your Blog</h1>
  	<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="{{ url('about') }}">About</a></li>
           <li><a href="{{ url('contact') }}">Contact</a></li>
           <li><a href="{{ url('gallery') }}">Gallery</a></li>
           <li class="active"><a href="{{ route('blogs.index') }}">Write Blog</a></li>

          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop

@section('body')

<h1>Blog List</h1>
<p class="lead">Here's a list of all the blogs. <a href="{{ route('blogs.create') }}">Add a new one?</a></p>
<hr>


@foreach($blogs as $blog)
    <h3>Title:{{ $blog->title }}</h3>
    <p>Author:{{ $blog->author}}</p>
    <p>
        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info">View Blog</a>
        @if(Auth::user()->id==$blog->blog_id)
        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit Blog</a>
        @endif
    </p>
    <hr>
@endforeach


@stop

