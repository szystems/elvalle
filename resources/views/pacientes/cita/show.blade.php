@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Cita: </strong></h2>
                  
            </header>
                {{Form::open(array('action' => 'ReportesController@vistacita','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Cita </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$cita->idcita}}">
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
                @if($cita->estado != "Cancelada")
                <a href="{{URL::action('CitaController@edit',$cita->idcita)}}">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Cita">
                        <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                    </span>
                </a>		
                <a href="" data-target="#modaleliminarshow-delete-{{$cita->idcita}}" data-toggle="modal">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cancelar Cita">
                        <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Cancelar</button>
                    </span>
                </a>
                @endif
                  <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre"><strong>Doctor</strong></label>
                            <p>
                                @if ($doctor->foto != null)
                                    <img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/usuarios/'.$doctor->foto)}}">
                                @else
                                    <img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/noimage.png')}}">
                                @endif
                                {{$doctor->name}} ({{$doctor->especialidad}})
                            </p>
                        </div>
                    </div>
                    <?php
                        $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));

                        $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                        $hoy = new DateTime();
                        $annos = $hoy->diff($cumpleanos);
                        $edad = $annos->y;

                        $fecha_inicio = date("d-m-Y H:i A", strtotime($cita->fecha_inicio));
				        $fecha_fin = date("H:i A", strtotime($cita->fecha_fin));
                    ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="paciente"><strong>Paciente</strong></label>
                            <p>
                                @if ($paciente->foto != null)
                                    <img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/pacientes/'.$paciente->foto)}}">
                                @else
                                    <img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/noimage.png')}}">
                                @endif
                                {{$paciente->nombre}} ({{$edad}} Años) / {{$paciente->telefono}} / {{$paciente->correo}} / {{$paciente->dpi}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="paciente"><strong>Fecha y Hora</strong></label>
                            <p><font color="limegreen"> {{$fecha_inicio}}</font> - <font color="Red">{{$fecha_fin}}</font></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="fecha_nacimiento"><strong>Estado Cita</strong></label>
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
                    </div>
                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                        <div class="form-group">
                            <label for="correo"><strong>Apuntes</strong></label>
                            <textarea readonly type="text" class="form-control"  rows="4" cols="50">{{$cita->apuntes}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="telefono"><strong>Usuario</strong></label>
                            <p>{{$usuario->name}} ({{$usuario->tipo_usuario}})</p>
                        </div>
                    </div>
                    
                  </div>
            </div>
			@include('pacientes.cita.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
      </div>
</div>
   
@endsection