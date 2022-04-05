<html html>
	<head>
  		<title>Vista de Proveedor SZ-Ventas</title>
		<style>
		  	h1, h2, h3, h4, h5, h6 {
				  font-family: arial, sans-serif;
			  }
			table {
					font-family: arial, sans-serif;
					border-collapse: collapse;
					width: 50%;
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
			<strong><u>Vista de Proveedor</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th colspan="2"><h4 align="center">{{ $proveedor->nombre}}</h4></th>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Documento:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $proveedor->tipo_documento}}-{{ $proveedor->num_documento}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Dirección:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $proveedor->direccion}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Teléfono:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $proveedor->telefono}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Email:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $proveedor->email}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Banco:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $proveedor->banco}} \ {{ $proveedor->nombre_cuenta}} \ {{ $proveedor->numero_cuenta}}</font></h4></td>
			</tr>
			
		</table>
		<h4 align="left">
			<strong><u>Vendedores</u></strong>
		</h4>
		<table>
			<tr>		
				<th>Nombre</th>
				<th>Codigo</th>
				<th>Telefono</th>
				<th>Email</th>
			</tr>
			@foreach ($vendedores as $vendedor)
			<tr>
				<td><h4 align="center">{{ $vendedor->nombre}}</h4></td>
				<td><h4 align="center">{{ $vendedor->codigo}}</h4></td>
				<td><h4 align="center">{{ $vendedor->telefono}}</h4></td>
				<td><h4 align="center">{{ $vendedor->email}}</h4></td>
			</tr>
			@endforeach
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>