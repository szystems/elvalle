{!! Form::open(array('url'=>'ventas/orden','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

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
							<label for="paciente"></label>Paciente:</label>
							<select name="paciente" class="form-control" value="{{ old('paciente') }}">
								<option value="">Todos</option>
								@if(isset($pacientefiltro))
									<option selected value="{{ $pacientefiltro->idpaciente }}">{{ $pacientefiltro->nombre }}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								@foreach ($pacientes as $paciente)
                                <option value="{{$paciente->idpaciente}}">{{$paciente->nombre}}</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="doctor"></label>Doctor:</label>
							<select name="doctor" class="form-control" value="{{ old('doctor') }}">
								<option value="">Todos</option>
								@if(isset($docfiltro))
									<option selected value="{{ $docfiltro->id }}">{{ $docfiltro->name }} ({{ $docfiltro->especialidad }})</option>
								@else
									<option selected value="">Todos</option>
								@endif

								@foreach ($doctores as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}} ({{ $doctor->especialidad }})</option>
                              	@endforeach
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="usuario"></label>Usuario:</label>
							<select name="usuario" class="form-control" value="{{ old('usuario') }}">
								<option value="">Todos</option>
								@if(isset($usufiltro))
									<option selected value="{{ $usufiltro->id }}">{{ $usufiltro->name }} ({{ $usufiltro->tipo_usuario }})</option>
								@else
									<option selected value="">Todos</option>
								@endif

								@foreach ($usuarios as $usu)
                                <option value="{{$usu->id}}">{{$usu->name}} ({{ $usu->tipo_usuario }})</option>
                              	@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadosaldo"></label>Estado Orden:</label>
							<select name="estadoorden" class="form-control" value="{{ old('estadoorden') }}">
								<option value="">Todos</option>
								@if ($estadoorden != null)
								  	<option selected value="{{$estadoorden}}">{{$estadoorden}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Pendiente">Pendiente</option>
								<option value="Finalizada">Finalizada</option>
							</select>
						</div>
					</div>

					<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group mb-2">
							<label for="estadosaldo"></label>Estado:</label>
							<select name="estado" class="form-control" value="{{ old('estado') }}">
								<option value="">Todos</option>
								@if ($estado != null)
								  	<option selected value="{{$estado}}">{{$estado}}</option>
								@else
									<option selected value="">Todos</option>
								@endif

								<option value="Habilitada">Habilitada</option>
								<option value="Cancelada">Cancelada</option>
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