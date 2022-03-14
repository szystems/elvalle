@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4>
			<strong>Listado de Ingresos </strong>

			<a href="ingreso/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nuevo Ingreso ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Nuevo Ingreso
                    </button>
                </span>
			</a>

		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('compras.ingreso.search')
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
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Fecha</strong></h5></th>
							<th><h5><strong>Proveedor</strong></h5></th>
							<th><h5><strong>Usuario</strong></h5></th>
							<th><h5><strong>Comprobante</strong></h5></th>
							<!--<th><h5><strong>Impuesto</strong></h5></th>-->
							<th><h5><strong>Total</strong></h5></th>
							<th><h5><strong>Estado </strong></h5></th>
							
						</thead>
		               @foreach ($ingresos as $ing)
						<tr>
							<td align="left">

								<a href="{{URL::action('IngresoController@show',$ing->idingreso)}}">
									<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ver Ingreso">
										<button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
											<i class="far fa-eye"></i>
										</button>
									</span>
								</a>
								
								@if ($ing->estado == 'Activo')
		                        <a href="" data-target="#modal-delete-{{$ing->idingreso}}" data-toggle="modal">
		                        	<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cancelar Ingreso">
		                        		<button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
		                        			<i class="far fa-minus-square"></i>
										</button>
									</span>
		                        </a>
		                        @endif 
							</td>
							
							<?php
								$fecha = date("d-m-Y", strtotime($ing->fecha));
							?>
							<td align="center"><h5>{{ $fecha}}</h5></td>
							<td align="left"><h5>{{ $ing->nombre}}</h5></td>
							<td align="left"><h5>{{ $ing->name}}</h5></td>
							<td align="left"><h5>{{$ing->tipo_comprobante.': '.$ing->serie_comprobante.'-'.$ing->num_comprobante}}</h5></td>
							<!--<td align="right"><h5>{{ number_format($ing->impuesto,2, '.', ',')}}%</h5></td>-->
							@if($ing->estado == "Activo")
								<td align="right"><h5><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ing->total,2, '.', ',')}}</strong></font></h5></td>
							@else
								<td align="right"><del><h5><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ing->total,2, '.', ',')}}</strong></font></h5></del></td>
							@endif
							@if($ing->estado == "Activo")
							<td align="center"><h5><font color="limegreen">{{ $ing->estado}}</font></h5></td>
							@else
							<td align="center"><h5><font color="Red"><strong>{{ $ing->estado}}</strong></font></h5></td>
							@endif
						</tr>
						@include('compras.ingreso.modal')
				@endforeach
					</table>
				</div>
				
				{{$ingresos->render()}}
			</div>
		</div>
	</div>
</div>
@endsection