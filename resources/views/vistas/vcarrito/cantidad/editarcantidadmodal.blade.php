<!-- Basic Modals -->
		<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-modificar-item-{{$item->id}}">
            {{Form::open(array
            	(
                    'action' => 'CarritoSessionController@quantity',
                    'method' => 'POST',
                    'role' => 'form',
                ))
            }}
            {{ csrf_field() }}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Cantidad</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
							Ingrese la nueva cantidad del articulo:<br><br>
							<div class="form-group row">
								<div class="col-xs-3">
									<input type="number" class="form-control" name="cantidaditem" type="text" value="{{$item->quantity}}">
								</div>
								
							</div>
						
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