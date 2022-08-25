<html html>
	<head>
  		<title>Vista de Incontinencia Urinaria</title>
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
			<strong><u>Estudio de Incontinencia Urinaria</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($incontinencia->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $hoy}} </strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $incontinencia->Paciente}} <strong></font>
			<br><strong>Sexo:</strong><font color="Blue"> <strong>{{ $incontinencia->sexo}} <strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $incontinencia->Doctor}} ({{ $incontinencia->especialidad }})<strong></font>
			
		</h6>
		@php
            $numcuestionarios = (($cuestionarios->count()+1) *2);
        @endphp
		<div style="text-align:center;">
			<table>
				<tr>		
					<th><h4 align="center">Paciente: <b> {{ $paciente->nombre}}</b> / Fecha: <b> {{ $fecha}}</b></h4></th>
				</tr>
			</table>
		</div>
		<br>
		
		<div style="text-align:center;">
			<table>
				
				<tr>
					<td><strong>Fecha</strong></td>
					@foreach ($cuestionarios as $cuestionario)
						@php
							$fechacuestionario = date("d-m-Y", strtotime($cuestionario->fecha));
						@endphp
						<td align="center" colspan="2">{{ $fechacuestionario }}</td>
					@endforeach
				</tr>
				<tr>
					<td><h2><strong><u>Preguntas / Respuestas</u></strong></h2></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="right"></td>
						<td align="center"></td>
					@endforeach
				</tr>
				<tr>
					<td><strong>1. ¿Con que frecuencia pierde orina? Marque una sola respuesta</strong></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="left">
						
						
							@if ($cuestionario->frecuencia == "0")
								- Nunca
							@endif
							@if ($cuestionario->frecuencia == "1")
								- Una vez a la semana
							@endif
							@if ($cuestionario->frecuencia == "2")
								- 2-3 veces/semana
							@endif
							@if ($cuestionario->frecuencia == "3")
								- Una vez al día
							@endif
							@if ($cuestionario->frecuencia == "4")
								- Varias veces al día
							@endif
							@if ($cuestionario->frecuencia == "5")
								- Continuamente
							@endif
						
						</td>
						<td align="center">
							
							{{ $cuestionario->frecuencia }} 
						
						</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>2. Indique su opinión acera de la cantidad de orina que usted cree que se le escapa, es decir, la cantidad de orina que pierde habitualmente tanto si lleva protección como si no. Marque solo una respuesta.</strong></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="left">
						
						
							@if ($cuestionario->cantidad == "0")
								- No se escapa nada
							@endif
							@if ($cuestionario->cantidad == "2")
								- Muy poca cantidad
							@endif
							@if ($cuestionario->cantidad == "4")
								- Una cantidad moderada
							@endif
							@if ($cuestionario->cantidad == "6")
								- Mucha cantidad
							@endif

						</td>
						<td align="center">
							
							{{ $cuestionario->cantidad }} 
						
						</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>3. ¿En qué medida estos escapes de orina, que tiene, han afectado a su vida diaria? (Nada=0...Mucho=10)</strong></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="right">
							Medida:
						</td>
						<td align="center">
							{{ $cuestionario->medida }}
						</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>4. ¿Cuánto pierde de orina? Señale todo lo que le pasa a Ud.</strong></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="left">
						
							@if ($cuestionario->nunca == "1")
								- Nunca<br>
							@endif
							@if ($cuestionario->antes_servicio == "2")
								- Antes de llegar al servicio<br>
							@endif
							@if ($cuestionario->toser == "3")
								- Al toser o al destornudar<br>
							@endif
							@if ($cuestionario->duerme == "4")
								- Mientras duerme<br>
							@endif
							@if ($cuestionario->esfuerzos == "5")
								- Al realizar esfuerzos físicos/ejercicio<br>
							@endif
							@if ($cuestionario->termina == "6")
								- Cuanto termina de orinar y ya se ha vestido<br>
							@endif
							@if ($cuestionario->sinmotivo == "7")
								- Sin motivo evidente<br>
							@endif
							@if ($cuestionario->continua == "8")
								- De forma continua
							@endif
						</td>
						<td>
							@if ($cuestionario->nunca == "1")
								{{ $cuestionario->nunca }}<br>
							@endif
							@if ($cuestionario->antes_servicio == "2")
							   {{ $cuestionario->antes_servicio }}<br>
							@endif
							@if ($cuestionario->toser == "3")
								{{ $cuestionario->toser }}<br>
							@endif
							@if ($cuestionario->duerme == "4")
								{{ $cuestionario->duerme }}<br>
							@endif
							@if ($cuestionario->esfuerzos == "5")
								{{ $cuestionario->esfuerzos }}<br>
							@endif
							@if ($cuestionario->termina == "6")
							   {{ $cuestionario->termina }}<br>
							@endif
							@if ($cuestionario->sinmotivo == "7")
								{{ $cuestionario->sinmotivo }} <br>
							@endif
							@if ($cuestionario->continua == "8")
							   {{ $cuestionario->continua }}<br>
							@endif
						</td>
					@endforeach
				</tr>
				<tr>
					<td align="left"><h2><strong><u>Puntuación</u></strong></h2></td>
					@foreach ($cuestionarios as $cuestionario)
						<td align="right"><strong>Total:</strong></td>
						<td align="center"><strong>{{ $cuestionario->puntuacion }}</strong></td>
					@endforeach
				</tr>
			</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">Szystems Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>