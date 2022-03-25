@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Nueva Venta </strong></h2>
            </header>

            <div class="card-body">
                  <h5 class="h4 card-title">Ingrese los datos que se le piden:</h5>
                  @if (count($errors)>0)
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                          <li>{{$error}}</li>
                                    @endforeach
                              </ul>
                        </div>
                  @endif

                 {!!Form::open(array('url'=>'ventas/venta','method'=>'POST','autocomplete'=>'off'))!!}
                 {{Form::token()}}
                  <div class="row">
                  
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                      <div class="form-group">
                            <label for="cliente">Cliente</label>
                              <a href="{{url('ventas\cliente\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Cliente">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select name="idcliente" id="idcliente" class="form-control selectpicker"  data-live-search="true" required>
                                  <option value="">Buscar Cliente #Documento/Nombre</option>
                                  @foreach($personas as $persona)
                                  <option value="{{$persona->idpaciente}}">{{$persona->dpi}} - {{$persona->nombre}}</option>
                                  @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label>Fecha</label>
                        <span class="form-icon-wrapper">
							<span class="form-icon form-icon--right">
								<i class="fas fa-calendar-alt form-icon__item"></i>
							</span>
							<input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="">
						</span>
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label>Estado Venta:</label>
                        <select name="estadoventa" class="form-control">
                          <option value="Cerrada" selected>Cerrada</option>
                          <option value="Abierta">Abierta</option>
                        </select>
                        <!--<input type="hidden" type="number" name="impuesto" class="form-control" id="impuesto" value="{{ Auth::user()->porcentaje_imp }}" onkeypress="return validarentero(event,this.value)">-->
                        <input type="hidden" type="number" name="impuesto" class="form-control" id="impuesto" value="0" onkeypress="return validarentero(event,this.value)">
                        <input type="hidden" name="moneda" class="form-control" id="moneda" value="{{ Auth::user()->moneda }}">
                        <!--<input type="hidden" name="comision" class="form-control" id="comision" value="{{ Auth::user()->comision }}">-->
                        <input type="hidden" name="comision" class="form-control" id="comision" value="0">
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><h6><font color="orange">Estado Venta:<br> *Cerrada = Venta rápida, se cerrará automáticamente al guardar. <br>*Abierta = Venta modificable, deberá cerrarse al finalizar el negocio.</font></h6></label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-3 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label>Tipo Comprobante</label>
                        <select name="tipo_comprobante" class="form-control">
                          <option value="Factura">Factura</option>
                          <option value="Boleta">Boleta</option>
                          <option value="Ticket">Ticket</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                      <div class="form-group">
                            <label for="serie_comprobante">Serie Comprobante</label>
                            <input type="text" name="serie_comprobante"  value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie comprobante...">
                          </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="num_comprobante">Numero Comprobante</label>
                            <input type="text" name="num_comprobante"  value="{{old('num_comprobante')}}" class="form-control" placeholder="Numero comprobante...">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <label><h6><font color="orange"> *Revise si el precio de venta es el deseado, si no puede editarlo antes de agregarlo al detalle de la venta. Tambien al hacer un nuevo ingreso de producto puede cambiar el precio de venta del producto</font></h6></label>
                            <label><h6><font color="orange"> *Podrá vender un artículo sin stock o una cantidad mayor al stock, recuerde hacer un ingreso para recuperar los artículos faltantes.</font></h6></label>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        
                        <div class="form-group">

                            <label>Articulo</label>
                            <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                                <option value="" selected>Seleccione un articulo</option>
                                    @foreach($articulos as $articulo)
                                    <?php
                                        $precio_descuento= ($articulo->precio_venta-(($articulo->precio_oferta*$articulo->precio_venta)/(100)));
                                    ?>
                                        <option value="{{$articulo->idarticulo}}_{{$articulo->stock}}_{{number_format($articulo->costo_unidad_inventario,2, '.', '')}}_{{number_format($articulo->precio_venta,2, '.', '')}}_{{number_format($articulo->precio_oferta,2, '.', '')}}_{{$articulo->estado_oferta}}_{{$articulo->iddetalle_ingreso}}_{{$articulo->idpresentacion_inventario}}_{{$articulo->Presentacion}}">{{$articulo->codigo}} - {{$articulo->Articulo}} - {{$articulo->Presentacion}} - Stock: {{$articulo->stock}} - Precio: {{ Auth::user()->moneda }}{{number_format($articulo->precio_venta,2, '.', ',')}} @if($articulo->estado_oferta == "Activada") Oferta: {{ Auth::user()->moneda }}{{number_format($precio_descuento,2, '.', ',')}} ({{$articulo->precio_oferta}}%)  @endif</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="pcantidad" class="form-control" id="pcantidad" value="1" onkeypress="return validarentero(event,this.value)">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" readonly name="pstock" class="form-control" id="pstock" placeholder="Stock" onkeypress="return validarentero(event,this.value)">
                        </div>
                    </div>
                    <!--<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">-->
                        <!--<div class="form-group">-->
                            <!--<label for="precio_compra">Precio Compra</label>-->
                            <input type="hidden" name="pprecio_compra" class="form-control" id="pprecio_compra" placeholder="p. Compra" onkeypress="return validardecimal(event,this.value)">
                            <input type="hidden" name="piddetalle_ingreso" class="form-control" id="piddetalle_ingreso">
                            <input type="hidden" name="pidpresentacion_inventario" class="form-control" id="pidpresentacion_inventario">
                        <!--</div>-->
                    <!--</div>-->
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="precio_venta">Precio Venta </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                </div>
                                <input readonly type="" name="pprecio_venta" class="form-control" id="pprecio_venta" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="loferta" name="loferta" id="loferta">Descuento</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </div>
                                <input type="numeric" name="pdescuento" class="form-control" id="pdescuento" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validardecimal(event,this.value)">
                            </div>
                            Max= {{ Auth::user()->max_descuento}}%
                            <input type="hidden" name="pdescuentomax" class="form-control" id="pdescuentomax" value="{{ number_format(Auth::user()->max_descuento, 2, '.', ',') }}">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                           
                            <label for="precio_venta">Oferta</label>
                            <input type="" name="pprecio_oferta" class="form-control" id="pprecio_oferta" placeholder="Oferta" onkeypress="return validardecimal(event,this.value)">
                            <input type="hidden" name="pporcentaje_oferta" class="form-control" id="pporcentaje_oferta" placeholder="Porcentaje Oferta">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <hr>
                        <div class="form-group">
                             <button class="btn btn-info" type="button" id="bt_add"><i class="far fa-plus-square"></i> Agregar</button>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#A9D0F5">
                                    <th><i class="fa fa-sliders-h"></i></th>
                                    <th>Codigo/Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Venta</th>
                                    <!--<th>Precio Compra</th>-->
                                    <th>Descuento Total</th>
                                    <!--<th>Impuesto Total</th>-->
                                    <th>Sub-Total</th>
                                </thead>
                                <tfoot>
                                    <th><!--<H5 align="right">Total Impuesto:</H5>--></th>
                                    <th><!--<h5 id="totalimpuesto">{{ Auth::user()->moneda }}0.00</h5>--><input type="hidden" name="total_impuesto" id="total_impuesto"></th>
                                    <th><H5 align="right">Total Descuento:</th>
                                    <th><h5 align="right" id="totaldescuento">{{ Auth::user()->moneda }}0.00</h5></th>
                                    <th><H4 align="right"><strong>TOTAL:</strong></h4></th>
                                    <th><h4 align="right" id="total"><strong>{{ Auth::user()->moneda }}0.00</strong></h4><input type="hidden" name="total_venta" id="total_venta"></th>
                                </tfoot>
                                <tbody>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="abonado">Abonar </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                </div>
                                <input type="" name="abonado" class="form-control" id="abonado" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-3 col-md-4 col-xs-12">
                      <div class="form-group">
                        <label>Tipo Pago:</label>
                        <select name="tipopago" class="form-control">
                          <option value="Efectivo" selected>Efectivo</option>
                          <option value="Tarjeta">Tarjeta</option>
							<option value="Cheque">Cheque</option>
							<option value="Credito">Credito</option>
                        </select>
                      </div>
                    </div>
                    <!--<div>
                        <div class="form-group">
                            <label for="total_comision">Total Comision</label>
                            <h4 id="totalcomision">{{ Auth::user()->moneda }} 0.00</h4>-->
                            <input type="hidden" name="total_comision" class="form-control" id="total_comision" placeholder="total_comision" onkeypress="return validardecimal(event,this.value)">
                        <!--</div>
                    </div>-->
                    <div>
                        <div class="form-group">
                            
                            <input type="hidden" name="total_compra" class="form-control" id="total_compra" placeholder="total_compra" onkeypress="return validardecimal(event,this.value)">
                        </div>
                    </div>
                      
                  </div>


            </div>

                
                        
              

            <footer class="card-footer">
                  <div class="form-group" id="guardar">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                  </div>

        
            </footer>
      </div>
