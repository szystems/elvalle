{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="card mb-4">
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Buscar Artículo</strong></h4>
					
	</header>
	<div class="card-body">
		<div class="row">
		<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
				<div class="form-group mb-2">
					<label for="nombrecodigo">Nombre/codigo</label>
					<input type="text" class="form-control" name="searchText" placeholder="Buscar por Nombre o Codigo..." data-live-search="true" value="{{$searchText}}">
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


