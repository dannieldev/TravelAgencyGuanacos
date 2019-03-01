@extends('crud.dashboard')
@section('content')
        @include('crud.aeropuertos.search')
<div class="row">
            <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Ciudad</th>
               <th>Editar</th>  
               <th>Eliminar</th>
            </tr>
          </thead>
            <tbody>
              @foreach ($puertos as $puerto)
                        <tr>
                          <td>{{ $puerto ->idaerpuerto }}</td> 
                          <td>{{ $puerto ->nombrepu }}</td>
                          <td>{{ $puerto ->nombrec }}</td>
                          <td>
                            <a href="{{URL::action('aeropuertosController@edit',$puerto->idaerpuerto)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td>  
                           <td>
                            {{Form::Open(array('action'=>array('aeropuertosController@destroy',$puerto->idaerpuerto),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                
                        </tr>
              @endforeach 
          </tbody>
      </table>
    </div>
    {!! $puertos->appends(Request::only('puerto')) -> render() !!}

@endsection