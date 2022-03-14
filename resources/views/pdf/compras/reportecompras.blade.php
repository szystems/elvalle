<html html>
	<head>
  		<title>Reporte de Compras SZ-Ventas</title>
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
			<strong><u>Reporte de Compras</u></strong>
		</h4>
		<h6><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
		<br><strong>Reporte creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
		<?php
			$desde = date("d-m-Y", strtotime($desde));
			$hasta = date("d-m-Y", strtotime($hasta));
			if($desde == '01-01-1970' or $hasta == '01-01-1970')
			{
				$desde = null;
				$hasta = null;
			}
					
		?>
		<br><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Proveedor:</strong> '@foreach($provfiltro as $provf){{$provf->nombre}}@endforeach', <strong>Usuario:</strong> '@foreach($usufiltro as $usuf){{$usuf->name}}@endforeach', <strong>Estado:</strong> '{{ $estado}}'</font></h6>
		<br>
		<table>
			<tr>		
				<th>Fecha</th>
				<th>Proveedor</th>
				<th>Usuario</th>
				<th>Comprobante</th>
				<th>Total</th>
				<th>Estado</th>
			</tr>
			<?php
				$compratotal = 0;
			?>
		    @foreach ($compras as $compra)
			<tr>
				<?php
					$fecha = date("d-m-Y", strtotime($compra->fecha));
				?>
				<td><h4 align="center">{{ $fecha}}</h4></td>
				<td><h4 align="left">{{ $compra->nombre}}</h4></td>
				<td><h4 align="center">{{ $compra->name}}</h4></td>
				<td><h4 align="left">{{ $compra->tipo_comprobante.': '.$compra->serie_comprobante.'-'.$compra->num_comprobante}}</h4></td>
				<td><h4 align="right">{{ Auth::user()->moneda }}{{number_format($compra->total,2, '.', ',')}}</h4></td>
				<td><h4 align="center">{{ $compra->estado}}</h4></td>
				<?php
					$compratotal = $compratotal + $compra->total;
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
				<th><h4 align="center">Total Compras</h4></th>
			</tr>
			<tr>
				<td><h1 align="center"><strong><font color="Orange">{{ Auth::user()->moneda }}{{number_format($compratotal,2, '.', ',')}}</font></strong></h1></td>
			</tr>	
		</table>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>