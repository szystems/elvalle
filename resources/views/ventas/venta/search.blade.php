{!! Form::open(array('url'=>'ventas/venta','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

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
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
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

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
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
							<label for="cliente"></label>Cliente:</label>
							<select name="cliente" class="form-control">
								<option value="">Todos</option>
								@if (isset($clientefiltro))
								  	<option selected value="{{$clientefiltro->dpi}}">{{$clientefiltro->nombre}}</option>
								@endif

								@foreach ($personas as $per)
                                <option value="{{$per->dpi}}">{{$per->nombre}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="usuario"></label>Usuario:</label>
							<select name="usuario" class="form-control">
								<option value="">Todos</option>
								@if (isset($usufiltro))
								  	<option selected value="{{$usufiltro->email}}">{{$usufiltro->name}} ({{ $usufiltro->tipo_usuario }})</option>
								@endif

								@foreach ($usuarios as $usu)
                                <option value="{{$usu->email}}">{{$usu->name}} ({{ $usu->tipo_usuario }})</option>
                              	@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadosaldo"></label>Saldo:</label>
							<select name="estadosaldo" class="form-control">
								<option value="">Todos</option>
								@if ($estadosaldo != null)
								  	<option selected value="{{$estadosaldo}}">{{$estadosaldo}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Pendiente">Pendiente</option>
								<option value="Pagado">Pagado</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadosaldo"></label>Estado:</label>
							<select name="estadoventa" class="form-control">
								<option value="">Todos</option>
								@if ($estadoventa != null)
								  	<option selected value="{{$estadoventa}}">{{$estadoventa}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Cerrada">Cerrada</option>
								<option value="Abierta">Abierta</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="tipopago"></label>Tipo Pago:</label>
							<select name="tipopago" class="form-control">
								<option value="">Todos</option>
								@if ($tipopago != null)
								  	<option selected value="{{$tipopago}}">{{$tipopago}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Efectivo">Efectivo</option>
								<option value="Tarjeta">Tarjeta</option>
								<option value="Cheque">Cheque</option>
								<option value="Credito">Credito</option>
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