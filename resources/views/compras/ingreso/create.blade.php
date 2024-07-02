@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Nuevo Ingreso </strong></h2>
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

                 {!!Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off'))!!}
                 {{Form::token()}}
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Cabecera</u></strong></label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                      <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                              <a href="{{url('compras\proveedor\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Proveedor">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select required name="idproveedor" id="idproveedor" class="form-control selectpicker"  data-live-search="true">
                                  <option value="">Buscar Proveedor Nombre/#Documento</option>
                                  @foreach($personas as $persona)
                                  <option value="{{$persona->idpersona}}">{{$persona->nombre}} - {{$persona->num_documento}}</option>
                                  @endforeach

                              </select>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
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
                    <div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
                      <div class="form-group">
                        <!--<label>% Impuesto</label>-->
                        <input type="hidden" name="moneda" class="form-control" id="moneda" value="{{ Auth::user()->moneda }}">
                        <input type="hidden" type="number" name="impuesto" class="form-control" id="impuesto" value="0" onkeypress="return validarentero(event,this.value)">
                        @if ($errors->has('impuesto'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('impuesto') }}
                                    </strong>
                              </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
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
                            <label for="num_comprobante">No. Comprobante</label>
                            <input type="text" name="num_comprobante"  value="{{old('num_comprobante')}}" class="form-control" placeholder="No. comprobante...">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Ingreso Compra</u></strong></label>
                      </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            
                            <label>Articulo</label>
                            <a href="{{url('almacen\articulo\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Articulo">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                                <option value="" selected>Seleccione un articulo</option>
                                    @foreach($articulos as $articulo)
                                <option value="{{$articulo->idarticulo}}_{{$articulo->articulo}}_{{$articulo->descripcion}}_{{$articulo->codigo}}_{{$articulo->nombre}}">{{$articulo->articulo}} @if($articulo->codigo != null)- {{ $articulo->codigo }}@endif</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                            
                            <label>Presentacion</label>
                            <a href="{{url('almacen\presentacion\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nueva presentacion">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select name="ppresentacion_compra" class="form-control selectpicker" id="ppresentacion_compra" data-live-search="true">
                                <option value="" selected>Seleccione una Presentacion</option>
                                    @foreach($presentaciones as $presentacion)
                                <option value="{{$presentacion->idpresentacion}}_{{$presentacion->nombre}}">{{$presentacion->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="pcantidad_compra" class="form-control" id="pcantidad_compra" value="1" onkeypress="return validarentero(event,this.value)" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="bonificacion">Bonificación</label>
                            <input type="number" name="pbonificacion" class="form-control" id="pbonificacion" value="0" onkeypress="return validarentero(event,this.value)" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="precio_compra">Costo Unidad</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                </div>
                                <input type="" name="pprecio_unidad_compra" class="form-control" id="pprecio_unidad_compra" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="descuento">Descuento</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                </div>
                                <input type="" name="pdescuento" class="form-control" id="pdescuento" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <label><strong><u>Ingreso a Inventario</u></strong></label>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="pcodigo_inventario" class="form-control" id="pcodigo_inventario" value="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                      <div class="form-group">
                        <label>Fecha Vencimiento</label>
                        <span class="form-icon-wrapper">
							<span class="form-icon form-icon--right">
								<i class="fas fa-calendar-alt form-icon__item"></i>
							</span>
							<input type="text" id="pfecha_vencimiento" class="form-control datepicker" name="pfecha_vencimiento" value="">
						</span>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            
                            <label>Presentacion</label>
                            <a href="{{url('almacen\presentacion\create')}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nueva presentacion">
                                          <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                <i class="far fa-plus-square"></i>
                                          </button>
                                    </span>
                              </a>
                            <select name="ppresentacion_inventario" class="form-control selectpicker" id="ppresentacion_inventario" data-live-search="true">
                                <option value="" selected>Seleccione una Presentacion</option>
                                    @foreach($presentaciones as $presentacion)
                                <option value="{{$presentacion->idpresentacion}}_{{$presentacion->nombre}}">{{$presentacion->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea name="pdescripcion_inventario" id="pdescripcion_inventario" class="form-control" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="">Dividir Unidades</label>
                            <input type="number" name="pcantidadxunidad" class="form-control" id="pcantidadxunidad" value="1" onkeypress="return validarentero(event,this.value)" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label for="precio_sugerido">Precio Venta</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                </div>
                                <input type="" name="pprecio_sugerido" class="form-control" id="pprecio_sugerido" aria-label="Amount (to the nearest dollar)" value="0.00" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="porcentaje_utilidad">Porcentaje Utilidad</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </div>
                                <input type="" name="pporcentaje_utilidad" class="form-control" id="pporcentaje_utilidad" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="precio_venta">Oferta</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                </div>
                                <input type="" name="pprecio_oferta" class="form-control" id="pprecio_oferta" aria-label="Amount (to the nearest dollar)" value="0" onkeypress="return validardecimal(event,this.value)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                            <label>Activar Oferta</label>
                            <select name="pestado_oferta" class="form-control selectpicker" id="pestado_oferta">
                                <option value="Inactivo" selected>Inactivo</option>
                                <option value="Activada">Activada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <hr>
                        <div class="form-group">
                             <button class="btn btn-info" type="button" id="bt_add"><i class="far fa-plus-square"></i> Agregar</button>
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
                                    <th><i class="fa fa-sliders-h"></i></th>
                                    <th>Articulo</th>
                                    <th>Pres.Compra</th>
                                    <th>Cant.</th>
                                    <th>P.U.</th>
                                    <th>S-Total</th>
                                    <th>Boni.</th>
                                    <th>Cant.T.</th>
                                    <th>Desc.</th>
                                    <th>Total</th>
                                </thead>
                                <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 align="right" id="subtotal">{{ Auth::user()->moneda }}0.00</h4></th>
                                    <th></th>
                                    <th></th>
                                    <th><h4 align="right" id="descuentototal">{{ Auth::user()->moneda }}0.00</h4></th>
                                    <th><h4 align="right" id="total">{{ Auth::user()->moneda }}0.00</h4></th>
                                </tfoot>
                                <tbody>
                                        
                                </tbody>
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
                                    <th>Costo U.</th>
                                    <th>Total U.</th>
                                    <th>Desc.</th>
                                    <th>%Utilidad</th>
                                    <th>P.Sugerido/Venta</th>
                                    <th>%Descuento</th>
                                    <th>Oferta</th>
                                </thead>
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
                                    <th></th>
                                </tfoot>
                                <tbody>
                                        
                                </tbody>
                            </table>
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
        $( '#pfecha_vencimiento' ).datepicker( optSimple );
        $( '#datepicker' ).datepicker( 'setDate', today );
        $( '#pfecha_vencimiento' ).datepicker( 'setDate', today );
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
        subtotal=0;
        descuentototal=0;
        subtotalcompra=[];
        descuentocompra=[];
        totalcompra=[];
        $("#guardar").hide();
        $("#pidarticulo").change(mostrarValores);

        function mostrarValores()
        {
            datosArticulo=document.getElementById('pidarticulo').value.split('_');
            $("#pdescripcion_inventario").val(datosArticulo[2]);
            $("#pcodigo_inventario").val(datosArticulo[3]);

            
        }

        function agregar()
        {
            datosPresentacionCompra=document.getElementById('ppresentacion_compra').value.split('_');
            datosPresentacionInventario=document.getElementById('ppresentacion_inventario').value.split('_');
            //compra
            idarticulo=datosArticulo[0];
            articulo=$("#pidarticulo option:selected").text();
            idPresentacionCompra=datosPresentacionCompra[0];
            presentacion_compra=$("#ppresentacion_compra option:selected").text();
            cantidad_compra=$("#pcantidad_compra").val();
            bonificacion=$("#pbonificacion").val();
            descuento=$("#pdescuento").val();
            precio_unidad_compra=$("#pprecio_unidad_compra").val();
            
            //inventario
            articulo_inventario=datosArticulo[4];
            codigo=$("#pcodigo_inventario").val();
            fecha_vencimiento=$("#pfecha_vencimiento").val();
            idPresentacionInventario=datosPresentacionInventario[0];
            presentacion_inventario=$("#ppresentacion_inventario option:selected").text();
            descripcion_inventario=$("#pdescripcion_inventario").val();
            cantidadxunidad=$("#pcantidadxunidad").val();
            precio_sugerido=$("#pprecio_sugerido").val();
            porcentaje_utilidad=$("#pporcentaje_utilidad").val();
            precio_oferta=$("#pprecio_oferta").val();
            estado_oferta=$("#pestado_oferta option:selected").text();


            moneda=$("#moneda").val();

            if (idarticulo!="" &&
                  idPresentacionCompra!="" &&
                    cantidad_compra!="" &&
                      precio_unidad_compra!="" &&
                        bonificacion>=0 &&
                          bonificacion!="" &&
                            descuento>=0 &&
                              descuento!="" &&
                                idPresentacionInventario!="" &&
                                  cantidadxunidad>0 &&
                                    cantidadxunidad!="" &&
                                      precio_sugerido!="" &&
                                        porcentaje_utilidad!="" &&
                                          precio_sugerido>=0 &&
                                            porcentaje_utilidad>=0 &&
                                              precio_oferta!=""
                           )
            {
                if (precio_oferta <= 100)
                {
                    //compra
                    subtotalcompra[cont]=(cantidad_compra*precio_unidad_compra);
                    cantidad_total_compra= parseInt(cantidad_compra) + parseInt(bonificacion);
                    if (parseFloat(descuento) <= subtotalcompra[cont])
                    {
                        descuentocompra[cont]= parseFloat(descuento);
                        totalcompra[cont]=(subtotalcompra[cont]-descuentocompra[cont]);
                        //inventario
                        costo_unidad_inventario=((totalcompra[cont]/cantidad_total_compra)/cantidadxunidad);
                        total_unidades_inventario=(cantidad_total_compra*cantidadxunidad);
                        //totales
                        descuentototal=(descuentototal+descuentocompra[cont]);
                        subtotal=(subtotal+subtotalcompra[cont])
                        total=(total+totalcompra[cont]);
                        //calcular precio_venta
                        precio_venta=(((porcentaje_utilidad/100)+1)*costo_unidad_inventario)

                        var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</input></td><td align="center"><input type="hidden" name="idpresentacion_compra[]" value="'+idPresentacionCompra+'">'+presentacion_compra+'</input></td><td align="center"><input type="hidden" readonly name="cantidad_compra[]" value="'+cantidad_compra+'">'+cantidad_compra+'</input></td><td align="right"><input type="hidden" readonly name="costo_unidad_compra[]" value="'+precio_unidad_compra+'">'+moneda+precio_unidad_compra+'</input></td><td align="right"><input type="hidden" readonly name="sub_total_compra[]" value="'+subtotalcompra[cont]+'">'+moneda+subtotalcompra[cont]+'</input></td><td align="center"><input type="hidden" readonly name="bonificacion[]" value="'+bonificacion+'">'+bonificacion+'</input></td><td align="center"><input type="hidden" readonly name="cantidad_total_compra[]" value="'+cantidad_total_compra+'">'+cantidad_total_compra+'</input></td><td align="right"><input type="hidden" readonly name="descuento[]" value="'+descuentocompra[cont]+'">'+moneda+descuentocompra[cont]+'</input></td><td align="right"><input type="hidden" readonly name="total_compra[]" value="'+totalcompra[cont]+'">'+moneda+totalcompra[cont]+'</input></td></tr>'; 
                        var fila2='<tr class="selected" id="fila2'+cont+'"><td><input type="text" name="codigo_inventario[]" value="'+codigo+'"><br>'+articulo_inventario+'</td><td align="center"><input type="hidden" name="fecha_vencimiento[]" value="'+fecha_vencimiento+'">'+fecha_vencimiento+'</input></td><td align="center"><input type="hidden" name="idpresentacion_inventario[]" value="'+idPresentacionInventario+'">'+presentacion_inventario+'</input></td><td align="center"><input type="hidden" readonly name="cantidadxunidad[]" value="'+cantidadxunidad+'">'+cantidadxunidad+'</input></td><td align="right"><input type="hidden" readonly name="costo_unidad_inventario[]" value="'+costo_unidad_inventario+'">'+moneda+costo_unidad_inventario+'</input></td><td align="center"><input type="hidden" readonly name="total_unidades_inventario[]" value="'+total_unidades_inventario+'">'+total_unidades_inventario+'</input></td><td align="left"><input type="hidden" readonly name="descripcion_inventario[]" value="'+descripcion_inventario+'">'+descripcion_inventario+'</input></td><td align="center"><input type="hidden" name="porcentaje_utilidad[]" value="'+porcentaje_utilidad+'">'+porcentaje_utilidad+'%'+'</td><td align="right">Precio Sugerido:<div class="input-group"><div class="input-group-prepend"><span class="input-group-text">{{ Auth::user()->moneda }}</span></div> <input type="" size="8"  name="precio_sugerido[]" class="form-control" aria-label="Amount (to the nearest dollar)" onkeypress="return validardecimal(event,this.value)" required value="'+precio_venta+'"></input></div>Precio Venta:<div class="input-group"><div class="input-group-prepend"><span class="input-group-text">{{ Auth::user()->moneda }}</span></div> <input type="" size="8"  name="precio_venta[]" class="form-control" aria-label="Amount (to the nearest dollar)" onkeypress="return validardecimal(event,this.value)" required value="'+precio_sugerido+'"></input></div></td><td align="right"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text">%</span></div> <input type="" size="8" name="precio_oferta[]" class="form-control" aria-label="Amount (to the nearest dollar)" onkeypress="return validardecimal(event,this.value)" required value="'+precio_oferta+'"></input></td><td align="center"><input type="hidden" readonly name="estado_oferta[]" value="'+estado_oferta+'">'+estado_oferta+'</input></td></tr>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                        cont++;
                        limpiar();
                        $("#descuentototal").html(moneda + descuentototal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                        $("#subtotal").html(moneda + subtotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                        $("#total").html(moneda + total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                        evaluar();
                        $('#detalles').append(fila);
                        $('#detalles2').append(fila2);
                    }else
                    {
                        alert("El descuento supera al subtotal de compra.");
                    }
                    
                }
                else
                {
                    alert("El porcentaje de oferta no esta entre 0 y 100");
                }
            }
            else 
            {
                alert("Error al ingresar el detalle del ingreso, revise los datos del articulo");
            }
        }

        function limpiar()
        {
            $("#pcantidad_compra").val("1");
            $("#pbonificacion").val("0");
            $("#pprecio_unidad_compra").val("0.00");
            $("#pdescuento").val("0.00");
            $("#pdescripcion_inventario").val("");
            $("#pcodigo_inventario").val("");
            $("#pcantidadxunidad").val("1");
            $("#pporcentaje_utilidad").val("0");
            $("#pprecio_sugerido").val("0.00");
            $("#pprecio_venta").val("0.00");
            $("#pprecio_oferta").val("0");
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
            subtotal=subtotal-subtotalcompra[index];
            descuentototal=descuentototal-descuentocompra[index];
            total=total-totalcompra[index];
            $("#descuentototal").html(moneda + descuentototal);
            $("#subtotal").html(moneda + subtotal);
            $("#total").html("Q. " + total);
            $("#fila" + index).remove();
            $("#fila2" + index).remove();
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