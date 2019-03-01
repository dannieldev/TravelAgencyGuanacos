@extends('crud.dashboard')
@section('content')
<form>
    <div class="input-group">
          <input type="text" value="{{ $searchText }}" name="searchText" class="form-control" placeholder="Buscar Pasajero...">
         <div class="input-group-append">
                  <div class="input-group-text">
            </div>
        </div>
    </div>
</form>
<div class="row">
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>DUI</th>
               <th>Genero</th>
               <th>A/M/D</th>
               <!-- <th>Editar</th> -->                      
            </tr>
          </thead>
            <tbody>
              @foreach ($pasajeros as $pasajero)
                        <tr>
                          <td>{{ $pasajero ->idpasajero }}</td> 
                          <td>{{ $pasajero ->nombre }}</td>
                          <td>{{ $pasajero ->numid }}</td>
                          <td>{{ $pasajero ->genero }}</td>
                          <td>{{ $pasajero ->fecha }}</td>
                          <!-- <td>
                                    <a href="{{-- {{URL::action('registrosController@edit',$reporte->idarticulo)}} --}}"><button class="btn btn-outline-primary">Editar</button></a>
                                   <a href="" data-target="#modal-delete-{{--{{$reporte->idarticulo}} --}}" data-toggle="modal"><button class="btn btn-outline-danger">Eliminar</button></a>
                                </td> -->                  
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
@endsection