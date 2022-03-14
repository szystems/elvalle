@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Detalle de Compra </strong></h2>
            </header>
            {{Form::open(array('action' => 'ReportesController@vistacomprareporte','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Proveedor </strong></h4>
							<input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$ingreso->idingreso}}">
                            <input type="hidden" id="rcomprobante" class="form-control datepicker" name="rnombre" value="{{$ingreso->tipo_comprobante}}: {{$ingreso->serie_comprobante}}-{{$ingreso->num_comprobante}}">
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
                                $fecha = date("d-m-Y", strtotime($ingreso->fecha));
                            ?>
                            <label for="proveedor">Fecha</label>
                            <p>{{$fecha}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                            <p>{{$ingreso->nombre}}</p>
                        </div>
                    </div>
                    <!--<div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label>Impuesto</label>
                            <p>{{$ingreso->impuesto}}</p>
                        </div>
                    </div>-->
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label>Comprobante</label>
                            <p>{{$ingreso->tipo_comprobante}}: {{$ingreso->serie_comprobante}}-{{$ingreso->num_comprobante}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <p>{{$ingreso->name}}</p>
                                </div>
                            </div>


                  
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#A9D0F5">
                                    
                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <!--<th>Precio Venta</th>-->
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>
                                    
                                    <th></th>
                                    <th></th>
                                    <th><h4 align="right"><strong>Total: </strong></h4></th>
                                    <th ><h4 id="total" align="right"><strong>{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</strong></h4></th>
                                </tfoot>
                                <tbody>
                                    @foreach($detalles as $det)
                                    <tr>
                                        <td align="left">{{ $det->articulo}}</td>
                                        <td align="center">{{ $det->cantidad}}</td>
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_compra,2, '.', ',')}}</td>
                                        <!--<td align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</td>-->
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format(($det->cantidad*$det->precio_compra),2, '.', ',')}}</td>
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