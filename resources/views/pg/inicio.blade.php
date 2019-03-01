@extends('layout.index')
@section('content')
    
	<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(http://www.viajeslemans.com/web/wp-content/uploads/2017/05/viajeros-errores-consejos-evitarlos-portada.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								  <center>
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Vuelos</a>
								      </li>
								   </ul>
								   </center>

								   <!-- Tab panes -->
								    {!!Form::open(array('url'=>'/reserva','method'=>'GET','autocomplete'=>'off'))!!}
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											
										    <div class="col-xxs-12 col-xs-6 mt">
										    	<div class="input-field">
										    		<label for="from">De :</label>
											  {!! Form::select('cityd',$city, null,['id' => 'cyp', 'class' => 'form-control', 'placeholder' => 'Ciudad, Pais', 'id'=> 'paiscy','value'=>'Salvador,El Salvador']) !!}
											    </div>
										    </div>
											<div class="col-xxs-12 col-xs-6 mt">
										    	<div class="input-field">
										    		<label for="from">Para:</label>
											  {!! Form::select('cityp',$city, null,['class' => 'form-control', 'placeholder' => 'Ciudad, Pais', 'id'=> 'paiscy2','value'=>'Salvador,El Salvador']) !!}
											    </div>
										    </div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Fecha salida :</label>
													<input type="text" name='fecha' class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt ">
													<label for="date-start">Hora salida :</label>
													{!! Form::time('hora', \Carbon\Carbon::createFromTime()->format('H:i'),['class'=>'form-control'])  !!}  
											</div>
											
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Clases:</label>
													<select class="cs-select cs-skin-border" name='clase'>
														<option value="" disabled selected>Economico</option>
														<option value="Economico">Economico</option>
														<option value="Ejecutiva">Ejecutiva</option>
														<option value="Primera">Primera</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adultos:</label>
													<select class="cs-select cs-skin-border" name='adulto'>
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Niños:</label>
													<select class="cs-select cs-skin-border" name='nino'>
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Buscar Vuelo">
											</div>
										</div>
									 </div>
									</div>
									{!!Form::close()!!}		
				

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-6 col-sm-push-1 col-md-6 col-md-push-1">
									<h2>Agencia de Viajes </h2>
									<span class="price">Guanacos</span>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hot Tours</h3>
						<p>Para tus viajes ingresa a donde quieres viajar en el formulario.</p>
					</div>
				</div>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">!Selecciona tu destino!<i class="icon-arrow-right22"></i></a></p>
						
					</div>
				</div>
			</div>
		</div>
	<div class="fh5co-hero">
		
			<div class="fh5co-cover" data-stellar-background-ratio="1" style="background-image: url(http://www.viajeslemans.com/web/wp-content/uploads/2017/06/foto.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<!-- <a href="index.html" id="main-logo">Travel</a> -->
		
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Atrevete a Viajar</h2>
									<span class="price">Donde Sea</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	@endsection