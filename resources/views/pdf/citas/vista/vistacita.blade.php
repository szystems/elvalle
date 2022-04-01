<html html>
	<head>
  		<title>Vista de Cita</title>
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
			<strong><u>Vista de Cita</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>
				<td><h4 align="right"><strong>Doctor:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $doctor->name}} ({{ $doctor->especialidad }})</font></h4></td>
			</tr>
			<?php
                $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));

                $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                $hoy = new DateTime();
                $annos = $hoy->diff($cumpleanos);
                $edad = $annos->y;

                $fecha_inicio = date("d-m-Y H:i A", strtotime($cita->fecha_inicio));
				$fecha_fin = date("H:i A", strtotime($cita->fecha_fin));
            ?>
			<tr>
				<td><h4 align="right"><strong>Paciente:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{$paciente->nombre}} ({{$edad}} Años) / {{$paciente->telefono}} / {{$paciente->correo}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Fecha y Hora:</strong></h4></td>
				<td><h4 align="left"><font color="Blue"><font color="limegreen"> {{$fecha_inicio}}</font> - <font color="Red">{{$fecha_fin}}</font></font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Apuntes:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $cita->apuntes}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Usuario:</strong></h4></td>
				<td><h4 align="left"><font color="Blue">{{ $usuario->name}} ({{ $usuario->tipo_usuario }})</font></h4></td>
			</tr>
			
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>