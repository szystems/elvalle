@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Listado de Presentaciones </strong>

			<a href="presentacion/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Presentación ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Crear Presentación
                    </button>
                </span>
			</a>
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">
			<!--Mensaje de abono correcto-->
			<div class="flash-message">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
				@if(Session::has('alert-' . $msg))

				<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
				@endif
				@endforeach
			</div> <!-- fin .flash-message -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				@include('almacen.presentacion.search')
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Nombre</strong></h5></th>
							<th><h5><strong>Descripción</strong></h5></th>
						</thead>
		               @foreach ($presentaciones as $presentacion)
						<tr>
							<td align="left">

								<a href="{{URL::action('PresentacionController@show',$presentacion->idpresentacion)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Presentación">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>

								<a href="{{URL::action('PresentacionController@edit',$presentacion->idpresentacion)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Presentación">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								
								<a href="" data-target="#modal-delete-{{$presentacion->idpresentacion}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Presentación">
                                          <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                <i class="far fa-minus-square"></i>
                                          </button>
                                    </span>
								</a>
								  
							</td>
							<td align="left"><h5>{{ $presentacion->nombre}}</h5></td>
							<td align="left"><h5>{{ $presentacion->descripcion}}</h5></td>
						</tr>
						@include('almacen.presentacion.modal')
						@endforeach
					</table>
				</div>
				{{$presentaciones->render()}}
			</div>
		</div>
	</div>
</div>
@endsection