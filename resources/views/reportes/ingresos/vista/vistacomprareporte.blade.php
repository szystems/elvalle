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
                <th><h4 align="center">Cantidad</h4></th>
                <th><h4 align="center">Precio Compra</h4></th>
                <th><h4 align="center">Subtotal</h4></th>
			</tr>
			@foreach($detalles as $det)
            <tr>
                <td><h4 align="left">{{ $det->codigo}} {{ $det->articulo}}</h4></td>
                <td><h4 align="center">{{ $det->cantidad}}</h4></td>
                <td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_compra,2, '.', ',')}}</h4></td>
                
                <td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format(($det->cantidad*$det->precio_compra),2, '.', ',')}}</h4></td>
				<
            </tr>
            @endforeach
			<tr>
                <td></td>
                <td></td>
                <td><h2 align="right">Total: </h2></td>
				<td><h2 align="right">{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</h2></td>
            </tr>
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>