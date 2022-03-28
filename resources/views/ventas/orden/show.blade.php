@extends ('layouts.admin')
@section ('contenido')


<div>
      <div class="card mb-4">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Detalle de Orden ID: {{$orden->idorden}}</strong></h2>
            </header>
                
                    <div class="card-body">
                        @if($orden->estado_orden != "Finalizada")
                        <a href="{{URL::action('OrdenController@edit',$orden->idorden)}}">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Orden">
                                <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                            </span>
                        </a>
                        @endif
                        <a href="" data-target="#modaleliminarshow-delete-{{$orden->idorden}}" data-toggle="modal">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Venta">
                                <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i> Eliminar</button>
                            </span>
                        </a>
                        @if($orden->estado_orden != "Finalizada")
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group" align="right">
                                    <a href="" data-target="#modal-aventa-{{$orden->idorden}}" data-toggle="modal">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Pasar a Venta">
                                            <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button"><i class="fas fa-money-bill"></i> Pasar a venta</button>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="id"><b>ID</b></label>
                                    <p>{{$orden->idorden}}</p>
                                </div>
                            </div>
                            @if($orden->idventa != null)
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estado_orden"><b>ID Venta</b></label>
                                    <p>@if($orden->idventa != null)<a href="{{URL::action('VentaController@show',$orden->idventa)}}">{{ $orden->idventa}}</a>@endif</p>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <?php
                                        $fecha = date("d-m-Y", strtotime($orden->fecha));
                                    ?>
                                    <label for="fecha"><b>Fecha</b></label>
                                    <p>{{$fecha}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="estado_orden"><b>Estado</b></label>
                                    <p>{{$orden->estado_orden}}</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="paciente"><b>Paciente</b></label>
                                    <p>{{$orden->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><b>Doctor</b></label>
                                    <p>{{$orden->Doctor}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label><b>Usuario</b></label>
                                    <p>{{$orden->Usuario}} ({{$orden->tipo_usuario}})</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label><b>Codigo EEPS</b></label>
                                    <p>{{$orden->codigoeeps}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="codigopapanicolau"><b>Codigo Papanicolau</b></label>
                                    <p>{{$orden->codigopapanicolau}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="observaciones"><b>Observaciones</b></label>
                                    <p>{{$orden->observaciones}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="total"><b>Total</b></label>
                                    <p>{{ Auth::user()->moneda }}{{number_format($orden->total,2, '.', ',')}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <h1><b>Rubros:</b></h1>
                                    
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
                                                    <td>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">{{ Auth::user()->moneda }}</span>
                                                            </div>
                                                            <input readonly type="text"  class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$detalleExistente->precio_venta}}" onkeypress="return validardecimal(event,this.value)">
                                                        </div>
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
                                <div class="form-group" align="right">
                                    <h3><b>Total:<font color="limegreen"> {{ Auth::user()->moneda }}{{number_format($orden->total,2, '.', ',')}}</font></b></h3>
                                </div>
                            </div>
                            @if($orden->estado_orden != "Finalizada")
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group" align="right">
                                    <a href="" data-target="#modal-aventa-{{$orden->idorden}}" data-toggle="modal">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Pasar a Venta">
                                            <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button"><i class="fas fa-money-bill"></i> Pasar a venta</button>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    
              
            @include('ventas.orden.modaleliminarshow')
            @include('ventas.orden.aventa.aventamodal')
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