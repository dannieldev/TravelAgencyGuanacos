@extends('crud.dashboard')
@section('content')
        @include('crud.destinos.search')
<div class="row">
            <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>Aeropuerto salida</th>
               <th>Aeropuerto destino</th>
               <th>Aerolinia</th>
               <th>Editar</th>
               <th>Eliminar</th>                      
            </tr>
          </thead>
            <tbody>
              @foreach ($destinos as $destino)
                        <tr>
                          <td>{{ $destino ->aeropuerto }}</td>
                          <td>{{ $destino ->destino }}</td>
                          <td>{{ $destino ->aerolinea }}</td>
                          <td>
                            <a href="{{URL::action('destinosController@edit',$destino->id_aerolipu)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td> 
                          <td>
                            {{Form::Open(array('action'=>array('destinosController@destroy',$destino->id_aerolipu),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                  
                        </tr>
              @endforeach 
          </tbody>
      </table>
    </div>
    {!! $destinos->appends(Request::only('destino')) -> render() !!}
@endsection