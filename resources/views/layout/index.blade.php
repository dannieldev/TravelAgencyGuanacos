
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agencia de Viajes Guanaco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 -->

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	

	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- easy autocomplete -->
	{!! Html::style('assets/css/easy-autocomplete.min.css') !!}
	{!! Html::style('assets/css/easy-autocomplete.themes.min.css') !!}

	<!-- Animate.css -->
	{!! Html::style('assets/css/animate.css') !!}

	<!-- Icomoon Icon Fonts-->
	{!! Html::style('assets/css/icomoon.css') !!}

	<!-- Bootstrap  -->
	{!! Html::style('assets/css/bootstrap.css') !!}

	<!-- Superfish -->
	{!! Html::style('assets/css/superfish.css') !!}

	<!-- Magnific Popup -->
	{!! Html::style('assets/css/magnific-popup.css') !!}

	<!-- Date Picker -->
	{!! Html::style('assets/css/bootstrap-datepicker.min.css') !!}

	<!-- CS Select -->
	{!! Html::style('assets/css/cs-select.css') !!}
	{!! Html::style('assets/css/cs-skin-border.css') !!}

	{!! Html::style('assets/css/style.css') !!}

	<!-- Modernizr JS -->

	{!! Html::script('assets/js/modernizr-2.6.2.min.js') !!}

   <!-- Modernizr JS -->
   {!! Html::style('assets/css/cuadro.css') !!}	

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="/nueva"><i class="icon-airplane"></i>Agencia de Viajes Guanacos</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="/nueva">Home</a></li>
							<li><a href="/nueva">Vuelos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		   @yield('content')
	
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-6 col-sm-6 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Viaja en tus sueños</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div> -->
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

    {!! Html::script('assets/js/jquery.easy-autocomplete.js') !!}
	
	{!! Html::script('assets/js/jquery.min.js') !!}
	<!-- jQuery Easing -->
	{!! Html::script('assets/js/jquery.easing.1.3.js') !!}
	
	<!-- Bootstrap -->
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	
	<!-- Waypoints -->
	{!! Html::script('assets/js/jquery.waypoints.min.js') !!}
	
	{!! Html::script('assets/js/sticky.js') !!}
	
	<!-- Stellar -->
	{!! Html::script('assets/js/jquery.stellar.min.js') !!}
	
	<!-- Superfish -->
	{!! Html::script('assets/js/hoverIntent.js') !!}

	{!! Html::script('assets/js/superfish.js') !!}

	<!-- Magnific Popup -->
	{!! Html::script('assets/js/jquery.magnific-popup.min.js') !!}
	
	{!! Html::script('assets/js/magnific-popup-options.js') !!}
	
	<!-- Date Picker -->
	{!! Html::script('assets/js/bootstrap-datepicker.min.js') !!}

	<!-- CS Select -->
	{!! Html::script('assets/js/classie.js') !!}

	{!! Html::script('assets/js/selectFx.js') !!}
	
	
	<!-- Main JS -->
	
	{!! Html::script('assets/js/main.js') !!}


	{!! Html::style('assets/select2-4.0.6-rc.1/dist/css/select2.css') !!}
	{!! Html::script('assets/select2-4.0.6-rc.1/dist/js/select2.js') !!}

    <!-- <script type="text/javascript">
    	$(function()
    	{
    		$("#q").autocomplete({
    			source:"search/autocomplete",
    			minLength:3,
    			select: function(event, ui) {
    			     $('#q').val(ui.item.value);
    
    			}
    		});
    
    		$('#q').data( "ui-autocomplete" )._renderItem = function(ul, item)
    		{
    			var $li = $("<li style='width:800px'>"),
    
    		};
    		$li.after('data-value',item.value);
    		$li.append(item.value);
    		return $li.appendTo(ul);
    	
    	});
    </script>
    
     -->
     <script type="text/javascript">
     	$("#paiscy").select2({

     	});
     </script>
      <script type="text/javascript">
     	$("#paiscy2").select2({

     	});
     </script>
        <script type="text/javascript">
     	$("#puerto1").select2({

     	});
     </script>
     <script type="text/javascript">
     	$("#puerto2").select2({

     	});
     </script>
     <script type="text/javascript">
     	$("#linea").select2({

     	});
     </script>
	</body>
</html>

