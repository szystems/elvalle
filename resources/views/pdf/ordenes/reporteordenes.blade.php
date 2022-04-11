<html html>
	<head>
  		<title>Reporte de Ordenes</title>
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
			<strong><u>Reporte de Ordenes</u></strong>
		</h4>
		<h6><strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<br><strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' <strong></font>
		<br><strong>Reporte creado por:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font><h6>
		
		<br>
			<strong>Filtros:</strong>
			<?php
                $desde = $desdef;
                $hasta = $hastaf;

                $desde = date("d-m-Y", strtotime($desde));
                $hasta = date("d-m-Y", strtotime($hasta));
                                    
            ?>
			<font color="Blue"> 
				<strong>Desde:</strong> '{{ $desde}}', 
				<strong>Hasta:</strong> '{{ $hasta}}', 
				<strong>Paciente:</strong> '@if(isset($pacientefiltro)) {{ $pacientefiltro->nombre }}' @endif, 
                <strong>Doctor:</strong> '@if(isset($docfiltro)) {{ $docfiltro->name }}  @endif', 
                <strong>Usuario:</strong> '@if(isset($usufiltro)) {{ $usufiltro->name }}  @endif', 
				<strong>Estado Orden:</strong> '{{ $estadoordenf}}'
			</font></h6>
		<br>
		<table>
			<tr>	
				<th>ID</th>	
				<th>Fecha</th>
				<th>Doctor</th>
				<th>Paciente</th>
				<th>Total</th>
				<th>Estado Orden</th>
				<th>ID Venta</th>
				<th>Usuario</th>
				<th>Estado</th>
			</tr>
			
		    @foreach ($ordenes as $orden)
			<tr>
				<td><h4 align="center">{{ $orden->idorden}}</h4></td>
				<?php
                    $fecha = date('d-m-Y', strtotime($orden->fecha));
                ?>
				<td><h4 align="center">{{ $fecha}}</h4></td>
				<td><h4 align="center">{{ $orden->Doctor }} ({{ $orden->especialidad }})</h4></td>
				<td><h4 align="center">{{ $orden->Paciente }}</strong></h4></td>
				<td><h4 align="center">{{ Auth::user()->moneda }}{{ number_format($orden->total, 2, '.', ',') }}</h4></td>
				@if ($orden->estado_orden == 'Pendiente')
					<td><h4 align="center"><font color="Orange">{{ $orden->estado_orden }}</font> </h4></td>
                @elseif ($orden->estado_orden == 'Finalizada')
					<td><h4 align="center"><font color="limegreen">{{ $orden->estado_orden }}</font> </h4></td>
                @endif
				<td><h4 align="center">
					@if ($orden->idventa != null)
                        <b>{{ $orden->idventa }}</b>
                    @endif
				</h4></td>
				<td><h4 align="center">{{ $orden->Usuario }} ({{ $orden->tipo_usuario }})</h4></td>
				@if ($orden->estado == 'Habilitada')
                    <td><h4 align="center"><font color="limegreen">{{ $orden->estado }}</font></h4></td>
                @else
                    <td><h4 align="center"><font color="red">{{ $orden->estado }}</font></h4></td>
                @endif
				
			</tr>
			@endforeach
		</table>
		
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>