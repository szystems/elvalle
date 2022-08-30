<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-eliminar-{{$imagen->idfisico_img}}">
	{{Form::open(array
		(
			'action' => 'FisicoImgController@eliminarimagen',
			'method' => 'GET',
			'role' => 'form',
		))
	}}
	{{Form::token()}}

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar imagen de examen fisico</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Confirme si desea eliminar la imagen de examen fisico
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
				<button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i> Confirmar</button>
				<input type="hidden" name="idfisico" value="{{$fisico->idfisico}}">
				<input type="hidden" name="idpaciente" value="{{$fisico->idpaciente}}">
				<input type="hidden" name="idfisicoimg" value="{{$imagen->idfisico_img}}">
			</div>
		</div>
	</div>
	{{Form::close()}}
	
</div>
<!-- End Basic Modals -->