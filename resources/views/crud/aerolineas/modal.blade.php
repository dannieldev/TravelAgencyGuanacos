<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$linea->idaerolinea}}">
	{{Form::Open(array('action'=>array('aerolineasController@destroy',$linea->idaerolinea),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Eliminar Aerolinea</h4>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar El Registro</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-outline-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>