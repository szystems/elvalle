@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
	<!--Mensaje de abono correcto-->
		<div class="flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))

			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
			@endforeach
		</div> <!-- fin .flash-message -->
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
		<h4><strong>Listado de Ordenes </strong>

			<a href="orden/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nueva Orden ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Nueva Orden
                    </button>
                </span>
			</a>

		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('ventas.orden.search')
				<?php
								$desde = date("d-m-Y", strtotime($desde));
								$hasta = date("d-m-Y", strtotime($hasta));
								if($desde == '01-01-1970' or $hasta == '01-01-1970')
								{
									$desde = null;
									$hasta = null;
								}
								
							?>
				<h6><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Paciente:</strong> ''@foreach($pacientefiltro as $pacientef){{$pacientef->nombre}}@endforeach', <strong>Doctor:</strong> '@foreach($docfiltro as $docf){{$docf->name}}@endforeach', <strong>Usuario:</strong> '@foreach($usufiltro as $usuf){{$usuf->name}}@endforeach', <strong>Estado:</strong> '{{ $estadoorden}}'</font></h6>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>ID</strong></h5></th>
							<th><h5><strong>Fecha</strong></h5></th>
							<th><h5><strong>Doctor</strong></h5></th>
							<th><h5><strong>Paciente</strong></h5></th>
							<th><h5><strong>Total</strong></h5></th>
							<th><h5><strong>Estado Venta</strong></h5></th>
							<th><h5><strong>ID Venta</strong></h5></th>
							<th><h5><strong>Usuario</strong></h5></th>
							<th><h5><strong>Estado</strong></h5></th>
						</thead>
		               @foreach ($ordenes as $orden)
						<tr>
							<td align="left">

								<a href="{{URL::action('OrdenController@show',$orden->idorden)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Orden">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								@if($orden->estado != "Cancelada")
								<a href="{{URL::action('OrdenController@edit',$orden->idorden)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar orden">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								@endif
								@if($orden->estado != "Cancelada")
		                        <a href="" data-target="#modal-delete-{{$orden->idorden}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cancelar Orden">
		                        		<button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
		                        			<i class="far fa-minus-square"></i>
										</button>
									</span>
		                        </a>
								@endif
								@if($orden->estado != "Cancelada")
								<a href="" data-target="#modal-aventa-{{$orden->idorden}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Pasar a Venta">
										<button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
											<i class="fas fa-money-bill"></i>
										</button>
									</span>
								</a>
								@endif
							
							</td>
							<?php
								$fecha = date("d-m-Y", strtotime($orden->fecha));
							?>
							<td align="center"><h5>{{ $orden->idorden}}</h5></td>
							<td align="center"><h5>{{ $fecha}}</h5></td>
							<td align="left"><h5>{{ $orden->Doctor}}</h5></td>
							<td align="left"><h5>{{ $orden->Paciente}}</h5></td>
							<td align="right"><h5>{{ Auth::user()->moneda }}{{number_format($orden->total,2, '.', ',')}}</h5></td>
							<td align="center"><h5>{{ $orden->estado_orden}}</h5></td>
							<td align="center"><h5>@if($orden->idventa != null)<a href="{{URL::action('VentaController@show',$orden->idventa)}}">{{ $orden->idventa}}</a>@endif</h5></td>
							<td align="left"><h5>{{ $orden->Usuario}} ({{$orden->tipo_usuario}})</h5></td>
							@if($orden->estado == "Habilitada")
							<td align="left"><h5><font color="limegreen">{{ $orden->estado}}</font></h5></td>
							@else
							<td align="left"><h5><font color="red">{{ $orden->estado}}</font></h5></td>
							@endif
						</tr>
						@include('ventas.orden.modal')
						@include('ventas.orden.aventa.aventamodal')
				@endforeach
					</table>
				</div>

				
				
				{{$ordenes->render()}}
			</div>
		</div>
	</div>
</div>
@endsection