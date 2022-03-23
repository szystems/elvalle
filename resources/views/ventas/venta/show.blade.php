@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Detalle de Venta </strong></h2>
            </header>
            

                {!!Form::model($venta,['method'=>'PATCH','route'=>['venta.update',$venta->idventa]])!!}
                {{Form::token()}}
                <input type="hidden" name="updateventa" class="form-control" id="updateventa" value="abonar">
                    <div class="card-body">
                        <a href="" data-target="#modaleliminarshow-delete-{{$venta->idventa}}" data-toggle="modal">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Venta">
                                <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                            </span>
                        </a>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <?php
                                        $fecha = date("d-m-Y", strtotime($venta->fecha));
                                    ?>
                                    <label for="fecha">Fecha</label>
                                    <p>{{$fecha}}</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="proveedor">Cliente</label>
                                    <p>{{$venta->nombre}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estadoventa">Estado</label>
                                    <p>{{$venta->estadoventa}}</p>
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
                                    <label for="tipopago">Tipo Pago</label>
                                    
                                    <p>{{$venta->tipopago}}</p>
                                </div>
                            </div>
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
                                                    
                                                @if($det->iddetalle_ingreso == null)
                                                    <td align="left">{{ $det->codigo}} {{ $det->articulo}}</td>
                                                    <?php
                                                        $esingreso=1;
                                                    ?>
                                                @else
                                                    <?php
                                                        $articulo_ingreso=DB::table('detalle_venta as d')
                                                        ->join('articulo as a','d.idarticulo','=','a.idarticulo')
                                                        ->join('presentacion as p','d.idpresentacion','=','p.idpresentacion')
                                                        ->join('detalle_ingreso as di','d.iddetalle_ingreso','=','di.iddetalle_ingreso')
                                                        ->select('a.nombre as articulo','p.nombre as presentacion','di.codigo','d.cantidad','d.descuento','d.precio_compra','d.precio_venta','d.precio_oferta')
                                                        ->where('d.iddetalle_ingreso','=',$det->iddetalle_ingreso)
                                                        ->first();

                                                        $esingreso=0;
                                                    ?>
                                                    <td align="left">{{ $det->codigo}} {{ $det->articulo}} - {{ $articulo_ingreso->presentacion}}</td>
                                                @endif
                                                
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

                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (($venta->abonado != $venta->total_venta) and ($venta->estado == 'A'))
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                            <div class="form-group">
                            
                                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                    <thead style="background-color:#A9D0F5">
                                                        
                                        <th><h4 align="right"><strong>Saldo:</strong></h4></th>
                                        <th>
                                            <input type="hidden" name="total_venta" class="form-control" id="total_venta" placeholder="" value="{{$venta->total_venta}}">
                                            <input type="hidden" name="abonado" class="form-control" id="abonado" placeholder="" value="{{$venta->abonado}}">
                                            <input type="hidden" name="estadosaldo" class="form-control" id="estadosaldo" placeholder="" value="{{$venta->estadosaldo}}">
                                            <h4 align="center"><strong>{{ Auth::user()->moneda }}{{number_format(($venta->total_venta-$venta->abonado),2, '.', ',')}}<input type="" name="abonar" class="form-control" id="abonar" placeholder="" value="{{number_format(($venta->total_venta-$venta->abonado),2, '.', '')}}" onkeypress="return validardecimal(event,this.value)" style="text-align:right"></strong></h4>
                                        </th>
                                        <th><button class="btn btn-success" type="submit"><i class="fas fa-money-bill"></i> Abonar</button></th>
                                                        
                                    </thead>
                                    <thead style="background-color:#A9D0F5">
                                                        
                                        <th><h4 align="right"><strong>Tipo Pago:</strong></h4></th>
                                        
                                        <th>
                                            <h4 align="center">
                                                <strong>
                                                    <select name="tipopago" class="form-control">
                                                        <option value="{{$venta->tipopago}}" selected>{{$venta->tipopago}}</option>
                                                        <option value="Efectivo">Efectivo</option>
                                                        <option value="Tarjeta">Tarjeta</option>
                                                        <option value="Cheque">Cheque</option>
                                                        <option value="Credito">Credito</option>
                                                    </select>
                                                </strong>
                                            </h4>
                                        </th>
                                        
                                                        
                                    </thead>
                                                    
                                </table> 
                                <h6><font color="orange"> Si has equivocado la cantidad puedes abonar o restar cantidades con números negativos por ejemplo (-10.50).</</font></h6>
                            <h6><font color="orange"> Si la cantidad abonada al agregar artículos fue mayor, puede que te aparezcan números negativos, lo cual indica que tienes un sobrante lo cual puedes revertir al abonar la cantidad negativa exacta.</font></h6>
                            </div>
                        </div>
                    @endif 
                    {!!Form::close()!!} 
                    @if($esingreso != 1)
                        {{Form::open(array('action' => 'ReportesController@vistaventa','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

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
                    @endif
            @include('ventas.venta.modaleliminarshow')
            <footer class="card-footer">

            </footer>
      </div>
</div>
   


@push ('scripts')
    <script>
        function validardecimal(e,txt) 
        {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==8) return true;
            if (tecla==46 && txt.indexOf('.') != -1) return false;
            patron = /[\d\.]/;
            te = String.fromCharCode(tecla);
            return patron.test(te); 
        } 
    </script>
@endpush

@endsection