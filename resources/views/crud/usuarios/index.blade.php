@extends('crud.dashboard')
@section('content')
    @include('crud.usuarios.search')
   
<div class="row" >
          <table class="table table-striped table-bordered table-condensed table-hover">
          <thead>
            <tr>             
               <th>ID</th>
               <th>Nombre</th>
               <th>Roll</th>
               <th>Editar</th>
               <th>Email</th>
               <th>Eliminar</th>                      
            </tr>
          </thead>
            <tbody>
              @foreach ($users as $user)
                        <tr>
                          <td>{{ $user ->id }}</td> 
                          <td>{{ $user ->name }}</td>
                          <td>{{ $user ->roll }}</td>
                          <td>{{ $user ->email }}</td>
                          <td>
                            <a href="{{URL::action('usuariosController@edit',$user->id)}}"><button class="btn btn-outline-primary">Editar</button></a>
                          </td>
                          <td>
                            {{Form::Open(array('action'=>array('usuariosController@destroy',$user->id),'method'=>'delete'))}}
                              <button class="btn btn-outline-primary">Eliminar</button>
                              {{Form::Close()}}
                          </td>                    
                        </tr>            
              @endforeach 
          </tbody>
      </table>
    </div>
    {!! $users->appends(Request::only('user')) -> render() !!}
@endsection