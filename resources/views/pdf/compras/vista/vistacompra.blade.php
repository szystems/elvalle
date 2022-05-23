<html html>
	<head>
  		<title>Vista de Compra SZ-Ventas</title>
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
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<h4 align="center">
			<strong><u>Compra</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($ingreso->fecha));
			?>
			<strong>Fecha Compra:</strong><font color="Blue"> <strong>{{ $fecha}} </strong></font>
			<br><strong>Comprobante:</strong><font color="Blue"> <strong>{{$ingreso->tipo_comprobante}} {{$ingreso->serie_comprobante}}-{{$ingreso->num_comprobante}} </strong></font>
			<br><strong>Cliente:</strong><font color="Blue"> <strong>{{ $ingreso->nombre}}<strong></font>
				<strong>Teléfono:</strong><font color="Blue"> <strong>{{ $ingreso->telefono}}<strong></font>
				<strong>Dirección:</strong><font color="Blue"> <strong>{{ $ingreso->direccion}}<strong></font>
			<br><strong>Documento:</strong><font color="Blue"> <strong>{{ $ingreso->tipo_documento}} {{$ingreso->num_documento}}<strong></font>
			
		</h6>
		<h4 align="left">
			<strong><u>Detalle de Compra</u></strong>
		</h4>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th><h4 align="center">Codigo/Articulo</h4></th>
				<th><h4 align="center">Presentacion</h4></th>
                <th><h4 align="center">Cantidad</h4></th>
				<th><h4 align="center">Bonificacion</h4></th>
                <th><h4 align="center">Cant.Total</h4></th>
				<th><h4 align="center">Costo U.</h4></th>
				<th><h4 align="center">Subtotal</h4></th>
				<th><h4 align="center">Descuento</h4></th>
                <th><h4 align="center">Total</h4></th>
			</tr>
			<?php
                $totaldescuento=0;
                $subtotal=0;  
            ?>
			@foreach($detalles as $det)
            <tr>
				<?php
                    $subtotal=$subtotal+$det->sub_total_compra;
                    $totaldescuento=$totaldescuento+$det->descuento;
                ?>
                <td><h4 align="left">@if($det->CodigoIngreso != null){{ $det->CodigoIngreso}} /@endif {{ $det->articulo}}</h4></td>
				<td><h4 align="center">{{ $det->PresentacionCompra}}</h4></td>
                <td><h4 align="center">{{ $det->cantidad_compra}}</h4></td>
				<td><h4 align="center">{{ $det->bonificacion}}</h4></td>
				<td><h4 align="center">{{ $det->cantidad_total_compra}}</h4></td>
                <td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_compra,2, '.', ',')}}</h4></td>
				<td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format($det->sub_total_compra,2, '.', ',')}}</h4></td>
                <td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format($det->descuento,2, '.', ',')}}</h4></td>
                <td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format($det->total_compra,2, '.', ',')}}</h4></td>
				<
            </tr>
            @endforeach
			<tr>
                <td></td>
                <td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
                <td><h2 align="right"><font color="orange"><strong>{{ Auth::user()->moneda }}{{ number_format($subtotal,2, '.', ',')}}</strong></font></h2></td>
				<td><h2 align="right"><font color="limegreen"><strong>{{ Auth::user()->moneda }}{{ number_format($totaldescuento,2, '.', ',')}}</strong></font></h2></td>
				@if($ingreso->estado == "Activo")
				<td><h2 align="right"><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</strong></font></h2></td>
				@else
				<td><h2 align="right"><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</strong></font></h2></td>
				@endif
            </tr>
		</table>
		</div>
		<br>
		<h4 align="left">
			<strong><u>Detalle de Ingreso</u></strong>
		</h4>
		<div style="text-align:center;">
		<table>
			<tr>		
				

				<th><h4 align="center">Articulo</h4></th>
                <th><h4 align="center">F.Vcto.</h4></th>
                <th><h4 align="center">Pres.Venta</h4></th>
                <th><h4 align="center">U*Pres</h4></th>
                <th><h4 align="center">Costo Unidad</h4></th>
                <th><h4 align="center">Total Unidades</h4></th>
                <th><h4 align="center">Desc.</h4></th>
                <th><h4 align="center">P.Venta</h4></th>
                <th><h4 align="center">%Desc.</h4></th>
                <th><h4 align="center">Oferta</h4></th>
                <th><h4 align="center">Stock</h4></th>
			</tr>
			<?php
                $totaldescuento=0;
                $subtotal=0;  
            ?>
			@foreach($detalles as $det)
            <tr>
				

											<td align="left"><h4>@if($det->CodigoInventario != null){{ $det->CodigoInventario}} /@endif {{ $det->articulo}}</h4></td>
                                            <?php
                                                $fecha_vencimiento = date("d-m-Y", strtotime($det->fecha_vencimiento));
                                            ?>
                                            <td align="center"><h4>{{ $fecha_vencimiento}}</h4></td>
                                            <td align="center">{{ $det->PresentacionInventario}}</h4></td>
                                            <td align="center"><h4>{{ $det->cantidadxunidad}}</h4></td>
                                            <td align="right"><h4><font color="orange">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_inventario,2, '.', ',')}}</font></h4></td>
                                            <td align="center"><h4><font color="blue">{{ $det->total_unidades_inventario}}</font></h4></td>
                                            <td align="left"><h4>{{ $det->descripcion_inventario}}</h4></td>
                                            <td align="right"><h4><font color="blue">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</font></h4></td> 
                                            <?php

                                                $precio_descuento= ($det->precio_venta-(($det->precio_oferta*$det->precio_venta)/(100)));
                                            ?>
                                            <td align="right"><h4>{{ $det->precio_oferta}}%<font color="limegreen">({{ Auth::user()->moneda }}{{ number_format($precio_descuento,2, '.', ',')}})</font></h4></td>
                                            @if($det->estado_oferta == "Activada")
                                                <td align="center"><h4><font color="limegreen">{{$det->estado_oferta}}</font></h4></td>
                                            @elseif($det->estado_oferta == "Inactivo")
                                                <td align="center"><h4><font color="red">{{$det->estado_oferta}}</font></h4></td>
                                            @endif

                                            @if(($det->stock <= $det->minimo) & ($det->stock > 0))
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><h4><font color="orange"><b>{{$det->stock}} </b></font></h4></td>
                                                @else
                                                    <td align="center"><h4><del><font color="red"><b>{{$det->stock}} </b></font></del></h4></td>
                                                @endif
                                            @endif
                                            @if($det->stock > $det->minimo)
                                                 
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><h4><font color="limegreen"><b>{{$det->stock}} </b></font></h4></td>
                                                @else
                                                    <td align="center"><del><h4><font color="red"><b>{{$det->stock}} </b></font></del></h4></td>
                                                @endif
                                            @endif
                                            @if($det->stock <= 0)
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><h4><font color="red"><b>{{$det->stock}} </b></font></h4></td> 
                                                @else
                                                    <td align="center"><del><h4><font color="red"><b>{{$det->stock}} </b></font></del></h4></td>
                                                @endif
                                            @endif
				
            </tr>
            @endforeach
			
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>