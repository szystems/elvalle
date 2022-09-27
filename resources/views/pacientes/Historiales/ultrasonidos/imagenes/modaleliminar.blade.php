<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-eliminar-{{$imagen->idultrasonido_obstetrico_img}}">
	{{Form::open(array
		(
			'action' => 'UltrasonidoObstetricoImgController@eliminarimagen',
			'method' => 'GET',
			'role' => 'form',
		))
	}}
	{{Form::token()}}

	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar imagen de ultrasonido obstetrico</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Confirme si desea eliminar la imagen de ultrasonido obstetrico
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
				<button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i> Confirmar</button>
				<input type="hidden" name="idultrasonido_obstetrico" value="{{$ultrasonido->idultrasonido_obstetrico}}">
				<input type="hidden" name="idpaciente" value="{{$ultrasonido->idpaciente}}">
				<input type="hidden" name="idultrasonido_obstetrico_img" value="{{$imagen->idultrasonido_obstetrico_img}}">
			</div>
		</div>
	</div>
	{{Form::close()}}
	
</div>
<!-- End Basic Modals -->