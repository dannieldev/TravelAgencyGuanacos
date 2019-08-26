{!! Form::open(array('url'=>'/user','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<form>
    <div class="input-group">
          <input type="text" value="" name="searchText" class="form-control" placeholder="Buscar Aerolinea...">
         <div class="input-group-append">
                  <div class="input-group-text">
            </div>
        </div>
    </div>
</form>
{{Form::close()}}