@extends('crud.dashboard')
@section('content')
<div class="row">
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Pais</th>
               <th>Editar</th>                      
            </tr>
          </thead>
            <tbody>
              @foreach ($citys as $city)
                        <tr>
                          <td>{{ $city ->idciudad }}</td> 
                          <td>{{ $city ->nombrec }}</td>
                          <td>{{ $city ->pais_idpais }}</td>
                          <td>
                            <a href="{{-- {{URL::action('registrosController@edit',$reporte->idarticulo)}} --}}"><button class="btn btn-outline-primary">Editar</button></a>
                            <a href="" data-target="#modal-delete-{{--{{$reporte->idarticulo}} --}}" data-toggle="modal"><button class="btn btn-outline-danger">Eliminar</button></a>
                          </td>                  
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
@endsection