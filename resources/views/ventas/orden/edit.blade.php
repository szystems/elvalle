@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="col-md-12 mb-4">
            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title"><strong>Editar Orden ID: {{$orden->idorden}}</strong></h2>
                </header>

                <div class="card-body">
                    
                    @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                </ul>
                            </div>
                    @endif
                    <br>
                    <h5 class="h4 card-title"><font color="orange">Editar datos de orden:</font></h5>
                {!!Form::model($orden,['method'=>'PATCH','route'=>['orden.update',$orden->idorden]])!!}
                {{Form::token()}}

                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Fecha</label>
                                <span class="form-icon-wrapper">
                                    <span class="form-icon form-icon--right">
                                        <i class="fas fa-calendar-alt form-icon__item"></i>
                                    </span>
                                    <?php
                                        $fecha = date("d-m-Y", strtotime($orden->fecha));
                                    ?>
                                    <input readonly type="text"  class="form-control datepicker" name="fecha" value="{{$fecha}}">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Estado Orden:</label>
                                <!--<select name="estado_orden" class="form-control">
                                    <option selected value="{{$orden->estado_orden}}" selected>{{$orden->estado_orden}}</option>
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Finalizada">Finalizada</option>
                                </select>-->
                                <input readonly type="text" name="estado_orden"  value="Pendiente" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            
                            <div class="form-group">
                                <label for="paciente">Paciente</label>
                                <a href="{{url('pacientes\paciente\create')}}">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Paciente">
                                            <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i>
                                            </button>
                                        </span>
                                </a>
                                <select name="idpaciente" id="idpaciente" class="form-control selectpicker"  data-live-search="true">
                                    <option value="{{$orden->idpaciente}}" selected>{{$orden->Paciente}}</option>
                                    @foreach($pacientes as $paciente)
                                    <option value="{{$paciente->idpaciente}}">{{$paciente->dpi}} - {{$paciente->nombre}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="doctor">Doctor</label>
                                <!--<a href="{{url('seguridad\doctor\create')}}">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear nuevo Doctor">
                                            <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i>
                                            </button>
                                        </span>
                                </a>-->
                                <?php
                                    $doctorOrden=DB::table('users')
                                    ->where('id','=',$orden->iddoctor)
                                    ->first();
                                ?>
                                <select name="iddoctor" id="iddoctor" class="form-control selectpicker"  data-live-search="true">
                                    <option value="{{$doctorOrden->id}}" selected>{{$doctorOrden->name}} - {{$doctorOrden->especialidad}}</option>
                                    @foreach($doctores as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}} - {{$doctor->especialidad}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <h5 class="h4 card-title"><b> Pacientes seguro:</b></h5>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="codigoeeps">Código EEPS</label>
                                <input type="text" name="codigoeeps"  value="{{$orden->codigoeeps}}" class="form-control" placeholder="Código EEPS...">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="codigopapanicolau">Código Papanicolau</label>
                                <input type="text" name="codigopapanicolau"  value="{{$orden->codigopapanicolau}}" class="form-control" placeholder="Código Papanicolau...">
                            </div>
                        </div>
                        
                        @foreach($rubros as $rubro)
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label><b><u>{{$rubro->nombre}}</u></b> </label>
                                <p>{{$rubro->nota}}</p>
                                <?php
                                    $articulos = DB::table('rubro_articulo as ra')
                                    ->join('articulo as a','ra.idarticulo','=','a.idarticulo')
                                    ->where('idrubro', '=', $rubro->idrubro)
                                    ->get();

                                    
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                            
                                            <th class="col-5"><h5><strong>Rubro</strong></h5></th>
                                            <th class="col-3"><h5><strong>Precio ({{ Auth::user()->moneda }})</strong></h5></th>
                                            <th><h5><strong>Activar</strong></h5></th>
                                            
                                        </thead>
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
                                                <td align="center"><h5>{{ $articulo->nombre}}</h5></td>
                                                <!--Datos escondidos-->
                                                <input type="hidden" name="idarticulo{{$articulo->idrubro_articulo}}" value="{{$articulo->idarticulo}}">
                                                <input type="hidden" name="cantidad{{$articulo->idrubro_articulo}}" value="{{$detalleExistente->cantidad}}">
                                                <input type="hidden" name="precio_costo{{$articulo->idrubro_articulo}}" value="{{$articulo->precio_costo}}">
                                                
                                                
                                                
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                        </div>
                                                        <?php
                                                            $precio_final = $detalleExistente->precio_venta;
                                                        ?>
                                                        <input type="text" name="precio_final{{$articulo->idrubro_articulo}}" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$precio_final}}" onkeypress="return validardecimal(event,this.value)">
                                                    </div>
                                                </td>
                                                <td align="left">
                                                    <label class="d-flex align-items-center justify-content-between">
                                                        <div class="form-toggle">
                                                            <input name="check{{$articulo->idrubro_articulo}}" type="checkbox" value="Habilitado" checked>
                                                            <div class="form-toggle__item">
                                                                <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </td>
                                            @else
                                                <td align="center"><h5>{{ $articulo->nombre}}</h5></td>
                                                <!--Datos escondidos-->
                                                <input type="hidden" name="idarticulo{{$articulo->idrubro_articulo}}" value="{{$articulo->idarticulo}}">
                                                <input type="hidden" name="cantidad{{$articulo->idrubro_articulo}}" value="1">
                                                <input type="hidden" name="precio_costo{{$articulo->idrubro_articulo}}" value="{{$articulo->precio_costo}}">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                        </div> 
                                                        <input type="text" name="precio_final{{$articulo->idrubro_articulo}}" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$articulo->precio_venta}}" onkeypress="return validardecimal(event,this.value)">
                                                    </div>
                                                </td>
                                                <td align="left">
                                                    <label class="d-flex align-items-center justify-content-between">
                                                        <div class="form-toggle">
                                                            <input name="check{{$articulo->idrubro_articulo}}" type="checkbox" value="Habilitado" >
                                                            <div class="form-toggle__item">
                                                                <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </td>
                                            @endif
                                            
                                        </tr>
                                        
                                    @endforeach
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="observaciones">Observaciones</label>
                                <Textarea type="text" name="observaciones" class="form-control" placeholder="Observaciones...">{{$orden->observaciones}}</Textarea>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="form-group" >
                        <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">
                        <input type="hidden" name="idorden" value="{{$orden->idorden}}">
                        <input type="hidden" name="estado" value="Habilitada">
                        <input type="hidden" name="total" value="0">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                    </div>
                </footer>
                {!!Form::close()!!}
            </div>
      </div>
