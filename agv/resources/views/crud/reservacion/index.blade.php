@extends('crud.dashboard')
@section('content')
<div class="row">
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>Fecha</th>
               <th>Hora</th>
               <th>Pago</th>
               <th>Clase</th>
               <th>Usuario</th>
               <th>Pasajero</th>                                          
            </tr>
          </thead>
            <tbody>
              @foreach ($reservas as $reserva)
                        <tr>
                          <td>{{ $reserva ->fecha }}</td> 
                          <td>{{ $reserva ->hora }}</td>
                          <td>${{ $reserva ->pago }}</td>
                          <td>{{ $reserva ->tipclase }}</td>
                          <td>{{ $reserva ->nombre }}</td>
                          <td>{{ $reserva ->pasajeros }}</td>
                          <!-- <td>
                                            <a href="{{-- {{URL::action('registrosController@edit',$reporte->idarticulo)}} --}}"><button class="btn btn-outline-primary">Editar</button></a>
                                            <a href="" data-target="#modal-delete-{{--{{$reporte->idarticulo}} --}}" data-toggle="modal"><button class="btn btn-outline-danger">Eliminar</button></a>
                                          </td>   -->                
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
@endsection