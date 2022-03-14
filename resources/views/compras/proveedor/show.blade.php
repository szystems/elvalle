@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <!--Mensaje de abono correcto-->
            <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        {{session()->forget('alert-' . $msg)}}
                    @endforeach
            </div> <!-- fin .flash-message -->
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Proveedor: {{$persona->nombre}}</strong></h2>
                  
            </header>
            {{Form::open(array('action' => 'ReportesController@vistaproveedor','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Proveedor </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$persona->idpersona}}">
                            <input type="hidden" id="rnombre" class="form-control datepicker" name="rnombre" value="{{$persona->nombre}}">
						</header>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<select name="pdf" class="form-control" value="">
												<option value="Descargar" selected>Descargar</option>
												<option value="Navegador">Ver en navegador</option>
											</select>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-danger">
												<i class="fa fa-file-pdf"></i> PDF
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				{{Form::close()}}
            <div class="card-body">
                <a href="{{URL::action('ProveedorController@edit',$persona->idpersona)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Proveedor">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                  </a>
								
				  <a href="" data-target="#modaleliminarshow-delete-{{$persona->idpersona}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Articulo">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                    </span>
				  </a>
                  <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nombre"><strong>Nombre</strong></label>
                            <p>{{$persona->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <p>{{$persona->email}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="telefono"><strong>Teléfono</strong></label>
                            <p>{{$persona->telefono}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="direccion"><strong>Dirección</strong></label>
                            <p>{{$persona->direccion}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="tipo_documento"><strong>Documento</strong></label>
                            <p>{{$persona->tipo_documento}}-{{$persona->num_documento}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="banco"><strong>Banco</strong></label>
                            <p>{{$persona->banco}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="nombre_cuenta"><strong>Nombre Cuenta</strong></label>
                            <p>{{$persona->nombre_cuenta}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="numero_cuenta"><strong>Numero Cuenta</strong></label>
                            <p>{{$persona->numero_cuenta}}</p>
                        </div>
                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label><h2><strong><u>Vendedores</u></strong></h2></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-condensed table-hover">          
                                                <thead>
                                                    
                                                    <th><h5><strong>Nombre</strong></h5></th>
                                                    <th><h5><strong>Codigo</strong></h5></th>
                                                    <th><h5><strong>Telefono</strong></h5></th>
                                                    <th><h5><strong>Email</strong></h5></th>       
                                                </thead>
                                                @foreach ($vendedores as $vendedor)
                                                    <tr>
                                                        <td align="left"><h5>{{$vendedor->nombre}}</h5></td>
                                                        <td align="left"><h5>{{$vendedor->codigo}}</h5></td>
                                                        <td align="left"><h5>{{$vendedor->telefono}}</h5></td>
                                                        <td align="left"><h5>{{$vendedor->email}}</h5></td>
                                                    </tr>
                                                @endforeach
                                                    <tfoot>
                                                    </tfoot>
                                            </table>
                                        </div>
                                    </div>
                  </div>
            </div>
			@include('compras.proveedor.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
      </div>
</div>
   
@endsection