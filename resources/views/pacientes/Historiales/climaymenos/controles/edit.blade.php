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
                                    <h2 class="h3 card-header-title"><strong>Editar Control: </strong></h2>
                              </header>

                              <div class="card-body">
                                    <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
                                    </div>-->
                                    {!!Form::model($control,['method'=>'PATCH','route'=>['controles.update',$control->idclimaymeno_control]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idclimaymeno" value="{{ $climaymeno->idclimaymeno }}">
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
                                                            <label for="doctor"><h2><u><strong>Editar datos de control de climaterio y menopausea:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              @php
                                                                                    $fechaControl = date("d-m-Y", strtotime($control->fecha));
                                                                                    $fechaLaboratorio = date("d-m-Y", strtotime($control->fecha_laboratorios));
                                                                              @endphp
                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="{{ $fechaControl }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Sintomas</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Bochornos</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="bochornos" class="form-control">
                                                                                                @if ($control->bochornos)
                                                                                                      <option value="{{ $control->bochornos }}" selected>{{ $control->bochornos }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Bochornos escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="bochornos_escala" class="form-control">
                                                                                                @if ($control->bochornos_escala)
                                                                                                      <option value="{{ $control->bochornos_escala }}" selected>{{ $control->bochornos_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Depresion</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="depresion" class="form-control">
                                                                                                @if ($control->depresion)
                                                                                                      <option value="{{ $control->depresion }}" selected>{{ $control->depresion }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Depresion escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="depresion_escala" class="form-control">
                                                                                                @if ($control->depresion_escala)
                                                                                                      <option value="{{ $control->depresion_escala }}" selected>{{ $control->depresion_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Irritabilidad</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="irritabilidad" class="form-control">
                                                                                                @if ($control->irritabilidad)
                                                                                                      <option value="{{ $control->irritabilidad }}" selected>{{ $control->irritabilidad }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Irritabilidad escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="irritabilidad_escala" class="form-control">
                                                                                                @if ($control->irritabilidad_escala)
                                                                                                      <option value="{{ $control->irritabilidad_escala }}" selected>{{ $control->irritabilidad_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Perdida de libido</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="perdida_libido" class="form-control">
                                                                                                @if ($control->perdida_libido)
                                                                                                      <option value="{{ $control->perdida_libido }}" selected>{{ $control->perdida_libido }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Irritabilidad escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="perdida_libido_escala" class="form-control">
                                                                                                @if ($control->perdida_libido_escala)
                                                                                                      <option value="{{ $control->perdida_libido_escala }}" selected>{{ $control->perdida_libido_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Sequedad vaginal</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="sequedad_vaginal" class="form-control">
                                                                                                @if ($control->sequedad_vaginal)
                                                                                                      <option value="{{ $control->sequedad_vaginal }}" selected>{{ $control->sequedad_vaginal }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Sequedad vaginal escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="sequedad_vaginal_escala" class="form-control">
                                                                                                @if ($control->sequedad_vaginal_escala)
                                                                                                      <option value="{{ $control->sequedad_vaginal_escala }}" selected>{{ $control->sequedad_vaginal_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Insomnio</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="insomnio" class="form-control">
                                                                                                @if ($control->insomnio)
                                                                                                      <option value="{{ $control->insomnio }}" selected>{{ $control->insomnio }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Insomnio escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="insomnio_escala" class="form-control">
                                                                                                @if ($control->insomnio_escala)
                                                                                                      <option value="{{ $control->insomnio_escala }}" selected>{{ $control->insomnio_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cefalea</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cefalea" class="form-control">
                                                                                                @if ($control->cefalea)
                                                                                                      <option value="{{ $control->cefalea }}" selected>{{ $control->cefalea }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cefalea escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cefalea_escala" class="form-control">
                                                                                                @if ($control->cefalea_escala)
                                                                                                      <option value="{{ $control->cefalea_escala }}" selected>{{ $control->cefalea_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Fatiga</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="fatiga" class="form-control">
                                                                                                @if ($control->fatiga)
                                                                                                      <option value="{{ $control->fatiga }}" selected>{{ $control->fatiga }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Fatiga escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="fatiga_escala" class="form-control">
                                                                                                @if ($control->fatiga_escala)
                                                                                                      <option value="{{ $control->fatiga_escala }}" selected>{{ $control->fatiga_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Artralgias mialgias</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="artralgias_mialgias" class="form-control">
                                                                                                @if ($control->artralgias_mialgias)
                                                                                                      <option value="{{ $control->artralgias_mialgias }}" selected>{{ $control->artralgias_mialgias }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Artralgias mialgias escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="artralgias_mialgias_escala" class="form-control">
                                                                                                @if ($control->artralgias_mialgias_escala)
                                                                                                      <option value="{{ $control->artralgias_mialgias_escala }}" selected>{{ $control->artralgias_mialgias_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Trastornos miccionales</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="trastornos_miccionales" class="form-control">
                                                                                                @if ($control->trastornos_miccionales)
                                                                                                      <option value="{{ $control->trastornos_miccionales }}" selected>{{ $control->trastornos_miccionales }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Trastornos miccionales escala</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="trastornos_miccionales_escala" class="form-control">
                                                                                                @if ($control->trastornos_miccionales_escala)
                                                                                                      <option value="{{ $control->trastornos_miccionales_escala }}" selected>{{ $control->trastornos_miccionales_escala }}</option>
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value=""></option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="otros" class="form-control">
                                                                                                @if ($control->otros)
                                                                                                      <option value="{{ $control->otros }}" selected>{{ $control->otros }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros si</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="otros_si" cols="30" rows="2">{{ $control->otros_si }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Examen Fisico</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Peso</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="peso" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->peso }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">Lbs.</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Talla</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="talla" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->talla }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">Cms.</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Presion Arterial</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="presion_arterial" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->presion_arterial }}" placeholder="0"  required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">mm/</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Temperatura</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->temperatura }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">°C</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Frecuencia Cardiaca</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="frecuencia_cardiaca" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->frecuencia_cardiaca }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cara</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="cara" cols="30" rows="2">{{ $control->cara }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Mamas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="mamas" cols="30" rows="2">{{ $control->mamas }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Torax</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="torax" cols="30" rows="2">{{ $control->torax }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Abdomen</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="abdomen" cols="30" rows="2">{{ $control->abdomen }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Vulva</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="vulva" cols="30" rows="2">{{ $control->vulva }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Útero y Anexos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="utero_anexos" cols="30" rows="2">{{ $control->utero_anexos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Varices</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="varices" cols="30" rows="2">{{ $control->varices }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Flujo vaginal (ph)</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="flujo_vaginal_ph" cols="30" rows="2">{{ $control->flujo_vaginal_ph }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hallazgos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="hallazgos" cols="30" rows="5">{{ $control->hallazgos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Examenes de laboratorio</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="datepicker2" class="form-control datepicker" name="fecha_laboratorios" value="{{ $fechaLaboratorio }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hemograma</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="hemograma" cols="30" rows="2">{{ $control->hemograma }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Examen orina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="examen_orina" cols="30" rows="2">{{ $control->examen_orina }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Glicemia y curva glicemica</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="glicemia_curva_glicemica" cols="30" rows="2">{{ $control->glicemia_curva_glicemica }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Insulina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="insulina" cols="30" rows="2">{{ $control->insulina }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Panel de lipidos (Colesterol, trigliceridos)</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="panel_lipidos" cols="30" rows="2">{{ $control->panel_lipidos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Transaminasas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="transaminasas" cols="30" rows="2">{{ $control->transaminasas }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Citología cervicovaginal</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="citologia_cervicovaginal" cols="30" rows="2">{{ $control->citologia_cervicovaginal }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Mamografía</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="mamografia" cols="30" rows="2">{{ $control->mamografia }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>FSH</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="fsh" cols="30" rows="2">{{ $control->fsh }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>LH</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="lh" cols="30" rows="2">{{ $control->lh }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Pruebas tiroideas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="pruebas_tiroideas" cols="30" rows="2">{{ $control->pruebas_tiroideas }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Prolactina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="prolactina" cols="30" rows="2">{{ $control->prolactina }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Densitometria osea</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="densitometria_osea" cols="30" rows="2">{{ $control->densitometria_osea }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Ultrasonografía pélvica</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="ultrasonografia_pelvica" cols="30" rows="2">{{ $control->ultrasonografia_pelvica }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Escala homa</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="escala_homa" cols="30" rows="2">{{ $control->escala_homa }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="otros_laboratorio" cols="30" rows="2">{{ $control->otros_laboratorio }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Tratamientos</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>ACO's</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="acos" cols="30" rows="2">{{ $control->acos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para infecciones locales </strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_infecciones" cols="30" rows="2">{{ $control->tratamiento_infecciones }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>TRH TIPO Y DOSIS</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="trh_tipo_dosis" cols="30" rows="2">{{ $control->trh_tipo_dosis }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para Osteoporosis</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_osteoporosis" cols="30" rows="2">{{ $control->tratamiento_osteoporosis }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Calcio</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="calcio" cols="30" rows="2">{{ $control->calcio }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Vitamina D</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="vitamina_d" cols="30" rows="2">{{ $control->vitamina_d }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Aspirina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="aspirina" cols="30" rows="2">{{ $control->aspirina }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para HTA</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_hta" cols="30" rows="2">{{ $control->tratamiento_hta }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para Diabetes</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_diabetes" cols="30" rows="2">{{ $control->tratamiento_diabetes }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Jabones íntimos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="jabones_intimos" cols="30" rows="2">{{ $control->jabones_intimos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nota Adicionales</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nota_adicionales" cols="30" rows="2">{{ $control->nota_adicionales }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    <!--cierre formulario abajo de boton guardar-->
                                    
                              </div>

                              <div class="card-footer">
                                    <div class="form-group" id="guardar">
                                          <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                                          <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                                          <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                                    </div>
                                    {!! Form::close() !!}
                              </div>

                        </div>

                  </div>

                  <footer class="card-footer">
                        
                  </footer>
            </div>
      </div>

      <script>
            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    
            var optSimple = {
                format: "dd-mm-yyyy",
                language: "es",
                autoclose: true,
                todayHighlight: true,
                todayBtn: "linked",
            };
            $( '#datepicker' ).datepicker( optSimple );
            $( '#proxima_cita' ).datepicker( optSimple );
    
      </script>

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

            function validarentero(e,txt) 
            {
                  tecla = (document.all) ? e.keyCode : e.which;

                  //Tecla de retroceso para borrar, siempre la permite
                  if (tecla==8)
                  {
                  return true;
                  }
            
                  // Patron de entrada, en este caso solo acepta numeros
                  patron =/[0-9]/;
                  tecla_final = String.fromCharCode(tecla);
                  return patron.test(tecla_final); 
            } 
        
      </script>
      
      @endpush
@endsection
