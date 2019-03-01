@extends('layout.index')
@section('content') 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
			<div class="col-md-12 animate-box">
				<h2 class="heading-title">Detalles del vuelo</h2>
				<div style="visibility: hidden">{{ $destino }}</div>

			</div>
			<!-- Detalles de todo el vuelos -->
		{!!Form::open(array('url'=>'/detalle','method'=>'GET','autocomplete'=>'off'))!!}

	     	<div class="col-md-12">
	     		<div class="col-md-7">
		     		<article class="card">
						<div class="card-body p-5"  id="cuadro2">
							<div><h2>{{ $depais }} -> {{ $apais }} &nbsp {{ $clase }}</h2></div>
								<hr>
							<div><h3>Fecha : {{ $fecha }} &nbsp Hora : {{ $hora }}</h3>
							</div>
						</div>
					</article>	 
	     	   </div>
	     	   <div class="col-sm-5">
	     	   	 <article class="card">
					<div class="card-body p-5"  id="cuadro1">
	                   <h1 class="price">
										Precio
								<i class="icon-arrow-down22"></i>
								${{ $total }}
								&nbsp &nbsp &nbsp
								Pasajeros+ {{ $personas }}
					  </h1>	
		     	   </div>
		     	</article>
	     	   </div>
	        </div>
			<div class="col-md-12">
				  <div class="col-md-7">
					<article class="card">
						<div class="card-body p-5">
						<ul class="nav bg-light nav-pills rounded nav-fill mb-4" role="tablist">
							
						</ul>
						<p class="alert alert-success">Ingresa tus datos personales</p>
						<div class="tab-content">
						<div class="tab-pane fade show active" id="nav-tab-card">
							<form role="form">
							        <div class="form-group">
							            <h5><span style="font-size:10pt" class="hidden-xs" required="">Nombre Completo</span> </h5>
							        	<div class="input-group">
							        		<input style="font-size:10pt" type="text" class="form-control" placeholder="Nombre" name="nombre" required="">
								            <input style="font-size:10pt" type="text" class="form-control" placeholder="Apellido" name="apellido" required="">
							        	</div>
							        </div>
								<div class="form-group">
									<h5 for="username">Fecha de Nacimiento</h5>
									 {!! Form::date('fecha', \Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control','style'=>'font-size:10pt','required'=>''])  !!}  
								</div> <!-- form-group.// -->
								<div class="form-group">
									<h5 for="username">Numero de documento de ID</h5>
									 {!! Form::number('dui','value', ['class'=>'form-control','placeholder'=>'12345439-2','style'=>'font-size:10pt','required'=>''])  !!}  
								</div> <!-- form-group.// -->
								<div class="form-group">
									<h5 for="cardNumber">Sexo</h5>									
		                            <select class="form-control" style="font-size:10pt"  name="sexo" placeholder="Sexo" required="">
		                                <option  style="font-size:12pt">Masculino</option>
		                                <option  style="font-size:12pt">Femenino</option>
		                            </select>
		                        </div>
							    <div class="radio">
								  <h4><input type="checkbox" class="chb" required=""/> Acepta los terminos y codiciones</h4>
								</div>
								<button class="subscribe btn btn-primary btn-block" type="submit">Registar</button>
							</form>
						</div> <!-- tab-pane.// -->
						</div> <!-- tab-pane.// -->
						</div> <!-- tab-content .// -->
						</article> <!-- card.// -->
				  </div>		
					<div class="col-sm-5">
						<article class="card">
						<div class="card-body p-5">

						<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
								<i class="fa fa-credit-card"></i> Credit Card</a></li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
								<i class="fab fa-paypal"></i>  Paypal</a></li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
								<i class="fa fa-university"></i>  Bank Transfer</a></li>
						</ul>

						<div class="tab-content">
						<div class="tab-pane fade show active" id="nav-tab-card">
							<p class="alert alert-success">Ingresa los datos de tu tarjeta</p>
							<form role="form">
							<div class="form-group">
								<h5 for="cardNumber">Número de la tarjeta</h5>
								<div class="input-group">
									<input style="font-size:10pt" type="text" class="form-control" name="cardNumber" placeholder="1111 2222 3333 4444" required="">
									<div class="input-group-append">
										<span class="input-group-text text-muted">
											<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
											<i class="fab fa-cc-mastercard"></i> 
										</span>
									</div>
								</div>
							</div> <!-- form-group.// -->

							<div class="row">
							    <div class="col-sm-8">
							        <div class="form-group">
							            <h5><span style="font-size:10pt" class="hidden-xs" required="">Vencimiento</span> </h5>
							        	<div class="input-group">
							        		<input style="font-size:10pt" type="number" class="form-control" placeholder="MM" name="mes">
								            <input style="font-size:10pt" type="number" class="form-control" placeholder="YY" name="año">
							        	</div>
							        </div>
							    </div>
							    <div class="col-sm-4">
							        <div class="form-group">
							            <label data-toggle="tooltip">CVV <i class="fa fa-question-circle"></i></label>
							            <input  style="font-size:10pt" type="number" class="form-control" required="">
							        </div> <!-- form-group.// -->
							    </div>
							</div> <!-- row.// -->
							 <div class="form-group">
									<h5 for="username">E-mail</h5>
									<input style="font-size:10pt" type="text" class="form-control" name="email" placeholder="email" required="">
							</div> <!-- form-group.// --> 

							<a href="{{URL::action('detallesController@edit',['depais'=>$depais,
								                               'apais'=>$apais,
								                               'hora'=>$hora,
						                                       'fecha'=>$fecha,
		    	                                               'clase'=>$clase,
								                               'total'=>$total,
								                               'destino'=>$destino,
								                               'personas'=>$personas])}}" 
								    class="subscribe btn btn-primary btn-block" type="button">Reservar</a>
							</form>
						</div> <!-- tab-pane.// -->
						</div> <!-- tab-pane.// -->
						</div> <!-- tab-content .// -->
						</article> <!-- card.// -->
					</div>
				</div>

		{!!Form::close()!!}						
   </div>
@endsection