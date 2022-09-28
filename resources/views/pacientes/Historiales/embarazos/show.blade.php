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
                          <a class="nav-link active" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Embarazos</u></b> <span class="badge badge-info">{{ $totalEmbarazos }}</span></a>
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
                        <h2 class="h3 card-header-title"><strong>Embarazo: </strong></h2>
                        @if(Auth::user()->tipo_usuario == "Doctor")
                            <a href="" data-target="#modal-eliminar-{{$embarazo->idembarazo}}" data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Embarazo">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                            <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.embarazos.modaleliminar')
                        @endif
                    </header> 
                        {{Form::open(array('action' => 'ReportesController@vistaembarazo','method' => 'POST','role' => 'form', 'target' => '_blank'))}}
                        {{Form::token()}}		
                            <div class="card mb-4">
                                <header class="card-header d-md-flex align-items-center">
                                    <h4><strong>Imprimir embarazo </strong></h4>
                                    <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{$embarazo->idembarazo}}">
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
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">

                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="{{URL::action('EmbarazoController@edit',$embarazo->idembarazo)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Embarazo">
                                                <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> Editar</button>
                                            </span>
                                        </a>
                                        @include('pacientes.historiales.embarazos.modaleliminar')
                                        <a href="{{URL::action('EmbarazoImgController@index','searchidembarazo='.$embarazo->idembarazo)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                                <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                                    <i class="far fa-images"></i> Imagenes
                                                </button>
                                            </span>
                                        </a>
                                    @endif

                                </div>
                            </div>
                            <?php
                                $fecha = date("d-m-Y", strtotime($embarazo->fecha));
                                $fur = date("d-m-Y", strtotime($embarazo->fur));
                                $fechaParto = date("d-m-Y", strtotime($embarazo->fur));
                                $fechaParto = date("d-m-Y", strtotime($fechaParto.'+ 280 days'));
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
                                    <p>{{$embarazo->Paciente}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>Doctor</strong></label>
                                    <p>{{$embarazo->Doctor}} ({{ $embarazo->especialidad }})</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>FUR</strong></label>
                                    <p>{{$fur}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>FPP</strong></label>
                                    @if ($fur != '01-01-1970')
                                    <p>{{$fechaParto}}</p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for=""><strong><u>Antecedentes Obstetricos</u></strong></label>
                                </div>
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
                            </div>
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><h2><strong><u>Controles</u></strong></h2></label>
                                    @if(Auth::user()->tipo_usuario == "Doctor")
                                        <a href="controles/create?idembarazo={{$embarazo->idembarazo}}">
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
                                                            <a href="{{URL::action('ControlController@edit',$control->idcontrol)}}">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Control">
                                                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button"><i class="far fa-edit"></i> </button>
                                                                </span>
                                                            </a>
                                                            <a href="" data-target="#modal-eliminar-control-{{$control->idcontrol}}" data-toggle="modal">
                                                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Eliminar Control">
                                                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button"><i class="far fa-minus-square"></i></button>
                                                                </span>
                                                            </a>
                                                            @include('pacientes.historiales.embarazos.controles.modaleliminar')
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
                                                <td><strong>Semanas</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->semanas }}</td>
                                                @endforeach
                                                
                                            </tr>
                                            <tr>
                                                <td><h2><strong><u>Sintomas</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Sueño</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->sueno }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Apetito</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->apetito }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Estreñimiento</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->estrenimiento }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Disuria</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->disuria }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Nauseas/Vomitos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->nauseas_vomitos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Flujo Vaginal</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->flujo_vaginal }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Dolor</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->dolor }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Otros</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->otros }}</td>
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
                                                <td><strong>Frecuencia cardiaca Materna</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->frecuencia_cardiaca_materna }} /min</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Altura Uterina</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->altura_uterina }} Cms</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Frecuencia Cardiaca Fetal</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->frecuencia_cardiaca_fetal }} /min</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Presentacion Fetal</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->presentacion_fetal }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Movimientos Fetales</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->movimientos_fetales }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Edema en MI</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->edema_mi }}</td>
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
                                                <td><h2><strong><u>Tratamiento</u></strong></h2></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Medicamentos</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->medicamentos }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Especiales</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->especiales }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Proxima Cita</strong></td>
                                                @foreach ($controles as $control)
                                                    @php
                                                        $proximaCita = date("d-m-Y", strtotime($control->proxima_cita));
                                                    @endphp
                                                    <td align="left">{{ $proximaCita }}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td><strong>Nota Adicional</strong></td>
                                                @foreach ($controles as $control)
                                                    <td align="left">{{ $control->nota }}</td>
                                                @endforeach
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong><u>Seguimiento</u></strong></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>1er. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30" rows="3">{{ $embarazo->trimestre1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>2do. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30"  rows="3">{{ $embarazo->trimestre2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                    <label for="doctor"><strong>3er. Trimestre</strong></label>
                                    <textarea readonly name="" id="" class="form-control" cols="30" rows="3">{{ $embarazo->trimestre3 }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <div class="form-group">
                                      <label for="datos"><strong><u>Imagenes de embarazo({{ $embarazoimgs->count() }})</u></strong></label>
                                      @if(Auth::user()->tipo_usuario == "Doctor")
                                      <a href="{{URL::action('EmbarazoImgController@index','searchidembarazo='.$embarazo->idembarazo)}}">
                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                                <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                                    <i class="far fa-images"></i> Imagenes
                                                </button>
                                            </span>
                                      </a>
                                      @endif
                                      <div class="row">
                                            @if ($embarazoimgs->count() != null)
                                                  <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-condensed table-hover">
                                                            <thead>
                                                                    <th><h5><STRONG>Imagen</STRONG></th>
                                                                    <th><h5><STRONG>Fecha</STRONG></th>
                                                                    <th><h5><STRONG>Descripcion</STRONG></th>
                                                            </thead>
                                                            @foreach ($embarazoimgs as $imagen)
                                                                <tr>
                                                                    <td align="center">
                                                                          @if ($imagen->imagen != null)
                                                                            <div class="thumbnail">
                                                                                  <a target="_blank" href="{{asset('imagenes/embarazos/'.$imagen->imagen)}}" >
                                                                                        <img src="{{asset('imagenes/embarazos/'.$imagen->imagen)}}" alt="Lights" height="250px">
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