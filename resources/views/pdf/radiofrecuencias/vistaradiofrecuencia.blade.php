<html html>
	<head>
  		<title>Vista de Ginecoestética</title>
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
			<strong><u>Ginecoestética</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($radiofrecuencia->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $hoy}} </strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $radiofrecuencia->Paciente}} <strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $radiofrecuencia->Doctor}} ({{ $radiofrecuencia->especialidad }})<strong></font>
			
		</h6>

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><h4 align="center">Paciente: <b> {{ $paciente->nombre}}</b></h4></th>
				</tr>
				<tr>
					<td><p align="right"><strong>Fecha</strong></p></td>
					<td><p align="left"><font color="black">{{$fecha}}</font></p></td>
				</tr>
				<tr>		
					<th colspan="2"><p align="center">Resumen Tratamiento: </p></th>
				</tr>
                <tr>
                    <td align="center" colspan="2">{{ $radiofrecuencia->resumen }}</td>
                </tr>
				<tr>		
					<th colspan="2"><p align="center">Contraindicaciones de radiofrecuencia: </p></th>
				</tr>
				<tr>
					<td><p align="left"><strong>¿Tiene algun tipo de implantes en su cuerpo?</strong></p></td>
					<td><p align="left"><font color="black">{{ $radiofrecuencia->implantes}}</font></p></td>	
				</tr>
				@if ($radiofrecuencia->implantes == "SI")
                    <tr>
            			<td><strong>Tipo de implante</strong></td>
                    	<td align="center">{{ $radiofrecuencia->implantes_tipo }}</td>
                    </tr>
                @endif
                <tr>
                    <td><strong>¿Tiene marcapasos?</strong></td>
                    <td align="center">{{ $radiofrecuencia->marcapasos }}</td>
                </tr>
                <tr>		
					<th colspan="2"><p align="center">Contraindicaciones de fototerapia: </p></th>
				</tr>
                <tr>
                    <td><strong>Periodo de gestación</strong></td>
                    <td align="center">{{ $radiofrecuencia->periodo_gestacion }}</td>
                </tr>
                <tr>
                    <td><strong>Glaucoma</strong></td>
                    <td align="center">{{ $radiofrecuencia->glaucoma }}</td>
                </tr>
                <tr>
                    <td><strong>Neoplasias y procesos tumorales</strong></td>
                    <td align="center">{{ $radiofrecuencia->neoplasias_procesos_tumorales }}</td>
                </tr>
                <tr>
                    <td><strong>Portador de epilepsia</strong></td>
                    <td align="center">{{ $radiofrecuencia->portador_epilepsia }}</td>
                </tr>
                <tr>
                	<td><strong>Antecedentes de fotosensibilidad</strong></td>
                    <td align="center">{{ $radiofrecuencia->antecedentes_fotosensibilidad }}</td>
                </tr>
                <tr>
                    <td><strong>Tratamientos con ácidos</strong></td>
                    <td align="center">{{ $radiofrecuencia->tratamientos_acidos }}</td>
                </tr>
                <tr>
                    <td><strong>Medicamentos fotosensibles</strong></td>
                    <td align="center">{{ $radiofrecuencia->medicamentos_fotosensibles }}</td>
                </tr>
			</table>
		</div>
		@php
			$numsesiones = $sesiones->count() + 1;
		@endphp
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
				<tr>		
					<th colspan="{{ $numsesiones }}"><h4 align="center">Sesiones de Radiofrecuencia:</h4></th>
				</tr>
				<tr>
					<td><p align="center"><strong><h3> Sesion</h3></strong></p></td>
					@foreach ($sesiones as $sesion)
						<td><p align="center"><font color="black"><u><h2> #{{ $sesion->numero_sesion }}</h2></u> </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="center"><strong>Fecha</strong></p></td>
					@foreach ($sesiones as $sesion)
                        @php
                            $fechasesion = date("d-m-Y", strtotime($sesion->fecha));
                        @endphp
						<td><p align="center"><font color="black">{{$fechasesion}}</font></p></td>
					@endforeach
				</tr>
				<!-- monopolar-->
				<tr>
					<td colspan="{{ $numsesiones }}"><h2><strong><u>Monopolar</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->monopolar_areas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Indicación</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->monopolar_indicacion }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->monopolar_temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->monopolar_tiempo }} Minutos</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->monopolar_zonas_tratadas }}</td>
					@endforeach
				</tr>
				<!-- bipolar-->
				<tr>
					<td colspan="{{ $numsesiones }}"><h2><strong><u>Bipolar</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->bipolar_areas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Indicación</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->bipolar_indicacion }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->bipolar_temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->bipolar_tiempo }} Minutos</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->bipolar_zonas_tratadas }}</td>
					@endforeach
				</tr>
				<!-- tetrapolar-->
				<tr>
					<td colspan="{{ $numsesiones }}"><h2><strong><u>Tetrapolar</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->tetrapolar_areas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Indicación</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->tetrapolar_indicacion }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->tetrapolar_temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->tetrapolar_tiempo }} Minutos</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->tetrapolar_zonas_tratadas }}</td>
					@endforeach
				</tr>
				<!-- hexapolar-->
				<tr>
					<td colspan="{{ $numsesiones }}"><h2><strong><u>Hexapolar</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->hexapolar_areas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Indicación</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->hexapolar_indicacion }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->hexapolar_temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->hexapolar_tiempo }} Minutos</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->hexapolar_zonas_tratadas }}</td>
					@endforeach
				</tr>
				<!-- ginecologico-->
				<tr>
					<td colspan="{{ $numsesiones }}"><h2><strong><u>Ginecologico</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->ginecologico_areas }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Indicación</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->ginecologico_indicacion }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Temperatura</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->ginecologico_temperatura }} °C</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->ginecologico_tiempo }} Minutos</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesiones as $sesion)
						<td align="left">{{ $sesion->ginecologico_zonas_tratadas }}</td>
					@endforeach
				</tr>

			</table>
		</div>
		@php
			$numsesionesFotomodulacion = $sesionesFotomodulacion->count() + 1;
		@endphp
		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="{{ $numsesionesFotomodulacion }}"><h4 align="center">Sesiones de Fotomodulacion:</h4></th>
				</tr>
				<tr>
					<td><p align="center"><strong><h3> Sesion</h3></strong></p></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td><p align="center"><font color="black"><u><h2> #{{ $sesionFotomodulacion->numero_sesion }}</h2></u> </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="center"><strong>Fecha</strong></p></td>
					@foreach ($sesionesFotomodulacion as $sesion)
                        @php
                            $fechasesionFotomodulacion = date("d-m-Y", strtotime($sesionFotomodulacion->fecha));
                        @endphp
						<td><p align="center"><font color="black">{{$fechasesionFotomodulacion}}</font></p></td>
					@endforeach
				</tr>
				<!-- Azul-->
				<tr>
					<td colspan="{{ $numsesionesFotomodulacion }}"><h2><strong><u>Azul</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Área</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->azul_area }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->azul_zona }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>J/m2</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->azul_jm2 }} J/m2</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->azul_tiempo}} Minutos</td>
					@endforeach
				</tr>
				
				<!-- Infralight-->
				<tr>
					<td colspan="{{ $numsesionesFotomodulacion }}"><h2><strong><u>Infralight</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Área</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->infralight_area }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->infralight_zona }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>J/m2</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->infralight_jm2 }} J/m2</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->infralight_tiempo }} Minutos</td>
					@endforeach
				</tr>
				
				<!-- Ambar-->
				<tr>
					<td colspan="{{ $numsesionesFotomodulacion }}"><h2><strong><u>Ambar</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Áreas</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->ambar_area }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->ambar_zona }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>J/m2</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->ambar_jm2 }} J/m2</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->ambar_tiempo }} Minutos</td>
					@endforeach
				</tr>
				
				<!-- Rubylight-->
				<tr>
					<td colspan="{{ $numsesionesFotomodulacion }}"><h2><strong><u>Rubylight</u></strong></h2></td>
				</tr>
				<tr>
					<td><strong>Área</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->rubylight_area }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Zonas Tratadas</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->rubylight_zona }}</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>J/m2</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->rubylight_jm2 }} J/m2</td>
					@endforeach
				</tr>
				<tr>
					<td><strong>Tiempo</strong></td>
					@foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
						<td align="left">{{ $sesionFotomodulacion->rubylight_tiempo }} Minutos</td>
					@endforeach
				</tr>
			</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>