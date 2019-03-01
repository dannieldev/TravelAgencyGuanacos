@extends('layout.index')
@section('content') 

<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
    <div class="row row-bottom-padded-md">
		<div class="col-md-12 animate-box">
			<h2 class="heading-title">Deatalles del vuelo</h2>
		</div>
	</div>
	</div>
	 <a href="#" class="flight-book "><!-- Informacion de vuelos -->
						     <div class="plane-name">
						     	<br>
								<p class="p-flight">Aerolinia disponibles Economic Class</p>
							 </div>
							<div class="desc">
								<div class="left">
									    <br>
										<h4>{{ $cfrom->cpais }} -> {{ $cto->cpais }}</h4>
										<span>Fecha :</span>
										<span>{{ $fecha }}</span>
										<span>----</span>
										<span>Hora :</span>
										<span>{{ $hora }}</span>
								</div>
								<div class="right">
									<br>
								    <span class="price">
										Precio
										<i class="icon-arrow-down22"></i>
									</span>
								</div>
							</div>
					    </a>
      </div>
@endsection