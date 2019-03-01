@extends('crud.dashboard')
@section('content')
<h1>Editar Aerlinea {{ $contrys->nombrep }}</h1>

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
            {!!Form::model($contrys,['method'=>'PATCH','route'=>['paises.update',$contrys->idpais]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="articulo">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ $contrys->nombrep }}">
            </div>
              <div class="form-group">
            	<label for="articulo">Codigo Telefonico</label>
            	<input type="text" name="codigo" class="form-control" placeholder="Codigo..." value="{{ $contrys->idpais }}">
            </div>
            <div class="form-group">
            	<button class="btn btn-outline-dark" type="submit">Guardar</button>
            	<button class="btn btn-outline-dark" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}		
 </div>
@endsection