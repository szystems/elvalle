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
                                  <a class="nav-link active" aria-current="page" href="{{URL::action('UltrasonidoObstetricoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Ultrasonido Obstetrico</u></b> <span class="badge badge-info">{{ $totalUltrasonidos }}</span></a>
                              </li>
                          </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Crear Ultrasonido Obstetrico: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!! Form::open(['url' => 'pacientes/historiales/ultrasonidos', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                                    {{ Form::token() }}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                      </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                      <div class="form-group">
                                                            <label>Fecha</label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor">Doctor</label>
                                                            <input type="hidden" name="iddoctor" value="{{ $doctor->id }}">
                                                            <input readonly type="text" class="form-control" name="doctor" value="{{ $doctor->name }} ({{ $doctor->especialidad }})">
                                                      </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="paciente">Paciente</label>
                                                            <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                                                            <input readonly type="text" class="form-control" name="paciente" value="{{ $paciente->nombre }}">
                                                      </div>
                                                </div>
                                                <input type="hidden" name="idusuario" class="form-control" id="idusuario" value="{{ Auth::user()->id }}">
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
                                                                              <b><u>Antecedentes Obstetricos</u></b>
                                                                          </button>
                                                                      </h2>
                                                                  </div>
                          
                                                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                                      data-parent="#accordionExample">
                                                                      <div class="card-body">
                          
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
                                                                  </div>
                                                              </div>
                                                              <div class="card">
                                                                  <div class="card-header" id="headingTwo">
                                                                      <h2 class="mb-0">
                                                                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                                              data-toggle="collapse" data-target="#collapseTwo"
                                                                              aria-expanded="false" aria-controls="collapseTwo">
                                                                              <b><u>Antecedentes Ginecologicos</u></b>
                                                                          </button>
                                                                      </h2>
                                                                  </div>
                                                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                                      data-parent="#accordionExample">
                                                                      <div class="card-body">
                                                                          
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
                                                                  </div>
                                                              </div>
                                                              <div class="card">
                                                                  <div class="card-header" id="headingThree">
                                                                      <h2 class="mb-0">
                                                                          <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                                              data-toggle="collapse" data-target="#collapseThree"
                                                                              aria-expanded="false" aria-controls="collapseThree">
                                                                              <b><u>Vida Sexual</u></b>
                                                                          </button>
                                                                      </h2>
                                                                  </div>
                                                                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                                      data-parent="#accordionExample">
                                                                      <div class="card-body">
                                                                          
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
                                                                  </div>
                                                              </div>
                                                          </div>
                          
                                                      </div>
                                                  </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="datos"><strong><u>Reporte</u></strong></label>
                                                            <p>Realizado con ultrasonido Medison, ACUSON X300 con transductor convexo de 3 a 5 MHz. Transabdominal.</p>
                                                      </div>
                                                </div>

                                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                        <thead align="center">
                                                                              <th colspan="2"><b><u>1. Tamizaje obstétrico básico:</u></b></th>
                                                                        </thead>
                                                                        <tbody>

                                                                              <tr>
                                                                                    <td><strong>a) Situación, presentación, posición:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="spp" class="form-control" >{{ old('spp') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>b) Frecuencia cardiaca fetal, ritmo, movimientos fetales:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="fcardiaca_fetal" class="form-control" >{{ old('fcardiaca_fetal') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>c) Placenta ubicación, características, relación placenta-cérvix:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="pubicacion" class="form-control" >{{ old('pubicacion') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>d) Liquido amniótico:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="liquido_amniotico" class="form-control" >{{ old('liquido_amniotico') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>e) Útero y anexos:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="utero_anexos" class="form-control" >{{ old('utero_anexos') }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>e) Cérvix:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="cervix" class="form-control" >{{ old('cervix') }}</textarea>
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
                                                                                    <td align="left">
                                                                                          <input type="text" name="diametro_biparietal_medida" class="form-control text-right" value="{{ old('diametro_biparietal_medida') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="diametro_biparietal_semanas" class="form-control text-right" value="{{ old('diametro_biparietal_semanas') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>CIRCUNFERENCIA CEFALICA:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_cefalica_medida" class="form-control text-right" value="{{ old('circunferencia_cefalica_medida') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_cefalica_semanas" class="form-control text-right" value="{{ old('circunferencia_cefalica_semanas') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>CIRCUNFERENCIA ABDOMINAL:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_abdominal_medida" class="form-control text-right" value="{{ old('circunferencia_abdominal_medida') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_abdominal_semanas" class="form-control text-right" value="{{ old('circunferencia_abdominal_semanas') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>LONGITUD FEMORAL:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="longitud_femoral_medida" class="form-control text-right" value="{{ old('longitud_femoral_medida') }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="longitud_femoral_semanas" class="form-control text-right" value="{{ old('longitud_femoral_semanas') }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                          <input type="text" name="fetometria" class="form-control text-right" value="{{ old('fetometria') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Peso estimado:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="peso_estimado" class="form-control text-right" value="{{ old('peso_estimado') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Percentilo:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="percentilo" class="form-control text-right" value="{{ old('percentilo') }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Comentarios:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <textarea name="comentarios" class="form-control" >{{ old('comentarios') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Interpretación:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <p>1.	Embarazo único intrauterino.</p>
                                                                                          <p>2.	Tamiz de alteraciones del crecimiento de bajo riesgo al momento del estudio.</p>
                                                                                          <p>3.	Tamiz de alteraciones de la frecuencia cardiaca fetal de bajo riesgo al momento del estudio.</p>
                                                                                          <p>4.	Tamiz de placenta de bajo riesgo al momento del estudio.</p>
                                                                                          <p>5.	Tamiz de liquido amniótico de bajo riesgo al momento del estudio.</p>
                                                                                          <p>6.	Tamiz de parto prematuro de bajo riesgo al momento del estudio.</p>

                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Recomendaciones:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <textarea name="recomendaciones" class="form-control" >{{ old('recomendaciones') }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Observaciones:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <p>La realización de este ultrasonido esta basado en las guías practicas y consensos de acog y el isuog, su capacidad de detección de defectos estructurales es del 40.4%, con rango de 13.3 a 82.4%. El resultado normal del ultrasonido no garantiza que el feto no nacerá sin ninguna alteración, los tamizajes son pruebas exploratorias no pruebas diagnósticas, en caso de un resultado con riesgo elevado la recomendación es realizar una prueba confirmatoria.</p>

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
                autoclose: 1,
                todayHighlight: 1,
                todayBtn: "linked",
            };
            $( '#datepicker' ).datepicker( optSimple );
    
            $( '#datepicker' ).datepicker( 'setDate', today );
      </script>

      @push ('scripts')
      <script>

            function validardecimal(e,txt) 
            {
                  tecla = (document.all) ? e.keyCode : e.which;
                  if (tecla==8) return 1;
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
                  return 1;
                  }
            
                  // Patron de entrada, en este caso solo acepta numeros
                  patron =/[0-9]/;
                  tecla_final = String.fromCharCode(tecla);
                  return patron.test(tecla_final); 
            } 
        
      </script>
      
      @endpush
@endsection
