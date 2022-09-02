@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Listado de Artículos </strong>
			@if(Auth::user()->tipo_usuario != "Doctor")
			<a href="articulo/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Articulo ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Crear Articulo
                    </button>
                </span>
			</a>
			@endif
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				@include('almacen.articulo.search')
				{{Form::open(array('action' => 'ReportesController@reportearticulos','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Listado de Artículos </strong></h4>
							<input type="hidden" name="searchArticulo" value="{{ $queryArticulo }}">
							<input type="hidden" name="searchCategoria" value="{{ $queryCategoria }}">
						</header>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<label for="rpdf">Visualización</label>
										<select name="pdf" class="form-control" value="">
												<option value="Descargar" selected>Descargar</option>
												<option value="Navegador">Ver en navegador</option>
											</select>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
								<label for="rpdf"></label>
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
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Nombre</strong></h5></th>
							<th><h5><strong>Codigo</strong></h5></th>
							<th><h5><strong>Categoria</strong></h5></th>
							<th><h5><strong>Imagen</strong></h5></th>
							
						</thead>
		               @foreach ($articulos as $art)
						<tr>
							<td align="left">

								<a href="{{URL::action('ArticuloController@show',$art->idarticulo)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Articulo">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>

								@if(Auth::user()->tipo_usuario != "Doctor")
								<a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Articulo">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								
								<a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Articulo">
                                          <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                <i class="far fa-minus-square"></i>
                                          </button>
                                    </span>
								</a>
								@endif
							</td>
							<td align="left"><h5>{{ $art->nombre}}</h5></td>
							<td align="center"><h5>{{ $art->codigo}}</h5></td>
							<td align="left"><h5>{{ $art->categoria}}</h5></td>
							<td align="center">
								<h5>
									@if ($art->imagen != null)
									<img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="" width=100 class="img-thumbnail">
									@endif
								</h5>
								
							</td>
							
						</tr>
						@include('almacen.articulo.modalact')
						@include('almacen.articulo.modal')
						@endforeach
					</table>
				</div>
				{{$articulos->render()}}
			</div>
		</div>
	</div>
</div>
@endsection