@extends ('layouts.admin')
@section ('contenido')
<?php 
    $user = Auth::user(); 
?>
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4><strong>Doctores </strong>

			<a href="paciente/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nuevo Paciente ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Nuevo Paciente
                    </button>
                </span>
			</a>

		</h4>

		
		
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
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{{Form::open(array('action' => 'ReportesController@reportepacientes','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Listado de Pacientes </strong></h4>
							
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
				@include('pacientes/paciente.search')
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><STRONG>Opciones</STRONG></th>
							<th><h5><STRONG>Nombre</STRONG></th>
							<th><h5><STRONG>Email</STRONG></th>
							<th><h5><STRONG>Telefono</STRONG></th>
							<th><h5><STRONG>F. Nacimiento</STRONG></th>
							<th><h5><STRONG>DPI</STRONG></th>
							<th><h5><STRONG>Nit</STRONG></th>
							
						</thead>
		               @foreach ($pacientes as $pac)
						<tr>
							<td align="center">
								<a href="{{URL::action('HistorialController@show',$pac->idpaciente)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Paciente">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
							</td>
							<td align="left">
								<h5>
									@if ($pac->foto != null)
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/pacientes/'.$pac->foto)}}">
									@else
										<img class="u-avatar--sm rounded-circle mr-3" src="{{asset('imagenes/noimage.png')}}">
									@endif
									{{ $pac->nombre}}
								</h5>
							</td>
							<td align="left"><h5>{{ $pac->correo}}</h5></td>
							<td align="center"><h5>{{ $pac->telefono}}</h5></td>
							
							<?php
									$fecha_nacimiento = date("d-m-Y", strtotime($pac->fecha_nacimiento));

									$cumpleanos = new DateTime($pac->fecha_nacimiento);
									$hoy = new DateTime();
									$annos = $hoy->diff($cumpleanos);
									$edad = $annos->y;
							?>

							<td align="center"><h5>{{$fecha_nacimiento}} (Edad: {{$edad}})</h5></td>
							<td align="center"><h5>{{ $pac->dpi}}</h5></td>
							<td align="center"><h5>{{ $pac->nit}}</h5></td>
						</tr>
						@endforeach
					</table>
				</div>
				{{$pacientes->render()}}
			</div>
		</div>
	</div>
</div>
@endsection