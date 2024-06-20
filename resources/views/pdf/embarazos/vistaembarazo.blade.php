<html html>
	<head>
  		<title>Vista de Embarazo</title>
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
			<strong><u>Embarazo</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($embarazo->fecha));
				$fur = date("d-m-Y", strtotime($embarazo->fur));
                $fechaParto = date("d-m-Y", strtotime($embarazo->fur));
                $fechaParto = date("d-m-Y", strtotime($fechaParto.'+ 280 days'));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $hoy}} </strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $embarazo->Doctor}} ({{ $embarazo->especialidad }})<strong></font>
			
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
					<td><p align="right"><strong>FUR</strong></p></td>
					<td><p align="left"><font color="black">{{$fur}}</font></p></td>
				</tr>
				<tr>
					<td><p align="right"><strong>FPP</strong></p></td>
					@if ($fur != '01-01-1970')
						<td><p align="left"><font color="black">{{$fechaParto}}</font></p></td>
					@endif
				</tr>
			</table>
		</div>
		@php
			$numControles = $controles->count() + 1;
		@endphp
		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><p align="center">Antecedentes Obstetricos: </p></th>
				</tr>
				@if ($historia)
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
				@else
					<tr>
							<p align="center">Aun no se han ingresado datos en la historia de este paciente.</p>
					</tr>
				@endif
			</table>
		</div>
		
		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="{{ $numControles }}"><h4 align="center">Controles:</h4></th>
				</tr>
				@if ($controles->count() > 0)
				<tr>
					<td><p align="center"><strong><h3> Control</h3></strong></p></td>
					@foreach ($controles as $control)
						<td><p align="center"><font color="black"><u><h2> #{{ $control->numero_control }}</h2></u> </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Fecha</strong></p></td>
					@foreach ($controles as $control)
                        @php
                            $fechaControl = date("d-m-Y", strtotime($control->fecha));
                        @endphp
						<td><p align="left"><font color="black">{{$fechaControl}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Semanas</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->semanas}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Semanas</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->semanas}}</font></p></td>
					@endforeach
				</tr>
				<tr>		
					<td colspan="{{ $numControles }}"><h3 align="rigth">Sintomas:</h3></td>
				</tr>
				<tr>
					<td><p align="right"><strong>Sueño</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->sueno}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Apetito</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->apetito}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Estreñimiento</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->estrenimiento}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Disuria</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->disuria}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Nauseas/Vomitos</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->nauseas_vomitos}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Flujo Vaginal</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->flujo_vaginal}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Dolor</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->dolor}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Otros</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{$control->otros}}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Frecuencia Cardiaca Fetal</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->frecuencia_cardiaca_fetal }} /min</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Peso</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->peso }} Lbs.</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Talla</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->talla }} Cms.</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>IMC</strong></p></td>
					@foreach ($controles as $control)
						@php
                            $kilogramos = $control->peso / 2.2;
                            $metros = $control->talla / 100;
                            $imc = ($kilogramos /($metros*$metros))
                        @endphp
						<td><p align="left"><font color="black">{{ $imc }} Lbs.</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Presion Arterial</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->presion_arterial }} mm Hg</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Temperatura</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->temperatura }} °C</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Frecuencia Cardiaca Materna</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->frecuencia_cardiaca_materna }} /min</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Altura Uterina</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->altura_uterina }} Cms.</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Frecuencia Cardiaca Fetal</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->frecuencia_cardiaca_fetal }} /min</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Presentacion Fetal</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->presentacion_fetal }} </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Movimientos Fetales</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->movimientos_fetales }}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Edema en MI</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->edema_mi }} </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Varicesl</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->varices }}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Flujo Vaginal (Ph)</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->flujo_vaginal_ph }} Ph</font></p></td>
					@endforeach
				</tr>
				<tr>		
					<td colspan="{{ $numControles }}"><h3 align="rigth">Tratamiento:</h3></td>
				</tr>
				<tr>
					<td><p align="right"><strong>Medicamentos</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->medicamentos }}</font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Especiales</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->especiales }} </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Proxima Cita</strong></p></td>
					@foreach ($controles as $control)
						@php
                            $proximaCita = date("d-m-Y", strtotime($control->proxima_cita));
                        @endphp
						<td><p align="left"><font color="black">{{ $proximaCita }} </font></p></td>
					@endforeach
				</tr>
				<tr>
					<td><p align="right"><strong>Nota Adicional</strong></p></td>
					@foreach ($controles as $control)
						<td><p align="left"><font color="black">{{ $control->nota }} </font></p></td>
					@endforeach
				</tr>
				@else
				<tr>
					<td><p align="center">No se han ingresado controles</p></td>
					
				</tr>
				@endif

			</table>
		</div>
		
		

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><h4 align="center">Seguimiento:</h4></th>
				</tr>
				<tr>
					<td><p align="right"><strong>1er. Trimestre</strong></p></td>
					<td><p align="left"><font color="black">{{$embarazo->trimestre1}}</font></p></td>
				</tr>
				<tr>
					<td><p align="right"><strong>2do. Trimestre</strong></p></td>
					<td><p align="left"><font color="black">{{$embarazo->trimestre2}}</font></p></td>
				</tr>
				<tr>
					<td><p align="right"><strong>3er. Trimestre</strong></p></td>
					<td><p align="left"><font color="black">{{$embarazo->trimestre3}}</font></p></td>
				</tr>
			</table>
		</div>

		<div style="text-align:center;">
			<table>
				<tr>		
					<th colspan="2"><p align="center">Imagenes: </p></th>
				</tr>
				@foreach ($embarazoimgs as $imagen)
	
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