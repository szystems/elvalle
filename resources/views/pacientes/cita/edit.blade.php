@extends ('layouts.admin')
@section ('contenido')


<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Editar Cita:</strong></h2>
            </header>
            
            <!-- .flash-message -->
            <div class="flash-message">
                  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        {{session()->forget('alert-' . $msg)}}
                   @endforeach
            </div> 
            <!-- fin .flash-message -->

            <div class="card-body">
                  <h5 class="h4 card-title">Cambie los datos que desee editar:</h5>
                  <h6><font color="orange"> Campos Obligatorios *</font></h6>
                  @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                  @endif

                  {!!Form::model($cita,['method'=>'PATCH','route'=>['cita.update',$cita->idcita]])!!}
                  {{Form::token()}}
                  <!--<h3><strong><u>Datos de Cita: </u></strong></h3>
                  <div class="form-group">
                        <label for="doctor"><b>Doctor</b></label>
                        <p>{{$doctor->name}} ({{$doctor->especialidad}})</p>
                        
                  </div>
                  <div class="form-group">
                        <label for="paciente"> <b>Paciente</b> </label>
                        <p>{{$paciente->nombre}} / {{$paciente->telefono}} </p>
                        
                  </div>
                  <?php
				$fecha_inicio = date("d-m-Y H:i A", strtotime($cita->fecha_inicio));
				$fecha_fin = date("H:i A", strtotime($cita->fecha_fin));
                        $fechaCita = date("d-m-Y", strtotime($cita->fecha_fin));
                        $hora = date("H", strtotime($cita->fecha_inicio));
                        $minuto = date("i", strtotime($cita->fecha_inicio));
                        
                        $fecha1 = new DateTime($cita->fecha_inicio);//fecha inicial
                        $fecha2 = new DateTime($cita->fecha_fin);//fecha de cierre
                        $duracion = $fecha1->diff($fecha2);

                        $doctores=DB::table('users')
                        ->where('tipo_usuario','=','Doctor')
                        ->where('email','!=','Eliminado')
                        ->orderBy('especialidad','name','asc')
                        ->get();

                        $pacientes=DB::table('paciente')
                        ->where('estado','=','Habilitado')
                        ->orderBy('nombre','asc')
                        ->get();
			?>
                  <div class="form-group">
                        <label for="fecha_inicio"> <b>Fecha y Hora</b> </label>
                        <p> <font color="limegreen"> {{$fecha_inicio}}</font> - <font color="Red">{{$fecha_fin}}</font> </p>
                        
                  </div>
                  <div class="form-group">
                        <label for="fecha_inicio"> <b>Estado</b> </label>
                        @if($cita->estado_cita == "Confirmada")
                              <p><font color="Blue">{{ $cita->estado_cita}}</font> </p>
				@elseif($cita->estado_cita == "Espera")
                              <p><font color="Orange">{{ $cita->estado_cita}}</font> </p>
				@elseif($cita->estado_cita == "Activa")
                              <p><font color="#efcc00">{{ $cita->estado_cita}}</font> </p>
				@elseif($cita->estado_cita == "Finalizada")
                              <p><font color="LimeGreen">{{ $cita->estado_cita}}</font> </p>
				@elseif($cita->estado_cita == "Cancelada")
					<p><font color="Red">{{ $cita->estado_cita}}</font> </p>
				@endif
                  </div>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label> <b>Apuntes</b> </label>
                        <span class="form-icon-wrapper">
                              <textarea readonly type="text" class="form-control"  rows="4" cols="50">{{$cita->apuntes}}</textarea>
				</span>
                      </div>
                  </div>-->
                  <h3><strong><u>Modificar Datos: </u></strong></h3>
                  <div class="form-group">
				<label for="iddoctor"><font color="orange">*</font>Doctor</label>
				<select name="iddoctor" id="iddoctor" class="form-control selectpicker"  data-live-search="true" required>
					<option selected value="{{$doctor->id}}">{{$doctor->name}} ({{$doctor->especialidad}})</option>
					@foreach($doctores as $doc)
					      <option value="{{$doc->id}}">{{$doc->name}} / {{$doc->especialidad}}</option>
					@endforeach
				</select>
			</div>
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
                              <option selected value="{{$paciente->idpaciente}}">{{$paciente->nombre}} / {{$paciente->dpi}} / {{$paciente->nit}} / {{$paciente->telefono}}</option>
					@foreach($pacientes as $pac)
						<option value="{{$pac->idpaciente}}">{{$pac->nombre}} / {{$pac->dpi}} / {{$pac->nit}} / {{$pac->telefono}}</option>
					@endforeach

				</select>
			</div>
			<div class="form-group">
				<label for="fecha"></label><font color="orange">*</font>Fecha:</label>
				<span class="form-icon-wrapper">
					<span class="form-icon form-icon--right">
						<i class="fas fa-calendar-alt form-icon__item"></i>
					</span>
					<input type="text" id="fecha" class="form-control datepicker" name="fecha" value="{{$fechaCita}}">
				</span>
			</div>
			<div class="form-group">
				<label for="hora"><font color="orange">*</font>Hora</label>
				<select name="hora" id="hora" class="form-control selectpicker"  data-live-search="true" required>
					<option value="{{$hora}}">{{$hora}}</option>
					@for ($i = 0; $i < 24; $i++)
						<option value="{{$i}}">{{$i}}</option>
					@endfor
				</select>		
			</div>
			<div class="form-group">
				<label for="hora"><font color="orange">*</font>Minutos</label>
				<select name="minuto" id="minuto" class="form-control selectpicker"  data-live-search="true" required>
					<option value="{{$minuto}}">{{$minuto}}</option>
					<option value="00">00</option>
					<option value="30">30</option>
				</select>
			</div>
                  <div class="form-group">
				<label for="duracion"><font color="orange">*</font>Duracion</label>
				<select name="duracion" id="duracion" class="form-control selectpicker"  data-live-search="true" required>
					<option value="{{$duracion->format('%i')}}">
                                    @if($duracion->format('%i') == "59")
                                          1 Hora
                                    @endif
                                    @if($duracion->format('%i') == "29")
                                          30 minutos
                                    @endif
                              </option>
					<option value="59">1 Hora</option>
					<option value="29">30 Minutos</option>
				</select>
			</div>
                  <div class="form-group{{ $errors->has('estado_cita') ? ' has-error' : '' }}">
                        <label for="estado_cita"><font color="orange">*</font>Estado_cita</label>
                        <select id="estado_cita" type="text" class="form-control" name="estado_cita">
                              <option selected="selected" value="{{$cita->estado_cita}}">{{$cita->estado_cita}}</option>
                              <option value="Confirmada">Confirmada</option>
                              <option value="Espera">Espera</option>
                              <option value="Activa">Activa</option>
                              <option value="Finalizada">Finalizada</option>
                        </select>
                  </div>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label>Apuntes</label>
                        <span class="form-icon-wrapper">
                              <textarea id="apuntes" type="text" class="form-control" name="apuntes"  rows="4" cols="50">{{$cita->apuntes}}</textarea>
				</span>
                      </div>
                  </div>
            </div>

            <footer class="card-footer">
                  <div class="form-group">
                        <!--enviamos idcliente para editar los datos de cliente-->

                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                  </div>

                  {!!Form::close()!!}
            </footer>
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
</script>
@push ('scripts')
    <script>
        

        function validardecimal(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==8) return true;
            if (tecla==46 && txt.indexOf('.') != -1) return false;
            patron = /[\d\.]/;
            te = String.fromCharCode(tecla);
            return patron.test(te); 
        }  

        function validarentero(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla==8)
            {
                return true;
            }
        
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final); 
        }
    </script>
@endpush
@endsection