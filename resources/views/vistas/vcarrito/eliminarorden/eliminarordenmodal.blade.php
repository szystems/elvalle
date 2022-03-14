<!-- Basic Modals -->
		<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-eliminar-orden-{{$orden->idorden}}">
            {{Form::open(array
				(
					'action' => 'VistaCarritoController@eliminarordenmodal',
                    'method' => 'GET',
                    'role' => 'form',
				))
			}}
			{{Form::token()}}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Eliminar Carrito</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						 
						
						<h5 class="modal-title" id="exampleModalLabel"> Total: {{ Auth::user()->moneda }}{{ number_format($orden->total,2, '.', ',')}}</></h5>
						<br>
						
							Confirme si desea eliminar el carrito.<br><br>
							<u>Nota:</u> Si elimina el carrito, tambien eliminara los productos que contiene el misma.
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancelar</button>
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Confirmar</button>
						<input type="hidden" name="idordeneliminar" class="form-control" id="idordeneliminar" value="{{$orden->idorden}}">
					</div>
				</div>
			</div>
            {{Form::close()}}
            
		</div>
<!-- End Basic Modals -->