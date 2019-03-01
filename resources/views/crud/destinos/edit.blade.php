@extends('crud.dashboard')
@section('content')
<h1>Editar Destino Numero: {{ $destinos->aerolipu }}</h1>

 <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
 	@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				
				</ul>
			</div>
			@endif		
            {!!Form::model($destinos,['method'=>'PATCH','route'=>['destinos.update',$destinos->id_aerolipu]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label  style="font-size:13pt" for="articulo">Aeropuerto de Partida</label>
            	{!! Form::select('ainicio', $aeropuerto, $destinos->aerpuerto_id,['class' => 'form-', 'placeholder' => 'Aeropuerto inicio...','style'=>'font-size:15pt']) !!}
            </div>
             <div class="form-group">
            	<label style="font-size:13pt" for="articulo">Aeropuerto de Destino</label>
            	{!! Form::select('adestino', $aeropuerto, $destinos->aerpuertos_idaerpuerto,['class' => 'form-', 'placeholder' => 'Aeropuerto destino...','style'=>'font-size:15pt']) !!}
            </div>
             <div class="form-group">
            	<label style="font-size:13pt" for="articulo">Nombre de Aerolinia</label>
            	{!! Form::select('aeroline', $aerolinea, $destinos->aerolinea_id,['class' => 'form-', 'placeholder' => 'Aerolinea...','style'=>'font-size:15pt']) !!}
            </div>
            <div class="form-group">
            	<button class="btn btn-outline-dark" type="submit">Guardar</button>
            	<button class="btn btn-outline-dark" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}		
 </div>
@endsection