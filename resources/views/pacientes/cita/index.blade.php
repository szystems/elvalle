@extends ('layouts.admin')
@section ('contenido')
<?php 
    $user = Auth::user(); 
?>
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		
		<?php
		if (isset($mensaje))
		{
		?> 
			<div class="alert alert-warning">
				<ul>
					{{$mensaje}}
				</ul>
			</div>
		<?php
		}
		?> 
		{!!Form::open(array('url'=>'pacientes/cita','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<h4><strong>Crear Cita </strong>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="iddoctor"><font color="orange">*</font>Doctor</label>
						<select name="iddoctor" id="iddoctor" class="form-control selectpicker"  data-live-search="true" required>
							<option value="">Buscar Doctor Nombre/Especialidad</option>
							@foreach($doctores as $doctor)
							<option value="{{$doctor->id}}">{{$doctor->name}} / {{$doctor->especialidad}}</option>
							@endforeach

						</select>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label for="idpaciente"><font color="orange">*</font>Paciente</label>
							<a href="{{url('pacientes\paciente\create')}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Paciente">
										<button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
												<i class="far fa-plus-square"></i>
										</button>
									</span>
							</a>
						<select name="idpaciente" id="idpaciente" class="form-control selectpicker"  data-live-search="true" required>
							<option value="">Buscar Paciente Nombre/DPI/Nit/Telefono</option>
							@foreach($pacientes as $paciente)
							<option value="{{$paciente->idpaciente}}">{{$paciente->nombre}} / {{$paciente->dpi}} / {{$paciente->nit}} / {{$paciente->telefono}}</option>
							@endforeach

						</select>
					</div>
				</div>
				
				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					<div class="form-group mb-2">
						<label for="fecha"></label><font color="orange">*</font>Fecha:</label>
						<span class="form-icon-wrapper">
							<span class="form-icon form-icon--right">
								<i class="fas fa-calendar-alt form-icon__item"></i>
							</span>
							<input type="text" id="fecha" class="form-control datepicker" name="fecha" value="">
						</span>
					</div>
				</div>
				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					<div class="form-group">
						<label for="hora"><font color="orange">*</font>Hora</label>
						<select name="hora" id="hora" class="form-control selectpicker"  data-live-search="true" required>
							<option value="">Seleccione la Hora</option>
							@for ($i = 0; $i < 24; $i++)
								<option value="{{$i}}">{{$i}}</option>
							@endfor
						</select>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					<div class="form-group">
						<label for="hora"><font color="orange">*</font>Minutos</label>
						<select name="minuto" id="minuto" class="form-control selectpicker"  data-live-search="true" required>
							<option value="">Seleccione el minuto</option>
							<option value="00">00</option>
							<option value="30">30</option>
						</select>
					</div>
				</div><div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					<div class="form-group">
						<label for="hora"><font color="orange">*</font>Duracion</label>
						<select name="duracion" id="duracion" class="form-control selectpicker"  data-live-search="true" required>
							<option value="">Seleccione la duracion</option>
							<option value="59">1 hora</option>
							<option value="29">30 minutos</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
					<div class="form-group mb-2">
						<span class="input-group-btn"><br>
							<button type="submit" class="btn btn-success">
								<i class="far fa-plus-square"></i> Crear Cita
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!--datos ocultos-->
		<input type="hidden" name="idusuario" value="{{Auth::user()->id}}">
		
		</h4>
		{{Form::close()}}

	</header>

	<!-- .flash-message -->

	<div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> 
    <!-- fin .flash-message -->

	<div class="card-body">
	<h4><strong>Listado de Citas</strong>
		<div class="row">
				
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
                    $doctorBuscar=DB::table('users')->where('id','=',$iddoctorBuscar)->first();
					$fechaImprimir=$fechaBuscar;
					$fechaBuscar = date("d-m-Y", strtotime($fechaBuscar));
                ?>
				@include('pacientes/cita.search')
				<p> <b><u>Filtros:</u></b> </p>
				<p>Fecha: <font color="Blue">{{$fechaBuscar}}</font>,  Doctor: <font color="Blue">@if($iddoctorBuscar == "") Todos @else {{$doctorBuscar->name}} ({{$doctorBuscar->especialidad}}) @endif</font></p>
				{{Form::open(array('action' => 'ReportesController@reportecitas','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					<input type="hidden" id="rfecha" class="form-control datepicker" name="rfecha" value="{{$fechaImprimir}}">
					<input type="hidden" id="rdoctor" class="form-control datepicker" name="rdoctor" @if($iddoctorBuscar != null) value="{{ $iddoctorBuscar }}" @else value="" @endif>
					
					<div class="card mb-4">
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
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><STRONG>Opciones</STRONG></th>
							<th><h5><STRONG>Doctor</STRONG></th>
							<th><h5><STRONG>Paciente</STRONG></th>
							<th><h5><STRONG>Fecha/Hora</STRONG></th>
							<th><h5><STRONG>Usuario</STRONG></th>
							<th><h5><STRONG>Estado</STRONG></th>
							<th><h5><STRONG>Turno</STRONG></th>
							
						</thead>
		               @foreach ($citas as $cita)
						<tr>
							<td>

								<a href="{{URL::action('CitaController@show',$cita->idcita)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Cita">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								@if($cita->estado != "Cancelada")
								<a href="{{URL::action('CitaController@edit',$cita->idcita)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Cita">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								<a href="" data-target="#modal-delete-{{$cita->idcita}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cancelar Cita">
										<button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
												<i class="far fa-minus-square"></i>
										</button>
									</span>
								</a>
								@endif
							</td>
							<?php
								$citaDoctor = DB::table('users')
								->where('id', '=', $cita->iddoctor)
								->first();

								$citaPaciente = DB::table('paciente')
								->where('idpaciente', '=', $cita->idpaciente)
								->first();

								$citaUsuario = DB::table('users')
								->where('id', '=', $cita->idusuario)
								->first();

								$fecha_inicio = date("d-m-Y H:i A", strtotime($cita->fecha_inicio));
								$fecha_fin = date("H:i A", strtotime($cita->fecha_fin));
							?>
							<td align="center">
								<h5>
									@if ($citaDoctor->foto != null)
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/usuarios/'.$citaDoctor->foto)}}">
									@else
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/noimage.png')}}">
									@endif<br>
									{{ $citaDoctor->name}}
								</h5>
							</td>

							<td align="center">
								<h5>
								<h5>
									@if ($citaPaciente->foto != null)
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/pacientes/'.$citaPaciente->foto)}}">
									@else
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/noimage.png')}}">
									@endif<br>
									{{ $citaPaciente->nombre}} @if($cita->apuntes != null) <i class="fas fa-comment"> @endif </i>
								</h5>
								</h5>
							</td>
							
							<td align="center"><h5><font color="limegreen">{{ $fecha_inicio}}</font> - <font color="red">{{$fecha_fin}}</font></h5></td>
							<td align="center"><h5>{{ $citaUsuario->name}}<br>({{$citaUsuario->tipo_usuario}})</h5></td>
							@if($cita->estado_cita == "Confirmada")
								<td align="center"><h5> <font color="Blue">{{ $cita->estado_cita}}</font> </h5></td>
							@elseif($cita->estado_cita == "Espera")
								<td align="center"><h5> <font color="Orange">{{ $cita->estado_cita}}</font> </h5></td>
							@elseif($cita->estado_cita == "Activa")
								<td align="center"><h5> <font color="#efcc00">{{ $cita->estado_cita}}</font> </h5></td>
							@elseif($cita->estado_cita == "Finalizada")
								<td align="center"><h5> <font color="limegreen">{{ $cita->estado_cita}}</font> </h5></td>
							@elseif($cita->estado_cita == "Cancelada")
								<td align="center"><h5> <font color="Red">{{ $cita->estado_cita}}</font> </h5></td>
							@endif
							
							@if($cita->estado_cita == "Confirmada")
								<td align="center"><h5><font color="Blue"><b>{{ $cita->turno}}</b></font></h5></td>
							@endif
							@if($cita->estado_cita == "Espera")
								<td align="center"><h5><font color="orange"><b>{{ $cita->turno}}</b></font></h5></td>
							@endif
							@if($cita->estado_cita == "Activa")
								<td align="center"><h5><font color="efcc00"><b>{{ $cita->turno}}</b></font></h5></td>
							@endif
							@if($cita->estado_cita == "Finalizada")
								<td align="center"><h5><font color="limegreen"><b>{{ $cita->turno}}</b></font></h5></td>
							@endif
							@if($cita->estado_cita == "Cancelada")
								<td align="center"><h5><font color="Red"><b>{{ $cita->turno}}</b></font></h5></td>
							@endif
						</tr>
						@include('pacientes.cita.modal')
						@endforeach
					</table>
				</div>
				{{$citas->render()}}
			</div>
		</div>
	</div>
</div>
<script>
	var date = new Date();
	var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
	var tomorrow = new Date(today);
	tomorrow.setDate(tomorrow.getDate() + 1);
	
	var optSimple = {
		format: "dd-mm-yyyy",
    	language: "es",
    	autoclose: true,
		todayHighlight: true,
		todayBtn: "linked",
	};
	$( '#fecha' ).datepicker( optSimple );
	$( '#fechaBuscar' ).datepicker( optSimple );

	$( '#fecha').datepicker( 'setDate', today );
	$( '#fechaBuscar').datepicker( 'setDate', $fechaBuscar );
</script>
@endsection