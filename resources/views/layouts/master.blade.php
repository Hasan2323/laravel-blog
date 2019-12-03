
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>My Blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      #flash-message{
        position:absolute;
        z-index:10;
        top:50px;
        right:20px;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
  </head>
  <body>
    <header>
  		@include ('layouts.nav')
	</header>

  @if($flash =  session('message'))
      <div id="flash-message" class="alert alert-success" role="alert">
          {{ $flash }}
      </div>
  @endif

	<div class="container">

		  <div class="row">

          @yield ('content')

          @include ('layouts.sidebar')
        
      </div>
	</div>

  <br><br><hr>
	@include ('layouts.footer')
</body>
</html>
