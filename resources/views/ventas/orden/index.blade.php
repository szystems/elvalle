@extends ('layouts.admin')
@section('contenido')
    <div class="card mb-4">
        <!--Mensaje de abono correcto-->
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if (Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                            class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- fin .flash-message -->
        <!-- Card Header -->
        <header class="card-header d-md-flex align-items-center">

            <?php
                if (isset($mensaje))
                {
            ?>
            <div class="alert alert-warning">
                <ul>
                    {{ $mensaje }}
                </ul>
            </div>
            <?php
                }
            ?>
            <h4><strong>Listado de Ordenes </strong>

                <a href="orden/create">
                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Nueva Orden ">
                        <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                            <i class="far fa-plus-square"></i> Nueva Orden
                        </button>
                    </span>
                </a>

            </h4>

        </header>

        <div class="card-body">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                        $desdeReporte=$desde;
                        $hastaReporte=$hasta;

                        $desde = $desde;
                        $hasta = $hasta;

                        $desde = date("d-m-Y", strtotime($desde));
                        $hasta = date("d-m-Y", strtotime($hasta));
                                    
                    ?>
                    @include('ventas.orden.search')
                    {{Form::open(array('action' => 'ReportesController@reporteordenes','method' => 'POST','role' => 'form', 'target' => '_blank'))}}

                    {{Form::token()}}		
                        <div class="card mb-4">
                            <header class="card-header d-md-flex align-items-center">
                                <h4><strong>Imprimir Listado de Ingresos </strong></h4>
                                <input type="hidden" name="searchDesde" value="{{ $desdeReporte }}">
                                <input type="hidden" name="searchHasta" value="{{ $hastaReporte }}">
                                @if(isset($pacientefiltro))
                                    <input type="hidden" name="searchPaciente" value="{{ $pacientefiltro->idpaciente }}">
                                @else
                                <input type="hidden" name="searchPaciente" value="">
                                @endif
                                @if(isset($docfiltro))
                                    <input type="hidden" name="searchDoctor" value="{{ $docfiltro->id }}">
                                @else
                                    <input type="hidden" name="searchDoctor" value="">
                                @endif
                                @if(isset($usufiltro))
                                    <input type="hidden" name="searchUsuario" value="{{ $usufiltro->id }}">
                                @else
                                    <input type="hidden" name="searchUsuario" value="">
                                @endif
                                <input type="hidden" name="searchEstadoorden" value="{{ $estadoorden }}">
                                <input type="hidden" name="searchEstado" value="{{ $estado }}">
                            </header>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                        <div class="form-group mb-2">
                                            <label for="rpdf">Visualización</label>
                                            <select name="pdf" class="form-control" value="">
                                                    <option value="Descargar" selected>Descargar</option>
                                                    <option value="Navegador">Ver en navegador</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                    <label for="rpdf"></label>
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
                    <h6><strong>Filtros:</strong>
                        <font color="Blue"> 
                            <strong>Desde:</strong> '{{ $desde }}', 
                            <strong>Hasta:</strong> '{{ $hasta }}', 
                            <strong>Paciente:</strong> '@if(isset($pacientefiltro)) {{ $pacientefiltro->nombre }}' @endif, 
                            <strong>Doctor:</strong> '@if(isset($docfiltro)) {{ $docfiltro->name }}  @endif', 
                            <strong>Usuario:</strong> '@if(isset($usufiltro)) {{ $usufiltro->name }}  @endif',
                            <strong>Estado Orden:</strong> '{{ $estadoorden }}',
                            <strong>Estado:</strong> '{{ $estado }}'
                        </font>
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>
                                    <h5><strong><i class="fa fa-sliders-h"></i></strong></h5>
                                </th>
                                <th>
                                    <h5><strong>ID</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Fecha</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Doctor</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Paciente</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Total</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Estado Orden</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>ID Venta</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Usuario</strong></h5>
                                </th>
                                <th>
                                    <h5><strong>Estado</strong></h5>
                                </th>
                            </thead>
                            @foreach ($ordenes as $orden)
                                <tr>
                                    <td align="left">

                                        <a href="{{ URL::action('OrdenController@show', $orden->idorden) }}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                                title="Ver Orden">
                                                <button class="btn btn-sm btn-info" style="pointer-events: none;"
                                                    type="button">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                            </span>
                                        </a>
                                        @if ($orden->estado != 'Cancelada')
                                            <a href="{{ URL::action('OrdenController@edit', $orden->idorden) }}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                                    title="Editar orden">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;"
                                                        type="button">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                </span>
                                            </a>
                                        @endif
                                        @if ($orden->estado != 'Cancelada')
                                            <a href="" data-target="#modal-delete-{{ $orden->idorden }}"
                                                data-toggle="modal">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                                    title="Cancelar Orden">
                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;"
                                                        type="button">
                                                        <i class="far fa-minus-square"></i>
                                                    </button>
                                                </span>
                                            </a>
                                        @endif
                                        @if ($orden->estado != 'Cancelada')
                                            @if ($orden->estado_orden != 'Finalizada')
                                                <a href="" data-target="#modal-aventa-{{ $orden->idorden }}"
                                                    data-toggle="modal">
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                                        title="Pasar a Venta">
                                                        <button class="btn btn-sm btn-warning" style="pointer-events: none;"
                                                            type="button">
                                                            <i class="fas fa-money-bill"></i>
                                                        </button>
                                                    </span>
                                                </a>
                                            @endif
                                        @endif

                                    </td>
                                    <?php
                                    $fecha = date('d-m-Y', strtotime($orden->fecha));
                                    ?>
                                    <td align="center">
                                        <h5>{{ $orden->idorden }}</h5>
                                    </td>
                                    <td align="center">
                                        <h5>{{ $fecha }}</h5>
                                    </td>
                                    <td align="left">
                                        <h5>{{ $orden->Doctor }} ({{ $orden->especialidad }})</h5>
                                    </td>
                                    <td align="left">
                                        <h5>{{ $orden->Paciente }}</h5>
                                    </td>
                                    <td align="right">
                                        <h5>{{ Auth::user()->moneda }}{{ number_format($orden->total, 2, '.', ',') }}
                                        </h5>
                                    </td>
                                    <td align="center">
                                        @if ($orden->estado_orden == 'Pendiente')
                                            <h5><font color="Orange">{{ $orden->estado_orden }}</font></h5>
                                        @elseif ($orden->estado_orden == 'Finalizada')
                                            <h5><font color="limegreen">{{ $orden->estado_orden }}</font></h5>
                                        @endif
                                    </td>
                                    <td align="center">
                                        <h5>
                                            @if ($orden->idventa != null)
                                                <a
                                                    href="{{ URL::action('VentaController@show', $orden->idventa) }}"><b>{{ $orden->idventa }}</b></a>
                                            @endif
                                        </h5>
                                    </td>
                                    <td align="left">
                                        <h5>{{ $orden->Usuario }} ({{ $orden->tipo_usuario }})</h5>
                                    </td>
                                    @if ($orden->estado == 'Habilitada')
                                        <td align="left">
                                            <h5>
                                                <font color="limegreen">{{ $orden->estado }}</font>
                                            </h5>
                                        </td>
                                    @else
                                        <td align="left">
                                            <h5>
                                                <font color="red">{{ $orden->estado }}</font>
                                            </h5>
                                        </td>
                                    @endif
                                </tr>
                                @include('ventas.orden.modal')
                                @include('ventas.orden.aventa.aventamodal')
                            @endforeach
                        </table>
                    </div>
                    {{ $ordenes->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
