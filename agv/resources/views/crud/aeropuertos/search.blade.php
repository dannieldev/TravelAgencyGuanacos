{!! Form::open(array('url'=>'/aeropuertos','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<form>
    <div class="input-group">
          <input type="text" value="{{ $searchText }}" name="searchText" class="form-control" placeholder="Buscar Aeropuerto...">
         <div class="input-group-append">
                  <div class="input-group-text">
            </div>
        </div>
    </div>
     <a class="btn btn-outline-dark" href="{{ URL::action('aeropuertosController@create') }}">Añadir Nuevo Aeropuerto<span class="sr-only">(current)</span></a>
</form>
{{Form::close()}}