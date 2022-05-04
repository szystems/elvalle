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
				<td><p align="right"><b>Sexo:</b></p></td>
				<td><p align="left"><font color="black">{{ $paciente->sexo}}</font></p></td>
			</tr>
			<tr>
				<td><p align="right"><strong>Teléfono:</strong></p></td>
				<td><p align="left"><font color="black">{{ $paciente->telefono}}</font></p></td>
			</tr>
			<tr>
				<td><p align="right"><strong>Dirección:</strong></p></td>
				<td><p align="left"><font color="black">{{ $paciente->direccion}}</font></p></td>
			</tr>
			<tr>
				<td><p align="right"><strong>Correo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $paciente->correo}}</font></p></td>
			</tr>
			<tr>
				<td><p align="right"><strong>DPI / NIT:</strong></p></td>
				<td><p align="left"><font color="black">{{ $paciente->dpi}} / {{ $paciente->nit }}</font></p></td>
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Historia Basica</b></p></th>
			</tr>
			@php
				$fecha = date("d-m-Y", strtotime($historia->fecha));
			@endphp
			<tr>
				<td><p align="right"><strong>Fecha Historia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->fecha}}</font></h4></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Estado Civil:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->estado_civil}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Procedencia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->procedencia}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Escolaridad:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->escolaridad}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Telefono de Emergencia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->tel_emergencia}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Profesion:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->profesion}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Motivo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->motivo}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Historia de la enfermedad actual:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->historia}}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Antecedentes Personales:</p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Ciclos Regulares:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->ciclos_regulares}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Histerectomia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->histerectomia}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Mastopatia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->mastopatia}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cardiopatias:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->cardiopatias}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cafelea Vascular:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->cafelea_vascular}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Tabaquismo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->tabaquismo}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Tratamento con quimioterapia o radiacion pelvica:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->tratamiento_quimioradiacion}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Ejercicio:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->ejercicio}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Affecciones Ginecologicas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->affecciones_ginecologicas}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cancer:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->cancer}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Varices Trombosis:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->varices_trombosis}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Enfermedades Hepaticas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->enfermedades_hepaticas}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Alcoholismo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->alcoholismo}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cafeista (Mayor de 6 tazas) :</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->cafeista}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>TRH previa :</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->trh}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Otros:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->otros}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Si otros:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->otros_texto}}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Antecedentes Familiares: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Cardiopatias antes de 50 años:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->cardiopatias_50anos}} </font></p>
					@if($historia->cardiopatias_50anos_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->cardiopatias_50anos_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Osteoporosis:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->osteoporosis}} </font></p>
					@if($historia->osteoporosis_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->osteoporosis_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Cancer Mama:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->cancer_mama}} </font></p>
					@if($historia->cancer_mama_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->cancer_mama_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Cancer Ovario:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->cancer_ovario}} </font></p>
					@if($historia->cancer_ovario_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->cancer_ovario_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Diabetes:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->diabetes}} </font></p>
					@if($historia->diabetes_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->diabetes_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Hiperlipidemias:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->hiperlipidemias}} </font></p>
					@if($historia->hiperlipidemias_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->hiperlipidemias_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>
				<td><p align="right"><strong>Cancer Endometrial:</strong></p></td>
				<td>
					<p align="left"><font color="black">{{ $historia->cancer_endometrial}} </font></p>
					@if($historia->cancer_endometrial_quien !=null)
						<p align="left"><font color="black"><b> Quien? </b>{{ $historia->cancer_endometrial_quien}}</font></p>
					@endif
				</td>		
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Antecedentes Obstetricos: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Gestas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->gestas}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Vias de resolucion:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->vias_resolucion}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Hijos Vivos:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->hijos_vivos}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Hijos Muertos:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->hijos_muertos}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Complicaciones Neonatales:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->complicaciones_neonatales}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Complicaciones Obstetricos:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->complicaciones_obstetricos}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Abortos:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->abortos}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Causa:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->causa}}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Antecedentes Ginecologicos: </p></th>
			</tr>
			@php
				$fur = date("d-m-Y", strtotime($historia->fur));
				$fechaParto = date("d-m-Y", strtotime($historia->fur));
				$fechaParto = date("d-m-Y", strtotime($fechaParto.'+ 280 days'));
			@endphp
			<tr>
				<td><p align="right"><strong>FUR:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fur }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Fecha de Parto:</strong></p></td>
				<td><p align="left"><font color="black">{{ $fechaParto }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Ciclo:</strong></p></td>
				<td><p align="left"><font color="black">Cada: {{ $historia->ciclos_cada }}, por: {{ $historia->ciclos_por }}, dias: {{ $historia->ciclos_dias }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Cantidad de Hemorragia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->cantidad_hemorragia}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Frecuencia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->frecuencia}}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Vida Sexual: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Activa:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->activa}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Edad:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->edad}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Parejas:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->parejas}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Metodo Anticonceptivo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->metodo_anticonceptivo}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Metodo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->metodo_si}}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Tiempo:</strong></p></td>
				<td><p align="left"><font color="black">Año(s):{{ $historia->tiempo_ano}}, Meses:{{ $historia->tiempo_mes }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Efectos Secundarios:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->efectos_secundarios }}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Historia Papanicolau: </p></th>
			</tr>
			@php
				$ultimo = date("d-m-Y", strtotime($historia->ultimo));
			@endphp
			<tr>
				<td><p align="right"><strong>Tiempo:</strong></p></td>
				<td><p align="left"><font color="black">{{ $ultimo }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Resultado:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->resultado }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Colposcopia:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->colposcopia }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Colposcopia si:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->colposcopia_si }}</font></p></td>	
			</tr>
			<tr>
				<td><p align="right"><strong>Procedimientos:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->procedimientos }}</font></p></td>	
			</tr>
			<tr>		
				<th colspan="2"><p align="center">Revision por Sistemas: </p></th>
			</tr>
			<tr>
				<td><p align="right"><strong>Revision:</strong></p></td>
				<td><p align="left"><font color="black">{{ $historia->revision }}</font></p></td>	
			</tr>

		</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>