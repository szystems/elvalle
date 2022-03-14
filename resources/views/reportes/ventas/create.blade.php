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
                    <div class="col-lg-10 col-sm-12 col-md-12 col-xs-12">
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
                                  <option value="">Seleccione un proveedor</option>
                                  @foreach($personas as $persona)
                                  <option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
                                  @endforeach

                              </select>
                          </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-md-4 col-xs-12">
                      <div class="form-group">
                        <!--<label>% Impuesto</label>-->
                        <input type="hidden" name="moneda" class="form-control" id="moneda" value="{{ Auth::user()->moneda }}">
                        <input type="hidden" type="number" name="impuesto" class="form-control" id="impuesto" value="{{ Auth::user()->porcentaje_imp }}" onkeypress="return validarentero(event,this.value)">
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
                            <input type="text" name="serie_comprobante" required value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie comprobante...">
                          </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                            <label for="num_comprobante">No. Comprobante</label>
                            <input type="text" name="num_comprobante" required value="{{old('num_comprobante')}}" class="form-control" placeholder="No. comprobante...">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                            <label><h6><font color="orange"> *Si es la primera vez que ingresa un artículo, debe cerciorarse de llenar los campos de precio de compra y venta para no tener problemas al realizar una venta futura y las cantidades cuadren.</font></h6></label>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
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
                                <option value="{{$articulo->idarticulo}}_{{number_format($articulo->ultimo_precio_compra,2, '.', '')}}_{{number_format($articulo->ultimo_precio_venta,2, '.', '')}}">{{$articulo->articulo}}</option>
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
                            <label for="precio_compra">Precio Compra</label>
                            <input type="" name="pprecio_compra" class="form-control" id="pprecio_compra" placeholder="p. Compra" onkeypress="return validardecimal(event,this.value)">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                            <label for="precio_venta">Precio Venta</label>
                            <input type="" name="pprecio_venta" class="form-control" id="pprecio_venta" placeholder="p. Venta" onkeypress="return validardecimal(event,this.value)">
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
                                    <th>Opciones</th>
                                    <th>Articulo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <th>Precio Venta</th>
                                    <th>Subtotal</th>
                                </thead>
                                <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><H4 align="right"><strong>TOTAL</strong></H4></th>
                                    <th><h4 align="right" id="total"><strong>{{ Auth::user()->moneda }} 0.00</strong></h4></th>
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
@push ('scripts')
    <script>
        $(document).ready(function(){
            $('#bt_add').click(function(){
                agregar();
            });
        });

        var cont=0;
        total=0;
        subtotal=[];
        $("#guardar").hide();
        $("#pidarticulo").change(mostrarValores);

        function mostrarValores()
        {
            datosArticulo=document.getElementById('pidarticulo').value.split('_');
            $("#pprecio_venta").val(datosArticulo[2]);
            $("#pprecio_compra").val(datosArticulo[1]);
        }

        function agregar()
        {
            idarticulo=datosArticulo[0];
            articulo=$("#pidarticulo option:selected").text();
            cantidad=$("#pcantidad").val();
            precio_compra=$("#pprecio_compra").val();
            precio_venta=$("#pprecio_venta").val();
            moneda=$("#moneda").val();

            if (idarticulo!="" && cantidad!="" && cantidad>0 && precio_compra!="" && precio_venta!="")
            {
                if (precio_compra < precio_venta)
                {
                    subtotal[cont]=(cantidad*precio_compra);
                    total=total+subtotal[cont];

                    var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</input></td><td><input type="number" readonly name="cantidad[]" value="'+cantidad+'"></input></td><td><input type="" readonly name="precio_compra[]" value="'+precio_compra+'"></input></td><td><input type="" readonly name="precio_venta[]" value="'+precio_venta+'"></input></td><td align="right">'+moneda+subtotal[cont].toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td></tr>'; 
                    cont++;
                    limpiar();
                    $("#total").html(moneda + total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                    evaluar();
                    $('#detalles').append(fila);
                }
                else
                {
                    alert("El precio de compra es mayor al precio de venta");
                }
            }
            else 
            {
                alert("Error al ingresar el detalle del ingreso, revise los datos del articulo");
            }
        }

        function limpiar()
        {
            $("#pcantidad").val("1");
            $("#pprecio_compra").val("0");
            $("#pprecio_venta").val("0");
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
            $("#total").html("Q. " + total);
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