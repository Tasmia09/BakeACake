<!DOCTYPE html>
<html>
<head>
	<!-- <title></title> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
     
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>       
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
  

</body>
</html>