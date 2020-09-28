<!doctype html>
<html lang='en'>
	<head>
		@section('head')
		<title>Hinson BetterRx Pic Implementation</title>
		<meta charset-"utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/app.css"></script>
		@show
	</head>
	<body>
		@section('heading')
			<div class="jumbotron text-center">
			Hinson's Pic Project
			</div>
		@show
		@section('menu')
			<nav class="navbar navbar-expand-sm bg-light">

			  <!-- Links -->
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="#addAPic">Add A Pic</a>
				</li>
			  </ul>

			</nav>
		@show
        <div class="container" id="app">
            @yield('content')
        </div>		

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
 	</body>
</html>