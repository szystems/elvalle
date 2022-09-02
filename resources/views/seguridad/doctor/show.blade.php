@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Doctor: {{$doctor->name}}</strong></h2>
                  
            </header>
            {{Form::open(array('action' => 'ReportesController@vistadoctor','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$doctor->id}}">
                            <input type="hidden" id="rnombre" class="form-control datepicker" name="rnombre" value="{{$doctor->name}}">
						</header>
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
            <div class="card-body">
                @if(Auth::user()->tipo_usuario == "Administrador")
                    <a href="{{URL::action('DoctorController@edit',$doctor->id)}}">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Doctor">
                            <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                        </span>
                    </a>		
                    <a href="" data-target="#modaleliminarshow-delete-{{$doctor->id}}" data-toggle="modal">
                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Doctor">
                            <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                        </span>
                    </a>
                @endif
                  <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="name"><strong>Nombre</strong></label>
                            <p>{{$doctor->name}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="no_colegiado"><strong>No. Colegiado</strong></label>
                            <p>{{$doctor->no_colegiado}}</p>
                        </div>
                    </div>
                    <?php
                        $fecha_nacimiento = date("d-m-Y", strtotime($doctor->fecha_nacimiento));

                        $cumpleanos = new DateTime($doctor->fecha_nacimiento);
                        $hoy = new DateTime();
                        $annos = $hoy->diff($cumpleanos);
                        $edad = $annos->y;
                    ?>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="fecha_nacimiento"><strong>Fecha Nacimiento</strong></label>
                            <p>{{$fecha_nacimiento}} (Edad: {{$edad}})</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <p>{{$doctor->email}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="empresa"><strong>Empresa</strong></label>
                            <p>{{$doctor->empresa}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="telefono"><strong>Teléfono</strong></label>
                            <p>{{$doctor->telefono}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="direccion"><strong>Dirección</strong></label>
                            <p>{{$doctor->direccion}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="contacto_emergencia"><strong>Contacto de Emergencia</strong></label>
                            <p>{{$doctor->contacto_emergencia}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="telefono_emergencia"><strong>Teléfono de Emergencia</strong></label>
                            <p>{{$doctor->telefono_emergencia}}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="tipo_usuario"><strong>Tipo Usuario</strong></label>
                            <p>{{$doctor->tipo_usuario}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="max_descuento"><strong>Porcentaje Máximo de Descuento</strong></label>
                            <p>{{$doctor->max_descuento}}<i class="fas fa-percent"></i></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="especialidad"><strong>Especialidad</strong></label>
                            <p>{{$doctor->especialidad}}</p>
                        </div>
                    </div>
                  </div>
            </div>
			@include('seguridad.doctor.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
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
                {!!Form::open(array('url'=>'seguridad/dias','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}
                <h4><strong>Bloquear dia para citas </strong>
                <div class="card-body">
                    <div class="row">
                        <input  id="iddoctor" type="hidden" class="form-control" name="iddoctor" value="{{$doctor->id}}" >
                        <?php
                            $zonahoraria = Auth::user()->zona_horaria;
                            $hoy= new DateTime("now", new DateTimeZone($zonahoraria) );
                            $hoy = date_format($hoy, 'd-m-Y');
                        ?>
                        <input  id="hoy" type="hidden" class="form-control" name="hoy" value={{$hoy}} >
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }} mb-2">
                                <label for="fecha"></label><font color="orange">*</font>Fecha:</label>
                                <span class="form-icon-wrapper">
                                    <span class="form-icon form-icon--right">
                                        <i class="fas fa-calendar-alt form-icon__item"></i>
                                    </span>
                                    <input type="text" id="fecha" class="form-control datepicker" name="fecha" value="">
                                    
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                            <div class="form-group mb-2">
                                <label for="apuntes"></label>Apuntes:</label>
                                <textarea id="apuntes" type="text" class="form-control" name="apuntes"  rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="form-group mb-2">
                                <span class="input-group-btn"><br>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="far fa-calendar-minus"></i> Bloquear
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

                <h2 class="h3 card-header-title"><strong>Días bloqueados para citas</strong></h2>
                <div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
                            <th><h5><STRONG>Opciones</STRONG></th>
							<th><h5><STRONG>Fecha</STRONG></th>
                            <th><h5><STRONG>Apuntes</STRONG></th>
						</thead>
		               @foreach ($dias as $dia)
						<tr>
							<td>
								<a href="" data-target="#modal-delete-{{$dia->iddias}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Desbloquear día">
										<button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
												<i class="far fa-calendar-plus"></i>
										</button>
									</span>
								</a>
							</td>
                            <?php
                                $fecha = date("d-m-Y", strtotime($dia->fecha));
                            ?>
							<td align="left"><h5>{{ $fecha}}</h5></td>
							<td align="center"><h5>{{ $dia->apuntes}}</h5></td>
							
						</tr>
						@include('seguridad.doctor.modaldesbloquear')
						@endforeach
					</table>
				</div>
                  

        
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

	$( '#fecha').datepicker( 'setDate', today );
</script>
@endsection