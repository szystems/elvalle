<!-- Basic Modals -->
<div class="modal fade" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-editar-vendedor{{$vendedor->idvendedor}}">
			{!!Form::model($vendedor,['method'=>'PATCH','route'=>['vendedor.update',$vendedor->idvendedor]])!!}
            {{Form::token()}}
        
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Vendedor</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
								<div class="form-group">
									<div class="input-group">
											<input type="hidden" name="idproveedor" class="form-control" id="idproveedor" value="{{$persona->idpersona}}">
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <label for="nombre"><strong><font color="orange">*</font>Nombre:</strong></label>
                                                <div class="form-group">
                                                    <input type="text" name="nombre" class="form-control" value="{{$vendedor->nombre}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <label for="codigo"><strong>Codigo:</strong></label>
                                                <div class="form-group">
                                                    <input type="text" name="codigo" class="form-control" value="{{$vendedor->codigo}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <label for="telefono"><strong>Telefono:</strong></label>
                                                <div class="form-group">
                                                    <input type="text" name="telefono" class="form-control" value="{{$vendedor->telefono}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <label for="email"><strong>Email:</strong></label>
                                                <div class="form-group">
                                                    <input type="text" name="email" class="form-control" value="{{$vendedor->email}}">
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