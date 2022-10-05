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
                        <a class="nav-link" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas <span class="badge badge-info">{{ $totalRecetas }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico <span class="badge badge-info">{{ $totalFisicos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Ginecoestética <span class="badge badge-info">{{ $totalRadiofrecuencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica <span class="badge badge-info">{{ $totalSillas }}</span></a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Climaterio / Menopausea</u></b> <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>                              
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
                        <h2 class="h3 card-header-title"><strong>Estudio de climaterio y menopausea: </strong></h2>
                        @if(Auth::user()->tipo_usuario == "Doctor")
                            <a href="" data-target="#modal-eliminar-{{$climaymeno->idclimaymeno}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Estudio">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.climaymenos.modaleliminar')
                        

                            <a href="{{URL::action('ClimaymenoImgController@index','searchidclimaymeno='.$climaymeno->idclimaymeno)}}">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                    <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                        <i class="far fa-images"></i> Imagenes
                                    </button>
                                </span>
                            </a>
                        @endif
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistaclimaymeno','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir Estudio </strong></h4>
                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$climaymeno->idclimaymeno}}">
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
                        
                        
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                </div>
                            </div>
                            
                            <?php
                                $fecha = date("d-m-Y", strtotime($climaymeno->fecha));
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
                                    <p>{{$climaymeno->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$climaymeno->Doctor}} ({{ $climaymeno->especialidad }})</p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><h2><strong><u>Controles</u></strong></h2></label>
                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="controles/create?idclimaymeno={{$climaymeno->idclimaymeno}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Agregar Control ">
                                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i> Agregar Control
                                                </button>
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        
                                        <tbody>
                                            <tr>
                                                <td><strong><h2>Control</h2></strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">
                                                        <u><h2> #{{ $control->numero_control }}</h2></u> 
                                                        @if(Auth::user()->tipo_usuario == "Doctor")
                                                            <a href="{{URL::action('ClimaymenoControlController@edit',$control->idclimaymeno_control)}}">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Control">
                                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> </button>
                                                                </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-control-{{$control->idclimaymeno_control}}" data-toggle="modal">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Control">
                                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i></button>
                                                                </span>
                                                            </a>
                                                            @include('pacientes.historiales.climaymenos.controles.modaleliminar')
                                                        @endif
                                                    </td>
                                                @endforeach
                                                
                                            </tr>
                                            <tr>
                                                <td><strong>Fecha</strong></td>
                                                @foreach ($controles as $control)
                                                    @php
                                                        $fechaControl = date("d-m-Y", strtotime($control->fecha));
                                                    @endphp
                                                    <td align="left">{{ $fechaControl }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><h2><strong><u>Sintomas</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bochornos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->bochornos }} / {{ $control->bochornos_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Depresión </strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->depresion  }} / {{ $control->depresion_escala  }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Irritabilidad</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->irritabilidad }} / {{ $control->irritabilidad_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Perdida de libido</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->perdida_libido }} / {{ $control->perdida_libido_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Sequedad vaginal</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->sequedad_vaginal }} / {{ $control->sequedad_vaginal_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Insomnio</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->insomnio }} / {{ $control->insomnio_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Cefalea</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->cefalea }} / {{ $control->cefalea_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Fatiga</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->fatiga }} / {{ $control->fatiga_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Artralgias / Mialgias</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->artralgias_mialgias }} / {{ $control->artralgias_mialgias_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Trastornos miccionales</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->trastornos_miccionales }} / {{ $control->trastornos_miccionales_escala }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Otros</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->otros }} / {{ $control->otros_si }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><h2><strong><u>Examen Fisico</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>peso</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->peso }} Lbs.</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Talla</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->talla }} Cms.</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>IMC</strong></td>
                                                @foreach ($controles as $control)
                                                    @php
                                                        $kilogramos = $control->peso / 2.2;
                                                        $metros = $control->talla / 100;
                                                        $imc = ($kilogramos /($metros*$metros))
                                                    @endphp
                                                    <td align="left">{{ $imc }} IMC</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Presion Arterial</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->presion_arterial }} mm Hg</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Frecuencia cardiaca</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->frecuencia_cardiaca }} /min</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Cara</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->cara }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Mamas</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->mamas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Torax</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->torax }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Abdomen</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->abdomen }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Vulva</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->vulva }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Utero y anexos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->utero_anexos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Varices</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->varices }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Flujo Vaginal (Ph)</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->flujo_vaginal_ph }} Ph</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Hallazgos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->hallazgos }} Ph</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><h2><strong><u>Laboratorios</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                
                                                <td><strong>Fecha</strong></td>
                                                @foreach ($controles as $control)
                                                    @php
                                                        $fechaLaboratorios = date("d-m-Y", strtotime($control->fecha_laboratorios));
                                                    @endphp
                                                    <td align="left">{{ $fechaLaboratorios }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Hemograma</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->hemograma }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Examen general de orina</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->examen_orina }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Glicemia / Curva Glicemica</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->glicemia_curva_glicemica }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Insulina</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->insulina }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Panel de lipidos (clolesterol,trigliceridos)</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->panel_lipidos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Transaminasas</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->transaminasas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Citología cervicovaginal</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->citologia_cervicovaginal }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Mamografía</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->mamografia }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>FSH</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->fsh }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>LH</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->lh }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Pruebas tiroideas</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->pruebas_tiroideas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Prolactina</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->prolactina }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Densitometría osea</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->densitometria_osea }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Ultrasonografía pélvica</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->ultrasonografia_pelvica }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Escala de Homa</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->escala_homa }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Otros</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->otros_laboratorio }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><h2><strong><u>Tratamiento</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>ACO's</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->acos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tratamiento para infecciones locales</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->tratamiento_infecciones }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>TRH TIPO Y DOSIS</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->trh_tipo_dosis }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tratamiento para osteoporosis</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->tratamiento_osteoporosis }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Calcio</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->calcio }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Vitamina D</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->vitamina_d }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Aspirina</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->aspirina }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tratamiento para HTA</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->tratamiento_hta }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tratamiento para Diabetes</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->tratamiento_diabetes }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Jabones íntimos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->jabones_intimos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Notas Adicionales</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->nota_adicionales }}</td>
                                                @endforeach
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <label for="datos"><strong><u>Imagenes de climaterio y menopausea({{ $climaymenoimgs->count() }})</u></strong></label>
                                      @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="{{URL::action('ClimaymenoImgController@index','searchidclimaymeno='.$climaymeno->idclimaymeno)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                                <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                                    <i class="far fa-images"></i> Imagenes
                                                </button>
                                            </span>
                                        </a>
                                      @endif
                                      <div class="row">
                                            @if ($climaymenoimgs->count() != null)
                                                  <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-condensed table-hover">
                                                            <thead>
                                                                    <th><h5><STRONG>Imagen</STRONG></th>
                                                                    <th><h5><STRONG>Fecha</STRONG></th>
                                                                    <th><h5><STRONG>Descripcion</STRONG></th>
                                                            </thead>
                                                            @foreach ($climaymenoimgs as $imagen)
                                                                <tr>
                                                                    <td align="center">
                                                                          @if ($imagen->imagen != null)
                                                                            <div class="thumbnail">
                                                                                  <a target="_blank" href="{{asset('imagenes/climaymenos/'.$imagen->imagen)}}" >
                                                                                        <img src="{{asset('imagenes/climaymenos/'.$imagen->imagen)}}" alt="Lights" height="250px">
                                                                                  </a>
                                                                            </div>
                                                                          @else
                                                                              "No hay imagen"
                                                                          @endif
                                                                      </td>
                                                                    <?php
                                                                        $fecha = date("d-m-Y", strtotime($imagen->fecha));
                                                                    ?>
                                                                    <td align="center"><h5>{{ $fecha}}</h5></td>
                                                                    <td align="center"><h5>{{ $imagen->descripcion}}</h5></td>
                                                                    
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                  </div>
                                            @else
                                                  <h3>Aun no se han insertado imagenes.</h3>
                                            @endif
                                            
                                      </div>
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