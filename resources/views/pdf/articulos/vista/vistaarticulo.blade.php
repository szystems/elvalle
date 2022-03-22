<html html>
	<head>
  		<title>Vista de Articulo SZ-Ventas</title>
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
			<strong><u>Vista de Articulo</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th colspan="2"><h4 align="center">{{ $articulo->nombre}}</h4></th>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Codigo:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $articulo->codigo}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Categoría:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $articulo->categoria}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Descripción:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $articulo->descripcion}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Bodega y Ubicacion:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $articulo->bodega}} / {{ $articulo->ubicacion}}</font></h4></td>
			</tr>
			
			
			@if ($articulo->imagen != null)
			<tr>
				<td><h4 align="right"><strong>imagen:</strong></h4></td>
				<td><img align="center" src="{{$path.$articulo->imagen}}" alt="" height="150"></td>	
			</tr>
			@endif
			
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2019 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>