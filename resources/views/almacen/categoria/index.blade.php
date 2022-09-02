@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Listado de Categorías </strong>
			@if(Auth::user()->tipo_usuario != "Doctor")
			<a href="categoria/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Categoría ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Crear Categoría
                    </button>
                </span>
			</a>
			@endif
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				{{Form::open(array('action' => 'ReportesController@reportecategorias','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Listado de Categorías </strong></h4>
							
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
				@include('almacen.categoria.search')
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Nombre</strong></h5></th>
							<th><h5><strong>Descripción</strong></h5></th>
							<th><h5><strong>Imagen</strong></h5></th>
						</thead>
		               @foreach ($categorias as $cat)
						<tr>
							<td align="left">

								<a href="{{URL::action('CategoriaController@show',$cat->idcategoria)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Categoría">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								
								@if(Auth::user()->tipo_usuario != "Doctor")
								<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Categoria">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								
								<a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Categoria">
                                          <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                <i class="far fa-minus-square"></i>
                                          </button>
                                    </span>
								</a>
								@endif
								
							</td>
							<td align="left"><h5>{{ $cat->nombre}}</h5></td>
							<td align="left"><h5>{{ $cat->descripcion}}</h5></td>
							<td align="center">
								<h5>
									@if ($cat->imagen != null)
									<img src="{{asset('imagenes/categorias/'.$cat->imagen)}}" alt="" width=100 class="img-thumbnail">
									@endif
								</h5>
								
							</td>
							
						</tr>
						@include('almacen.categoria.modal')
						@endforeach
					</table>
				</div>
				{{$categorias->render()}}
			</div>
		</div>
	</div>
</div>
@endsection