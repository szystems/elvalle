<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-eliminar-{{$colposcopia->idcolposcopia}}">
	{{Form::open(array
		(
			'action' => 'ColposcopiaController@eliminarcolposcopia',
			'method' => 'GET',
			'role' => 'form',
		))
	}}
	{{Form::token()}}

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar colposcopia</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Confirme si desea eliminar la colposcopia
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
				<button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i> Confirmar</button>
				<input type="hidden" name="idcolposcopia" value="{{$colposcopia->idcolposcopia}}">
				<input type="hidden" name="idpaciente" value="{{$colposcopia->idpaciente}}">
			</div>
		</div>
	</div>
	{{Form::close()}}
	
</div>
<!-- End Basic Modals -->