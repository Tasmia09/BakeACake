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

<h1>Title:{{ $blog->title }}</h1>
<p class="lead">Recipe:  {{ $blog->description }}</p>
<p>Author:{{ $blog->author }}</p>
<hr>
<div class="row">
    <div class="col-md-6">
    <a href="{{ route('blogs.index') }}" class="btn btn-info">Back to all Blogs</a>
    @if(Auth::user()->id==$blog->blog_id)
    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit Blog</a>
    
    </div>

    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['blogs.destroy', $blog->id]
        ]) !!}
            {!! Form::submit('Delete this blog?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endif
    </div>

@stop

