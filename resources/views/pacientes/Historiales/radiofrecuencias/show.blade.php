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
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}">Embarazos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Radiofrecuencias</u></b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria</a>
                    </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Radiofrecuencia: </strong></h2>
                        @if (Auth::user()->tipo_usuario == "Doctor")
                            <a href="" data-target="#modal-eliminar-{{$radiofrecuencia->idradiofrecuencia}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Radiofrecuencia">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.radiofrecuencias.modaleliminar')
                        @endif
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistaradiofrecuencia','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir radiofrecuencia </strong></h4>
                                    <input type="hidden" id="rid" class="form-sesion" name="rid" value="{{$radiofrecuencia->idradiofrecuencia}}">
                                    <input type="hidden" class="form-sesion" name="ridpaciente" value="{{$paciente->idpaciente}}">
                                </header>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group mb-2">
                                                <select name="pdf" class="form-sesion" value="">
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
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    @if (Auth::user()->tipo_usuario == "Doctor")
                                        <a href="{{URL::action('RadiofrecuenciaController@edit',$radiofrecuencia->idradiofrecuencia)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar radiofrecuencia">
                                                <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                            </span>
                                        </a>
                                        @include('pacientes.historiales.radiofrecuencias.modaleliminar')
                                    @endif
                                </div>
                            </div>
                            <?php
                                $fecha = date("d-m-Y", strtotime($radiofrecuencia->fecha));
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
                                    <p>{{$radiofrecuencia->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$radiofrecuencia->Doctor}} ({{ $radiofrecuencia->especialidad }})</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Fototipo de Piel</strong></label>
                                    <p>{{$radiofrecuencia->fototipo_piel}}</p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for=""><strong><u>Contraindicaciones de Radiofrecuencia</u></strong></label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        
                                        <tbody>

                                            <tr>
                                                <td><strong>¿Tiene algun tipo de implantes en su cuerpo?</strong></td>
                                                <td align="center">{{ $radiofrecuencia->implantes }}</td>
                                                
                                            </tr>
                                            @if ($radiofrecuencia->implantes == "SI")
                                                <tr>
                                                    <td><strong>Tipo de implante</strong></td>
                                                    <td align="center">{{ $radiofrecuencia->implantes_tipo }}</td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td><strong>¿Tiene marcapasos?</strong></td>
                                                <td align="center">{{ $radiofrecuencia->marcapasos }}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for=""><strong><u>Contraindicaciones de Fototerapia</u></strong></label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        
                                        <tbody>
                                            
                                            <tr>
                                                <td><strong>Periodo de gestación</strong></td>
                                                <td align="center">{{ $radiofrecuencia->periodo_gestacion }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Glaucoma</strong></td>
                                                <td align="center">{{ $radiofrecuencia->glaucoma }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Neoplasias y procesos tumorales</strong></td>
                                                <td align="center">{{ $radiofrecuencia->neoplasias_procesos_tumorales }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Portador de epilepsia</strong></td>
                                                <td align="center">{{ $radiofrecuencia->portador_epilepsia }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Antecedentes de fotosensibilidad</strong></td>
                                                <td align="center">{{ $radiofrecuencia->antecedentes_fotosensibilidad }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Tratamientos con ácidos</strong></td>
                                                <td align="center">{{ $radiofrecuencia->tratamientos_acidos }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Medicamentos fotosensibles</strong></td>
                                                <td align="center">{{ $radiofrecuencia->medicamentos_fotosensibles }}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="doctor"><strong>Resumen Tratamiento</strong></label>
                                        <p>{{ $radiofrecuencia->resumen }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Sesiones radiofrecuecia-->
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><h2><strong><u>Sesiones Radiofrecuencia</u></strong></h2></label>
                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="sesiones/create?idradiofrecuencia={{$radiofrecuencia->idradiofrecuencia}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Agregar sesion ">
                                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i> Agregar sesion
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
                                                <td><strong><h2>sesion</h2></strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">
                                                        <u><h2> #{{ $sesion->numero_sesion }}</h2></u> 
                                                        @if (Auth::user()->tipo_usuario == "Doctor")
                                                            <a href="{{URL::action('RadiofrecuenciaSesionController@edit',$sesion->idradiofrecuencia_sesion)}}">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar sesion">
                                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> </button>
                                                                </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-radiofrecuencia-{{$sesion->idradiofrecuencia_sesion}}" data-toggle="modal">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar sesion">
                                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i></button>
                                                                </span>
                                                            </a>
                                                            @include('pacientes.historiales.radiofrecuencias.sesiones.modaleliminar')
                                                        @endif
                                                    </td>
                                                @endforeach
                                                
                                            </tr>
                                            <tr>
                                                <td><strong>Fecha</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    @php
                                                        $fechaSesion = date("d-m-Y", strtotime($sesion->fecha));
                                                    @endphp
                                                    <td align="left">{{ $fechaSesion }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- monopolar-->
                                            <tr>
                                                <td><h2><strong><u>Monopolar</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->monopolar_areas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Indicación</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->monopolar_indicacion }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->monopolar_temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->monopolar_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->monopolar_zonas_tratadas }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- bipolar-->
                                            <tr>
                                                <td><h2><strong><u>Bipolar</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->bipolar_areas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Indicación</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->bipolar_indicacion }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->bipolar_temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->bipolar_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->bipolar_zonas_tratadas }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- tetrapolar-->
                                            <tr>
                                                <td><h2><strong><u>Tetrapolar</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->tetrapolar_areas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Indicación</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->tetrapolar_indicacion }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->tetrapolar_temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->tetrapolar_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->tetrapolar_zonas_tratadas }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- hexapolar-->
                                            <tr>
                                                <td><h2><strong><u>Hexapolar</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->hexapolar_areas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Indicación</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->hexapolar_indicacion }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->hexapolar_temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->hexapolar_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->hexapolar_zonas_tratadas }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- ginecologico-->
                                            <tr>
                                                <td><h2><strong><u>Ginecologico</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->ginecologico_areas }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Indicación</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->ginecologico_indicacion }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Temperatura</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->ginecologico_temperatura }} °C</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->ginecologico_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesiones as $sesion)
                                                    <td align="left">{{ $sesion->ginecologico_zonas_tratadas }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Fin sesiones radiofrecuecia-->
                            

                            <!--Sesiones fotomodulacion-->
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><h2><strong><u>Sesiones Fotomodulacion</u></strong></h2></label>
                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="fotomodulaciones/create?idradiofrecuencia={{$radiofrecuencia->idradiofrecuencia}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Agregar sesion ">
                                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i> Agregar sesion
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
                                                <td><strong><h2>sesion</h2></strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">
                                                        <u><h2> #{{ $sesionFotomodulacion->numero_sesion }}</h2></u> 
                                                        @if (Auth::user()->tipo_usuario == "Doctor")
                                                            <a href="{{URL::action('RadiofrecuenciaFotomodulacionController@edit',$sesionFotomodulacion->idradiofrecuencia_fotomodulacion)}}">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar sesion">
                                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> </button>
                                                                </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-fotomodulacion-{{$sesionFotomodulacion->idradiofrecuencia_fotomodulacion}}" data-toggle="modal">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar sesion">
                                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i></button>
                                                                </span>
                                                            </a>
                                                            @include('pacientes.historiales.radiofrecuencias.fotomodulaciones.modaleliminar')
                                                        @endif
                                                    </td>
                                                @endforeach
                                                
                                            </tr>
                                            <tr>
                                                <td><strong>Fecha</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    @php
                                                        $fechaSesion = date("d-m-Y", strtotime($sesionFotomodulacion->fecha));
                                                    @endphp
                                                    <td align="left">{{ $fechaSesion }}</td>
                                                @endforeach
                                            </tr>
                                            <!-- Azul-->
                                            <tr>
                                                <td><h2><strong><u>Azul</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Área</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->azul_area }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->azul_zona }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>J/m2</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->azul_jm2 }} J/m2</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->azul_tiempo}} Minutos</td>
                                                @endforeach
                                            </tr>
                                            
                                            <!-- Infralight-->
                                            <tr>
                                                <td><h2><strong><u>Infralight</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Área</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->infralight_area }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->infralight_zona }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>J/m2</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->infralight_jm2 }} J/m2</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->infralight_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            
                                            <!-- Ambar-->
                                            <tr>
                                                <td><h2><strong><u>Ambar</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Áreas</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->ambar_area }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->ambar_zona }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>J/m2</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->ambar_jm2 }} J/m2</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->ambar_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            
                                            <!-- Rubylight-->
                                            <tr>
                                                <td><h2><strong><u>Rubylight</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Área</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->rubylight_area }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Zonas Tratadas</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->rubylight_zona }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>J/m2</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->rubylight_jm2 }} J/m2</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Tiempo</strong></td>
                                                @foreach ($sesionesFotomodulacion as $sesionFotomodulacion)
                                                    <td align="left">{{ $sesionFotomodulacion->rubylight_tiempo }} Minutos</td>
                                                @endforeach
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Fin sesiones fotomodulacion-->
                            
                            
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