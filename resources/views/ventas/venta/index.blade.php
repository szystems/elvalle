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
		<h4><strong>Listado de Ventas </strong>

			<a href="venta/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nueva Venta ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Nueva Venta
                    </button>
                </span>
			</a>

		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php
					$desdeReporte=$desde;
					$hastaReporte=$hasta;

					$desde = $desde;
					$hasta = $hasta;

					$desde = date("d-m-Y", strtotime($desde));
					$hasta = date("d-m-Y", strtotime($hasta));
								
				?>
				@include('ventas.venta.search')

				@if(Auth::user()->tipo_usuario == "Administrador")
				{{Form::open(array('action' => 'ReportesController@reporteventas','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Listado de Ingresos </strong></h4>
							<input type="hidden" name="searchDesde" value="{{ $desdeReporte }}">
							<input type="hidden" name="searchHasta" value="{{ $hastaReporte }}">
							@if(isset($clientefiltro))
								<input type="hidden" name="searchCliente" value="{{ $clientefiltro->dpi }}">
							@else
								<input type="hidden" name="searchCliente" value="">
							@endif
							@if(isset($usufiltro))
								<input type="hidden" name="searchUsuario" value="{{ $usufiltro->email }}">
							@else
								<input type="hidden" name="searchUsuario" value="">
							@endif
							<input type="hidden" name="searchSaldo" value="{{ $estadosaldo }}">
							<input type="hidden" name="searchEstado" value="{{ $estadoventa }}">
							<input type="hidden" name="searchTipopago" value="{{ $tipopago }}">
						</header>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<label for="rpdf">Visualización</label>
										<select name="pdf" class="form-control" value="">
												<option value="Descargar" selected>Descargar</option>
												<option value="Navegador">Ver en navegador</option>
											</select>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
								<label for="rpdf"></label>
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
				@endif

				<h6>
					<strong>Filtros:</strong>
					<font color="Blue"> 
						<strong>Desde:</strong> '{{ $desde}}', 
						<strong>Hasta:</strong> '{{ $hasta}}', 
						<strong>Cliente:</strong> ''@if(isset($clientefiltro)){{$clientefiltro->nombre}}@endif', 
						<strong>Usuario:</strong> '@if(isset($usufiltro)){{$usufiltro->name}}@endif', 
						<strong>Saldo:</strong> '{{ $estadosaldo}}', 
						<strong>Estado:</strong> '{{ $estadoventa}}', 
						<strong>Tipo Pago:</strong> '{{ $tipopago}}'
					</font>
				</h6>
				<?php
					$ventatotal = 0;
					$compratotal = 0;
					$diferencia = 0;
					$totalcomision = 0;
					$totalsaldo = 0;
				?>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>ID</strong></h5></th>
							<th><h5><strong>Fecha</strong></h5></th>
							<th><h5><strong>Cliente</strong></h5></th>
							<th><h5><strong>Usuario</strong></h5></th>
							<th><h5><strong>Comprobante</strong></h5></th>
							<th><h5><strong>Total</strong></h5></th>
							<th><h5><strong>Saldo</strong></h5></th>
							<th><h5><strong>Estado</strong></h5></th>
							<th><h5><strong>Tipo Pago</strong></h5></th>
							<th><h5><strong>ID Orden</strong></h5></th>
						</thead>
		               @foreach ($ventas as $ven)
						<tr>
							<td align="left">
								@if ($ven->estado == 'A')
		                        <a href="" data-target="#modal-delete-{{$ven->idventa}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Venta">
		                        		<button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
		                        			<i class="far fa-minus-square"></i>
										</button>
									</span>
		                        </a>
		                        @endif
							
								@if (($ven->total_venta - $ven->abonado) == '0')
								<a href="{{URL::action('VentaController@show',$ven->idventa)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Venta">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								@endif
								@if (($ven->total_venta - $ven->abonado) != '0')
								<a href="{{URL::action('VentaController@show',$ven->idventa)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Venta o Abonar">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i> / <i class="fas fa-donate"></i>
										</button>
									</span>
								</a>
								@endif
								
								<a href="{{URL::action('VentaController@edit',$ven->idventa)}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar venta">
                                          <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                <i class="far fa-edit"></i>
                                          </button>
                                    </span>
                              	</a>
								
								@if ($ven->estadoventa == 'Abierta')
								<a href="" data-target="#modal-cerrar-{{$ven->idventa}}" data-toggle="modal">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cerrar Venta">
                                          <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                                <i class="fas fa-ban"></i>
                                          </button>
                                    </span>
                              	</a>
								@endif
							</td>
							<?php
								$fecha = date("d-m-Y", strtotime($ven->fecha));
							?>
							<td align="center"><h5>{{ $ven->idventa}}</h5></td>
							<td align="center"><h5>{{ $fecha}}</h5></td>
							<td align="left"><h5>{{ $ven->nombre}}</h5></td>
							<td align="left"><h5>{{ $ven->name}} ({{$ven->tipo_usuario}})</h5></td>
							<td align="left"><h5>{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante}}</h5></td>
							<td align="right"><h5>{{ Auth::user()->moneda }}{{number_format($ven->total_venta,2, '.', ',')}}</h5></td>
							<td align="right"><h5> 
								@if (($ven->total_venta - $ven->abonado) == 0)<font color="green">{{ Auth::user()->moneda }}{{ number_format(($ven->total_venta - $ven->abonado),2, '.', ',')}}</font> @endif 
								@if (($ven->total_venta - $ven->abonado) != 0)<font color="Red">{{ Auth::user()->moneda }}{{ number_format(($ven->total_venta - $ven->abonado),2, '.', ',')}}</font> @endif
							</h5></td>
							<td align="center"><h5>
								@if ($ven->estadoventa == "Cerrada")<font color="limegreen">{{ $ven->estadoventa}} </font> @endif
								@if ($ven->estadoventa == "Abierta")<font color="orange">{{ $ven->estadoventa}} </font> @endif
							</h5></td>
							<td align="left"><h5>{{ $ven->tipopago}}</h5></td>
							<td align="left"><h5><b>@if($ven->idorden != null)<a href="{{URL::action('OrdenController@show',$ven->idorden)}}">{{ $ven->idorden}}</a>@endif</b></h5></td>
							<?php
								$ventatotal = ($ventatotal + $ven->total_venta);
								$compratotal = $compratotal + $ven->total_compra;
								$totalcomision = $totalcomision + $ven->total_comision;
								$totalsaldo = $totalsaldo + ($ven->total_venta - $ven->abonado);
							?>
						</tr>
						@include('ventas.venta.modal')
						@include('ventas.venta.modals.modalcerrar')
				@endforeach
					</table>
				</div>
				<h4><strong>Resumen </strong></h4>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							@if(Auth::user()->tipo_usuario == "Administrador")
								<th><h5 align="center"><strong>Total Costo</strong></h5></th>
							@endif
							<th><h5 align="center"><strong>Total Ventas</strong></h5></th>
							@if(Auth::user()->tipo_usuario == "Administrador")
								<th><h5 align="center"><strong>Diferncia</strong></h5></th>
							@endif
							<th><h5 align="center"><strong>Total Saldo</strong></h5></th>
						</thead>
		               
						<tr>
							<?php
								$diferencia = $ventatotal - $compratotal;
							?>
							@if(Auth::user()->tipo_usuario == "Administrador")
								<td align="center"><h1><strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($compratotal,2, '.', ',')}}</font></strong></h1></td>
							@endif
							<td align="center"><h1><strong><font color="Blue">{{ Auth::user()->moneda }}{{number_format($ventatotal,2, '.', ',')}}</font></strong></h1></td>
							@if(Auth::user()->tipo_usuario == "Administrador")
								<td align="center"><h1><strong><font color="Green">{{ Auth::user()->moneda }}{{number_format($diferencia,2, '.', ',')}}</font></strong></h1></td>
							@endif
							<td align="center"><h1><strong><font color="Red">{{ Auth::user()->moneda }}{{number_format($totalsaldo,2, '.', ',')}}</font></strong></h1></td>
						</tr>
					</table>
				</div>
				
				{{$ventas->render()}}
			</div>
		</div>
	</div>
</div>
@endsection