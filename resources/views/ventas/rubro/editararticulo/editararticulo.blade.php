<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-editar-articulo{{$rubroarticulo->idrubro_articulo}}">
			{!!Form::model($rubroarticulo,['method'=>'PATCH','route'=>['rubroarticulo.update',$rubroarticulo->idrubro_articulo]])!!}
            {{Form::token()}}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Articulo: <strong>{{$rubroarticulo->nombre}}</strong> </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
								<div class="form-group">
									<div class="input-group">
											<input type="hidden" name="idrubro" class="form-control" value="{{$rubroarticulo->idrubro}}">
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group{{ $errors->has('precio_costo') ? ' has-error' : '' }} mb-2">
                                                    <label for="precio_costo"></label><font color="orange">*</font>Precio Costo:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                        </div>
                                                        <input type="text" name="precio_costo" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$rubroarticulo->precio_costo}}" onkeypress="return validardecimal(event,this.value)" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                <div class="form-group{{ $errors->has('precio_venta') ? ' has-error' : '' }} mb-2">
                                                    <label for="precio_venta"></label><font color="orange">*</font>Precio Venta:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                        </div>
                                                        <input type="text" name="precio_venta" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$rubroarticulo->precio_venta}}" onkeypress="return validardecimal(event,this.value)" required>
                                                    </div>
                                                </div>
                                            </div>
									</div>
								</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
                        <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Editar</button>
					</div>
				</div>
			</div>
            {{Form::close()}}
            
		</div>



<!-- End Basic Modals -->