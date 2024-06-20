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
                          <a class="nav-link active" aria-current="page" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Historia</u></b></a>
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
                        <h2 class="h3 card-header-title"><strong>Historia: </strong></h2>
                    </header> 
                        
                    <div class="card-body">
                        @if(isset($historia))
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        {{Form::open(array('action' => 'ReportesController@vistahistoria','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                                        {{Form::token()}}		
                                            <div class="card mb-4">
                                                <header class="card-header d-md-flex align-items-center">
                                                    <h4><strong>Imprimir Historia </strong></h4>
                                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$historia->idhistoria}}">
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        @if (Auth::user()->tipo_usuario != "Administrador")
                                            <a href="{{URL::action('HistoriaController@edit',$paciente->idpaciente)}}">
                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Historia">
                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                                </span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for=""><strong><u>Informacion General</u></strong></label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong>Paciente</strong></label>
                                        <p>{{$paciente->nombre}}</p>
                                    </div>
                                </div>
                                <?php
                                    $fecha = date("d-m-Y", strtotime($historia->fecha));
                                ?>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="fecha"><strong>Fecha</strong></label>
                                        <p>{{$fecha}}</p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="estado_civil"><strong>Estado Civil</strong></label>
                                        <p>{{$historia->estado_civil}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="procedencia"><strong>Procedencia</strong></label>
                                        <p>{{$historia->procedencia}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="escolaridad"><strong>Escolaridad</strong></label>
                                        <p>{{$historia->escolaridad}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="tel_emergencia"><strong>Telefono de Emergencia</strong></label>
                                        <p>{{$historia->tel_emergencia}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="profesion"><strong>Ocupación</strong></label>
                                        <p>{{$historia->profesion}}</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-124 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="motivo"><strong>Motivo</strong></label>
                                        <textarea readonly class="form-control" rows="3">{{$historia->motivo}}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="historia"><strong>Historia de la enfermedad actual</strong></label>
                                        <textarea readonly class="form-control" rows="5">{{$historia->historia}}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for=""><strong><u>Antecedentes Personales</u></strong></label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><strong>Ciclos Regulares</strong></td>
                                                    <td align="center">{{ $historia->ciclos_regulares }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Histerectomia</strong></td>
                                                    <td align="center">{{ $historia->histerectomia }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mastopatia</strong></td>
                                                    <td align="center">{{ $historia->mastopatia }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cardiopatias</strong></td>
                                                    <td align="center">{{ $historia->cardiopatias }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cafelea Vascular</strong></td>
                                                    <td align="center">{{ $historia->cafelea_vascular }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tabaquismo</strong></td>
                                                    <td align="center">{{ $historia->tabaquismo }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tratamento con quimioterapia o radiacion pelvica</strong></td>
                                                    <td align="center">{{ $historia->tratamiento_quimioradiacion }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Ejercicio</strong></td>
                                                    <td align="center">{{ $historia->ejercicio }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Observaciones</strong></td>
                                                    <td align="left"><textarea readonly name="observaciones" id="" class="form-control" placeholder="Observaciones...">{{ $historia->observaciones }}</textarea></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><strong>Afecciones Ginecologicas</strong></td>
                                                    <td align="center">{{ $historia->affecciones_ginecologicas }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cancer</strong></td>
                                                    <td align="center">{{ $historia->cancer }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Varices / Trombosis</strong></td>
                                                    <td align="center">{{ $historia->varices_trombosis }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Enfermedades Hepaticas</strong></td>
                                                    <td align="center">{{ $historia->enfermedades_hepaticas }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Alcoholismo</strong></td>
                                                    <td align="center">{{ $historia->alcoholismo }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cafeista (Mayor de 6 tazas) </strong></td>
                                                    <td align="center">{{ $historia->cafeista }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>TRH previa</strong></td>
                                                    <td align="center">{{ $historia->trh }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Otros</strong></td>
                                                    <td align="center">{{ $historia->otros }} </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for=""><strong><u>Antecedentes Familiares</u></strong></label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            <thead align="center" class="table-seconda">
                                                <th><h3><b>Antecedente</b></h3></th>
                                                <th><h3><b>SI/NO</b></h3></th>
                                                <th><h3><b>Quien?</b></h3></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Cardiopatias antes de 50 años</strong></td>
                                                    <td align="center">{{ $historia->cardiopatias_50anos }}</td>
                                                    <td align="left">{{ $historia->cardiopatias_50anos_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Osteoporosis</strong></td>
                                                    <td align="center">{{ $historia->osteoporosis }}</td>
                                                    <td align="left">{{ $historia->osteoporosis_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cancer Mama</strong></td>
                                                    <td align="center">{{ $historia->cancer_mama }}</td>
                                                    <td align="left">{{ $historia->cancer_mama_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cancer Ovario</strong></td>
                                                    <td align="center">{{ $historia->cancer_ovario }}</td>
                                                    <td align="left">{{ $historia->cancer_ovario_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Diabetes</strong></td>
                                                    <td align="center">{{ $historia->diabetes }}</td>
                                                    <td align="left">{{ $historia->diabetes_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Hiperlipidemias</strong></td>
                                                    <td align="center">{{ $historia->hiperlipidemias }}</td>
                                                    <td align="left">{{ $historia->hiperlipidemias_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cancer Endometrial</strong></td>
                                                    <td align="center">{{ $historia->cancer_endometrial }}</td>
                                                    <td align="left">{{ $historia->cancer_endometrial_quien }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Otros</strong></td>
                                                    <td align="left" colspan="2"><textarea readonly name="familiares_otros" id="" class="form-control" placeholder="Otros...">{{ $historia->familiares_otros }}</textarea></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for=""><strong><u>Antecedentes Obstetricos</u></strong></label>
                                    </div>
                                    @if ($historia)
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td><strong>Gestas</strong></td>
                                                        <td align="center">{{ $historia->gestas }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Vias de resolucion</strong></td>
                                                        <td align="center">{{ $historia->vias_resolucion }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Hijos Vivos</strong></td>
                                                        <td align="center">{{ $historia->hijos_vivos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Hijos Muertos</strong></td>
                                                        <td align="center">{{ $historia->hijos_muertos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Complicaciones Neonatales</strong></td>
                                                        <td align="center">{{ $historia->complicaciones_neonatales }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Complicaciones Obstetricos</strong></td>
                                                        <td align="center">{{ $historia->complicaciones_obstetricos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Abortos</strong></td>
                                                        <td align="center">{{ $historia->abortos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>causa</strong></td>
                                                        <td align="center">{{ $historia->causa }}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <div class="alert alert-warning">
                                        <ul>
                                                <li>Aun no se han ingresado datos en la historia de este paciente.</li>
                                        </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong><u>Antecedentes Ginecologicos</u></strong></label>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        $fur = date("d-m-Y", strtotime($historia->fur));
                                                    ?>
                                                    <td><strong>FUR</strong></td>
                                                    <td align="center">
                                                        @if ($fur != '01-01-1970')
                                                            {{ $fur }}
                                                        @endif
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <?php
                                                        $fechaParto = date("d-m-Y", strtotime($historia->fur));
                                                        $fechaParto = date("d-m-Y", strtotime($fechaParto.'+ 280 days'));
                                                    ?>
                                                    <td><strong>Fecha de parto</strong></td>
                                                    <td align="center">
                                                        @if ($fur != '01-01-1970')
                                                        {{ $fechaParto }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Ciclos</strong></td>
                                                    <td align="center">Cada: {{ $historia->ciclos_cada }}, por: {{ $historia->ciclos_por }} Dismenorrea: {{ $historia->dismenorrea }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Cantidad Hemorragia</strong></td>
                                                    <td align="center">{{ $historia->cantidad_hemorragia }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Frecuencia</strong></td>
                                                    <td align="center">{{ $historia->frecuencia }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong><u>Vida Sexual</u></strong></label>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                
                                                <tr>
                                                    <td><strong>Activa</strong></td>
                                                    <td align="center">{{ $historia->activa }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Edad de inicio de vida sexual</strong></td>
                                                    <td align="center">{{ $historia->edad }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Parejas</strong></td>
                                                    <td align="center">{{ $historia->parejas }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Motodo Anticonceptivo</strong></td>
                                                    <td align="center">{{ $historia->metodo_anticonceptivo }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Metodo</strong></td>
                                                    <td align="center">{{ $historia->metodo_si }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Tiempo</strong></td>
                                                    <td align="center">Año(s): {{ $historia->tiempo_ano }}, Meses: {{ $historia->tiempo_mes }}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong><u>Historia Papanicolau</u></strong></label>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                    <?php
                                                        $ultimo = date("d-m-Y", strtotime($historia->ultimo));
                                                    ?>
                                                <tr>
                                                    <td><strong>Ultimo Papanicolau</strong></td>
                                                    <td align="center">{{ $ultimo }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Resultado</strong></td>
                                                    <td align="center">{{ $historia->resultado }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Colonoscopia</strong></td>
                                                    <td align="center">{{ $historia->colonoscopia }} <textarea readonly class="form-control" placeholder="colonoscopia si...">{{ $historia->colonoscopia_si }}</textarea></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Procedimientos Ginecologicos</strong></td>
                                                    <td align="center"><textarea readonly class="form-control" placeholder="Procedimientos...">{{ $historia->procedimientos }}</textarea></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Rendiciones</strong></td>
                                                    <td align="center"><textarea readonly class="form-control" placeholder="Rendiciones...">{{ $historia->rendiciones }}</textarea></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="paciente"><strong><u>Revision por Sistemas</u></strong></label>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                            
                                            <tbody>
                                                <tr>
                                                    <td><strong>Revision</strong></td>
                                                    <td align="center"><textarea readonly class="form-control" placeholder="Revision..." rows="5">{{ $historia->revision }}</textarea></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        @else
                            @if (Auth::user()->tipo_usuario == "Doctor")
                                <a href="historias/create?idpaciente={{$paciente->idpaciente}}">
                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Crear Historia ">
                                        <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                            <i class="far fa-plus-square"></i> Crear Historia
                                        </button>
                                    </span>
                                </a>
                            @endif
                        @endif
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