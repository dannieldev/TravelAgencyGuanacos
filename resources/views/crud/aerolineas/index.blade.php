@extends('crud.dashboard')
@section('content')
    <div class="col-log-12">
      <div class="col-log-1">
        @include('crud.aerolineas.search')
      </div>
      <div class="col-log-3">
    </div> 
<div class="row">
            <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Editar</th>
               <th>ELiminar</th>                         
            </tr>
          </thead>
            <tbody>
              @foreach ($lineas as $linea)
                        <tr>
                          <td>{{ $linea ->idaerolinea }}</td> 
                          <td>{{ $linea ->nombreli }}</td>
                          <td>
                            <a href="{{URL::action('aerolineasController@edit',$linea->idaerolinea)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td>
                          <td>
                            {{Form::Open(array('action'=>array('aerolineasController@destroy',$linea->idaerolinea),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                  
                        </tr>    
                        @include('crud.aerolineas.modal')      
              @endforeach 
          </tbody>
      </table>
    </div>
{!! $lineas->appends(Request::only('linea')) -> render() !!}

@endsection