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
							<th><h5><strong><i class="fa fa-sliders-h"></i></strong></h5></th>
							<th><h5><strong>Fecha_Ingreso</strong></h5></th>
							<th><h5><strong>Proveedor</strong></h5></th>
							<th><h5><strong>Articulo/Codigo</strong></h5></th>
							<th><h5><strong>Descripcion</strong></h5></th>
							<th><h5><strong>F.Vencimiento</strong></h5></th>
							<th><h5><strong>Presentacion</strong></h5></th>
							<th><h5><strong>Unidades</strong></h5></th>
							<th><h5><strong>Stock</strong></h5></th>
							<th><h5><strong>CostoU.</strong></h5></th>
							<th><h5><strong>P.Venta</strong></h5></th>
							<th><h5><strong>%Oferta</strong></h5></th>
							<th><h5><strong>Oferta</strong></h5></th>
							<th><h5><strong>Estado</strong></h5></th>
						</thead>
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
							<td align="center"><h5><a href="{{URL::action('IngresoController@show',$det->idingreso)}}" target="_blanc">{{ $fecha_ingreso}}</a></h5></td>
							<td align="center"><h5><a href="{{URL::action('ProveedorController@show',$det->idproveedor)}}" target="_blanc">{{ $det->Proveedor}}</a></h5></td>
							<td align="left"><h5>{{$det->Codigo}} <br> <strong> {{ $det->Articulo}}</strong></h5></td>
							<td align="left"><h5>{{$det->descripcion_inventario}}</h5></td>
							<td align="center"><h5>{{$fecha_vencimiento}}</h5></td>
							<td align="center"><h5>{{$det->Presentacion}}</h5></td>
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
							<td align="right"><h5><font color="blue">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</h5></td>
							<?php
                                $precio_descuento= ($det->precio_venta-(($det->precio_oferta*$det->precio_venta)/(100)));
                            ?>
							<td align="right"><h5>{{$det->precio_oferta}}% <font color="limegreen">({{ Auth::user()->moneda }}{{ number_format($precio_descuento,2, '.', ',')}})</font></h5></td>
							@if($det->estado_oferta == "Activada")
                                <td align="center"><font color="limegreen">{{$det->estado_oferta}}</font></td>
                            @elseif($det->estado_oferta == "Inactivo")
                                <td align="center"><font color="red">{{$det->estado_oferta}}</font></td>
                            @endif
							@if($det->EstadoDetalle == "Activo")
								<td align="center"><font color="limegreen">{{$det->EstadoDetalle}}</font></td>
							@else
								<td align="center"><font color="red">{{$det->EstadoDetalle}}</font></td>
							@endif
						</tr>
						@include('ventas.inventario.modaledit')
				@endforeach
					</table>
				</div>
				
				{{$detalles->render()}}
			</div>
		</div>
	</div>
</div>

	

@endsection