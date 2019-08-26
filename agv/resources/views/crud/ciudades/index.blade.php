@extends('crud.dashboard')
@section('content')
        @include('crud.ciudades.search')
<div class="row">
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Pais</th>
               <th>Editar</th> 
               <th>Eliminar</th>   

            </tr>
          </thead>
            <tbody>
              @foreach ($citys as $city)
                        <tr>
                          <td>{{ $city ->idciudad }}</td> 
                          <td>{{ $city ->nombrec }}</td>
                          <td>{{ $city ->nombrep }}</td>
                          <td>
                            <a href="{{URL::action('ciudadesController@edit',$city->idciudad)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td> 
                           <td>
                            {{Form::Open(array('action'=>array('ciudadesController@destroy',$city->idciudad),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                 
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
    {!! $citys->appends(Request::only('city')) -> render() !!}

@endsection