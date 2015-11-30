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
           <li><a href="{{ url('contact') }}">Contact</a></li>
           <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('blogs.index') }}">Write Blog</a></li>

          </ul>      

    
</div><!--/.nav-collapse --> 

 </body>

@stop

@section('body')

<h1>Add a new Product</h1>

<hr>

<div class="row">


<form method="POST" action="/images" enctype="multipart/form-data" class="col-md-6">

{{  csrf_field() }}

<div class="form-group">
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">  
</div>

<div class="form-group">
  <label for="flavor">Flavor:</label>
  <input type="text" name="flavor" id="flavor" class="form-control" value="{{old('flavor')}}">  
</div>


<div class="form-group">
  <label for="price">Price:</label>
  <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">  
</div>

<div class="form-group">
  <label for="description">Descrption:</label>
  <textarea type="text" name="description" id="description" class="form-control" rows="10">
    {{old('description')}}
  </textarea>   
</div>



<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>  
</div>
<a href="{{ route('images.index') }}" class="btn btn-primary">View Added Products</a>


@include('partials.alerts.errors')

</form>
</div>



<!-- {!! Form::open([
    'route' => 'images.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('photos', 'Photos:', ['class' => 'control-label']) !!}
    {!! Form::file('photos', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

<a href="{{ route('images.index') }}" class="btn btn-info">View Added Images</a>


{!! Form::close() !!} -->


@stop