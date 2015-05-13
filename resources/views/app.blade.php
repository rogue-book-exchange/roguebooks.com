<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" type="text/css" href=" //cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href=" //cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css "> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="wide">
		<img src="{{ asset('/images/rogue-book-exchange-header-image.png') }}">
	</div>
	<nav class="navbar navbar-default green-white-gradient">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>
			<div class="collapse navbar-collapse" id="mainNav">
				<ul class="nav navbar-nav main-nav">
					<li class="navbar-item"><a href="/">Home</a></li>
					<li class="navbar-item"><a href="faq">FAQ</a></li>
					<li class="navbar-item"><a href="volunteer">Volunteer</a></li>
					<li class="navbar-item"><a href="support">Support</a></li>
					<li class="navbar-item"><a href="calendar">Calendar</a></li>
					<li class="navbar-item"><a href="contact">Contact</a></li>
          <li class="navbar-item"><a href="tour">Tour</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check())
						<li><a href="/auth/logout">Save Changes & Logout</a></li>
					@else
						<li><a href="/login">Login</a></li>
					@endif
				</ul>
			</div>

		</div>
	</nav>
	
	<div class="container">
		@yield('content')
	</div>
	
	<br>
	<div class="container container-full brown-border-top">
		<div class="row green-white-gradient">
			<div class="col-sm-12">
				<span class="pull-right">
					<ul class="hidden-xs">
						<li class="footer-nav"><a href="#">Home</a></li>
						<li class="footer-nav"><a href="#">FAQ</a></li>
						<li class="footer-nav"><a href="#">Volunteer</a></li>
						<li class="footer-nav"><a href="#">Support</a></li>
						<li class="footer-nav"><a href="calendar">Calendar</a></li>
						<li class="footer-nav"><a href="#">Contact</a></li>
					</ul>
					<br>
					<p>roguebookexchange@gmail.com  |  110 N Ivy St, Medford, OR 97501  |  541-779-1326</p>
				</span>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- <script src=" //cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js"></script> -->
	<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
