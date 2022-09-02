@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Listado de Proveedores </strong>
			@if(Auth::user()->tipo_usuario == "Administrador")
			<a href="proveedor/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Proveedor ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Crear Proveedor
                    </button>
                </span>
			</a>
			@endif
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{{Form::open(array('action' => 'ReportesController@reporteproveedores','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Listado de Proveedores </strong></h4>
							
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
				@include('compras.proveedor.search')
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><STRONG><i class="fa fa-sliders-h"></i></STRONG></h5></th>
							<th><h5><STRONG>Nombre</STRONG></h5></th>
							<th><h5><STRONG>Documento</STRONG></h5></th>
							<th><h5><STRONG>Telefono</STRONG></h5></th>
							<th><h5><STRONG>Email</STRONG></h5></th>
							
						</thead>
		               @foreach ($personas as $per)
						<tr>
							<td>

								<a href="{{URL::action('ProveedorController@show',$per->idpersona)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Proveedor">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>

								@if(Auth::user()->tipo_usuario == "Administrador")
								<a href="{{URL::action('ProveedorController@edit',$per->idpersona)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Proveedor">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
								</a>
								  
								<a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Proveedor">
                                          <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                <i class="far fa-minus-square"></i>
                                          </button>
                                    </span>
								</a>
								@endif

							</td>
							<td align="left"><h5>{{ $per->nombre}}</h5></td>
							<td align="center"><h5>{{ $per->tipo_documento}}-{{ $per->num_documento}}</h5></td>
							<td align="center"><h5>{{ $per->telefono}}</h5></td>
							<td align="left"><h5>{{ $per->email}}</h5></td>
							
						</tr>
						@include('compras.proveedor.modal')
						@endforeach
					</table>
				</div>
				{{$personas->render()}}
			</div>
		</div>
	</div>
</div>
@endsection