<html html>
	<head>
  		<title>Reporte de Citas</title>
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
			<strong><u>Reporte de Citas</u></strong>
		</h4>
		<h6><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font><br><strong>Reporte creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
		<?php
			$desde = date("d-m-Y", strtotime($desde));
			$hasta = date("d-m-Y", strtotime($hasta.'- 1 days'));
		?>
		<br><strong>Filtros:</strong><font color="Blue"> <strong>Desde:</strong> '{{ $desde}}', <strong>Hasta:</strong> '{{ $hasta}}', <strong>Doctor:</strong> @if(isset($docfiltro)) '{{$docfiltro->name}}' @else Todos @endif</font></h6>
		
		
		
		<table>
			<tr>
							
				<th>Doctor</th>         
				<th>Paciente</th>
				<th>Fecha / Hora</th>
				<th>Usuario</th>
				<th>Estado</th>	
				<th>Turno</th>		
			</tr>
						
		    @foreach ($citas as $cita)
			<tr>
				<?php
					$citaDoctor = DB::table('users')
					->where('id', '=', $cita->iddoctor)
					->first();

					$citaPaciente = DB::table('paciente')
					->where('idpaciente', '=', $cita->idpaciente)
					->first();

					$citaUsuario = DB::table('users')
					->where('id', '=', $cita->idusuario)
					->first();

					$fecha_cita = date("d/m/Y", strtotime($cita->fecha_inicio));
					$fecha_inicio = date("H:i A", strtotime($cita->fecha_inicio));
					$fecha_fin = date("H:i A", strtotime($cita->fecha_fin));
				?>			
				<td class="celda"><h4 align="center">{{ $citaDoctor->name}}</h4></td>
				<td><h4 align="center">{{ $citaPaciente->nombre}} @if($cita->apuntes != null) <i class="fas fa-comment"> @endif </i></h4></td>
				<td><h4 align="center"><font color="blue">{{ $fecha_cita }}</font> <b><br>(<font color="limegreen">{{ $fecha_inicio}}</font> - <font color="red">{{$fecha_fin}}</font>)</b></h4></td>
				<td><h4 align="center">{{ $citaUsuario->name}}<br>({{$citaUsuario->tipo_usuario}})</h4></td>
				@if($cita->estado_cita == "Confirmada")
					<td class="celda"><h4 align="center"><font color="Blue">{{ $cita->estado_cita}}</font></h4></td>
				@elseif($cita->estado_cita == "Espera")
					<td class="celda"><h4 align="center"><font color="Blue">{{ $cita->estado_cita}}</font></h4></td>
				@elseif($cita->estado_cita == "Activa")
					<td class="celda"><h4 align="center"><font color="#efcc00">{{ $cita->estado_cita}}</font></h4></td>
				@elseif($cita->estado_cita == "Finalizada")
					<td class="celda"><h4 align="center"><font color="limegreen">{{ $cita->estado_cita}}</font></h4></td>
				@elseif($cita->estado_cita == "Cancelada")
					<td class="celda"><h4 align="center"><font color="Red">{{ $cita->estado_cita}}</font></h4></td>
				@endif

				@if($cita->estado_cita == "Confirmada")
					<td class="celda"><h4 align="center"><font color="Blue"><b>{{ $cita->turno}}</b></font></h4></td>
				@endif
				@if($cita->estado_cita == "Espera")
					<td class="celda"><h4 align="center"><font color="orange"><b>{{ $cita->turno}}</b></font></h4></td>
				@endif
				@if($cita->estado_cita == "Activa")
					<td class="celda"><h4 align="center"><font color="efcc00"><b>{{ $cita->turno}}</h4></td>
				@endif
				@if($cita->estado_cita == "Finalizada")
					<td class="celda"><h4 align="center"><font color="limegreen"><b>{{ $cita->turno}}</b></font></h4></td>
				@endif
				@if($cita->estado_cita == "Cancelada")
					<td class="celda"><h4 align="center"><font color="Red"><b>{{ $cita->turno}}</b></font></h4></td>
				@endif
			</tr>
			@endforeach
						
		</table>
		<br>
		
		
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>