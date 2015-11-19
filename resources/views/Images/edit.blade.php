@extends('layouts.app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

@section('content')

<h1 class="heading">Admin Panel-Edit</h1>
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

<h1>Editing "{{ $image->title }}"</h1>
<p class="lead">Edit and save this image below, or <a href="{{ route('images.index') }}">go back to all images.</a></p>
<hr>

@include('partials.alerts.errors')


{!! Form::model($image, [
    'method' => 'PATCH',
    'route' => ['images.update', $image->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Image', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop