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
                        <a class="nav-link"  href="{{URL::action('HistorialController@show',$paciente->idpaciente)}}">Perfil</a>
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
                        <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Incontinencia Urinaria</u></b></a>
                  </li>
                </ul>
                
                
                <div class="card">
        
                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Estudio de incontinencia urinaria: </strong></h2>
                        @if(Auth::user()->tipo_usuario != "Administrador")
                            <a href="" data-target="#modal-eliminar-{{$incontinencia->idincontinenciau}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Estudio">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.incontinencias.modaleliminar')
                        @endif
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistaincontinencia','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir Estudio </strong></h4>
                                    <input type="hidden" id="rid" class="form-cuestionario datepicker" name="rid" value="{{$incontinencia->idincontinenciau}}">
                                    <input type="hidden" class="form-cuestionario datepicker" name="ridpaciente" value="{{$paciente->idpaciente}}">
                                </header>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group mb-2">
                                                <select name="pdf" class="form-cuestionario" value="">
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
                                $fecha = date("d-m-Y", strtotime($incontinencia->fecha));
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
                                    <p>{{$incontinencia->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="sexo"><strong>Sexo</strong></label>
                                    <p>{{$incontinencia->sexo}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$incontinencia->Doctor}} ({{ $incontinencia->especialidad }})</p>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><h2><strong><u>Cuestionarios</u></strong></h2></label>
                                    @if(Auth::user()->tipo_usuario != "Administrador")
                                        <a href="cuestionarios/create?idincontinenciau={{$incontinencia->idincontinenciau}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Agregar Cuestionario ">
                                                <button class="btn btn-sm btn-success" style="pointer-events: none;" type="button">
                                                    <i class="far fa-plus-square"></i> Agregar Cuestionario
                                                </button>
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            @php
                                $numcuestionarios = (($cuestionarios->count() + 1) *2);
                            @endphp
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        
                                        <tbody>
                                            <tr>
                                                <td><strong><h2>Cuestionario</h2></strong></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="center" colspan="2">
                                                        <u><h2> #{{ $cuestionario->numero_cuestionario }}</h2></u> 
                                                        @if(Auth::user()->tipo_usuario != "Administrador")
                                                            <a href="{{URL::action('IncontinenciauCuestionarioController@edit',$cuestionario->idincontinenciau_cuestionario)}}">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar cuestionario">
                                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> </button>
                                                                </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-cuestionario-{{$cuestionario->idincontinenciau_cuestionario}}" data-toggle="modal">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar cuestionario">
                                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i></button>
                                                                </span>
                                                            </a>
                                                            @include('pacientes.historiales.incontinencias.cuestionarios.modaleliminar')
                                                        @endif
                                                    </td>
                                                @endforeach
                                                
                                            </tr>
                                            <tr>
                                                <td><strong>Fecha</strong></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    @php
                                                        $fechacuestionario = date("d-m-Y", strtotime($cuestionario->fecha));
                                                    @endphp
                                                    <td align="center" colspan="2">{{ $fechacuestionario }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td colspan="{{ $numcuestionarios }}"><h2><strong><u>Preguntas / Respuestas</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>1. ¿Con que frecuencia pierde orina? Marque una sola respuesta</strong></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="left">
                                                    
                                                    
                                                        @if ($cuestionario->frecuencia == "0")
                                                            - Nunca
                                                        @endif
                                                        @if ($cuestionario->frecuencia == "1")
                                                            - Una vez a la semana
                                                        @endif
                                                        @if ($cuestionario->frecuencia == "2")
                                                            - 2-3 veces/semana
                                                        @endif
                                                        @if ($cuestionario->frecuencia == "3")
                                                            - Una vez al día
                                                        @endif
                                                        @if ($cuestionario->frecuencia == "4")
                                                            - Varias veces al día
                                                        @endif
                                                        @if ($cuestionario->frecuencia == "5")
                                                            - Continuamente
                                                        @endif
                                                    
                                                    </td>
                                                    <td align="center">
                                                        
                                                        {{ $cuestionario->frecuencia }} 
                                                    
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>2. Indique su opinión acera de la cantidad de orina que usted cree que se le escapa, es decir, la cantidad de orina que pierde habitualmente tanto si lleva protección como si no. Marque solo una respuesta.</strong></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="left">
                                                    
                                                    
                                                        @if ($cuestionario->cantidad == "0")
                                                            - No se escapa nada
                                                        @endif
                                                        @if ($cuestionario->cantidad == "2")
                                                            - Muy poca cantidad
                                                        @endif
                                                        @if ($cuestionario->cantidad == "4")
                                                            - Una cantidad moderada
                                                        @endif
                                                        @if ($cuestionario->cantidad == "6")
                                                            - Mucha cantidad
                                                        @endif

                                                    </td>
                                                    <td align="center">
                                                        
                                                        {{ $cuestionario->cantidad }} 
                                                    
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>3. ¿En qué medida estos escapes de orina, que tiene, han afectado a su vida diaria? (Nada=0...Mucho=10)</strong></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="right">
                                                        Medida:
                                                    </td>
                                                    <td align="center">
                                                        {{ $cuestionario->medida }}
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td colspan="{{ $numcuestionarios }}"><strong>4. ¿Cuánto pierde de orina? Señale todo lo que le pasa a Ud.</strong></td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="left">
                                                    
                                                        @if ($cuestionario->nunca == "1")
                                                            - Nunca<br>
                                                        @endif
                                                        @if ($cuestionario->antes_servicio == "2")
                                                            - Antes de llegar al servicio<br>
                                                        @endif
                                                        @if ($cuestionario->toser == "3")
                                                            - Al toser o al destornudar<br>
                                                        @endif
                                                        @if ($cuestionario->duerme == "4")
                                                            - Mientras duerme<br>
                                                        @endif
                                                        @if ($cuestionario->esfuerzos == "5")
                                                            - Al realizar esfuerzos físicos/ejercicio<br>
                                                        @endif
                                                        @if ($cuestionario->termina == "6")
                                                            - Cuanto termina de orinar y ya se ha vestido<br>
                                                        @endif
                                                        @if ($cuestionario->sinmotivo == "7")
                                                            - Sin motivo evidente<br>
                                                        @endif
                                                        @if ($cuestionario->continua == "8")
                                                            - De forma continua
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cuestionario->nunca == "1")
                                                            {{ $cuestionario->nunca }}<br>
                                                        @endif
                                                        @if ($cuestionario->antes_servicio == "2")
                                                           {{ $cuestionario->antes_servicio }}<br>
                                                        @endif
                                                        @if ($cuestionario->toser == "3")
                                                            {{ $cuestionario->toser }}<br>
                                                        @endif
                                                        @if ($cuestionario->duerme == "4")
                                                            {{ $cuestionario->duerme }}<br>
                                                        @endif
                                                        @if ($cuestionario->esfuerzos == "5")
                                                            {{ $cuestionario->esfuerzos }}<br>
                                                        @endif
                                                        @if ($cuestionario->termina == "6")
                                                           {{ $cuestionario->termina }}<br>
                                                        @endif
                                                        @if ($cuestionario->sinmotivo == "7")
                                                            {{ $cuestionario->sinmotivo }} <br>
                                                        @endif
                                                        @if ($cuestionario->continua == "8")
                                                           {{ $cuestionario->continua }}<br>
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td align="left"><h2><strong><u>Puntuación</u></strong></h2></td>
                                                @foreach ($cuestionarios as $cuestionario)
                                                    <td align="right"><strong>Total:</strong></td>
                                                    <td align="center"><strong>{{ $cuestionario->puntuacion }}</strong></td>
                                                @endforeach
                                            </tr>

                                        </tbody>
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