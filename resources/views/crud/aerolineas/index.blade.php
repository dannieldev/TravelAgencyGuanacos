@extends('crud.dashboard')
@section('content')
<div class="row">
            <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Editar</th>                      
            </tr>
          </thead>
            <tbody>
              @foreach ($lineas as $linea)
                        <tr>
                          <td>{{ $linea ->idaerolinea }}</td> 
                          <td>{{ $linea ->nombreli }}</td>
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