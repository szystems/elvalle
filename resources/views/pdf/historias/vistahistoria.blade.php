<html html>
	<head>
  		<title>Vista de Historia</title>
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
			<strong><u>Historia</u></strong>
		</h4>
		<h6>
			<strong>Fecha:</strong><font color="black"> <strong>'{{ $hoy}}' </strong></font>
			<br><strong>Empresa:</strong><font color="black"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Usuario:</strong><font color="black"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th colspan="2"><h4 align="center">Paciente: <b> {{ $paciente->nombre}}</b></h4></th>
			</tr>
			<tr>
				<td><h4 align="right"><strong>F.Nacimiento / Edad:</strong></h4></td>
				<?php
                    $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));

                    $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                    $hoy = new DateTime();
                    $annos = $hoy->diff($cumpleanos);
                    $edad = $annos->y;
                ?>
				<td><h4 align="left"><font color="black">{{$fecha_nacimiento}} (Edad: {{$edad}})</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><b>Sexo:</b></h4></td>
				<td><p align="left"><font color="black">{{ $paciente->sexo}}</font></p></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Teléfono:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $paciente->telefono}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Dirección:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $paciente->direccion}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Correo:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $paciente->correo}}</font></h4></td>
			</tr>
			<tr>
				<td><h4 align="right"><strong>DPI / NIT:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $paciente->dpi}} / {{ $paciente->nit }}</font></h4></td>
			</tr>
			<tr>		
				<th colspan="2"><h4 align="center">Historia Basica</b></h4></th>
			</tr>
			@php
				$fecha = date("d-m-Y", strtotime($historia->fecha));
			@endphp
			<tr>
				<td><h4 align="right"><strong>Fecha Historia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->fecha}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Estado Civil:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->estado_civil}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Procedencia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->procedencia}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Escolaridad:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->escolaridad}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Telefono de Emergencia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->tel_emergencia}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Profesion:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->profesion}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Motivo:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->motivo}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Historia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->historia}}</font></h4></td>	
			</tr>
			<tr>		
				<th colspan="2"><h4 align="center">Antecedentes Personales: <b> {{ $paciente->nombre}}</b></h4></th>
			</tr>
			<tr>
				<td><h4 align="right"><strong>Ciclos Regulares:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->ciclos_regulares}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Histerectomia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->histerectomia}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Mastopatia:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->mastopatia}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Cardiopatias:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->cardiopatias}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Cafelea Vascular:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->cafelea_vascular}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Tabaquismo:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->tabaquismo}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Tratamiento Quimioradiacion:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->tratamiento_quimioradiacion}}</font></h4></td>	
			</tr>
			<tr>
				<td><h4 align="right"><strong>Ejercicio:</strong></h4></td>
				<td><h4 align="left"><font color="black">{{ $historia->ejercicio}}</font></h4></td>	
			</tr>
		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>