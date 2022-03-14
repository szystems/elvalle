@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Detalle de Venta </strong></h2>
            </header>
            {{Form::open(array('action' => 'ReportesController@vistaventareporte','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Venta </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$venta->idventa}}">
                            <input type="hidden" id="rcomprobante" class="form-control datepicker" name="rnombre" value="{{$venta->tipo_comprobante}}: {{$venta->serie_comprobante}}-{{$venta->num_comprobante}}">
						</header>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<select name="pdf" class="form-control" value="">
												<option value="Descargar" selected>Descargar</option>
												<option value="Navegador">Ver en navegador</option>
											</select>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
									<div class="form-group mb-2">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-danger">
												<i class="fa fa-file-pdf"></i> PDF
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
			{{Form::close()}}
                
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <?php
                                        $fecha = date("d-m-Y", strtotime($venta->fecha));					
                                    ?>
                                    <label for="proveedor">Fecha</label>
                                    <p>{{$fecha}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="proveedor">Cliente</label>
                                    <p>{{$venta->nombre}}</p>
                                </div>
                            </div>
                            <!--<div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label>Impuesto</label>
                                    <p>{{$venta->impuesto}}</p>
                                </div>
                            </div>-->
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label>Comprobante</label>
                                    <p>{{$venta->tipo_comprobante}}: {{$venta->serie_comprobante}}-{{$venta->num_comprobante}}</p>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="total_compra">Total Compra</label>
                                    <p>{{ Auth::user()->moneda }}{{number_format($venta->total_compra,2, '.', ',')}}</p>
                                </div>
                            </div>-->
                            <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <p>{{$venta->name}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="total_comision">Total Comision</label>
                                    <p>{{ Auth::user()->moneda }}{{number_format($venta->total_comision,2, '.', ',')}}</p>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="total_impuesto">Total Impuesto</label>
                                    <p>{{ Auth::user()->moneda }}{{number_format($venta->total_impuesto,2, '.', ',')}}</p>
                                </div>
                            </div>-->
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="abonado">Abonado</label>
                                    
                                    <p>{{ Auth::user()->moneda }}{{number_format($venta->abonado,2, '.', ',')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estado">Saldo</label>
                                    <p>{{$venta->estadosaldo}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estado">Tipo Pago</label>
                                    <p>{{$venta->tipopago}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estado">Estado venta</label>
                                    <p>{{$venta->estadoventa}}</p>
                                </div>
                            </div>


                        
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                        <thead style="background-color:#A9D0F5">
                                            
                                            <th>Codigo/Articulo</th>
                                            <th>Cantidad</th>
                                            <!--<th>Precio Compra</th>-->
                                            <th>Precio Unidad</th>
                                            <th>Descuento Total</th>
                                            <!--<th>Impuesto Total</th>-->
                                            <th>Subtotal</th>
                                        </thead>
                                        <tfoot>
                                            
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <!--<th></th>
                                            <th></th>-->
                                            <th><h4 align="right"><strong>Total: </strong></h4></th>
                                            <th ><h4 id="total" align="right"><strong>{{ Auth::user()->moneda }}{{ number_format($venta->total_venta,2, '.', ',')}}</strong></th>
                                        </tfoot>
                                        <tbody>
                                            @foreach($detalles as $det)
                                            <tr>
                                                <td align="left">{{ $det->codigo}} {{ $det->articulo}}</td>
                                                <td align="center">{{ $det->cantidad}}</td>
                                                <!--<td align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_compra,2, '.', ',')}}</td>-->
                                                <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</td>
                                                <td align="right">{{ Auth::user()->moneda }}{{ number_format((($det->descuento)),2, '.', ',')}}</td>
                                                <!--<td align="right">{{ Auth::user()->moneda }}{{ number_format(((((($det->cantidad)*($det->precio_venta))-($det->descuento))*$venta->impuesto)/100),2, '.', ',')}}</td>-->
                                                <td align="right">{{ Auth::user()->moneda }}{{ number_format(((((($det->cantidad)*($det->precio_venta))-($det->descuento))*$venta->impuesto)/100)+((($det->cantidad)*($det->precio_venta))-($det->descuento)),2, '.', ',')}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>


                    </div>

                    
            <footer class="card-footer">

            </footer>
      </div>
</div>
   




@endsection