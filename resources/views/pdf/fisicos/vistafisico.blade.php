<html html>
	<head>
  		<title>Vista de Examen Fisico</title>
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
			<strong><u>Examen Fisico</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($fisico->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $fecha}} </strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $fisico->Paciente}}<strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $fisico->Doctor}} ({{ $fisico->especialidad }})<strong></font>
			
		</h6>
		<div style="text-align:center;">
		<table>
			<tr>		
				<th colspan="2"><h4 align="center">Paciente: <b> {{ $paciente->nombre}}</b></h4></th>
			</tr>
			<tr>
				<td><p align="right"><strong>F.Nacimiento / Edad:</strong></p></td>
				<?php
                    $fecha_nacimiento = date("d-m-Y", strtotime($paciente->fecha_nacimiento));

                    $cumpleanos = new DateTime($paciente->fecha_nacimiento);
                    $hoy = new DateTime();
                    $annos = $hoy->diff($cumpleanos);
                    $edad = $annos->y;
                ?>
				<td><p align="left"><font color="black">{{$fecha_nacimiento}} (Edad: {{$edad}})</font></p></td>
			</tr>
			
			<tr>		
				<th colspan="2"><p align="center">Datos Generales</b></p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Peso:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->peso}} Lbs.</font></h4></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Talla:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->talla}} Cms.</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>IMC:</strong></p></td>
				@php
                    $kilogramos = $fisico->peso / 2.2;
                    $metros = $fisico->talla / 100;
                	$imc = ($kilogramos /($metros*$metros))
                @endphp
				<td><p align="left"><font color="black">{{ number_format($imc,2, '.', ',') }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Perimetro Abdominal:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->perimetro_abdominal}} Cms.</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Presion Arterial:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->presion_arterial}} mm HG</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Frecuencia Cardiaca:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->frecuencia_cardiaca}} /min</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Frecuencia Respiratoria:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->frecuencia_respiratoria}}/min</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Temperatura:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->temperatura}} °C</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Saturacion de Oxigeno:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->saturacion_oxigeno}} %</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Componentes:</p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Cabeza y cuello:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->cabeza_cuello}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Tiroides:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->tiroides}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Mamas y axilas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->mamas_axilas}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cardiopulmonar:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->cardiopulmonar}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Abdomen:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->abdomen}}</font></p></td>	
			</tr>
			
			<tr>		
				<th colspan="2"><p align="center">Ginecologico: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Genitales externos:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $fisico->genitales_externos}} </font></p>
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Especuloscopia:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $fisico->especuloscopia }} </font></p>
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Tacto bimanual:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $fisico->tacto_bimanual}} </font></p>
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Miembros inferiores:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $fisico->miembros_inferiores}} </font></p>
				</td>		
			</tr>
			
			<tr>		
				<th colspan="2"><p align="center">Concluciones: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Impresion clinica:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->impresion_clinica}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Plan diagnostico:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->plan_diagnostico}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Plan tratamiento:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->plan_tratamiento}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Recomendaciones Generales:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->recomendaciones_generales}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Recomendaciones especificas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fisico->recomendaciones_especificas}}</font></p></td>	
			</tr>
		</table>
		</div>

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><p align="center">Imagenes: </p></th>
				</tr>
				@foreach ($fisicoimgs as $imagen)
	
				<tr>
					<td><img src="{{$path.$imagen->imagen}}" alt="" height="200"></td>
					<?php
						$fechaimagen = date("d-m-Y", strtotime($imagen->fecha));
					?>
					<td><p align="left"><font color="black">{{ $fechaimagen }} - {{ $imagen->descripcion}}</font></p></td>	
				</tr>
					
				@endforeach
			</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>