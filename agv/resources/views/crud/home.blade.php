@extends('crud.dashboard')
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hola Bienvenido {{ auth()->user()->name }}</h1>
  <p class="lead">Esta es la aplicacion de administracion de Agencia Guanaco.</p>
  <hr class="my-4">
  <p class="text-danger">Tu eres del area {{ auth()->user()->roll }}  de Agencia Guanacos.</p>
</div>
@endsection