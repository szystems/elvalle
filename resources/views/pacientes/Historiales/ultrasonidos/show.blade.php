@extends ('layouts.admin')
@section('contenido')


    <div>
        <div class="card mb-4">
            <header class="card-header">
                <h2 class="h3 card-header-title"><strong>Historial Paciente: {{ $paciente->nombre }}</strong></h2>
            </header>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--Mensaje de abono correcto-->
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if (Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                    {{ session()->forget('alert-' . $msg) }}
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
                        <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea <span class="badge badge-info">{{ $totalClimaymenos }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria <span class="badge badge-info">{{ $totalIncontinencias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia <span class="badge badge-info">{{ $totalColposcopias }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Ultrasonido Obstetrico</u></b> <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                    </li>
                </ul>


                <div class="card">

                    <header class="card-header">
                        <h2 class="h3 card-header-title"><strong>Ultrasonido Obstetrico: </strong></h2>

                    </header>
                    {{ Form::open(['action' => 'ReportesController@vistaultrasonido', 'method' => 'POST', 'role' => 'form', 'target' => '_blank']) }}
                    {{ Form::token() }}
                    <div class="card mb-4">
                        <header class="card-header d-md-flex align-items-center">
                            <h4><strong>Imprimir Ultrasonido Obstetrico </strong></h4>
                            <input type="hidden" id="rid" class="form-control datepicker" name="rid" value="{{ $ultrasonido->idultrasonido_obstetrico }}">
                            <input type="hidden" class="form-control datepicker" name="ridpaciente" value="{{ $paciente->idpaciente }}">
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

                    {{ Form::close() }}
                    <div class="card-body">
                        @if (Auth::user()->tipo_usuario == "Doctor")
                            <a href="" data-target="#modal-eliminar-{{ $ultrasonido->idultrasonido_obstetrico }}"
                                data-toggle="modal">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                    title="Eliminar ultrasonido obstetrico">
                                    <button class="btn btn-sm btn-danger" style="pointer-events: none;" type="button">
                                        <i class="far fa-minus-square"></i> Eliminar
                                    </button>
                                </span>
                            </a>
                            @include('pacientes.historiales.ultrasonidos.modaleliminar')

                            <a
                                href="{{ URL::action('UltrasonidoObstetricoController@edit', $ultrasonido->idultrasonido_obstetrico) }}">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                    title="Editar ultrasonido obstetrico">
                                    <button class="btn btn-sm btn-info" style="pointer-events: none;" type="button">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </span>
                            </a>

                            <a
                                href="{{ URL::action('UltrasonidoObstetricoImgController@index', 'searchidultrasonido=' . $ultrasonido->idultrasonido_obstetrico) }}">
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Imagenes">
                                    <button class="btn btn-sm btn-warning" style="pointer-events: none;" type="button">
                                        <i class="far fa-images"></i> Imagenes
                                    </button>
                                </span>
                            </a>
                        @endif
                        <br><br>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                            <div class="form-group">
                                  
                                <h2><b><u>Historia</u></b></h2>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    <b><u>Antecedentes</u></b>
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                @if ($historia)
                                                    <div class="table-responsive">
                                                        <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                            
                                                            <tbody>
                                                                <tr>
                                                                    
                                                                    <td><strong>Gestas</strong></td>
                                                                    <td align="center">{{ $historia->gestas }}</td>
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
                                                                    <td><strong>Abortos</strong></td>
                                                                    <td align="center">{{ $historia->abortos }}</td>
                                                                </tr>
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
                                                                    <td><strong>FPP</strong></td>
                                                                    <td align="center">
                                                                        @if ($fur != '01-01-1970')
                                                                        {{ $fechaParto }}
                                                                        @endif
                                                                    </td>
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
                                        </div>
                                    </div>
                                </div>

                            </div>
                      </div>
                        <?php
                        $fecha = date('d-m-Y', strtotime($ultrasonido->fecha));
                        ?>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="datos"><strong><u>Reporte de Ultrasonido Obstetrico</u></strong></label>
                                <p>Realizado con ultrasonido Medison, ACUSON X300 con transductor convexo de 3 a 5 MHz.
                                    Transabdominal.</p>
                            </div>
                            <div class="form-group">
                                <?php
                                    $fecha = date("d-m-Y", strtotime($ultrasonido->fecha));
                                ?>
                                <label for="fecha"><strong>Fecha</strong></label>
                                <p>{{$fecha}}</p>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        <thead align="center">
                                            <th colspan="2"><b><u>Tamizaje obstétrico básico:</u></b></th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><strong>a) Situación, presentación, posición:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->spp }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>b) Frecuencia cardiaca fetal, ritmo, movimientos
                                                        fetales:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->fcardiaca_fetal }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>c) Placenta ubicación, características, relación
                                                        placenta-cérvix:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->pubicacion }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>d) Liquido amniótico:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->liquido_amniotico }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>e) Útero y anexos:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->utero_anexos }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>e) Cérvix:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->cervix }}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        <thead align="center">
                                            <th colspan="3"><b><u>Tamizaje de alteraciones del crecimiento:</u></b></th>
                                        </thead>
                                        <thead align="center">
                                            <th><b>PARAMETRO</b></th>
                                            <th><b>MEDIDA (CMS.)</b></th>
                                            <th><b>SEMANAS</b></th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><strong>DIAMETRO BIPARIETAL:</strong></td>
                                                <td align="center">
                                                    {{ $ultrasonido->diametro_biparietal_medida }}
                                                </td>
                                                <td align="center">
                                                    {{ $ultrasonido->diametro_biparietal_semanas }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>
                                            <tr>
                                                <td><strong>CIRCUNFERENCIA CEFALICA:</strong></td>
                                                <td align="center">
                                                    {{ $ultrasonido->circunferencia_cefalica_medida }}
                                                </td>
                                                <td align="center">
                                                    {{ $ultrasonido->circunferencia_cefalica_semanas }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>
                                            <tr>
                                                <td><strong>CIRCUNFERENCIA ABDOMINAL:</strong></td>
                                                <td align="center">
                                                    {{ $ultrasonido->circunferencia_abdominal_medida }}
                                                </td>
                                                <td align="center">
                                                    {{ $ultrasonido->circunferencia_abdominal_semanas }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>
                                            <tr>
                                                <td><strong>LONGITUD FEMORAL:</strong></td>
                                                <td align="center">
                                                    {{ $ultrasonido->longitud_femoral_medida }}
                                                </td>
                                                <td align="center">
                                                    {{ $ultrasonido->longitud_femoral_semanas }}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                        <thead align="center">
                                            <th colspan="2"><b><u>Resumen:</u></b></th>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><strong>Fetometría promedio hoy:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->fetometria }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Peso estimado:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->peso_estimado }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Percentilo:</strong></td>
                                                <td align="left">
                                                    {{ $ultrasonido->percentilo }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><strong>Comentarios:</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    {{ $ultrasonido->comentarios }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><strong>Interpretación:</strong></td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      1. Embarazo único intrauterino.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->embarazo_unico == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="embarazo_unico" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="embarazo_unico" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->embarazo_unico_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      2. Tamiz de alteraciones del crecimiento de bajo riesgo al momento del estudio.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->alteraciones_crecimiento == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="alteraciones_crecimiento" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="alteraciones_crecimiento" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->alteraciones_crecimiento_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      3. Tamiz de alteraciones de la frecuencia cardiaca fetal de bajo riesgo al momento del estudio.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->alteraciones_frecuencia == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="alteraciones_frecuencia" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="alteraciones_frecuencia" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->alteraciones_frecuencia_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      4. Tamiz de placenta de bajo riesgo al momento del estudio.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->placenta == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="placenta" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="placenta" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->placenta_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      5. Tamiz de liquido amniótico de bajo riesgo al momento del estudio.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->liquido == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="liquido" disabled checked>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="liquido" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->liquido_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td >
                                                      6. Tamiz de parto prematuro de bajo riesgo al momento del estudio.
                                                </td>
                                                <td>
                                                      @if ($ultrasonido->prematuro == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="prematuro" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="prematuro" disabled>
                                                            </div>
                                                      @endif
                                                      {{ $ultrasonido->prematuro_comentar }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><strong>Recomendaciones:</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    {{ $ultrasonido->recomendaciones }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td ><strong>Observaciones:</strong></td>
                                                <td>
                                                      @if ($ultrasonido->observaciones == 1)
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="observaciones" value="1" checked disabled>
                                                            </div>
                                                      @else
                                                            <div class="primary-checkbox">
                                                                  <input type="checkbox" name="observaciones" disabled>
                                                            </div>
                                                      @endif
                                                </td>
                                            </tr>
                                            @if ($ultrasonido->observaciones == 1)
                                            <tr>
                                                <td colspan="2">
                                                    <p>La realización de este ultrasonido esta basado en las guías practicas
                                                        y consensos de acog y el isuog, su capacidad de detección de
                                                        defectos estructurales es del 40.4%, con rango de 13.3 a 82.4%. El
                                                        resultado normal del ultrasonido no garantiza que el feto no nacerá
                                                        sin ninguna alteración, los tamizajes son pruebas exploratorias no
                                                        pruebas diagnósticas, en caso de un resultado con riesgo elevado la
                                                        recomendación es realizar una prueba confirmatoria.</p>

                                                </td>
                                            </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="datos"><strong><u>Imagenes de ultrasonido obstetrico({{ $ultrasonidoimgs->count() }})</u></strong></label>
                                @if (Auth::user()->tipo_usuario == "Doctor")
                                    <a href="{{ URL::action('UltrasonidoObstetricoImgController@index', 'searchidultrasonido=' . $ultrasonido->idultrasonido_obstetrico) }}">
                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip"
                                            title="Editar Imagenes">
                                            <button class="btn btn-sm btn-warning" style="pointer-events: none;"
                                                type="button">
                                                <i class="far fa-images"></i> Imagenes
                                            </button>
                                        </span>
                                    </a>
                                @endif
                                <div class="row">
                                    @if ($ultrasonidoimgs->count() != null)
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-condensed table-hover">
                                                <thead>
                                                    <th>
                                                        <h5><STRONG>Imagen</STRONG>
                                                    </th>
                                                    <th>
                                                        <h5><STRONG>Fecha</STRONG>
                                                    </th>
                                                    <th>
                                                        <h5><STRONG>Descripcion</STRONG>
                                                    </th>
                                                </thead>
                                                @foreach ($ultrasonidoimgs as $imagen)
                                                    <tr>
                                                        <td align="center">
                                                            @if ($imagen->imagen != null)
                                                                <div class="thumbnail">
                                                                    <a target="_blank"
                                                                        href="{{ asset('imagenes/ultrasonidos/' . $imagen->imagen) }}">
                                                                        <img src="{{ asset('imagenes/ultrasonidos/' . $imagen->imagen) }}"
                                                                            alt="Lights" height="250px">
                                                                    </a>
                                                                </div>
                                                            @else
                                                                "No hay imagen"
                                                            @endif
                                                        </td>
                                                        <?php
                                                        $fecha = date('d-m-Y', strtotime($imagen->fecha));
                                                        ?>
                                                        <td align="center">
                                                            <h5>{{ $fecha }}</h5>
                                                        </td>
                                                        <td align="center">
                                                            <h5>{{ $imagen->descripcion }}</h5>
                                                        </td>

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

                    <div class="card-footer">
                    </div>

                </div>

            </div>

            <footer class="card-footer">

            </footer>
        </div>
    </div>

@endsection
