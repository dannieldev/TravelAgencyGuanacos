@extends('crud.dashboard')
@section('content')
        @include('crud.paises.buscar')

<div class="row">
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Editar</th>
               <th>Eliminar</th>                      
            </tr>
          </thead>
            <tbody>
              @foreach ($contrys as $contry)
                        <tr>
                          <td>{{ $contry ->idpais }}</td> 
                          <td>{{ $contry ->nombrep }}</td>
                          <td>
                            <a href="{{URL::action('paisesController@edit',$contry->id)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td>
                          <td>
                            {{Form::Open(array('action'=>array('paisesController@destroy',$contry->idpais),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                    
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
    {!! $contrys->appends(Request::only('contry')) -> render() !!}
@endsection