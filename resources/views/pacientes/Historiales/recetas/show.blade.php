@extends ('layouts.admin')
@section ('contenido')


<div>
        <div class="card mb-4">
            <header class="card-header">
                <h2 class="h3 card-header-title"><strong>Historial Paciente: {{$paciente->nombre}}</strong></h2>
            </header>

            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
            @endif
            <!--Mensaje de abono correcto-->
            <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        {{session()->forget('alert-' . $msg)}}
                    @endforeach
            </div> <!-- fin .flash-message -->

            <div class="card-body">
                <ul class="nav nav-tabs">
                    @php
                        $totalRecetas=DB::table('receta')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalFisicos=DB::table('fisico')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalEmbarazos=DB::table('embarazo')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalRadiofrecuencias=DB::table('radiofrecuencia')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalSillas=DB::table('sillae_ciclo')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalClimaymenos=DB::table('climaymeno')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalIncontinencias=DB::table('incontinenciau')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalColposcopias=DB::table('colposcopia')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();

                        $totalUltrasonidos=DB::table('ultrasonido_obstetrico')
                        ->where('idpaciente','=',$paciente->idpaciente) 
                        ->count();
                    @endphp
                    <li class="nav-item">
                        <a class="nav-link"  href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Recetas</u></b> <span class="badge badge-info">{{ $totalRecetas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico <span class="badge badge-info">{{ $totalFisicos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica <span class="badge badge-info">{{ $totalSillas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia <span class="badge badge-info">{{ $totalColposcopias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Receta: </strong></h2>
                        
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistareceta','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir Receta </strong></h4>
                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$receta->idreceta}}">
                                    <input type="hidden" class="form-control datepicker" name="ridpaciente" value="{{$paciente->idpaciente}}">
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
                        @if(Auth::user()->tipo_usuario == "Doctor")
                        <a href="" data-target="#modal-eliminar-{{$receta->idreceta}}" data-toggle="modal">
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Receta">
                                <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                        <i class="far fa-minus-square"></i> Eliminar
                                </button>
                            </span>
                        </a>
                        @endif
                        @include('pacientes.historiales.recetas.modaleliminar')
                        <div class="row">
                            <?php
                                $fecha = date("d-m-Y", strtotime($receta->fecha));
                            ?>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="fecha"><strong>Fecha</strong></label>
                                    <p>{{$fecha}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="paciente"><strong>Paciente</strong></label>
                                    <p>{{$receta->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$receta->Doctor}} ({{ $receta->especialidad }})</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                @if(Auth::user()->tipo_usuario == "Doctor")
                                <a href="" data-target="#modal-agregar-{{$receta->idreceta}}" data-toggle="modal">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Agregar Medicamento">
                                        <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                            <i class="far fa-plus-square"></i> Agregar Medicamento
                                        </button>
                                    </span>
                                </a>
                                @include('pacientes.historiales.recetas.modalagregar')
                                @endif
                                <?php
                                    $detalles=DB::table('receta_medicamento as rm')
                                    ->join('presentacion as p','rm.presentacion','=','p.idpresentacion')
                                    ->where('idreceta','=',$receta->idreceta) 
                                    ->get();
                                ?>
                                <div class="form-group">
                                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                        <thead style="background-color:#A9D0F5">
                                            <th><i class="fa fa-sliders-h"></i>
                                            </th>
                                            <th>Cantidad</th>
                                            <th>Presentacion</th>
                                            <th>Medicamento</th>
                                            <th>Indicaciones</th>
                                        </thead>
                                        @foreach ($detalles as $detalle)
                                            <tbody>
                                                <th>
                                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                                    <a href="" data-target="#modal-quitar-{{$detalle->idreceta_medicamento}}" data-toggle="modal">
                                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Quitar Medicamento">
                                                            <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                                                    <i class="far fa-minus-square"></i>
                                                            </button>
                                                        </span>
                                                    </a>
                                                    <a href="" data-target="#modal-editar-{{$detalle->idreceta_medicamento}}" data-toggle="modal">
                                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Medicamento">
                                                            <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                                                <i class="far fa-edit"></i>
                                                            </button>
                                                        </span>
                                                    </a>
                                                    @endif
                                                </th>
                                                <th align="center">{{ $detalle->cantidad }}</th>
                                                <th align="center">{{ $detalle->nombre }}</th>
                                                <th align="center">{{ $detalle->medicamento }}</th>
                                                <th>{{ $detalle->indicaciones }}</th>
                                            </tbody>
                                            @include('pacientes.historiales.recetas.modalquitar')
                                            @include('pacientes.historiales.recetas.modaleditar')
                                        @endforeach
                                        <tfoot>
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
        
                    <div class="card-footer">
                    </div>
                                
                </div>

            </div>

            <footer class="card-footer">

            </footer>
        </div>
</div>
   
@endsection