</div>
    {!!Form::close()!!}
    <script>
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        var optSimple = {
            format: "dd-mm-yyyy",
            language: "es",
            autoclose: true,
            todayHighlight: true,
            todayBtn: "linked",
        };
        $( '#datepicker' ).datepicker( optSimple );

        $( '#datepicker' ).datepicker( 'setDate', today );
    </script>
@push ('scripts')
    <script>
        $(document).ready(function(){
            $('#bt_add').click(function(){
                agregar();
            });
        });

        var cont=0;
        total=0;
        totaldescuento=0;
        totalimpuesto=0;
        total_compra=0;
        subtotal=[];
        subtotaldescuento=[];
        subtotalimpuesto=[];
        subtotalcompra=[];
        $("#guardar").hide();
        $("#pidarticulo").change(mostrarValores);

        function mostrarValores()
        {
            datosArticulo=document.getElementById('pidarticulo').value.split('_');
            $("#pstock").val(datosArticulo[1]);
            $("#pprecio_compra").val(datosArticulo[2]);
            $("#pprecio_venta").val(datosArticulo[3]);
            $("#pprecio_oferta").val(datosArticulo[5]);
            $("#pporcentaje_oferta").val(datosArticulo[4]);
            $("#piddetalle_ingreso").val(datosArticulo[6]);
            $("#pidpresentacion_inventario").val(datosArticulo[7]);
            if (datosArticulo[5] == "Activada")
            {
                $("#pdescuento").val(datosArticulo[4]);
            }else
            {
                $("#pdescuento").val(0.00);
            }
            
        }

        function agregar()
        {
            datosArticulo=document.getElementById('pidarticulo').value.split('_');

            idarticulo=datosArticulo[0];
            articulo=$("#pidarticulo option:selected").text();
            cantidad=$("#pcantidad").val();
            impuestopor=$("#impuesto").val();
            descuento=$("#pdescuento").val();
            descuentomax=$("#pdescuentomax").val();
            precio_venta=$("#pprecio_venta").val();
            precio_compra=$("#pprecio_compra").val();
            oferta_activa=$("#pprecio_oferta").val();
            iddetalle_ingreso=$("#piddetalle_ingreso").val();
            idpresentacion_inventario=$("#pidpresentacion_inventario").val();
            if (datosArticulo[5] == "Activada")
            {
                precio_oferta=$("#pporcentaje_oferta").val();
            }
            else
            {
                precio_oferta=$("#pdescuento").val();
            }


            stock=$("#pstock").val();
            moneda=$("#moneda").val();
            comision=$("#comision").val();

            
            
            if (idarticulo!="" && cantidad!="" && cantidad>0 && descuento!="" && precio_venta!="" && precio_compra!="" && precio_oferta!="")
            {
                if (parseInt(cantidad) <= parseInt(stock))
                {
                    if (oferta_activa == "Activada")
                    {   
                            if (parseFloat(descuento) <= parseFloat(descuentomax))
                            {
                                
                                descuentoxunidad=((precio_venta*descuento)/100);
                                impuestoxunidad=(((precio_venta-descuentoxunidad)*impuestopor)/100);
                                subtotal[cont]=(cantidad*precio_venta-(descuentoxunidad*cantidad)+(impuestoxunidad*cantidad));
                                total=total+subtotal[cont];
                                totalcomision=(total*(comision/100));

                                subtotaldescuento[cont]=(cantidad*descuentoxunidad);
                                totaldescuento=totaldescuento+subtotaldescuento[cont];

                                subtotalimpuesto[cont]=(cantidad*impuestoxunidad);
                                totalimpuesto=totalimpuesto+subtotalimpuesto[cont];

                                subtotalcompra[cont]=(cantidad*precio_compra);
                                total_compra=total_compra+subtotalcompra[cont];
                            

                                var fila='<tr class="selected" id="fila'+cont+'"><td align="center"><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td align="center"><input type="hidden" name="idarticulo[]" value="'+idarticulo+'"><input type="hidden" name="iddetalle_ingreso[]" value="'+iddetalle_ingreso+'"><input type="hidden" name="idpresentacion[]" value="'+idpresentacion_inventario+'">'+articulo+'</td><td align="center"><input type="hidden" style="width:100%" readonly name="cantidad[]" value="'+cantidad+'">'+cantidad+'</td><td align="right"><input type="hidden" style="width:100%" readonly name="precio_compra[]" value="'+precio_compra+'"><input type="hidden" style="width:100%" readonly name="precio_venta[]" value="'+precio_venta+'">{{Auth::user()->moneda}}'+precio_venta+'<input type="hidden" style="width:100%" readonly name="precio_oferta[]" value="'+descuento+'"></td><td align="right"><input type="hidden" style="width:100%" readonly name="impuestounidad[]" value="'+impuestoxunidad*cantidad+'"><input type="hidden" style="width:100%" readonly name="descuento[]" value="'+descuentoxunidad*cantidad+'">{{Auth::user()->moneda}}'+(descuentoxunidad*cantidad).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td><td align="right">{{Auth::user()->moneda}}'+subtotal[cont].toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td></tr>'; 
                                cont++;
                                limpiar();
                                $("#total").html(moneda + total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                                $("#total_venta").val(total);

                                $("#totaldescuento").html(moneda + totaldescuento.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                                $("#total_descuento").val(totaldescuento);

                                $("#totalimpuesto").html(moneda + totalimpuesto.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                                $("#total_impuesto").val(totalimpuesto);
                                
                                $("#total_compra").val(total_compra);

                                
                                evaluar();
                                
                                
                                $("#abonado").val(total.toFixed(2));
                                $("#total_abonado").val(total.toFixed(2));
                                $("#totalcomision").html(moneda + totalcomision.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                                $("#total_comision").val(totalcomision.toFixed(2));
                                $('#pidarticulo').val("Seleccione un Articulo");
                                $('#pidarticulo').change();
                                $('#detalles').append(fila);
                            }
                            else
                            {
                                alert ('El descuento supera el porcentaje de oferta');
                            }
                            
                        

                        
                    }
                    else
                    {
                        if (parseFloat(descuento) <= parseFloat(descuentomax))
                        {   
                            descuentoxunidad=((precio_venta*descuento)/100);
                            impuestoxunidad=(((precio_venta-descuentoxunidad)*impuestopor)/100);
                            subtotal[cont]=(cantidad*precio_venta-(descuentoxunidad*cantidad)+(impuestoxunidad*cantidad));
                            total=total+subtotal[cont];
                            totalcomision=(total*(comision/100));

                            subtotaldescuento[cont]=(cantidad*descuentoxunidad);
                            totaldescuento=totaldescuento+subtotaldescuento[cont];

                            subtotalimpuesto[cont]=(cantidad*impuestoxunidad);
                            totalimpuesto=totalimpuesto+subtotalimpuesto[cont];

                            subtotalcompra[cont]=(cantidad*precio_compra);
                            total_compra=total_compra+subtotalcompra[cont];
                        

                            var fila='<tr class="selected" id="fila'+cont+'"><td align="center"><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td align="center"><input type="hidden" name="idarticulo[]" value="'+idarticulo+'"><input type="hidden" name="iddetalle_ingreso[]" value="'+iddetalle_ingreso+'"><input type="hidden" name="idpresentacion[]" value="'+idpresentacion_inventario+'">'+articulo+'</td><td align="center"><input type="hidden" style="width:100%" readonly name="cantidad[]" value="'+cantidad+'">'+cantidad+'</td><td align="right"><input type="hidden" style="width:100%" readonly name="precio_compra[]" value="'+precio_compra+'"><input type="hidden" style="width:100%" readonly name="precio_venta[]" value="'+precio_venta+'">{{Auth::user()->moneda}}'+precio_venta+'<input type="hidden" style="width:100%" readonly name="precio_oferta[]" value="'+descuento+'"></td><td align="right"><input type="hidden" style="width:100%" readonly name="impuestounidad[]" value="'+impuestoxunidad*cantidad+'"><input type="hidden" style="width:100%" readonly name="descuento[]" value="'+descuentoxunidad*cantidad+'">{{Auth::user()->moneda}}'+(descuentoxunidad*cantidad).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td><td align="right">{{Auth::user()->moneda}}'+subtotal[cont].toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td></tr>'; 
                            cont++;
                            limpiar();
                            $("#total").html(moneda + total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                            $("#total_venta").val(total);

                            $("#totaldescuento").html(moneda + totaldescuento.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                            $("#total_descuento").val(totaldescuento);

                            $("#totalimpuesto").html(moneda + totalimpuesto.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                            $("#total_impuesto").val(totalimpuesto);
                            
                            $("#total_compra").val(total_compra);

                            
                            evaluar();
                            
                            
                            $("#abonado").val(total.toFixed(2));
                            $("#total_abonado").val(total.toFixed(2));
                            $("#totalcomision").html(moneda + totalcomision.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                            $("#total_comision").val(totalcomision.toFixed(2));
                            $('#pidarticulo').val("Seleccione un Articulo");
                            $('#pidarticulo').change();
                            $('#detalles').append(fila);
                        }
                        else
                        {
                            alert ('El descuento supera el porcentaje maximo de descuento permitido3');
                        }   
                    }
                }
                else
                {
                    alert ('La cantidad a vender supera el stock actual.');
                }
                
                

                
            }
            else 
            {
                alert("Error al ingresar el detalle de la Venta, revise los datos del articulo");
            }
        }

        function limpiar()
        {
            $("#pcantidad").val("1");
            $("#pdescuento").val("0");
            $("#pprecio_venta").val("");
            $("#pprecio_compra").val("");
            $("#pprecio_oferta").val("");
            $("#pstock").val("");
        }

        function evaluar()
        {
            if (total>0)
            {
                $("#guardar").show();
            }
            else
            {
                $("#guardar").hide();
            }
        }

        function eliminar(index)
        {
            total=total-subtotal[index];
            totaldescuento=totaldescuento-subtotaldescuento[index];
            totalimpuesto=totalimpuesto-subtotalimpuesto[index];
            total_compra=total_compra-subtotalcompra[index];
            comision=$("#comision").val();
            total_comision=(total*(comision/100));
            
            $("#total").html("Q. " + total.toFixed(2));
            $("#total_venta").val(total.toFixed(2));
            $("#abonado").val(total.toFixed(2));
            $("#total_compra").val(total_compra.toFixed(2));
            $("#totaldescuento").html("Q. " + totaldescuento.toFixed(2));
            $("#total_descuento").val(totaldescuento.toFixed(2));
            $("#totalimpuesto").html("Q. " + totalimpuesto.toFixed(2));
            $("#total_impuesto").val(totalimpuesto.toFixed(2));
            $("#pabonado").val(total.toFixed(2));
            $("#total_comision").val(total_comision.toFixed(2));
            $("#fila" + index).remove();
            evaluar();
        }

        function validardecimal(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==8) return true;
            if (tecla==46 && txt.indexOf('.') != -1) return false;
            patron = /[\d\.]/;
            te = String.fromCharCode(tecla);
            return patron.test(te); 
        } 

        function validarentero(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla==8)
            {
                return true;
            }
        
            // Patron de entrada, en este caso solo acepta numeros
            patron =/[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final); 
        } 
        
    </script>
@endpush
@endsection