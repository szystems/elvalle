<html html>
	<head>
  		<title>Vista de Ciclo de Silla Electromagnetica</title>
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
			<strong><u>Ciclo de Silla Electromagnetica</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($sillaCiclo->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $hoy}} </strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $sillaCiclo->Paciente}} <strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $sillaCiclo->Doctor}} ({{ $sillaCiclo->especialidad }})<strong></font>
			<br><strong>Inicio Ciclo:</strong><font color="Blue"> <strong>{{ $fecha}}<strong></font>
			<br><strong>Ciclo:</strong><font color="Blue"> <strong>#{{ $sillaCiclo->ciclo_numero}}<strong></font>
			
		</h6>
		<div style="text-align:center;">
			<table>
				<!--<tr>		
					<th colspan="3"><p align="center">Antecedentes Obstetricos: </p></th>
				</tr>
				<tr>
					<td><p align="right"><strong>Gestas:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->gestas}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Vias de resolucion:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->vias_resolucion}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Hijos Vivos:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->hijos_vivos}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Hijos Muertos:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->hijos_muertos}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Complicaciones Neonatales:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->complicaciones_neonatales}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Complicaciones Obstetricos:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->complicaciones_obstetricos}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Abortos:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->abortos}}</font></p></td>	
				</tr>
				<tr>
					<td><p align="right"><strong>Causa:</strong></p></td>
					<td colspan="2"><p align="left"><font color="black">{{ $historia->causa}}</font></p></td>	
				</tr>-->
			</table>
		</div>
		<h4 align="center">
			<strong><u>Sesiones de Ciclo de Silla Electromagnetica</u></strong>
		</h4>
		@if ($sesiones->count() > 0)
		<div style="text-align:center;">
			<table>
				<tr>
					<th>Fecha</th>
					<th>Sesion</th>
					<th>Tesla</th>
					<th>Minutos</th>
					<th>Observaciones</th>
				</tr>
				@foreach ($sesiones as $sesion)
				<tr>
					<?php
						$fecha = date("d-m-Y", strtotime($sesion->fecha));
					?>
					<td><h4 align="center">{{ $fecha}}</h4></td>
					<td><h4 align="center">#{{ $sesion->numero_sesion}}</h4></td>
					<td><h4 align="center">{{ $sesion->tesla}}%</h4></td>
					<td><h4 align="center">{{ $sesion->minutos}} /min</h4></td>
					<td><h4 align="center">{{ $sesion->observaciones}}</h4></td>
				</tr>
				@endforeach
			</table>
		</div>
		@else
			<p>No se han ingresado sesiones.</p>
		@endif
		
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>