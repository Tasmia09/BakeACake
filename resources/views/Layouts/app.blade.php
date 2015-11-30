<!DOCTYPE html>
<html>
<head>
	<!-- <title></title> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
     
      <div class="container-fluid">
        <div class="navbar-header">
<div class="nav navbar-nav navbar-right">

@if(Auth::guest())
         <!-- <li> <a href="/auth/login" class ="btn btn-primary">Login</a></li> -->
                         
               
                  <li><a href="/auth/login">Login</a></li>
                  <li><a href="/auth/register">Signup</a></li>
               
             
        @endif
 
         @if(Auth::check())
         
          <li><a href="/profile">Welcome {{ Auth::user()->name }}</a></li>
        <div class="authD">
          <li><a href="/auth/logout" class ="btn btn-danger">Logout</a></li>
       </div>
        @endif


          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>


          </button>       
        </div>
     </div>
     </div>

     
  <div class = "container">

        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

      @yield('content')

  </div>
 </nav> 
 <hr>

  <main>
    <div class = "container">
   
         <p> @yield('body')</p>
    </div>
  </main>

  @yield('scripts.footer')

</body>
</html>