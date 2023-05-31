<html html>
	<head>
  		<title>Reporte de Inventario</title>
		<style>
		  	h1, h2, h3, h4, h5, h6 {
				  font-family: arial, sans-serif;
			  }
			table {
					font-family: arial, sans-serif;
					border-collapse: collapse;
					width: 100%;
					font-size: 10px;
					border: 1px solid #000;
				}

			th, td {
					width: 25%;
					text-align: left;
					vertical-align: top;
					border: 1px solid #000;
					border-collapse: collapse;
					padding: 0.3em;
					caption-side: bottom;
					height: 20px;
			}

			th {
				background-color: #595555;
				color: white;
				font-size: 10px;
				width: 100%;
			}
			img{
			}
			
		</style>
	</head>
	<body>
		@if ($imagen != null)
			<center>
				<img align="center" src="{{ $imagen}}" alt="" height="100">
			</center>
		@endif
		<h4 align="center">
			<strong><u>Reporte de Inventario</u></strong>
		</h4>
		<h6><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' <strong></font>
		<br><strong>Reporte creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font><h6>
		
		<br><strong>Filtros:</strong><font color="Blue"> <strong>Articulo:</strong> '{{ $articulof}}', <strong>Proveedor:</strong> '{{ $proveedorf}}', <strong>Presentacion:</strong> '{{$presentacionf}}', <strong>Oferta:</strong> '{{$estadoOfertaf}}', <strong>Estado:</strong> '{{ $estadof}}', <strong>Stock:</strong> '{{ $stockf}}', <strong>Vigencia:</strong> '{{ $vigenciaf}}'</font></h6>
		<br>
		<table>
			<tr>		
				<th>F.Ingreso</th>
				<th>Proveedor</th>
				<th>Articulo/Codigo</th>
				<th>Descripcion</th>
				<th>F.Vencimiento</th>
				<th>Presentacion</th>
				<th>Unds.</th>
				<th>Stock</th>
				<th>CostoU.</th>
				<th>%Uti.</th>
				<th>P.Venta</th>
				<th>%Oferta</th>
				<th>Oferta</th>
				<th>E.Oferta</th>
				<th>Estado</th>
			</tr>
			<?php
								
				$cantidadArticulos = $detalles->count();
				if($cantidadArticulos != null)
				{
					$totalUnidades = 0;
					$totalStock = 0;
					$sumCosto = 0;
					$sumUtilidad = 0;
					$sumPrecioVenta = 0;
					$sumPrecioSugerido = 0;
					$sumPorcentajeDescuento = 0;
					$sumPrecioDescuento = 0;
				}
								
			?>
		    @foreach ($detalles as $det)
			<tr>
				<?php
					$fecha_ingreso = date("d-m-Y", strtotime($det->fecha));
					//formato fecha vencimiento
					$fecha_vencimiento = date("d-m-Y", strtotime($det->fecha_vencimiento));
				?>
				<td><h4 align="center">{{ $fecha_ingreso}}</h4></td>
				<td><h4 align="center">{{ $det->Proveedor }}</h4></td>
				<td><h4 align="center">{{$det->Codigo}} <br> <strong> {{ $det->Articulo}}</strong></h4></td>
				<td><h4 align="center">{{$det->descripcion_inventario}}</h4></td>
				<?php 
					$fv = date("Y-m-d", strtotime($det->fecha_vencimiento));
					$hoy = date("Y-m-d", strtotime($hoy));
					$mas30 = date("Y-m-d", strtotime($hoy.'+ 2 month'));
				?>
				@if($fv > $mas30)
					<td><h4 align="center">{{$fecha_vencimiento}} <br><font color="limegreen">Vigente</font></h4></td>
				@elseif($fv >= $hoy and $fv <= $mas30)
					<td><h4 align="center">{{$fecha_vencimiento}} <br><font color="orange">Vigente</font></h4></td>
				@elseif($fv < $hoy )
					<td><h4 align="center">{{$fecha_vencimiento}} <br><font color="red">Vencido</font></h4></td>
				@endif
				<td><h4 align="center">{{$fecha_vencimiento}} </h4></td>
				<td><h4 align="center">{{$det->Presentacion}}</h4></td>
				<td><h4 align="center">{{$det->total_unidades_inventario}}</h4></td>
				@if(($det->stock <= $det->minimo) & ($det->stock > 0))
                	@if($det->EstadoDetalle == "Activo")
						<td><h4 align="center"><font color="orange"><b>{{$det->stock}} </b></font></h4></td>
                    @else
						<td><h4 align="center"><td><h4 align="center"></h4></td></h4></td>
                    @endif
                @endif
                @if($det->stock > $det->minimo)         
                    @if($det->EstadoDetalle == "Activo")
						<td><h4 align="center"><font color="limegreen"><b>{{$det->stock}} </b></font></h4></td>
                    @else
						<td><h4 align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></h4></td>
                    @endif
                @endif
                @if($det->stock <= 0)
                    @if($det->EstadoDetalle == "Activo")
						<td><h4 align="center"><font color="red"><b>{{$det->stock}} </b></font></h4></td> 
                    @else
						<td><h4 align="center"><font color="red"><b>{{$det->stock}} </b></font></h4></td>
                    @endif
                @endif
				<td><h4 align="center"><font color="orange">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_inventario,2, '.', ',')}}</font></h4></td>
				<td><h4 align="center">{{$det->porcentaje_utilidad}}%</h4></td>
				<td><h4 align="center"><font color="blue">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</font>  P.S:{{ Auth::user()->moneda }}{{ number_format($det->precio_sugerido,2, '.', ',')}}</h4></td>
				<?php
                    $precio_descuento= ($det->precio_venta-(($det->precio_oferta*$det->precio_venta)/(100)));
                ?>
				<td><h4 align="center">{{$det->precio_oferta}}% <font color="limegreen">({{ Auth::user()->moneda }}{{ number_format($precio_descuento,2, '.', ',')}})</font></h4></td>
				@if($det->estado_oferta == "Activada")
					<td><h4 align="center"><font color="limegreen"><small>{{$det->estado_oferta}}</small></font></h4></td>
                @elseif($det->estado_oferta == "Inactivo")
					<td><h4 align="center"><font color="red"><small>{{$det->estado_oferta}}</small></font></h4></td>
                @endif
				@if($det->EstadoDetalle == "Activo")
					<td><h4 align="center"><font color="limegreen"><small>{{$det->EstadoDetalle}}</small></font></h4></td>
				@else
					<td><h4 align="center"><font color="red"><small>{{$det->EstadoDetalle}}</small></font></h4></td>
				@endif
				<?php
					if($cantidadArticulos != null)
					{
						$totalUnidades= $totalUnidades + $det->total_unidades_inventario;
						$totalStock = $totalStock + $det->stock;
						$sumCosto = $sumCosto + $det->costo_unidad_inventario;
						$sumUtilidad = $sumUtilidad + $det->porcentaje_utilidad;
						$sumPrecioVenta = $sumPrecioVenta + $det->precio_venta;
						$sumPrecioSugerido = $sumPrecioSugerido + $det->precio_sugerido;
						$sumPorcentajeDescuento = $sumPorcentajeDescuento + $det->precio_oferta;
						$sumPrecioDescuento = $sumPrecioDescuento + $precio_descuento;
					}
                ?>
			</tr>
			@endforeach
		</table>
		<br>
		@if($cantidadArticulos != null)
			<h4 align="center">
				<strong><u>Resumen</u></strong>
			</h4>
			<table>
				<tr>
					<th><h4 align="center">Total Unidades</h4></th>
					<th><h4 align="center">Total Stock</h4></th>
					<th><h4 align="center">Promedio Costo</h4></th>
					<th><h4 align="center">Promedio %Utilidad</h4></th><th>
					<th><h4 align="center">Promedio Descuento</h4></th>
				</tr>
				<?php			
					$promedioCosto = $sumCosto/$cantidadArticulos;
					$promedioUtilidad = $sumUtilidad/$cantidadArticulos;
					$promedioPrecioVenta = $sumPrecioVenta/$cantidadArticulos;
					$promedioPrecioSugerido = $sumPrecioSugerido/$cantidadArticulos;
					$promedioPorcentajeDescuento = $sumPorcentajeDescuento/$cantidadArticulos;
					$promedioPrecioDescuento = $sumPrecioDescuento/$cantidadArticulos;
				?>
				<tr>
					<td><h3 align="center"><b><font color="blue">{{$totalUnidades}}</font></b></h3></td>
					<td><h3 align="center"><b><font color="limegreen">{{$totalStock}} </font></b></h3></td>
					<td><h3 align="center"><b><font color="orange">{{ Auth::user()->moneda }}{{number_format($promedioCosto,2, '.', ',')}} </font></b></h3></td>
					<td><h3 align="center"><b><font color="green">{{number_format($promedioUtilidad,2, '.', ',')}}% </font></b></h3></td>
					<td><h3 align="center"><b><font color="blue">{{ Auth::user()->moneda }}{{number_format($promedioPrecioVenta,2, '.', ',')}}</font> ({{ Auth::user()->moneda }}{{number_format($promedioPrecioSugerido,2, '.', ',')}})</b></h3></td>
					<td><h3 align="center"><b><font color="limegreen">{{$promedioPorcentajeDescuento}}% ({{ Auth::user()->moneda }}{{number_format($promedioPrecioDescuento,2, '.', ',')}})</font></b></h3></td>
				</tr>	
			</table>
		@endif
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>