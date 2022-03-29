@extends ('layouts.admin')
@section ('contenido')
<div class="card mb-4">
						<!-- Card Header -->
	<header class="card-header d-md-flex align-items-center">
		<h4>
			<strong>Inventario </strong>

			<!--<a href="ingreso/create">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nuevo Ingreso ">
                    <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                        <i class="far fa-plus-square"></i> Nuevo Ingreso
                    </button>
                </span>
			</a>-->

		</h4>
		
	</header>

	<div class="card-body">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('ventas.inventario.search')
				
				<h6><strong>Filtros:</strong><font color="Blue"> <strong>Articulo:</strong> {{$articulof}}, <strong>Proveedor:</strong> {{$proveedorf}}, <strong>Presentacion:</strong> {{$presentacionf}}, <strong>Oferta:</strong> {{$estadoOfertaf}}, <strong>Estado:</strong> {{$estadof}}</font></h6>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><small><strong><i class="fa fa-sliders-h"></i></strong></small></th>
							<th><small><strong>FechaIngreso</strong></small></th>
							<th><small><strong>Proveedor</strong></small></th>
							<th><small><strong>Articulo/Codigo</strong></small></th>
							<th><small><strong>Descripcion</strong></small></th>
							<th><small><strong>F.Vencimiento</strong></small></th>
							<th><small><strong>Presentacion</strong></small></th>
							<th><small><strong>Unds.</strong></small></th>
							<th><small><strong>Stock</strong></small></th>
							<th><small><strong>CostoU.</strong></small></th>
							<th><small><strong>%Uti.</strong></small></th>
							<th><small><strong>P.Venta</strong></small></th>
							<th><small><strong>%Oferta</strong></small></th>
							<th><small><strong>Oferta</strong></small></th>
							<th><small><strong>Estado</strong></small></th>
						</thead>
							<?php
								$cantidadArticulos = $detalles->count();
								$totalUnidades = 0;
								$totalStock = 0;
								$sumCosto = 0;
								$sumUtilidad = 0;
								$sumPrecioVenta = 0;
								$sumPrecioSugerido = 0;
								$sumPorcentajeDescuento = 0;
								$sumPrecioDescuento = 0;
							?>
		               @foreach ($detalles as $det)
						<tr>
							<?php
								$fecha_ingreso = date("d-m-Y", strtotime($det->fecha));
								$fecha_vencimiento = date("d-m-Y", strtotime($det->fecha_vencimiento));
							?>
							<td align="left">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-sm btn-info" data-toggle="modal" title="Editar Articulo" data-target="#modaleditar-{{$det->iddetalle_ingreso}}">
									<i class="far fa-edit"></i>
								</button>
							</td>
							<td align="center"><small><a href="{{URL::action('IngresoController@show',$det->idingreso)}}" target="_blanc">{{ $fecha_ingreso}}</a></small></td>
							<td align="center"><small><a href="{{URL::action('ProveedorController@show',$det->idproveedor)}}" target="_blanc">{{ $det->Proveedor}}</a></small></td>
							<td align="left"><small>{{$det->Codigo}} <br> <strong> {{ $det->Articulo}}</strong></small></td>
							<td align="left"><small>{{$det->descripcion_inventario}}</small></td>
							<td align="center"><small>{{$fecha_vencimiento}}</small></td>
							<td align="center"><small>{{$det->Presentacion}}</small></td>
							<td align="center"><font color="blue"><strong>{{$det->total_unidades_inventario}}</strong></font></td>
							@if(($det->stock <= $det->minimo) & ($det->stock > 0))
                                @if($det->EstadoDetalle == "Activo")
                                    <td align="center"><font color="orange"><b>{{$det->stock}} </b></font></td>
                                @else
                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                @endif
                            @endif
                            @if($det->stock > $det->minimo)         
                                @if($det->EstadoDetalle == "Activo")
                                    <td align="center"><font color="limegreen"><b>{{$det->stock}} </b></font></td>
                                @else
                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                @endif
                            @endif
                            @if($det->stock <= 0)
                                @if($det->EstadoDetalle == "Activo")
                                    <td align="center"><font color="red"><b>{{$det->stock}} </b></font></td> 
                                @else
                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                @endif
                            @endif
							<td align="right"><h5><font color="orange">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_inventario,2, '.', ',')}}</font></h5></td>
							<td align="center"><h5>{{$det->porcentaje_utilidad}}%</h5></td>
							<td align="right"><h5><font color="blue">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</font></h5> <small> P.S:{{ Auth::user()->moneda }}{{ number_format($det->precio_sugerido,2, '.', ',')}}</small></td>
							<?php
                                $precio_descuento= ($det->precio_venta-(($det->precio_oferta*$det->precio_venta)/(100)));
                            ?>
							<td align="right"><h5>{{$det->precio_oferta}}% <font color="limegreen">({{ Auth::user()->moneda }}{{ number_format($precio_descuento,2, '.', ',')}})</font></h5></td>
							@if($det->estado_oferta == "Activada")
                                <td align="center"><font color="limegreen"><small>{{$det->estado_oferta}}</small></font></td>
                            @elseif($det->estado_oferta == "Inactivo")
                                <td align="center"><font color="red"><small>{{$det->estado_oferta}}</small></font></td>
                            @endif
							@if($det->EstadoDetalle == "Activo")
								<td align="center"><font color="limegreen"><small>{{$det->EstadoDetalle}}</small></font></td>
							@else
								<td align="center"><font color="red"><small>{{$det->EstadoDetalle}}</small></font></td>
							@endif
							<?php
                                $totalUnidades= $totalUnidades + $det->total_unidades_inventario;
								$totalStock = $totalStock + $det->stock;
								$sumCosto = $sumCosto + $det->costo_unidad_inventario;
								$sumUtilidad = $sumUtilidad + $det->porcentaje_utilidad;
								$sumPrecioVenta = $sumPrecioVenta + $det->precio_venta;
								$sumPrecioSugerido = $sumPrecioSugerido + $det->precio_sugerido;
								$sumPorcentajeDescuento = $sumPorcentajeDescuento + $det->precio_oferta;
								$sumPrecioDescuento = $sumPrecioDescuento + $precio_descuento;
                            ?>
						</tr>
						@include('ventas.inventario.modaledit')
				@endforeach
					</table>
				</div>

				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th><h3><strong><b>Total Unidades</b></strong></h3></th>
							<th><h3><strong><b>Total Stock</b></strong></h3></th>
							<th><h3><strong><b>Promedio Costo</b></strong></h3></th>
							<th><h3><strong><b>Promedio %Utilidad</b></strong></h3></th>
							<th><h3><strong><b>Promedio Precio</b></strong></h3></th>
							<th><h3><strong><b>Promedio Descuento</b></strong></h3></th>
						</thead>
							<?php

								$promedioCosto = $sumCosto/$cantidadArticulos;
								$promedioUtilidad = $sumUtilidad/$cantidadArticulos;
								$promedioPrecioVenta = $sumPrecioVenta/$cantidadArticulos;
								$promedioPrecioSugerido = $sumPrecioSugerido/$cantidadArticulos;
								$promedioPorcentajeDescuento = $sumPorcentajeDescuento/$cantidadArticulos;
								$promedioPrecioDescuento = $sumPrecioDescuento/$cantidadArticulos;
                            ?>
						<tr>
							<td align="center"><h3><b><font color="blue">{{$totalUnidades}}</font></b></h3></td>
							<td align="center"><h3><b><font color="limegreen">{{$totalStock}} </font></b></h3></td>
							<td align="center"><h3><b><font color="orange">{{ Auth::user()->moneda }}{{number_format($promedioCosto,2, '.', ',')}} </font></b></h3></td>
							<td align="center"><h3><b><font color="green">{{ Auth::user()->moneda }}{{number_format($promedioUtilidad,2, '.', ',')}} </font></b></h3></td>
							<td align="center"><h3><b><font color="blue">{{ Auth::user()->moneda }}{{number_format($promedioPrecioVenta,2, '.', ',')}}</font> ({{ Auth::user()->moneda }}{{number_format($promedioPrecioSugerido,2, '.', ',')}})</b></h3></td>
							<td align="center"><h3><b><font color="limegreen">{{$promedioPorcentajeDescuento}}% ({{ Auth::user()->moneda }}{{number_format($promedioPrecioDescuento,2, '.', ',')}})</font></b></h3></td>
						</tr>
					</table>
				</div>
				
				{{$detalles->render()}}
			</div>
		</div>
	</div>
</div>

	

@endsection