{!! Form::open(array('url'=>'ventas/inventario','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div>
    	<div class="card mb-4">
            <header class="card-header">
				  <h5 class="h3 card-header-title"><strong>Filtrar por: </strong></h5>
				  <h6><font color="orange"> Puedes usar solo uno o varios campos de búsqueda para filtrar los datos.</font></h6>
				  <h6><font color="orange"> Campos Obligatorios *</font></h6>
            </header>
            <div class="card-body">
                <div class="row">

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="articulof"></label>Articulo:</label>
							<select name="articulof" class="form-control selectpicker" data-live-search="true">
								<option value="">Todos</option>
								@foreach ($articulos as $art)
                                <option value="{{$art->nombre}}">{{$art->nombre}} - {{$art->codigo}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="proveedorf"></label>Proveedor:</label>
							<select name="proveedorf" class="form-control selectpicker" value="{{ old('proveedorf') }}" data-live-search="true">
								<option value="">Todos</option>
								@foreach ($proveedores as $pro)
                                <option value="{{$pro->nombre}}">{{$pro->nombre}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="presentacionf"></label>Presentacion:</label>
							<select name="presentacionf" class="form-control selectpicker" value="{{ old('presentacionf') }}" data-live-search="true">
								<option value="">Todos</option>
								@foreach ($presentaciones as $pre)
                                <option value="{{$pre->nombre}}">{{$pre->nombre}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadoOfertaf"></label>Oferta:</label>
							<select name="estadoOfertaf" class="form-control" value="{{ old('estadoOfertaf') }}">
								<option value="">Todos</option>
                                <option value="Activada">Activada</option>
								<option value="Inactivo">Inactivo</option>
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadof"></label>Estado:</label>
							<select name="estadof" class="form-control" value="{{ old('estadof') }}">
								<option value="">Todos</option>
								<option value="Activo">Activo</option>
								<option value="Cancelado">Cancelado</option>
							</select>
						</div>
					</div>
					
				</div>


            </div>
                
                        
              

            <footer class="card-footer">
                <div class="form-group">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-info">
									<i class="fas fa-search"></i> Buscar
								</button>
							</span>
						</div>

        
            </footer>
    	</div>
	</div>

<script>
	var date = new Date();
	var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

	var optSimple = {
		format: "dd-mm-yyyy",
    	language: "es",
    	autoclose: true,
		todayHighlight: true,
		todayBtn: "linked",
	};
	$( '#datepickerdesde' ).datepicker( optSimple );

	$( '#datepickerhasta' ).datepicker( optSimple );

	$( '#datepickerdesde,#datepickerhasta' ).datepicker( 'setDate', today );
</script>

    

{{Form::close()}}
