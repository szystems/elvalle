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
					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="desde"></label><font color="orange">*</font>Desde:</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<i class="fas fa-calendar-alt form-icon__item"></i>
								</span>
								<input type="text" id="datepickerdesde" class="form-control datepicker" name="desde" value="{{ $desde }}">
							</span>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="hasta"></label><font color="orange">*</font>Hasta:</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<i class="fas fa-calendar-alt form-icon__item"></i>
								</span>
								<input type="text" id="datepickerhasta" class="form-control datepicker" name="hasta" value="{{ $hasta }}">
							</span>
						</div>
					</div>
					
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="articulof"></label>Articulo:</label>
							<select name="articulof" class="form-control selectpicker" data-live-search="true">
								<option value="">Todos</option>
								@if ($articulof != null)
								  	<option selected value="{{$articulof}}">{{$articulof}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								@foreach ($articulos as $art)
                                	<option value="{{$art->nombre}}">{{$art->nombre}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="proveedorf"></label>Proveedor:</label>
							<select name="proveedorf" class="form-control selectpicker" value="{{ old('proveedorf') }}" data-live-search="true">
								<option value="">Todos</option>
								@if ($proveedorf != null)
								  	<option selected value="{{$proveedorf}}">{{$proveedorf}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

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
								@if ($presentacionf != null)
								  	<option selected value="{{$presentacionf}}">{{$presentacionf}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

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
								@if ($estadoOfertaf != null)
								  	<option selected value="{{$estadoOfertaf}}">{{$estadoOfertaf}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

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
								@if ($estadof != null)
								  	<option selected value="{{$estadof}}">{{$estadof}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Activo">Activo</option>
								<option value="Cancelado">Cancelado</option>
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="stockf"></label>Stock:</label>
							<select name="stockf" class="form-control" value="{{ old('stockf') }}">
								<option value="">Todos</option>
								@if ($stockf != null)
								  	<option selected value="Stock">Stock</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Stock">Stock</option>
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="vigenciaf"></label>Vigencia:</label>
							<select name="vigenciaf" class="form-control" value="{{ old('vigenciaf') }}">
								<option value="">Todos</option>
								@if ($vigenciaf != null)
								  	<option selected value="{{ $vigenciaf }}">{{ $vigenciaf }}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="+60 dias">+60 dias</option>
								<option value="-60 dias">-60 dias</option>
								<option value="Vigentes">Vigentes</option>
								<option value="Vencidos">Vencidos</option>

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
</script>

    

{{Form::close()}}
