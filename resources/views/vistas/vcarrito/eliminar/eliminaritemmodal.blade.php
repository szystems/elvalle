<!-- Basic Modals -->
		<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-eliminar-item-{{$item->id}}">
            {{Form::open(array
            	(
                    'action' => 'CarritoSessionController@delete',
                    'method' => 'POST',
                    'role' => 'form',
                ))
            }}
            {{ csrf_field() }}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Eliminar Articulo</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
							Confirme si desea eliminar el articulo.<br><br>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cerrar</button>
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Confirmar</button>
						<input type="hidden" name="iditem" value="{{$item->id}}">
					</div>
				</div>
			</div>
            {{Form::close()}}
            
		</div>
<!-- End Basic Modals -->