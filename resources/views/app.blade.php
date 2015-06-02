<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link href="{{ elixir('css/app.css') }}" rel="stylesheet">

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

	{!! Form::open(['url'=>'/update-content', 'id'=>'page-update']) !!}
	{!! Form::close() !!}

	<div class="wide">
		<img src="{{ asset('/images/md-rogue-book-exchange-header-image.png') }}" class="hidden-sm hidden-xs">
		<img src="{{ asset('/images/sm-rogue-book-exchange-header-image.png') }}" class="visible-sm">
		<img src="{{ asset('/images/xs-rogue-book-exchange-header-image.png') }}" class="visible-xs">
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
					<!-- <li class="navbar-item"><a href="volunteer">Volunteer</a></li> -->
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Get Involved <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
							<li class="navbar-item"><a href="/support">Support</a></li>
							<li class="divider"></li>
							<li class="navbar-item"><a href="/volunteer">Volunteer</a></li>
	          </ul>
	        </li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Find out More! <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
		          <li class="navbar-item"><a href="/faqs">FAQs</a></li>
	            <li class="divider"></li>
	            <li class="navbar-item"><a href="/calendar">Calendar</a></li>
	            <li class="divider"></li>
	            <li class="navbar-item"><a href="/tour">Tour</a></li>
	          </ul>
	        </li>
					<li class="navbar-item"><a href="/contact">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::check() && !empty($page))
						<li class="navbar-btn">
							{!! Form::submit('Save Page Changes', ['form'=>'page-update', 'class'=>'navbar-item btn-success']) !!}
						</li>
					@endif
				</ul>
			</div>

		</div>
	</nav>

	
	<div class="container">
		@if(Session::has('update'))
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div class="alert alert-success text-center">
		 		  {{Session::get('update')}}
		 		</div>
		 	</div>
		 </div>
		@endif

		@yield('content')
	</div>
	
	<br>
	
	@yield('footer')

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- <script src=" //cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js"></script> -->
	<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
