<html html>
	<head>
  		<title>Reporte de Ventas SZ-Ventas</title>
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
			<strong><u>Reporte de Ventas</u></strong>
		</h4>
		<h6><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font><br><strong>Reporte creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
		<?php
			$desde = date("d-m-Y", strtotime($desde));
			$hasta = date("d-m-Y", strtotime($hasta));
			if($desde == '01-01-1970' or $hasta == '01-01-1970')
			{
				$desde = null;
				$hasta = null;
			}
					
		?>
		<br><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Cliente:</strong> '@foreach($clientefiltro as $clifiltro){{$clifiltro->nombre}}@endforeach', <strong>Usuario:</strong> '@foreach($usufiltro as $usuf){{$usuf->name}}@endforeach', <strong>Saldo:</strong> '{{ $estadosaldo}}' , <strong>Estado:</strong> '{{ $estadoventa}}', <strong> Tipo Pago:</strong> '{{ $tipopago}}'</font></h6>
		
		
		
		<table>
			<tr>
							
				<th>Fecha</th>         
				<th>Cliente</th>
				<th>Comprobante</th>
				<th>Total</th>
				<th>Saldo</th>
				<th>Estado</th>
				<th>Tipo Pago</th>
				<th>Usuario</th>
							
			</tr>
			<?php
				$ventatotal = 0;
				$compratotal = 0;
				$diferencia = 0;
				$totalcomision = 0;
				$totalsaldo = 0;
			?>
						
		    @foreach ($ventas as $ven)
			<tr>
				<?php
					$fecha = date("d-m-Y", strtotime($ven->fecha));					
				?>			
				<td class="celda"><h4 align="center">{{ $fecha}}</h4></td>
				<td><h4 align="left">{{ $ven->nombre}}</h4></td>
				<td><h4 align="left">{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante}}</h4></td>
				<td><h4 align="right">{{ Auth::user()->moneda }}{{number_format($ven->total_venta,2, '.', ',')}}</h4></td>
				<td><h4 align="right">{{ Auth::user()->moneda }}{{ number_format(($ven->total_venta - $ven->abonado),2, '.', ',')}}</h4></td>
				<td><h4 align="left">{{ $ven->estadoventa}}</h4></td>
				<td><h4 align="left">{{ $ven->tipopago}}</h4></td>
				<td><h4 align="center">{{ $ven->name}}</h4></td>
				<?php
					$ventatotal = ($ventatotal + $ven->total_venta);
					$compratotal = $compratotal + $ven->total_compra;
					$totalcomision = $totalcomision + $ven->total_comision;
					$totalsaldo = $totalsaldo + ($ven->total_venta - $ven->abonado);
				?>
			</tr>
			@endforeach
						
		</table>
		<br>
		<h4 align="center">
			<strong><u>Resumen</u></strong>
		</h4>
		<table>
			<tr>
				<th><h4 align="center">Total Costo</h4></th>
				<th><h4 align="center">Total Ventas</h4></th>
				<th><h4 align="center">Diferencia</h4></th>
				<th><h4 align="center">Total Saldo</h4></th>
				<th><h4 align="center">Total Comisiones</h4></th>
			</tr>
			<tr>
				<?php
					$diferencia = $ventatotal - $compratotal;
				?>
				<td><h1 align="right"><strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($compratotal,2, '.', ',')}}</font></strong></h1></td>
				<td><h1 align="right"><strong><font color="Blue">{{ Auth::user()->moneda }}{{number_format($ventatotal,2, '.', ',')}}</font></strong></h1></td>
				<td><h1 align="right"><strong><font color="Green">{{ Auth::user()->moneda }}{{number_format($diferencia,2, '.', ',')}}</font></strong></h1></td>
				<td><h1 align="right"><strong><font color="Red">{{ Auth::user()->moneda }}{{number_format($totalsaldo,2, '.', ',')}}</font></strong></h1></td>
				<td><h1 align="right"><strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($totalcomision,2, '.', ',')}}</font></strong></h1></td>
							
			</tr>
						
		</table>
		
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>