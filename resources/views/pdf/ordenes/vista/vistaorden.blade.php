<html html>
	<head>
  		<title>Vista de Orden</title>
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
			<strong>Usuario:</strong><font color="Blue"> <strong>'{{ $nombreusu}}' <strong></font>
			
		</h6>
		<h4 align="center">
			<strong><u>Orden ID: {{$orden->idorden}}</u></strong>
		</h4>
		<h6>
			<?php
				$fecha = date("d-m-Y", strtotime($orden->fecha));
			?>
			<strong>Fecha Orden:</strong><font color="Blue"> <strong>{{ $fecha}} </strong></font>
			@if($orden->idventa != null)<br><strong>ID Venta:</strong><font color="Blue"> <strong>{{ $orden->idventa}} </strong></font>@endif
			<br><strong>Estado:</strong><font color="Blue"> <strong>{{$orden->estado_orden}}</strong></font>
			<br><strong>Cliente:</strong><font color="Blue"> <strong>{{$orden->Paciente}}<strong></font>
				<strong>Doctor:</strong><font color="Blue"> <strong>{{$orden->Doctor}} ({{ $orden->especialidad }})<strong></font>
				<strong>Usuario:</strong><font color="Blue"> <strong>{{$orden->Usuario}} ({{$orden->tipo_usuario}})<strong></font>
			<br><strong>Codigo EEPS:</strong><font color="Blue"> <strong>{{$orden->codigoeeps}}<strong></font>
			<br><strong>Codigo Papanicolau:</strong><font color="Blue"> <strong>{{$orden->codigopapanicolau}}<strong></font>
			<br><strong>Observaciones:</strong><font color="Blue"> <strong>{{$orden->observaciones}}<strong></font>
			<br><strong>Total:</strong><font color="Blue"> <strong>{{ Auth::user()->moneda }}{{number_format($orden->total,2, '.', ',')}}<strong></font>
		</h6>
		<h4 align="left">
			<strong><u>Detalle de Rubros</u></strong>
		</h4>

		@foreach ($rubros as $rubro)
			<h5 align="left">
				<strong><u>{{ $rubro->nombre }}</u></strong>
			</h5>
			<p>{{ $rubro->nota }}</p>
			<?php
                $articulos = DB::table('rubro_articulo as ra')
                ->join('articulo as a','ra.idarticulo','=','a.idarticulo')
                ->where('idrubro', '=', $rubro->idrubro)
                ->get();
			?>

			<div style="text-align:center;">

				<table>
					<tr>
						<th><h3 align="center">Rubro</h3></th>
						<th><h3 align="center">Precio</h3></th>
					</tr>
					@foreach ($articulos as $articulo)
						<tr>
							<?php
                                $ExisteArticuloOrden=DB::table('detalle_orden')
                                ->where('idorden','=',$orden->idorden)
                                ->where('idarticulo','=',$articulo->idarticulo)
                                ->get();
                            ?>
                            @if($ExisteArticuloOrden->count() >= 1)
                                <?php
                                	$detalleExistente=DB::table('detalle_orden')
                                    ->where('idorden','=',$orden->idorden)
                                    ->where('idarticulo','=',$articulo->idarticulo)
                                    ->first();
                                ?>
								<td><h3 align="center">{{ $articulo->nombre}}</p></h3></td>
								<td><h3 align="center">{{ Auth::user()->moneda }}{{number_format($detalleExistente->precio_venta,2, '.', ',')}}</h3></td>
							@endif
						</tr>
					@endforeach
				</table>
			</div>
		@endforeach
		<div style="text-align:center;">

			<table>
				<tr>
					<th><h3 align="center">Total</h3></th>
				</tr>
				
				<tr>
					<td><h3 align="center">{{ Auth::user()->moneda }}{{number_format($orden->total,2, '.', ',')}}</p></h3></td>
				</tr>
			</table>
		</div>
		<br>
		<h6>Reporte generado en: <a href="https://szystems.com/" target="_blank">SZ-Ventas Version 1.0</a> &copy; 2022 <a class="link-muted" href="https://szystems.com/" target="_blank">Szystems</a>. Todos los derechos reservados.</h6>
	</body>
</html>