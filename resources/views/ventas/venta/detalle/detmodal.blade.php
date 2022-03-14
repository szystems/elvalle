<!-- Basic Modals -->
		<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-det-{{$det->iddetalle_venta}}">
            {{Form::open(array
				(
					'action' => 'VentaController@detdestroy',
                    'method' => 'GET',
                    'role' => 'form',
				))
			}}
			{{Form::token()}}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Eliminar Articulo de Detalle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						 
						
						<h5 class="modal-title" id="exampleModalLabel"><b>{{ $det->codigo}} {{ $det->articulo}}</b></h5>
						<h5>Cantidad a quitar:</h5>
						<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3" >
							<select name="cantidadaquitar" id="cantidadaquitar" class="form-control">
								<?php
									for ($i = 1; $i <= $det->cantidad; $i++) {
								?>
								<option value="{{$i}}" selected>{{$i}}</option>
								<?php
									}
								?>
							</select>
							
						</div>
							Confirme la cantidad de articulos a quitar del detalle de venta, los articulos seran devueltos al stock.
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fas fa-ban"></i> Cerrar</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i> Confirmar</button>
                        <input type="hidden" name="iddetalle" class="form-control" id="iddetalle" value="{{$det->iddetalle_venta}}">
						<input type="hidden" name="iddetalleidventa" class="form-control" id="iddetalleidventa" value="{{$det->idventa}}">
						<input type="hidden" name="iddetalleidarticulo" class="form-control" id="iddetalleidarticulo" value="{{$det->idarticulo}}">
						<input type="hidden" name="iddetalleidpresentacion" class="form-control" id="iddetalleidpresentacion" value="{{$det->idpresentacion}}">
						<input type="hidden" name="iddetalle_ingreso" class="form-control" id="iddetalle_ingreso" value="{{$det->iddetalle_ingreso}}">
						<input type="hidden" name="iddetallecantidad" class="form-control" id="iddetallecantidad" value="{{$det->cantidad}}">
						<input type="hidden" name="iddetalleprecioventa" class="form-control" id="iddetalleprecioventa" value="{{$det->precio_venta}}">
						<input type="hidden" name="iddetallepreciocompra" class="form-control" id="iddetallepreciocompra" value="{{$det->precio_compra}}">
						<input type="hidden" name="iddetalledescuento" class="form-control" id="iddetalledescuento" value="{{$det->descuento}}">
						<input type="hidden" name="iddetallecomision" class="form-control" id="iddetallecomision" value="0">
						<input type="hidden" name="iddetalleimpuesto" class="form-control" id="iddetalleimpuesto" value="0">
					</div>
				</div>
			</div>
            {{Form::close()}}
            
		</div>
<!-- End Basic Modals -->