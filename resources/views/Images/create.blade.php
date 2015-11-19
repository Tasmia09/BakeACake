@extends('layouts.app')

<head>
	<title>BakeACake</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

@section('content')

<h1 class="heading">Admin Panel-Create</h1>
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

<h1>Add a new Image</h1>




@include('partials.alerts.errors')




{!! Form::open([
    'route' => 'images.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

<a href="{{ route('images.index') }}" class="btn btn-info">View Added Images</a>


{!! Form::close() !!}


<hr>

@stop