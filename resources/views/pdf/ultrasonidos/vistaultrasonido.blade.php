<html html>
	<head>
  		<title>Vista de Ultrasonido Obstetrico</title>
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
			<strong><u>Ultrasonido Obstetrico</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($ultrasonido->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $fecha}} </strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $ultrasonido->Paciente}}<strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $ultrasonido->Doctor}} ({{ $ultrasonido->especialidad }})<strong></font>
			
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
		</table>
		</div>

		<h4><strong><u>Reporte de Ultrasonido Obstetrico</u></strong></h4>
        <h6>Realizado con ultrasonido Medison, ACUSON X300 con transductor convexo de 3 a 5 MHz. Transabdominal.</h6>
		<?php
            $fecha = date("d-m-Y", strtotime($ultrasonido->fecha));
        ?>
        <h4><strong>Fecha: </strong>{{$fecha}}</h4>
        
		<div style="text-align:center;">
			<table>
				<tr>
					<th colspan="2" ><b><u><p align="center"> 1. Tamizaje obstétrico básico:</p></u></b></th>
				</tr>
				<tr>
					<td><strong>a) Situación, presentación, posición:</strong></td>
					<td align="left">
						{{ $ultrasonido->spp }}
					</td>
				</tr>

				<tr>
					<td><strong>b) Frecuencia cardiaca fetal, ritmo, movimientos
							fetales:</strong></td>
					<td align="left">
						{{ $ultrasonido->fcardiaca_fetal }}
					</td>
				</tr>

				<tr>
					<td><strong>c) Placenta ubicación, características, relación
							placenta-cérvix:</strong></td>
					<td align="left">
						{{ $ultrasonido->pubicacion }}
					</td>
				</tr>

				<tr>
					<td><strong>d) Liquido amniótico:</strong></td>
					<td align="left">
						{{ $ultrasonido->liquido_amniotico }}
					</td>
				</tr>

				<tr>
					<td><strong>e) Útero y anexos:</strong></td>
					<td align="left">
						{{ $ultrasonido->utero_anexos }}
					</td>
				</tr>

				<tr>
					<td><strong>e) Cérvix:</strong></td>
					<td align="left">
						{{ $ultrasonido->cervix }}
					</td>
				</tr>

			  
			</table>
		</div>

		<div style="text-align:center;">
			<table>

					<tr>
						<th colspan="3" ><b><u><p align="center"> Tamizaje de alteraciones del crecimiento:</p></u></b></th>
					</tr>

					<tr>
						<td><strong>DIAMETRO BIPARIETAL:</strong></td>
						<td align="center">
							{{ $ultrasonido->diametro_biparietal_medida }}
						</td>
						<td align="center">
							{{ $ultrasonido->diametro_biparietal_semanas }}
						</td>
					</tr>

					<tr>
						<td><strong>CIRCUNFERENCIA CEFALICA:</strong></td>
						<td align="center">
							{{ $ultrasonido->circunferencia_cefalica_medida }}
						</td>
						<td align="center">
							{{ $ultrasonido->circunferencia_cefalica_semanas }}
						</td>
					</tr>

					<tr>
						<td><strong>CIRCUNFERENCIA ABDOMINAL:</strong></td>
						<td align="center">
							{{ $ultrasonido->circunferencia_abdominal_medida }}
						</td>
						<td align="center">
							{{ $ultrasonido->circunferencia_abdominal_semanas }}
						</td>
					</tr>
					<tr>
						<td><strong>LONGITUD FEMORAL:</strong></td>
						<td align="center">
							{{ $ultrasonido->longitud_femoral_medida }}
						</td>
						<td align="center">
							{{ $ultrasonido->longitud_femoral_semanas }}
						</td>
					</tr>
			  
			</table>
		</div>

		<div style="text-align:center;">
			<table>
				<tr>
					<th colspan="2" ><b><u><p align="center"> Resumen:</p></u></b></th>
				</tr>
				
				<tr>
					<td><strong>Fetometría promedio hoy:</strong></td>
					<td align="left">
						{{ $ultrasonido->fetometria }}
					</td>
				</tr>
				<tr>
					<td><strong>Peso estimado:</strong></td>
					<td align="left">
						{{ $ultrasonido->peso_estimado }}
					</td>
				</tr>
				<tr>
					<td><strong>Percentilo:</strong></td>
					<td align="left">
						{{ $ultrasonido->percentilo }}
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>Comentarios:</strong></td>
				</tr>
				<tr>
					<td colspan="2">
						{{ $ultrasonido->comentarios }}
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>Interpretación:</strong></td>
				</tr>
				<tr>
					<td colspan="2">
						<p>1. Embarazo único intrauterino.</p>
						<p>2. Tamiz de alteraciones del crecimiento de bajo riesgo al momento
							del estudio.</p>
						<p>3. Tamiz de alteraciones de la frecuencia cardiaca fetal de bajo
							riesgo al momento del estudio.</p>
						<p>4. Tamiz de placenta de bajo riesgo al momento del estudio.</p>
						<p>5. Tamiz de liquido amniótico de bajo riesgo al momento del estudio.
						</p>
						<p>6. Tamiz de parto prematuro de bajo riesgo al momento del estudio.
						</p>

					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>Recomendaciones:</strong></td>
				</tr>
				<tr>
					<td colspan="2">
						{{ $ultrasonido->recomendaciones }}
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>Observaciones:</strong></td>
				</tr>
				<tr>
					<td colspan="2">
						<p>La realización de este ultrasonido esta basado en las guías practicas
							y consensos de acog y el isuog, su capacidad de detección de
							defectos estructurales es del 40.4%, con rango de 13.3 a 82.4%. El
							resultado normal del ultrasonido no garantiza que el feto no nacerá
							sin ninguna alteración, los tamizajes son pruebas exploratorias no
							pruebas diagnósticas, en caso de un resultado con riesgo elevado la
							recomendación es realizar una prueba confirmatoria.</p>

					</td>
				</tr>
			  
			</table>
		</div>

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><p align="center">Imagenes: </p></th>
				</tr>
				@foreach ($ultrasonidoimgs as $imagen)
	
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