</div>
                
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
            
        $( '#datepicker' ).datepicker( 'setDate', {{$fecha}} );
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
            if (datosArticulo[5] == "SI")
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
            if (datosArticulo[5] == "SI")
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
                //if (stock-cantidad >= 0)
                //{
                    if (descuento <= descuentomax || ((descuento == precio_oferta) && (oferta_activa == "SI")))
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
                    

                        var fila='<tr class="selected" id="fila'+cont+'"><td align="center"><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td align="center"><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td align="center"><input type="hidden" style="width:100%" readonly name="cantidad[]" value="'+cantidad+'">'+cantidad+'</td><td align="right"><input type="hidden" style="width:100%" readonly name="precio_compra[]" value="'+precio_compra+'"><input type="hidden" style="width:100%" readonly name="precio_venta[]" value="'+precio_venta+'">{{Auth::user()->moneda}}'+precio_venta+'<input type="hidden" style="width:100%" readonly name="precio_oferta[]" value="'+descuento+'"></td><td align="right"><input type="hidden" style="width:100%" readonly name="impuestounidad[]" value="'+impuestoxunidad*cantidad+'"><input type="hidden" style="width:100%" readonly name="descuento[]" value="'+descuentoxunidad*cantidad+'">{{Auth::user()->moneda}}'+(descuentoxunidad*cantidad).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td><td align="right">{{Auth::user()->moneda}}'+subtotal[cont].toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')+'</td></tr>'; 
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
                        alert ('El descuento supera el 100% o el máximo de descuento permitido al usuario');
                    }

                    
                //}
                //else
                //{
                    //alert ('La cantidad a vender supera el Stock');
                //}

                
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