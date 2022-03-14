<html html>
	<head>
  		<title>Listado de Artículos SZ-Ventas</title>
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
		<center>
			<img align="center" src="{{ $imagen}}" alt="" height="100">
		</center>
		<h4 align="center">
			<strong><u>Listado de Artículos</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Listado creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<table>
			<tr>		
				<th>Nombre</th>
				<th>Codigo</th>
				<th>Categoría</th>
				<th>Descripción</th>
				<th>Imagen</th>
			</tr>
			@foreach ($articulos as $art)
			<tr>
				<td><h4 align="center">{{ $art->nombre}}</h4></td>
				<td><h4 align="center">{{ $art->codigo}}</h4></td>
				<td><h4 align="center">{{ $art->categoria}}</h4></td>
				<td><h4 align="center">{{ $art->descripcion}}</h4></td>
				<td>
					@if ($art->imagen != null)
						<img align="center" src="{{$path.$art->imagen}}" alt="" height="100">
					@endif
				</td>
			</tr>
			@endforeach
		</table>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>