@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4>
			<strong>Reporte de Ventas </strong>
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('reportes.ventas.search')
				
				
				
				{{Form::open(array('action' => 'ReportesController@reporteventas','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					<input type="hidden" id="rdesde" class="form-control datepicker" name="rdesde" value="{{$desde}}">
					<input type="hidden" id="rhasta" class="form-control datepicker" name="rhasta" value="{{ $hasta}}">
					<input type="hidden" id="rcliente" class="form-control datepicker" name="rcliente" value="@foreach($clientefiltro as $clientef){{$clientef->idpersona}}@endforeach">
					<input type="hidden" id="rusuario" class="form-control datepicker" name="rusuario" value="@foreach($usufiltro as $usuf){{$usuf->id}}@endforeach">
					<input type="hidden" id="rsaldo" class="form-control datepicker" name="rsaldo" value="{{ $estadosaldo}}">
					<input type="hidden" id="restadoventa" class="form-control datepicker" name="restadoventa" value="{{ $estadoventa}}">
					<input type="hidden" id="rtipopago" class="form-control datepicker" name="rtipopago" value="{{ $tipopago}}">
					
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
							<?php
								$desde = date("d-m-Y", strtotime($desde));
								$hasta = date("d-m-Y", strtotime($hasta));
								if($desde == '01-01-1970' or $hasta == '01-01-1970')
								{
									$desde = null;
									$hasta = null;
								}
								
							?>
							<h6><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Cliente:</strong> ''@foreach($clientefiltro as $clientef){{$clientef->nombre}}@endforeach', <strong>Usuario:</strong> '@foreach($usufiltro as $usuf){{$usuf->name}}@endforeach', <strong>Saldo:</strong> '{{ $estadosaldo}}', <strong>Estado:</strong> '{{ $estadoventa}}', <strong>Tipo Pago:</strong> '{{ $tipopago}}'</font></h6>
						</div>
					</div>
					
				{{Form::close()}}
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Fecha</strong></h5></th>         
							<th><h5><strong>Cliente</strong></h5></th>
							<th><h5><strong>Comprobante</strong></h5></th>
							<th><h5><strong>Total</strong></h5></th>
							<th><h5><strong>Saldo</strong></h5></th>
							<th><h5><strong>Estado</strong></h5></th>
							<th><h5><strong>Tipo Pago</strong></h5></th>
							<th><h5><strong>Usuario</strong></h5></th>
							
						</thead>
						<?php
							$ventatotal = 0;
							$compratotal = 0;
							$diferencia = 0;
							$totalcomision = 0;
							$totalsaldo = 0;
						?>
		                @foreach ($ventas as $ven)
						<tr>
							<td align="left">

								<a href="{{URL::action('ReporteVentasController@show',$ven->idventa)}}" target="_blank">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Venta">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								 
							</td>
							<?php
								$fecha = date("d-m-Y", strtotime($ven->fecha));
							?>
							<td align="center"><h5>{{ $fecha}}</h5></td>
							<td align="left"><h5>{{ $ven->nombre}}</h5></td>
							<td align="left"><h5>{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante}}</h5></td>
							<td align="right"><h5>{{ Auth::user()->moneda }}{{number_format($ven->total_venta,2, '.', ',')}}</h5></td>
							<td align="right"><h5> 
								@if (($ven->total_venta - $ven->abonado) == 0)<font color="green">{{ Auth::user()->moneda }}{{ number_format(($ven->total_venta - $ven->abonado),2, '.', ',')}}</font> @endif 
								@if (($ven->total_venta - $ven->abonado) != 0)<font color="Red">{{ Auth::user()->moneda }}{{ number_format(($ven->total_venta - $ven->abonado),2, '.', ',')}}</font> @endif
							</h5></td>
							<td align="center"><h5>
								@if ($ven->estadoventa == "Cerrada")<font color="green">{{ $ven->estadoventa}} </font> @endif
								@if ($ven->estadoventa == "Abierta")<font color="orange">{{ $ven->estadoventa}} </font> @endif
							</h5></td>
							<td align="left"><h5>{{ $ven->tipopago}}</h5></td>
							<td align="center"><h5>{{ $ven->name}}</h5></td>
							<?php
								$ventatotal = $ventatotal + $ven->total_venta;
								$compratotal = $compratotal + $ven->total_compra;
								$totalcomision = $totalcomision + $ven->total_comision;
								$totalsaldo = $totalsaldo + ($ven->total_venta - $ven->abonado);
							?>
						</tr>
						@endforeach
						<tr>
							<td ></td>
							<td ></td>
							<td ></td>
							<td align="right"><strong>Total Ventas:</strong></td>
							<td align="right"><strong>{{ Auth::user()->moneda }}{{number_format($ventatotal,2, '.', ',')}}</strong></td>
							<td align="right"><strong>Total Saldo:</strong></td>
							<td align="right"><strong>{{ Auth::user()->moneda }}{{number_format($totalsaldo,2, '.', ',')}}</strong></td>
							<td ></td>
							<td ></td>
							
						</tr>
					</table>
					<div>
						<div class="card mb-4">
							<header class="card-header">
								<h4>
									<strong>Resumen</strong>
								</h4>
							</header>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group mb-2">
											<label for="compratotal"></label>Total Costo:</label>
											<span class="form-icon-wrapper">
												<strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($compratotal,2, '.', ',')}}</font></strong>
											</span>
										</div>
									</div>

									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group mb-2">
											<label for="ventatotal"></label>Total Ventas:</label>
											<span class="form-icon-wrapper">
												<strong><font color="Blue">{{ Auth::user()->moneda }}{{number_format($ventatotal,2, '.', ',')}}</font></strong>
											</span>
										</div>
									</div>

									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group mb-2">
											<label for="diferencia"></label>Diferencia:</label>
											<span class="form-icon-wrapper">
												<?php
													$diferencia = $ventatotal - $compratotal;
												?>
												<strong><font color="Green">{{ Auth::user()->moneda }}{{number_format($diferencia,2, '.', ',')}}</font></strong>
											</span>
										</div>
									</div>

									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group mb-2">
											<label for="totalsaldo"></label>Total Saldo:</label>
											<span class="form-icon-wrapper">
												<strong><font color="Red">{{ Auth::user()->moneda }}{{number_format($totalsaldo,2, '.', ',')}}</font></strong>
											</span>
										</div>
									</div>
									
									<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
										<div class="form-group mb-2">
											<label for="totalcomision"></label>Total Comisiones:</label>
											<span class="form-icon-wrapper">
												<strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($totalcomision,2, '.', ',')}}</font></strong>
											</span>
										</div>
									</div>
									
								</div>


							</div>

							<footer class="card-footer">
								

						
							</footer>
						</div>
					</div>


				</div>
				
				{{$ventas->render()}}
			</div>
		</div>
	</div>
</div>
@endsection