<html html>
	<head>
  		<title>Vista de Doctor</title>
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
			<strong><u>Vista de Doctor</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th colspan="2"><h4 align="center">{{ $doctor->name}} ({{ $doctor->especialidad }})</h4></th>
			</tr>
			<tr>
				<td><h4 align="right"><strong>F.Nacimiento / Edad:</strong></h4></td>
				<?php
                    $fecha_nacimiento = date("d-m-Y", strtotime($doctor->fecha_nacimiento));

                    $cumpleanos = new DateTime($doctor->fecha_nacimiento);
                    $hoy = new DateTime();
                    $annos = $hoy->diff($cumpleanos);
                    $edad = $annos->y;
                ?>
				<td><h4 align="left"><font color="Blue">{{$fecha_nacimiento}} (Edad: {{$edad}})</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Email:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $doctor->email}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Teléfono:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $doctor->telefono}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Dirección:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $doctor->direccion}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Contacto de emergencia:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $doctor->contacto_emergencia}} / {{ $doctor->telefono_emergencia }}</font></h4></td>
			</tr>
			
		</table>
		<h4 align="left"><u>Dias Bloqueados</u></h4>
		<table>
			<tr>
				<th>Fecha</th>
				<th>Apuntes</th>
			</tr>
			@foreach ($dias as $dia)
			<tr>
				<?php
                    $fecha = date("d-m-Y", strtotime($dia->fecha));
                ?>
				<td><h4 align="center">{{ $fecha}}</h4></td>
				<td><h4 align="center">{{ $dia->apuntes}}</h4></td>
			</tr>
			@endforeach
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>