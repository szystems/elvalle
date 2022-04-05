{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="card mb-4">
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Buscar Artículo</strong></h4>
					
	</header>
	<div class="card-body">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					
					<label>Articulo</label>
					<select name="farticulo" class="form-control selectpicker" id="farticulo" data-live-search="true">
						<option value="">Todos</option>
						@foreach($filtroArticulos as $articulo)
							@if ($queryArticulo != null)
								<option value="{{ $queryArticulo }}" selected>{{ $queryArticulo }}</option>
							@endif
							<option value="{{$articulo->nombre}}">{{$articulo->codigo}} - {{$articulo->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
				<div class="form-group">
					
					<label>Categoria</label>
					<select name="fcategoria" class="form-control selectpicker" id="fcategoria" data-live-search="true">
						<option value="">Todas</option>
						@foreach($filtroCategorias as $categoria)
							@if ($queryCategoria != null)
								<option value="{{ $queryCategoria }}" selected>{{ $queryCategoria }}</option>
							@endif
							<option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
				<div class="form-group mb-2">
					<button type="submit" class="btn btn-info">
						<i class="fas fa-search"></i> Buscar
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

{{Form::close()}}


