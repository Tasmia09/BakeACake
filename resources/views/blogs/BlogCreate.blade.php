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

<h1>Add a New Blog</h1>
<p class="lead">Add to your blogs below.</p>
<hr>

{!! Form::open([
    'route' => 'blogs.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Blog', ['class' => 'btn btn-primary']) !!}

<a href="{{ route('blogs.index') }}" class="btn btn-primary">View Added Blogs</a>


@include('partials.alerts.errors')

{!! Form::close() !!}



@stop

