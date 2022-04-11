@extends ('layouts.admin')
@section ('contenido')


<div>
        <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Detalle de Ingreso </strong></h2>
            </header>
                {{Form::open(array('action' => 'ReportesController@vistacompra','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                {{Form::token()}}		
					<div class="card mb-4">
						<header class="card-header d-md-flex align-items-center">
							<h4><strong>Imprimir Ingreso </strong></h4>
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
                    @if ($ingreso->estado == 'Activo')
                        <a href="" data-target="#modaleliminarshow-delete-{{$ingreso->idingreso}}" data-toggle="modal">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Cancelar Ingreso">
                                <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Cancelar</button>
                            </span>
                        </a>
                    @endif
                  <div class="row">
                    <br>
                  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Cabecera</u></strong></label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="proveedor">Fecha</label>
                            <?php
								$fecha = date("d-m-Y", strtotime($ingreso->fecha));
							?>
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
                    <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            <label for="usuario">Estado Ingreso</label>
                            @if($ingreso->estado == "Activo")
                            <p><font color="limegreen"><strong>{{$ingreso->estado}}</strong></font></p>
                            @else
                            <p><font color="Red"><strong>{{$ingreso->estado}}</strong></font></p>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Compra</u></strong></label>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#A9D0F5">
                                    
                                    <th>Codigo/Articulo</th>
                                    <th>Presentacion</th>
                                    <th>Cantidad</th>
                                    <th>Bonificacion</th>
                                    <th>Cant.Total</th>
                                    <th>Costo U.</th>
                                    <th>Subtotal</th>
                                    <th>Descuento</th>
                                    <th>Total</th>
                                </thead>
                                
                                <tbody>
                                    <?php
                                        $totaldescuento=0;
                                        $subtotal=0;  
                                    ?>
                                    @foreach($detalles as $det)
                                    <tr>
                                        <?php
                                            $subtotal=$subtotal+$det->sub_total_compra;
                                            $totaldescuento=$totaldescuento+$det->descuento;
                                        ?>
                                        <td align="left">{{ $det->CodigoIngreso}} {{ $det->Articulo}}</td>
                                        <td align="center">{{ $det->PresentacionCompra}}</td>
                                        <td align="center">{{ $det->cantidad_compra}}</td>
                                        <td align="center">{{ $det->bonificacion}}</td>
                                        <td align="center">{{ $det->cantidad_total_compra}}</td>
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_compra,2, '.', ',')}}</td>
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->sub_total_compra,2, '.', ',')}}</td>
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->descuento,2, '.', ',')}}</td>
                                        <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->total_compra,2, '.', ',')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 id="total" align="right"><font color="orange"><strong>{{ Auth::user()->moneda }}{{ number_format($subtotal,2, '.', ',')}}</strong></font></h4></th>
                                    <th><h4 id="total" align="right"><font color="limegreen"><strong>{{ Auth::user()->moneda }}{{ number_format($totaldescuento,2, '.', ',')}}</strong></font></h4></th>
                                    @if($ingreso->estado == "Activo")
                                    <th ><h4 id="total" align="right"><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</strong></font></h4></th>
                                    @else
                                        <th><del><h4 id="total" align="right"><font color="blue"><strong>{{ Auth::user()->moneda }}{{ number_format($ingreso->total,2, '.', ',')}}</strong></font></h4></del></th>
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Inventario</u></strong></label>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <table id="detalles2" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#A9D0F5">
                                    <th>Articulo</th>
                                    <th>F.Vcto.</th>
                                    <th>Pres.Venta</th>
                                    <th>U*Pres</th>
                                    <th>Costo Unidad</th>
                                    <th>Total Unidades</th>
                                    <th>Descripcion</th>
                                    <th>%Utilidad</th>
                                    <th>P.Sugerido</th>
                                    <th>P.Venta</th>
                                    <th>%Desc.</th>
                                    <th>Oferta</th>
                                    <th>Stock</th>
                                    <!--<th>Estado</th>-->
                                </thead>
                                <tbody>
                                    @foreach($detalles as $det)
                                        <tr>
                                            <td align="left">{{ $det->CodigoInventario}} {{ $det->Articulo}}</td>
                                            <?php
                                                $fecha_vencimiento = date("d-m-Y", strtotime($det->fecha_vencimiento));
                                            ?>
                                            <td align="center">{{ $fecha_vencimiento}}</td>
                                            <td align="center">{{ $det->PresentacionInventario}}</td>
                                            <td align="center">{{ $det->cantidadxunidad}}</td>
                                            <td align="right"><font color="orange">{{ Auth::user()->moneda }}{{ number_format($det->costo_unidad_inventario,2, '.', ',')}}</font></td>
                                            <td align="center"><font color="blue">{{ $det->total_unidades_inventario}}</font></td>
                                            <td align="left">{{ $det->descripcion_inventario}}</td>
                                            <?php

                                                $utilidad_total= (($det->porcentaje_utilidad*$det->costo_unidad_inventario)/100);
                                            ?>
                                            <td align="left">{{ $det->porcentaje_utilidad}}% ({{ Auth::user()->moneda }}{{ number_format($utilidad_total,2, '.', ',')}})</td>
                                            <td align="right">{{ Auth::user()->moneda }}{{ number_format($det->precio_sugerido,2, '.', ',')}}</td>
                                            <td align="right"><font color="blue">{{ Auth::user()->moneda }}{{ number_format($det->precio_venta,2, '.', ',')}}</font></td> 
                                            <?php

                                                $precio_descuento= ($det->precio_venta-(($det->precio_oferta*$det->precio_venta)/(100)));
                                            ?>
                                            <td align="right">{{ $det->precio_oferta}}%<font color="limegreen">({{ Auth::user()->moneda }}{{ number_format($precio_descuento,2, '.', ',')}})</font></td>
                                            @if($det->estado_oferta == "Activada")
                                                <td align="center"><font color="limegreen">{{$det->estado_oferta}}</font></td>
                                            @elseif($det->estado_oferta == "Inactivo")
                                                <td align="center"><font color="red">{{$det->estado_oferta}}</font></td>
                                            @endif

                                            @if(($det->stock <= $det->minimo) & ($det->stock > 0))
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><font color="orange"><b>{{$det->stock}} </b></font></td>
                                                @else
                                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                                @endif
                                            @endif
                                            @if($det->stock > $det->minimo)
                                                 
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><font color="limegreen"><b>{{$det->stock}} </b></font></td>
                                                @else
                                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                                @endif
                                            @endif
                                            @if($det->stock <= 0)
                                                @if($ingreso->estado == "Activo")
                                                    <td align="center"><font color="red"><b>{{$det->stock}} </b></font></td> 
                                                @else
                                                    <td align="center"><del><font color="red"><b>{{$det->stock}} </b></font></del></td>
                                                @endif
                                            @endif
                                            <!--<td align="right">{{$det->estado}}</td>-->
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tfoot>
                                
                            </table>
                        </div>
                    </div>
                    
                      
                </div>


            </div>
            @include('compras.ingreso.modaleliminarshow')
                
                        
              

            <footer class="card-footer">
                  

        
            </footer>
        </div>
</div>
   
@endsection