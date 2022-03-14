@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4>
			<strong>Reporte de Ingresos </strong>
		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('reportes.ingresos.search')
				
				{{Form::open(array('action' => 'ReportesController@reportecompras','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}
					<input type="hidden" id="rdesde" class="form-control datepicker" name="rdesde" value="{{$desde}}">
					<input type="hidden" id="rhasta" class="form-control datepicker" name="rhasta" value="{{ $hasta}}">
					<input type="hidden" id="rproveedor" class="form-control datepicker" name="rproveedor" value="@foreach($provfiltro as $provf){{$provf->idpersona}}@endforeach">
					<input type="hidden" id="rusuario" class="form-control datepicker" name="rusuario" value="@foreach($usufiltro as $usuf){{$usuf->id}}@endforeach">
					<input type="hidden" id="restado" class="form-control datepicker" name="restado" value="{{ $estado}}">
					
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
							<h6><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Proveedor:</strong> ''@foreach($provfiltro as $provf){{$provf->nombre}}@endforeach', <strong>Usuario:</strong> '@foreach($usufiltro as $usuf){{$usuf->name}}@endforeach', <strong>Estado:</strong> '{{ $estado}}'</font></h6>
						</div>
					</div>
					
				{{Form::close()}}
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Fecha</strong></h5></th>
							<th><h5><strong>Proveedor</strong></h5></th>
							<th><h5><strong>Usuario</strong></h5></th>
							<th><h5><strong>Comprobante</strong></h5></th>
							<!--<th><h5><strong>Impuesto</strong></h5></th>-->
							<th><h5><strong>Total Compra</strong></h5></th>
							<th><h5><strong>Estado <h6><font color="orange"> A=Activo <br>C=Cancelado</font></h6></strong></h5></th>
							
						</thead>
						<?php
							$sumatotal = 0;
						?>
		               @foreach ($ingresos as $ing)
						<tr>
							<td align="left">

								<a href="{{URL::action('ReporteIngresosController@show',$ing->idingreso)}}" target="_blank">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Ingreso">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
							</td>
							<?php
								$fecha = date("d-m-Y", strtotime($ing->fecha));
							?>
							<td align="center"><h5>{{ $fecha}}</h5></td>
							<td align="left"><h5>{{ $ing->nombre}}</h5></td>
							<td align="left"><h5>{{ $ing->name}}</h5></td>
							<td align="left"><h5>{{$ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</h5></td>
							<!--<td align="right"><h5>{{ number_format($ing->impuesto,2, '.', ',')}}%</h5></td>-->
							<td align="right"><h5>{{ Auth::user()->moneda }}{{ number_format($ing->total,2, '.', ',')}}</h5></td>
							<?php
								$sumatotal = $sumatotal + $ing->total;
							?>
							<td align="center"><h5>{{ $ing->estado}}</h5></td>
							
						</tr>
						
				@endforeach
						<tr>
							<td ></td>
							<td ></td>
							<td ></td>
							<td ></td>
							<td align="right"><strong>Total Compras:</strong></td>
							<!--<td ></td>-->
							<td align="right"><strong>{{ Auth::user()->moneda }}{{number_format($sumatotal,2, '.', ',')}}</strong></td>
							<td ></td>
							
						</tr>
					</table>
					
				</div>
				
				{{$ingresos->render()}}
			</div>
		</div>
	</div>
</div>
@endsection