<html html>
	<head>
  		<title>Vista de Receta</title>
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
		<center>
			<img align="center" src="{{ $imagen}}" alt="" height="100">
		</center>
		<h6>
			<strong>Fecha:</strong><font color="Blue"> <strong>'{{ $hoy}}' </strong></font>
			<strong>Empresa:</strong><font color="Blue"> <strong>'{{ $empresa}}' </strong></font>
			<strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}} ({{ $receta->tipo_usuario }})' <strong></font>
			
		</h6>
		<h4 align="center">
			<strong><u>Receta:</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($receta->fecha));
			?>
			<strong>Fecha:</strong><font color="Blue"> <strong>{{ $fecha}} </strong></font>
			<br><strong>Paciente:</strong><font color="Blue"> <strong>{{ $receta->Paciente}}<strong></font>
			<br><strong>Doctor:</strong><font color="Blue"> <strong>{{ $receta->Doctor}} ({{ $receta->especialidad }})<strong></font>
			<br><strong>No. Colegiado:</strong><font color="Blue"> <strong>{{ $receta->no_colegiado}}<strong></font>
		</h6>
		<h4 align="left">
			<strong><u>Detalle de Receta</u></strong>
		</h4>
		<div style="text-align:center;">
		<table>
			<tr>		
                <th><h4 align="center">Cantidad</h4></th>
                <th><h4 align="center">Presentacion</h4></th>
                <th><h4 align="center">Medicamento</h4></th>
                <th><h4 align="center">Indicaciones</h4></th>
			</tr>
			@foreach($detalles as $det)
            <tr>
                <td><h4 align="center">{{ $det->cantidad}}</h4></td>
                <td><h4 align="center">{{ $det->nombre}}</h4></td>
				<td><h4 align="center">{{ $det->medicamento}}</h4></td>
				<td><h4 align="left">{{ $det->indicaciones}}</h4></td>
            </tr>
            @endforeach
		</table>
		<br><br><br>
		<table style="border: hidden">

			<tbody style="border: hidden">
			<tr style="border: hidden; text-align:center;">
				<td style="border: hidden; text-align:center;">____________________________</td>
				<td style="border: hidden; text-align:center;">____________________________</td>
			</tr>
			<tr style="border: hidden; text-align:center;">
				<td style="border: hidden; text-align:center;">Firma</td>
				<td style="border: hidden; text-align:center;">Sello</td>
			</tr>
			</tbody>
		</table>
		</div>

		<br>
	</body>
</html>