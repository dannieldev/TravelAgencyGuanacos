@extends('crud.dashboard')
@section('content')
<h1>Ingresa nueva Ciudad</h1>

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
			 {!!Form::open(array('url'=>'/ciudades','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ old('nombre') }}">
            </div>
             <div class="form-group">
            	<label for="articulo">Codigo Telefonico de Ciudad</label>
            	<input type="text" name="codigo" class="form-control" placeholder="Codigo Ciudad..." value="{{ old('codigo') }}">
            </div>
             <div class="form-group">
            	<label for="articulo">Codigo Telefonico de Pais</label>
            	<input type="text" name="codigop" class="form-control" placeholder="Codigo Pais..." value="{{ old('codigop') }}">
            </div>
            <div class="form-group">
            	<button class="btn btn-outline-dark" type="submit">Guardar</button>
            	<button class="btn btn-outline-dark" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}		
 </div>
@endsection