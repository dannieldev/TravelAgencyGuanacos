<!DOCTYPE html>
<html>
<head>
	<title>Agencia de Viajes Guanaco</title>
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Bootstrap  -->
	{!! Html::style('assets/css/bootstrap.css') !!}
	{!! Html::style('assets/css/bootstrap.min.css') !!}	
  <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  	{!! Html::style('assets/css/now-ui-dashboard.css') !!}
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a  class="simple-text logo-mini">
        </a>
        <a href="" class="simple-text">
         Agencia Guanacos
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/aerlineas">
              <i class="design_app"></i>
              <p>Aerolinias</p>
            </a>
          </li>
          <li>
            <a href="/aeropuertos">
              <i class="education_atom"></i>
              <p>Aeropuertos</p>
            </a>
          </li>
          <li>
            <a href="/ciudades">
              <i class="location_map-big"></i>
              <p>Ciudades</p>
            </a>
          </li>
          <li>
            <a href="/paises">
              <i class="ui-1_bell-53"></i>
              <p>Paises</p>
            </a>
          </li>
          <li>
            <a href="/clases">
              <i class="users_single-02"></i>
              <p>Clases</p>
            </a>
          </li>
          <li>
            <a href="/reservaciones">
              <i class="design_bullet-list-67"></i>
              <p>Reservaciones</p>
            </a>
          </li>
          <li>
            <a href="/destinos">
              <i class="text_caps-small text-center"></i>
              <p>Destinos</p>
            </a>
          </li>
          <li>
            <a href="/passengers">
              <i class="arrows-1_cloud-download-93 "></i>
              <p>Pasajeros</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <h3 class="navbar-brand">Dashboard de Agencia Guanacos</h3>
            <h3 class="navbar-brand">Bienvenido {{ auth()->user()->name }}</h3>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <div class="nav-item">
              	<form action="{{ route('logout') }}" method="post">
							 {{ csrf_field() }}
							<div class="btn-group">
								  <button type="submit" class="btn btn-danger">
								    Cerrar Sessión
								  </button>
                            </div>
				</form>
              </div>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
        <canvas id="bigDashboardChart">
        </canvas>
      </div>
      <div class="content">
        <div class="row">
        	<div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
              	@yield('content')
              </div>
             </div>
         </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li></li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </div>
</body>
</html>