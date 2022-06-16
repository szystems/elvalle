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
                                    <a class="nav-link" aria-current="page"
                                    href="{{ URL::action('HistorialController@show', $paciente->idpaciente) }}">Perfil</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('RecetaController@index','searchidpaciente='.$paciente->idpaciente)}}">Recetas</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Historia</u></b></a>
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
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Crear Historia: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/historias', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                          <div class="row">
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label><b><u>Informacion General</u></b></label>
                                                            <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label><strong>Fecha</strong></label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input type="text" id="datepicker" class="form-control datepicker" name="fecha"
                                                                  value="{{ old('fecha') }}">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="estado_civil"><strong>Estado Civil</strong></label>
                                                            <select name="estado_civil" class="form-control">
                                                                  <option selected value="" >Seleccione una opcion</option>
                                                                  <option value="Soltera" >Soltera</option>
                                                                  <option value="Casada" >Casada</option>
                                                                  <option value="Unida" >Unida</option>
                                                                  <option value="Separada" >Separada</option>
                                                                  <option value="Viuda" >Viuda</option>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="procedencia"><strong>Procedencia</strong></label>
                                                            <input type="text" class="form-control" name="procedencia" value="{{ old('procedencia') }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="escolaridad"><strong>Escolaridad</strong></label>
                                                            <input type="text" class="form-control" name="escolaridad" value="{{ old('escolaridad') }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="tel_emergencia"><strong>Telefono de Emergencia</strong></label>
                                                            <input type="text" class="form-control" name="tel_emergencia" value="{{ old('tel_emergencia') }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-45 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="profesion"><strong>Ocupación</strong></label>
                                                            <input type="text" class="form-control" name="profesion" value="{{ old('profesion') }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="motivo"><strong>Motivo</strong></label>
                                                            <textarea name="motivo" class="form-control" cols="30" rows="3">{{ old('motivo') }}</textarea>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="historia"><strong>Historia de la enfermedad actual</strong></label>
                                                            <textarea name="historia" class="form-control" cols="30" rows="5">{{ old('historia') }}</textarea>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label><b><u>Antecedentes Personales</u></b></label>
                                                      </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    
                                                                                    <td><strong>Ciclos Regulares</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="ciclos_regulares" class="form-control">
                                                                                                @if (old('ciclos_regulares'))
                                                                                                      <option value="{{ old('ciclos_regulares') }}" selected>{{ old('ciclos_regulares') }}</option>
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
                                                                                    <td><strong>Histerectomia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="histerectomia" class="form-control">
                                                                                                @if (old('histerectomia'))
                                                                                                      <option value="{{ old('histerectomia') }}" selected>{{ old('histerectomia') }}</option>
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
                                                                                    <td><strong>Mastopatia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="mastopatia" class="form-control">
                                                                                                @if (old('mastopatia'))
                                                                                                      <option value="{{ old('mastopatia') }}" selected>{{ old('mastopatia') }}</option>
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
                                                                                    <td><strong>Cardiopatias</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cardiopatias" class="form-control">
                                                                                                @if (old('cardipatias'))
                                                                                                      <option value="{{ old('cardiopatias') }}" selected>{{ old('cardiopatias') }}</option>
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
                                                                                    <td><strong>Cafelea Vascular</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cafelea_vascular" class="form-control">
                                                                                                @if (old('cafelea_vascular'))
                                                                                                      <option value="{{ old('cafelea_vascular') }}" selected>{{ old('cafelea_vascular') }}</option>
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
                                                                                    <td><strong>Tabaquismo</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="tabaquismo" class="form-control">
                                                                                                @if (old('tabaquismo'))
                                                                                                      <option value="{{ old('tabaquismo') }}" selected>{{ old('tabaquismo') }}</option>
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
                                                                                    <td><strong>Tratamento con quimioterapia o radiacion pelvica</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="tratamiento_quimioradiacion" class="form-control">
                                                                                                @if (old('tratamiento_quimioradiacion'))
                                                                                                      <option value="{{ old('tratamiento_quimioradiacion') }}" selected>{{ old('tratamiento_quimioradiacion') }}</option>
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
                                                                                    <td><strong>Ejercicio</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="ejercicio" class="form-control">
                                                                                                @if (old('ejercicio'))
                                                                                                      <option value="{{ old('ejercicio') }}" selected>{{ old('ejercicio') }}</option>
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
                                                                                    <td><strong>Observaciones:</strong></td>
                                                                                    <td>
                                                                                          <div class="form-group{{ $errors->has('observaciones') ? ' has-error' : '' }}">
                                                                                                <textarea class="form-control" name="observaciones">{{ old('observaciones') }}</textarea>
                                                                                                @if ($errors->has('observaciones'))
                                                                                                    <span class="help-block">
                                                                                                        <strong><font color="red">{{ $errors->first('observaciones') }}</font></strong>
                                                                                                    </span>
                                                                                                @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    
                                                                                    <td><strong>Afecciones Ginecologicas</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="affecciones_ginecologicas" class="form-control">
                                                                                                @if (old('affecciones_ginecologicas'))
                                                                                                      <option value="{{ old('affecciones_ginecologicas') }}" selected>{{ old('affecciones_ginecologicas') }}</option>
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
                                                                                    <td><strong>Cancer</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer" class="form-control">
                                                                                                @if (old('cancer'))
                                                                                                      <option value="{{ old('cancer') }}" selected>{{ old('cancer') }}</option>
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
                                                                                    <td><strong>Varices / Trombosis</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="varices_trombosis" class="form-control">
                                                                                                @if (old('varices_trombosis'))
                                                                                                      <option value="{{ old('varices_trombosis') }}" selected>{{ old('varices_trombosis') }}</option>
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
                                                                                    <td><strong>Enfermedades Hepaticas</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="enfermedades_hepaticas" class="form-control">
                                                                                                @if (old('enfermedades_hepaticas'))
                                                                                                      <option value="{{ old('enfermedades_hepaticas') }}" selected>{{ old('enfermedades_hepaticas') }}</option>
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
                                                                                    <td><strong>Alcoholismo</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="alcoholismo" class="form-control">
                                                                                                @if (old('alcoholismo'))
                                                                                                      <option value="{{ old('alcoholismo') }}" selected>{{ old('alcoholismo') }}</option>
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
                                                                                    <td><strong>Cafeista (Mayor de 6 tazas) </strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cafeista" class="form-control">
                                                                                                @if (old('cafeista'))
                                                                                                      <option value="{{ old('cafeista') }}" selected>{{ old('cafeista') }}</option>
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
                                                                                    <td><strong>TRH previa </strong></td>
                                                                                    <td align="left">
                                                                                          <select name="trh" class="form-control">
                                                                                                @if (old('trh'))
                                                                                                      <option value="{{ old('trh') }}" selected>{{ old('trh') }}</option>
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
                                                                                          <textarea name="otros_texto" id="" class="form-control" placeholder="Si otros..."></textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label><b><u>Antecedentes Familiares</u></b></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
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
                                                                                    <td align="left">
                                                                                          <select name="cardiopatias_50anos" class="form-control">
                                                                                                @if (old('cardiopatias_50anos'))
                                                                                                      <option value="{{ old('cardiopatias_50anos') }}" selected>{{ old('cardiopatias_50anos') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cardiopatias_50anos_quien" class="form-control" value="{{ old('cardiopatias_50anos_quien') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                              <tr>
                                                                                    <td><strong>Osteoporosis</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="osteoporosis" class="form-control">
                                                                                                @if (old('osteoporosis'))
                                                                                                      <option value="{{ old('osteoporosis') }}" selected>{{ old('osteoporosis') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="osteoporosis_quien" class="form-control" value="{{ old('osteoporosis_quien') }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Mama</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_mama" class="form-control">
                                                                                                @if (old('cancer_mama'))
                                                                                                      <option value="{{ old('cancer_mama') }}" selected>{{ old('cancer_mama') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_mama_quien" class="form-control" value="{{ old('cancer_mama_quien') }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Ovario</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_ovario" class="form-control">
                                                                                                @if (old('cancer_ovario'))
                                                                                                      <option value="{{ old('cancer_ovario') }}" selected>{{ old('cancer_ovario') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_ovario_quien" class="form-control" value="{{ old('cancer_ovario_quien') }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Diabetes</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="diabetes" class="form-control">
                                                                                                @if (old('diabetes'))
                                                                                                      <option value="{{ old('diabetes') }}" selected>{{ old('diabetes') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="diabetes_quien" class="form-control" value="{{ old('diabetes_quien') }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hiperlipidemias</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="hiperlipidemias" class="form-control">
                                                                                                @if (old('hiperlipidemias'))
                                                                                                      <option value="{{ old('hiperlipidemias') }}" selected>{{ old('hiperlipidemias') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="hiperlipidemias_quien" class="form-control" value="{{ old('hiperlipidemias_quien') }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Endometrial</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_endometrial" class="form-control">
                                                                                                @if (old('cancer_endometrial'))
                                                                                                      <option value="{{ old('cancer_endometrial') }}" selected>{{ old('cancer_endometrial') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_endometrial_quien" class="form-control" value="{{ old('cancer_endometrial_quien') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Otros:</strong></td>
                                                                                    <td>
                                                                                          <div class="form-group{{ $errors->has('familiares_otros') ? ' has-error' : '' }}">
                                                                                                <textarea class="form-control" name="familiares_otros">{{ old('familiares_otros') }}</textarea>
                                                                                                @if ($errors->has('familiares_otros'))
                                                                                                    <span class="help-block">
                                                                                                        <strong><font color="red">{{ $errors->first('familiares_otros') }}</font></strong>
                                                                                                    </span>
                                                                                                @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="form-group">
                                                                  <label><b><u>Antecedentes Obstetricos</u></b></label>
                                                            </div>
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    <td><strong>Gestas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('gestas') ? ' has-error' : '' }}">
                                                                                                    <input id="gestas" type="number" class="form-control" name="gestas" value="{{ old('gestas') }}">
                                                                    
                                                                                                    @if ($errors->has('gestas'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('gestas') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                                    
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Vias de resolucion</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="vias_resolucion">{{ old('vias_resolucion') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Hijos Vivos</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('hijos_vivos') ? ' has-error' : '' }}">
                                                                                                    <input id="hijos_vivos" type="number" class="form-control" name="hijos_vivos" value="{{ old('hijos_vivos') }}">
                                                                    
                                                                                                    @if ($errors->has('hijos_vivos'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('hijos_vivos') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Hijos Muertos</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('hijos_muertos') ? ' has-error' : '' }}">
                                                                                                    <input id="hijos_muertos" type="number" class="form-control" name="hijos_muertos" value="{{ old('hijos_muertos') }}">
                                                                    
                                                                                                    @if ($errors->has('hijos_muertos'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('hijos_muertos') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Complicaciones Neonatales</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="complicaciones_neonatales">{{ old('complicaciones_neonatales') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Complicaciones Obstetricos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="complicaciones_obstetricos">{{ old('complicaciones_obstetricos') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Abortos</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('abortos') ? ' has-error' : '' }}">
                                                                                                    <input id="abortos" type="number" class="form-control" name="abortos" value="{{ old('abortos') }}">
                                                                    
                                                                                                    @if ($errors->has('abortos'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('abortos') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Causa</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="causa">{{ old('causa') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="form-group">
                                                                  <label><b><u>Antecedentes Ginecologicos</u></b></label>
                                                            </div>
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    <td><strong>FUR</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="fur" class="form-control datepicker" name="fur" value="{{ old('fur') }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Ciclos</strong></td>
                                                                                    <td align="left">
                                                                                          Cada:
                                                                                          <div class="form-group{{ $errors->has('ciclos_cada') ? ' has-error' : '' }}">
                                                                                                <input id="ciclos_cada" type="number" class="form-control" name="ciclos_cada" value="{{ old('ciclos_cada') }}">
                                                                                                @if ($errors->has('ciclos_cada'))
                                                                                                    <span class="help-block">
                                                                                                        <strong><font color="red">{{ $errors->first('ciclos_cada') }}</font></strong>
                                                                                                    </span>
                                                                                                @endif
                                                                                          </div>
                                                                                          Por:
                                                                                          <div class="form-group{{ $errors->has('ciclos_por') ? ' has-error' : '' }}">
                                                                                                <input id="ciclos_por" type="number" class="form-control" name="ciclos_por" value="{{ old('ciclos_por') }}">
                                                                                                @if ($errors->has('ciclos_por'))
                                                                                                    <span class="help-block">
                                                                                                        <strong><font color="red">{{ $errors->first('ciclos_por') }}</font></strong>
                                                                                                    </span>
                                                                                                @endif
                                                                                          </div>
                                                                                          Dismenorrea:
                                                                                          
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Cantidad de Hemorragia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cantidad_hemorragia" class="form-control">
                                                                                                @if (old('cantidad_hemorragia'))
                                                                                                      <option value="{{ old('cantidad_hemorragia') }}" selected>{{ old('cantidad_hemorragia') }}</option>
                                                                                                      <option value="Abundante">Abundante</option>
                                                                                                      <option value="Normal">Normal</option>
                                                                                                      <option value="Escasa">Escasa</option>
                                                                                                @else
                                                                                                      <option value="Abundante">Abundante</option>
                                                                                                      <option value="Normal">Normal</option>
                                                                                                      <option value="Escasa">Escasa</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Frecuencia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="frecuencia" class="form-control">
                                                                                                @if (old('frecuencia'))
                                                                                                      <option value="{{ old('frecuencia') }}" selected>{{ old('frecuencia') }}</option>
                                                                                                      <option value="Frecuente">Frecuente</option>
                                                                                                      <option value="Infrecuente">Infrecuente</option>
                                                                                                @else
                                                                                                      <option value="Frecuente">Frecuente</option>
                                                                                                      <option value="Infrecuente">Infrecuente</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Dismenorrea</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="dismenorrea" class="form-control">
                                                                                                @if (old('dismenorrea'))
                                                                                                      <option value="{{ old('dismenorrea') }}" selected>{{ old('dismenorrea') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="form-group">
                                                                  <label><b><u>Vida Sexual</u></b></label>
                                                            </div>
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    <td><strong>Activa</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="activa" class="form-control">
                                                                                                @if (old('activa'))
                                                                                                      <option value="{{ old('activa') }}" selected>{{ old('activa') }}</option>
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
                                                                                    <td><strong>Edad de inicio de vida sexual</strong></td> 
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                                                                                                    <input id="edad" type="number" class="form-control" name="edad" value="{{ old('edad') }}">
                                                                    
                                                                                                    @if ($errors->has('edad'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('edad') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Parejas</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="form-group{{ $errors->has('parejas') ? ' has-error' : '' }}">
                                                                                                    <input id="parejas" type="number" class="form-control" name="parejas" value="{{ old('parejas') }}">
                                                                    
                                                                                                    @if ($errors->has('parejas'))
                                                                                                        <span class="help-block">
                                                                                                            <strong><font color="red">{{ $errors->first('parejas') }}</font></strong>
                                                                                                        </span>
                                                                                                    @endif
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Metodo Anticonceptivo</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="metodo_anticonceptivo" class="form-control">
                                                                                                @if (old('metodo_anticonceptivo'))
                                                                                                      <option value="{{ old('metodo_anticonceptivo') }}" selected>{{ old('metodo_anticonceptivo') }}</option>
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
                                                                                    <td><strong>Metodo</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" class="form-control" name="metodo_si" value="{{ old('metodo_si') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Tiempo</strong></td>
                                                                                    <td align="left">
                                                                                          Año(s)<select name="tiempo_ano" class="form-control">
                                                                                                @if (old('metodo_anticonceptivo'))
                                                                                                      <option value="{{ old('tiempo_ano') }}" selected>{{ old('tiempo_ano') }}</option>
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">3</option>
                                                                                                      <option value="10">10</option>
                                                                                                @else
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">3</option>
                                                                                                      <option value="10">10</option>
                                                                                                @endif
                                                                                          </select>
                                                                                          Meses(s)<select name="tiempo_mes" class="form-control">
                                                                                                @if (old('tiempo_mes'))
                                                                                                      <option value="{{ old('tiempo_mes') }}" selected>{{ old('tiempo_mes') }}</option>
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">3</option>
                                                                                                      <option value="10">10</option>
                                                                                                      <option value="10">11</option>
                                                                                                      <option value="10">12</option>
                                                                                                @else
                                                                                                      <option value="0">0</option>
                                                                                                      <option value="1">1</option>
                                                                                                      <option value="2">2</option>
                                                                                                      <option value="3">3</option>
                                                                                                      <option value="4">4</option>
                                                                                                      <option value="5">5</option>
                                                                                                      <option value="6">6</option>
                                                                                                      <option value="7">7</option>
                                                                                                      <option value="8">8</option>
                                                                                                      <option value="9">9</option>
                                                                                                      <option value="10">3</option>
                                                                                                      <option value="10">10</option>
                                                                                                      <option value="10">11</option>
                                                                                                      <option value="10">12</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Efectos Secundarios</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="efectos_secundarios">{{ old('efectos_secundarios') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="form-group">
                                                                  <label><b><u>Historia Papanicolau</u></b></label>
                                                            </div>
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    <td><strong>Ultimo Papanicolau</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="ultimo" class="form-control datepicker" name="ultimo" value="{{ old('ultimo') }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Resultado</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="resultado">{{ old('resultado') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Colonoscopia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="colonoscopia" class="form-control">
                                                                                                @if (old('colonoscopia'))
                                                                                                      <option value="{{ old('colonoscopia') }}" selected>{{ old('colonoscopia') }}</option>
                                                                                                      <option value="NO">NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @else
                                                                                                      <option value="NO" selected>NO</option>
                                                                                                      <option value="SI">SI</option>
                                                                                                @endif
                                                                                          </select>
                                                                                          <textarea class="form-control" name="colonoscopia_si" placeholder="Colonoscopia si...">{{ old('colonoscopia_si') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Procedimientos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="procedimientos">{{ old('procedimientos') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Procedimientos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="procedimientos">{{ old('procedimientos') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Rendiciones</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="rendiciones">{{ old('rendiciones') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              
                                                                              
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="form-group">
                                                                  <label><b><u>Revision por Sistemas</u></b></label>
                                                            </div>
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    <td><strong>Revision</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="revision" cols="30" rows="5">{{ old('revision') }}</textarea>
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
            $( '#fur' ).datepicker( optSimple );
            $( '#ultimo' ).datepicker( optSimple );
    
            $( '#datepicker' ).datepicker( 'setDate', today );
            $( '#fur' ).datepicker( 'setDate', today );
            $( '#ultimo' ).datepicker( 'setDate', today );
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
