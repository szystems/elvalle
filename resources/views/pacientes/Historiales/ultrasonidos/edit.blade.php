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
                                    <h2 class="h3 card-header-title"><strong>Editar ultrasonido obstetrico: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($ultrasonido,['method'=>'PATCH','route'=>['ultrasonidos.update',$ultrasonido->idultrasonido_obstetrico],'files'=>'true'])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                      </div>
                                                </div>
                                                @php
                                                      $fecha = date("d-m-Y", strtotime($ultrasonido->fecha));
                                                @endphp
                                                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                                                      <div class="form-group">
                                                            <label>Fecha</label>
                                                            <span class="form-icon-wrapper">
                                                            <span class="form-icon form-icon--right">
                                                                  <i class="fas fa-calendar-alt form-icon__item"></i>
                                                            </span>
                                                            <input type="text" id="datepicker" class="form-control datepicker" name="fecha" value="{{ $fecha }}">
                                                            </span>
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor">Doctor</label>
                                                            <input type="hidden" name="iddoctor" value="{{ $ultrasonido->iddoctor }}">
                                                            <input readonly type="text" class="form-control" name="doctor" value="{{ $ultrasonido->Doctor }} ({{ $ultrasonido->especialidad }})">
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
                                                                              <b><u>Antecedentes</u></b>
                                                                          </button>
                                                                      </h2>
                                                                  </div>
                          
                                                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
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
                                                                                          <textarea name="spp" class="form-control" >{{ $ultrasonido->spp }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>b) Frecuencia cardiaca fetal, ritmo, movimientos fetales:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="fcardiaca_fetal" class="form-control" >{{ $ultrasonido->fcardiaca_fetal }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>c) Placenta ubicación, características, relación placenta-cérvix:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="pubicacion" class="form-control" >{{ $ultrasonido->pubicacion }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>d) Liquido amniótico:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="liquido_amniotico" class="form-control" >{{ $ultrasonido->liquido_amniotico }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>e) Útero y anexos:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="utero_anexos" class="form-control" >{{ $ultrasonido->utero_anexos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>e) Cérvix:</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea name="cervix" class="form-control" >{{ $ultrasonido->cervix }}</textarea>
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
                                                                                          <input type="text" name="diametro_biparietal_medida" class="form-control text-right" value="{{ $ultrasonido->diametro_biparietal_medida }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="diametro_biparietal_semanas" class="form-control text-right" value="{{ $ultrasonido->diametro_biparietal_semanas }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>CIRCUNFERENCIA CEFALICA:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_cefalica_medida" class="form-control text-right" value="{{ $ultrasonido->circunferencia_cefalica_medida }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_cefalica_semanas" class="form-control text-right" value="{{ $ultrasonido->circunferencia_cefalica_semanas }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>CIRCUNFERENCIA ABDOMINAL:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_abdominal_medida" class="form-control text-right" value="{{ $ultrasonido->circunferencia_abdominal_medida }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="circunferencia_abdominal_semanas" class="form-control text-right" value="{{ $ultrasonido->circunferencia_abdominal_semanas }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong><tr>
                                                                                    <td><strong>LONGITUD FEMORAL:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="longitud_femoral_medida" class="form-control text-right" value="{{ $ultrasonido->longitud_femoral_medida }}" placeholder="0.00" onkeypress="return validardecimal(event,this.value)" required>
                                                                                    </td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="longitud_femoral_semanas" class="form-control text-right" value="{{ $ultrasonido->longitud_femoral_semanas }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
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
                                                                                          <input type="text" name="fetometria" class="form-control text-right" value="{{ $ultrasonido->fetometria }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Peso estimado:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="peso_estimado" class="form-control text-right" value="{{ $ultrasonido->peso_estimado }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Percentilo:</strong></td>
                                                                                    <td align="left">
                                                                                          <input type="text" name="percentilo" class="form-control text-right" value="{{ $ultrasonido->percentilo }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Comentarios:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <textarea name="comentarios" class="form-control" >{{ $ultrasonido->comentarios }}</textarea>
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
                                                                                                      <input type="checkbox" value="1" name="embarazo_unico" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="embarazo_unico">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="embarazo_unico_comentar" class="form-control text-right" value="{{ $ultrasonido->embarazo_unico_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td >
                                                                                          2. Tamiz de alteraciones del crecimiento de bajo riesgo al momento del estudio.
                                                                                    </td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->alteraciones_crecimiento == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="alteraciones_crecimiento" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="alteraciones_crecimiento">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="alteraciones_crecimiento_comentar" class="form-control text-right" value="{{ $ultrasonido->alteraciones_crecimiento_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td >
                                                                                          3. Tamiz de alteraciones de la frecuencia cardiaca fetal de bajo riesgo al momento del estudio.
                                                                                    </td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->alteraciones_frecuencia == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="alteraciones_frecuencia" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="alteraciones_frecuencia">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="alteraciones_frecuencia_comentar" class="form-control text-right" value="{{ $ultrasonido->alteraciones_frecuencia_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td >
                                                                                          4. Tamiz de placenta de bajo riesgo al momento del estudio.
                                                                                    </td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->placenta == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="placenta" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="placenta">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="placenta_comentar" class="form-control text-right" value="{{ $ultrasonido->placenta_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td >
                                                                                          5. Tamiz de liquido amniótico de bajo riesgo al momento del estudio.
                                                                                    </td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->liquido == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="liquido" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="liquido">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="liquido_comentar" class="form-control text-right" value="{{ $ultrasonido->liquido_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td >
                                                                                          6. Tamiz de parto prematuro de bajo riesgo al momento del estudio.
                                                                                    </td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->prematuro == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="prematuro" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" value="1" name="prematuro">
                                                                                                </div>
                                                                                          @endif
                                                                                          <input type="text" name="prematuro_comentar" class="form-control text-right" value="{{ $ultrasonido->prematuro_comentar }}">
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><strong>Recomendaciones:</strong></td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2">
                                                                                          <textarea name="recomendaciones" class="form-control" >{{ $ultrasonido->recomendaciones }}</textarea>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td ><strong>Observaciones:</strong></td>
                                                                                    <td>
                                                                                          @if ($ultrasonido->observaciones == 1)
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="observaciones" value="1" checked>
                                                                                                </div>
                                                                                          @else
                                                                                                <div class="primary-checkbox">
                                                                                                      <input type="checkbox" name="observaciones" value="1">
                                                                                                </div>
                                                                                          @endif
                                                                                    </td>
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
                autoclose: true,
                todayHighlight: true,
                todayBtn: "linked",
            };
            $( '#datepicker' ).datepicker( optSimple );
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
