@extends('layout.index')
@section('content')

<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
			   <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Gracias por Reservar Vuelos en Agencia Guanacos</h3>
						<p>Te Proporcionaremos los mejores vuelos.</p>
					</div>
				</div>
				<div class="row row-bottom-padded-md">
					<div class="col-md-12 animate-box">
						<h2 class="heading-title">Vuelos Disponibles</h2>
					</div>
					<!-- dispo -->
			<div class="col-md-12" id="info">
				<div>
					<span id="text">Aerolinia disponibles {{ $class }}</span>
					<h4 style="visibility: hidden">{{ $personas }}</h4>
				</div>
			</div>
			<div class="col-md-12" id="info2">
				<span id="text">{{ $cfrom->cpais }} -> {{ $cto->cpais }} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  </span>
				<span id="text">Fecha : {{ $fecha }} ---- Hora : {{ $hora }}</span>
			</div>
			<div class="col-md-12" id="info3">
				<span class="price">
							Precio
					<i class="icon-arrow-down22"></i>
			    </span>
			</div>
			@foreach ($destinos as $destino)
				<div class="col-md-12" id="aerolinias"> <!-- aerolinias disponibles -->
					<span id="text" class="p-flight">{{ $destino->aerolinia }}</span>
				</div>
				<div class="col-md-12" id="detalles"> <!-- detalles de la aerolinias -->
					<span>Duracion:</span>
					<span>{{ $tiempo }}</span>
					<span>{{ $destino->aeropuerto }}</span>
					<a id="precio" href="{{URL::action('nuevoController@edit',['id'=>$destino->id_aerolipu,
								                                               'depais'=>$cfrom->cpais,
								                                                'apais'=>$cto->cpais,
								                                                'hora'=>$hora,
								                                                'fecha'=>$fecha,
								                                                'clase'=>$class,
								                                                'total'=>$total,
								                                                'duracion'=>$tiempo,
								                                                'personas'=>$personas])}}" class="btn btn-primary btn-sm" type="submit">Continuar</a>
					<span id="precio" class="price">
							US$
						{{$total }}
					</span>
				</div>
			@endforeach
		</div>
	</div>
</div>
    <div class="fh5co-hero">
		<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="1" style="background-image: url(http://www.viajeslemans.com/web/wp-content/uploads/2017/05/chequeo.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
							</div>
<!-- 							<div class="desc2 animate-box">
	<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
		<h2>Las mejores ofertas</h2>
		<h3>Fly to Hong Kong via Los Angeles, USA</h3>
		<span class="price">$599</span>
		<p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p>
	</div>
</div> -->
						</div>
					</div>
				</div>
			</div>

		</div>

@endsection