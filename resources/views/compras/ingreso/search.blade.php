{!! Form::open(array('url'=>'compras/ingreso','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div>
    	<div class="card mb-4">
            <header class="card-header">
				  <h5 class="h3 card-header-title"><strong>Filtrar por: </strong></h5>
				  <h6><font color="orange"> Puedes usar solo uno o varios campos de búsqueda para filtrar los datos.</font></h6>
				  <h6><font color="orange"> Campos Obligatorios *</font></h6>
            </header>
            <div class="card-body">
                <div class="row">
					<?php
					
					?>
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
							<label for="proveedor"></label>Proveedor:</label>
							<select name="proveedor" class="form-control" value="{{ old('proveedor') }}">
								<option value="">Todos</option>
								@if (isset($provfiltro))
								  	<option selected value="{{$provfiltro->idpersona}}">{{$provfiltro->nombre}}</option>
								@endif
								@foreach($personas as $per)
								  	<option value="{{$per->idpersona}}">{{$per->nombre}}</option>
							  	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="usuario"></label>Usuario:</label>
							<select name="usuario" class="form-control" value="{{ old('usuario') }}">

								<option value="">Todos</option>
								@if (isset($usufiltro))
								  	<option selected value="{{$usufiltro->id}}">{{$usufiltro->name}} ({{ $usufiltro->tipo_usuario }})</option>
								@endif
								@foreach($usuarios as $usu)
								  	<option value="{{$usu->id}}">{{$usu->name}} ({{ $usu->tipo_usuario }})</option>
							  	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estado"></label>Estado:</label>
							<select name="estado" class="form-control" value="{{ old('estado') }}">
								<option value="">Todos</option>
								@if ($estado != null)
								  	<option selected value="{{$estado}}">{{$estado}}</option>
								@else
									<option selected value="">Todos</option>
								@endif
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

	
</script>

    

{{Form::close()}}
