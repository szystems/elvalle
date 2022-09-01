<html html>
	<head>
  		<title>Vista de Climaterio y Menopausea</title>
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
			<strong><u>Estudio de Climaterio y Menopausea</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($climaymeno->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $hoy}} </strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $climaymeno->Paciente}} <strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $climaymeno->Doctor}} ({{ $climaymeno->especialidad }})<strong></font>
			
		</h6>

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><h4 align="center">Paciente: <b> {{ $paciente->nombre}}</b> / Fecha: <b> {{ $fecha}}</b></h4></th>
				</tr>
			</table>
		</div>
		@php
			$numControles = $controles->count() + 1;
		@endphp
		<div style="text-align:center;">
			<table>
				
				<tr>
					<td><strong>Fecha</strong></td>
					@foreach ($controles as $control)
						@php
							$fechaControl = date("d-m-Y", strtotime($control->fecha));
						@endphp
						<td align="left">{{ $fechaControl }}</td>
					@endforeach
				</tr>
				<tr>
					<td colspan="{{ $numControles }}"><h2><strong><u>Sintomas</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Bochornos</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->bochornos }} / {{ $control->bochornos_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Depresión </strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->depresion  }} / {{ $control->depresion_escala  }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Irritabilidad</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->irritabilidad }} / {{ $control->irritabilidad_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Perdida de libido</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->perdida_libido }} / {{ $control->perdida_libido_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Sequedad vaginal</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->sequedad_vaginal }} / {{ $control->sequedad_vaginal_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Insomnio</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->insomnio }} / {{ $control->insomnio_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Cefalea</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->cefalea }} / {{ $control->cefalea_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Fatiga</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->fatiga }} / {{ $control->fatiga_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Artralgias / Mialgias</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->artralgias_mialgias }} / {{ $control->artralgias_mialgias_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Trastornos miccionales</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->trastornos_miccionales }} / {{ $control->trastornos_miccionales_escala }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Otros</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->otros }} / {{ $control->otros_si }}</td>
					@endforeach
				</tr>
				<tr>
					<td colspan="{{ $numControles }}"><h2><strong><u>Examen Fisico</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>peso</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->peso }} Lbs.</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Talla</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->talla }} Cms.</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>IMC</strong></td>
					@foreach ($controles as $control)
						@php
							$kilogramos = $control->peso / 2.2;
							$metros = $control->talla / 100;
							$imc = ($kilogramos /($metros*$metros))
						@endphp
						<td align="left">{{ $imc }} IMC</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Presion Arterial</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->presion_arterial }} mm Hg</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Frecuencia cardiaca</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->frecuencia_cardiaca }} /min</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Cara</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->cara }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Mamas</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->mamas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Torax</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->torax }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Abdomen</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->abdomen }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Vulva</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->vulva }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Utero y anexos</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->utero_anexos }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Varices</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->varices }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Flujo Vaginal (Ph)</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->flujo_vaginal_ph }} Ph</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Hallazgos</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->hallazgos }} Ph</td>
					@endforeach
				</tr>
				<tr>
					<td colspan="{{ $numControles }}"><h2><strong><u>Laboratorios</u></strong></h2></td>
				</tr>
				<tr>
					
					<td><strong>Fecha</strong></td>
					@foreach ($controles as $control)
						@php
							$fechaLaboratorios = date("d-m-Y", strtotime($control->fecha_laboratorios));
						@endphp
						<td align="left">{{ $fechaLaboratorios }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Hemograma</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->hemograma }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Examen general de orina</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->examen_orina }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Glicemia / Curva Glicemica</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->glicemia_curva_glicemica }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Insulina</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->insulina }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Panel de lipidos (clolesterol,trigliceridos)</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->panel_lipidos }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Transaminasas</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->transaminasas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Citología cervicovaginal</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->citologia_cervicovaginal }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Mamografía</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->mamografia }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>FSH</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->fsh }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>LH</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->lh }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Pruebas tiroideas</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->pruebas_tiroideas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Prolactina</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->prolactina }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Densitometría osea</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->densitometria_osea }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Ultrasonografía pélvica</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->ultrasonografia_pelvica }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Escala de Homa</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->escala_homa }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Otros</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->otros_laboratorio }}</td>
					@endforeach
				</tr>
				<tr>
					<td colspan="{{ $numControles }}"><h2><strong><u>Tratamiento</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>ACO's</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->acos }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tratamiento para infecciones locales</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->tratamiento_infecciones }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>TRH TIPO Y DOSIS</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->trh_tipo_dosis }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tratamiento para osteoporosis</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->tratamiento_osteoporosis }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Calcio</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->calcio }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Vitamina D</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->vitamina_d }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Aspirina</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->aspirina }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tratamiento para HTA</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->tratamiento_hta }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tratamiento para Diabetes</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->tratamiento_diabetes }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Jabones íntimos</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->jabones_intimos }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Notas Adicionales</strong></td>
					@foreach ($controles as $control)
						<td align="left">{{ $control->nota_adicionales }}</td>
					@endforeach
				</tr>
			</table>
		</div>
		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><p align="center">Imagenes: </p></th>
				</tr>
				@foreach ($climaymenoimgs as $imagen)
	
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
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">Szystems Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>