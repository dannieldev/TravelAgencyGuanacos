@extends('crud.dashboard')
@section('content')
<h1>Editar Usuarios {{ $users->name }}</h1>

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
            {!!Form::model($users,['method'=>'PATCH','route'=>['user.update',$users->id]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="articulo">Nombre</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre..." value="{{ $users->name }}">
            </div>
            <div class="form-group">
            	<label for="articulo">Email</label>
            	<input type="text" name="email" class="form-control" placeholder="Codigo..." value="{{ $users->email }}">
            </div>
             <div class="form-group">
                  <label for="articulo">Roll</label>
               <section>
                  <select style="font-size:13pt" name="roll" placeholder="Seleccion de Roll...">
                  <option value=""></option>
                  <option value="Empleado">Empleado</option>
                  <option value="Adminstracion">Adminstrador</option>
                  </select>
               </section>                  
            </div>
            <div class="form-group">
            	<button class="btn btn-outline-dark" type="submit">Guardar</button>
            	<button class="btn btn-outline-dark" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}		
 </div>
@endsection