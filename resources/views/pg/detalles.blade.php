@extends('layout.index')
@section('content') 

<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
			<div class="col-md-12 animate-box">
				<h2 class="heading-title">Detalles del vuelo</h2>
			</div>
			<!-- Detalles de todo el vuelos -->
	     	<div class="col-md-12">
	     		
	     	</div>
	     	<div>
				<div class="row">
					  <div class="col-sm-8" id="cuadro2">
					  <br>
								<h4>Aerolinia disponibles {{ $clase }}</h4>
								<h4>{{ $depais }} -> {{ $apais }}</h4>
								<span>Fecha :</span>
								<span>{{ $fecha }}</span>
								<span>----</span>
								<span>Hora :</span>
								<span>{{ $hora }}</span>
								<br>	   	
					  </div>
					  <div class="col-sm-4" id="cuadro1">
			                    <br>
								 <h2 class="price">
										Precio
								<i class="icon-arrow-down22"></i>
								${{ $total }}
								</h2>	  

					  </div>
				</div>
				<div class="col-md-12">
					<div class="col-sm-4 border-top-1">
						<h4> Forma de pago</h4>
					</div>
				</div>
				<a href="{{URL::action('detallesController@edit',['depais'=>$depais,
								                               'apais'=>$apais,
								                               'hora'=>$hora,
						                                       'fecha'=>$fecha,
		    	                                               'clase'=>$clase,
								                               'total'=>$total])}}" class="btn btn-primary btn-sm" type="submit">Continuar</a>

			</div>
	</div>
</div>
@endsection