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
                              <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::action('HistorialController@show', $paciente->idpaciente) }}">Perfil</a>
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
                                    <a class="nav-link active" aria-current="page" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Climaterio / Menopausea</u></b></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('IncontinenciauController@index','searchidpaciente='.$paciente->idpaciente)}}">Incontinencia Urinaria</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('ColposcopiaController@index','searchidpaciente='.$paciente->idpaciente)}}">Colposcopia</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}">Ultrasonido Obstetrico</a>
                              </li>
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Nuevo Control: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/climaymenos/controles', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                    
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
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Datos de nuevo control de climaterio y menopausea:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>

                                                                              <tr>
                                                                                    <td><strong>Fecha</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="">
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
                                                                                                @if (old('bochornos'))
                                                                                                      <option value="{{ old('bochornos') }}" selected>{{ old('bochornos') }}</option>
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
                                                                                                @if (old('bochornos_escala'))
                                                                                                      <option value="{{ old('bochornos_escala') }}" selected>{{ old('bochornos_escala') }}</option>
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
                                                                                                @if (old('depresion'))
                                                                                                      <option value="{{ old('depresion') }}" selected>{{ old('depresion') }}</option>
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
                                                                                                @if (old('depresion_escala'))
                                                                                                      <option value="{{ old('depresion_escala') }}" selected>{{ old('depresion_escala') }}</option>
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
                                                                                                @if (old('irritabilidad'))
                                                                                                      <option value="{{ old('irritabilidad') }}" selected>{{ old('irritabilidad') }}</option>
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
                                                                                                @if (old('irritabilidad_escala'))
                                                                                                      <option value="{{ old('irritabilidad_escala') }}" selected>{{ old('irritabilidad_escala') }}</option>
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
                                                                                                @if (old('perdida_libido'))
                                                                                                      <option value="{{ old('perdida_libido') }}" selected>{{ old('perdida_libido') }}</option>
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
                                                                                                @if (old('perdida_libido_escala'))
                                                                                                      <option value="{{ old('perdida_libido_escala') }}" selected>{{ old('perdida_libido_escala') }}</option>
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
                                                                                                @if (old('sequedad_vaginal'))
                                                                                                      <option value="{{ old('sequedad_vaginal') }}" selected>{{ old('sequedad_vaginal') }}</option>
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
                                                                                                @if (old('sequedad_vaginal_escala'))
                                                                                                      <option value="{{ old('sequedad_vaginal_escala') }}" selected>{{ old('sequedad_vaginal_escala') }}</option>
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
                                                                                                @if (old('insomnio'))
                                                                                                      <option value="{{ old('insomnio') }}" selected>{{ old('insomnio') }}</option>
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
                                                                                                @if (old('insomnio_escala'))
                                                                                                      <option value="{{ old('insomnio_escala') }}" selected>{{ old('insomnio_escala') }}</option>
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
                                                                                                @if (old('cefalea'))
                                                                                                      <option value="{{ old('cefalea') }}" selected>{{ old('cefalea') }}</option>
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
                                                                                                @if (old('cefalea_escala'))
                                                                                                      <option value="{{ old('cefalea_escala') }}" selected>{{ old('cefalea_escala') }}</option>
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
                                                                                                @if (old('fatiga'))
                                                                                                      <option value="{{ old('fatiga') }}" selected>{{ old('fatiga') }}</option>
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
                                                                                                @if (old('fatiga_escala'))
                                                                                                      <option value="{{ old('fatiga_escala') }}" selected>{{ old('fatiga_escala') }}</option>
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
                                                                                                @if (old('artralgias_mialgias'))
                                                                                                      <option value="{{ old('artralgias_mialgias') }}" selected>{{ old('artralgias_mialgias') }}</option>
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
                                                                                                @if (old('artralgias_mialgias_escala'))
                                                                                                      <option value="{{ old('artralgias_mialgias_escala') }}" selected>{{ old('artralgias_mialgias_escala') }}</option>
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
                                                                                                @if (old('trastornos_miccionales'))
                                                                                                      <option value="{{ old('trastornos_miccionales') }}" selected>{{ old('trastornos_miccionales') }}</option>
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
                                                                                                @if (old('trastornos_miccionales_escala'))
                                                                                                      <option value="{{ old('trastornos_miccionales_escala') }}" selected>{{ old('trastornos_miccionales_escala') }}</option>
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
                                                                                                @if (old('otros'))
                                                                                                      <option value="{{ old('otros') }}" selected>{{ old('otros') }}</option>
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
                                                                                          <textarea class="form-control" name="otros_si" cols="30" rows="2">{{ old('otros_si') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Examen Fisico</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Peso</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="peso" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('peso') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="talla" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('talla') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
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
                                                                                                <input type="text" name="presion_arterial" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('presion_arterial') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="temperatura" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('temperatura') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                                <input type="text" name="frecuencia_cardiaca" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ old('frecuencia_cardiaca') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cara</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="cara" cols="30" rows="2">{{ old('cara') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Mamas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="mamas" cols="30" rows="2">{{ old('mamas') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Torax</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="torax" cols="30" rows="2">{{ old('torax') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Abdomen</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="abdomen" cols="30" rows="2">{{ old('abdomen') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Vulva</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="vulva" cols="30" rows="2">{{ old('vulva') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Útero y Anexos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="utero_anexos" cols="30" rows="2">{{ old('utero_anexos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Varices</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="varices" cols="30" rows="2">{{ old('varices') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Flujo vaginal (ph)</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="flujo_vaginal_ph" cols="30" rows="2">{{ old('flujo_vaginal_ph') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hallazgos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="hallazgos" cols="30" rows="5">{{ old('hallazgos') }}</textarea>
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
                                                                                                <input type="text" id="datepicker2" class="form-control datepicker" name="fecha_laboratorios" value="">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hemograma</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="hemograma" cols="30" rows="2">{{ old('hemograma') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Examen orina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="examen_orina" cols="30" rows="2">{{ old('examen_orina') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Glicemia y curva glicemica</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="glicemia_curva_glicemica" cols="30" rows="2">{{ old('glicemia_curva_glicemica') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Insulina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="insulina" cols="30" rows="2">{{ old('insulina') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Panel de lipidos (Colesterol, trigliceridos)</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="panel_lipidos" cols="30" rows="2">{{ old('panel_lipidos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Transaminasas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="transaminasas" cols="30" rows="2">{{ old('transaminasas') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Citología cervicovaginal</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="citologia_cervicovaginal" cols="30" rows="2">{{ old('citologia_cervicovaginal') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Mamografía</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="mamografia" cols="30" rows="2">{{ old('mamografia') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>FSH</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="fsh" cols="30" rows="2">{{ old('fsh') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>LH</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="lh" cols="30" rows="2">{{ old('lh') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Pruebas tiroideas</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="pruebas_tiroideas" cols="30" rows="2">{{ old('pruebas_tiroideas') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Prolactina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="prolactina" cols="30" rows="2">{{ old('prolactina') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Densitometria osea</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="densitometria_osea" cols="30" rows="2">{{ old('densitometria_osea') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Ultrasonografía pélvica</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="ultrasonografia_pelvica" cols="30" rows="2">{{ old('ultrasonografia_pelvica') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Escala homa</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="escala_homa" cols="30" rows="2">{{ old('escala_homa') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="otros_laboratorio" cols="30" rows="2">{{ old('otros_laboratorio') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Tratamientos</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>ACO's</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="acos" cols="30" rows="2">{{ old('acos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para infecciones locales </strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_infecciones" cols="30" rows="2">{{ old('tratamiento_infecciones') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>TRH TIPO Y DOSIS</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="trh_tipo_dosis" cols="30" rows="2">{{ old('trh_tipo_dosis') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para Osteoporosis</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_osteoporosis" cols="30" rows="2">{{ old('tratamiento_osteoporosis') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Calcio</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="calcio" cols="30" rows="2">{{ old('calcio') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Vitamina D</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="vitamina_d" cols="30" rows="2">{{ old('vitamina_d') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Aspirina</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="aspirina" cols="30" rows="2">{{ old('aspirina') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para HTA</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_hta" cols="30" rows="2">{{ old('tratamiento_hta') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Tratamiento para Diabetes</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="tratamiento_diabetes" cols="30" rows="2">{{ old('tratamiento_diabetes') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Jabones íntimos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="jabones_intimos" cols="30" rows="2">{{ old('jabones_intimos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nota Adicionales</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nota_adicionales" cols="30" rows="2">{{ old('nota_adicionales') }}</textarea>
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
            $( '#datepicker2' ).datepicker( optSimple );
    
            $( '#datepicker' ).datepicker( 'setDate', today );
            $( '#datepicker2' ).datepicker( 'setDate', today );
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
