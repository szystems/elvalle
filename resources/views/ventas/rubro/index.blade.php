@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Listado de Rubros </strong>

			<a href="rubro/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Rubro ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Crear Rubro
                    </button>
                </span>
			</a>
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('ventas.rubro.search')
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Nombre</strong></h5></th>
							<th><h5><strong>Nota</strong></h5></th>
							<th><h5><strong>Estado</strong></h5></th>
						</thead>
		               @foreach ($rubros as $rubro)
						<tr>
							<td align="left">

								<a href="{{URL::action('RubroController@show',$rubro->idrubro)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Rubro">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>

								<a href="{{URL::action('RubroController@edit',$rubro->idrubro)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Rubro">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								
								<a href="" data-target="#modal-delete-{{$rubro->idrubro}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Rubro">
                                          <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                <i class="far fa-minus-square"></i>
                                          </button>
                                    </span>
								</a>
								  
							</td>
							<td align="center"><h5>{{ $rubro->nombre}}</h5></td>
							<td align="left"><h5>{{ $rubro->nota}}</h5></td>
							<td align="center"><h5>{{ $rubro->estado_rubro}}</h5></td>
						</tr>
						@include('ventas.rubro.modal')
						@endforeach
					</table>
				</div>
				{{$rubros->render()}}
			</div>
		</div>
	</div>
</div>
@endsection