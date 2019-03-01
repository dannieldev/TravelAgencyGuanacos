<!DOCTYPE html>
<html>
<head>
	<title>Agencia de Viajes Guanaco</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


	<link rel="shortcut icon" href="favicon.ico">

	<!-- Bootstrap  -->
	{!! Html::style('assets/css/bootstrap.css') !!}

	<!-- LOgin css  -->
	{!! Html::style('assets/css/login.css') !!}

	<!-- Icomoon Icon Fonts-->
	{!! Html::style('assets/css/icomoon.css') !!}

	<!-- Superfish -->
	{!! Html::style('assets/css/superfish.css') !!}

	{!! Html::style('assets/css/cs-skin-border.css') !!}

	{!! Html::style('assets/css/style.css') !!}

</head>
<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href=""><i class="icon-airplane"></i>Agencia de Viajes Guanacos</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="/">Login</a></li>
							<li><a href="/register">Register</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		@if(session()->has('flash'))
		    <center><div class="alert alert-info">{{ session('flash') }}</div></center>
		@endif
	  @yield('content')
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-6 col-sm-6 col-xs-12 fh5co-footer-link">
						</div>
				</div>
			</div>
		</footer>
</body>
</html>