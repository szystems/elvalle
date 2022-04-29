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
                                    <a class="nav-link" href="#">Fisico</a>
                              </li>
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Editar Historia: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($paciente,['method'=>'PATCH','route'=>['historias.update',$historia->idhistoria]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label><b><u>Informacion General</u></b></label>
                                                            <input type="hidden" name="idpaciente" value="{{ $paciente->idpaciente }}">
                                                            <input type="hidden" name="idhistoria" value="{{ $historia->idhistoria }}">
                                                      </div>
                                                </div>
                                                @php
                                                      $fecha = date("d-m-Y", strtotime($historia->fecha));
                                                @endphp
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label><strong>Fecha</strong></label>
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
                                                            <label for="estado_civil"><strong>Estado Civil</strong></label>
                                                            <select name="estado_civil" class="form-control">
                                                                  <option selected value="{{ $historia->estado_civil }}" >{{ $historia->estado_civil }}</option>
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
                                                            <input type="text" class="form-control" name="procedencia" value="{{ $historia->procedencia }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="escolaridad"><strong>Escolaridad</strong></label>
                                                            <input type="text" class="form-control" name="escolaridad" value="{{ $historia->escolaridad }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="tel_emergencia"><strong>Telefono de Emergencia</strong></label>
                                                            <input type="text" class="form-control" name="tel_emergencia" value="{{ $historia->tel_emergencia }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-45 col-md-4 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="profesion"><strong>Profesion</strong></label>
                                                            <input type="text" class="form-control" name="profesion" value="{{ $historia->profesion }}">
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="motivo"><strong>Motivo</strong></label>
                                                            <textarea name="motivo" class="form-control" cols="30" rows="3">{{ $historia->motivo }}</textarea>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="historia"><strong>Historia de la enfermedad actual</strong></label>
                                                            <textarea name="historia" class="form-control" cols="30" rows="5">{{ $historia->historia }}</textarea>
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
                                                                                                <option value="{{ $historia->ciclos_regulares }}" selected>{{ $historia->ciclos_regulares }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Histerectomia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="histerectomia" class="form-control">
                                                                                                <option value="{{ $historia->histerectomia }}" selected>{{ $historia->histerectomia }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Mastopatia</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="mastopatia" class="form-control">
                                                                                                <option value="{{ $historia->mastopatia }}" selected>{{ $historia->mastopatia }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Cardiopatias</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cardiopatias" class="form-control">
                                                                                                <option value="{{ $historia->cardiopatias }}" selected>{{ $historia->cardiopatias }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Cafelea Vascular</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cafelea_vascular" class="form-control">
                                                                                                <option value="{{ $historia->cafelea_vascular }}" selected>{{ $historia->cafelea_vascular }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Tabaquismo</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="tabaquismo" class="form-control">
                                                                                                <option value="{{ $historia->tabaquismo }}" selected>{{ $historia->tabaquismo }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Tratamento con quimioterapia o radiacion pelvica</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="tratamiento_quimioradiacion" class="form-control">
                                                                                                <option value="{{ $historia->tratamiento_quimioradiacion }}" selected>{{ $historia->tratamiento_quimioradiacion }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Ejercicio</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="ejercicio" class="form-control">
                                                                                                <option value="{{ $historia->ejercicio }}" selected>{{ $historia->ejercicio }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
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
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              <tr>
                                                                                    
                                                                                    <td><strong>Affecciones Ginecologicas</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="affecciones_ginecologicas" class="form-control">
                                                                                                <option value="{{ $historia->affecciones_ginecologicas }}" selected>{{ $historia->affecciones_ginecologicas }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Cancer</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer" class="form-control">
                                                                                                <option value="{{ $historia->cancer }}" selected>{{ $historia->cancer }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Varices Trombosis</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="varices_trombosis" class="form-control">
                                                                                                <option value="{{ $historia->varices_trombosis }}" selected>{{ $historia->varices_trombosis }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Enfermedades Hepaticas</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="enfermedades_hepaticas" class="form-control">
                                                                                                <option value="{{ $historia->enfermedades_hepaticas }}" selected>{{ $historia->enfermedades_hepaticas }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Alcoholismo</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="alcoholismo" class="form-control">
                                                                                                <option value="{{ $historia->alcoholismo }}" selected>{{ $historia->alcoholismo }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>Cafeista (Mayor de 6 tazas) </strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cafeista" class="form-control">
                                                                                                <option value="{{ $historia->cafeista }}" selected>{{ $historia->cafeista }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>TRH previa</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="trh" class="form-control">
                                                                                                <option value="{{ $historia->trh }}" selected>{{ $historia->trh }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>otros</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="otros" class="form-control">
                                                                                                <option value="{{ $historia->otros }}" selected>{{ $historia->otros }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                          <textarea name="otros_texto" id="" class="form-control" placeholder="Si otros...">{{ $historia->otros_texto }}</textarea>
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
                                                                                                <option value="{{ $historia->cardiopatias_50anos }}" selected>{{ $historia->cardiopatias_50anos }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cardiopatias_50anos_quien" class="form-control" value="{{ $historia->cardiopatias_50anos_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Osteoporosis</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="osteoporosis" class="form-control">
                                                                                                <option value="{{ $historia->osteoporosis }}" selected>{{ $historia->osteoporosis }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="osteoporosis_quien" class="form-control" value="{{ $historia->osteoporosis_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Mama</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_mama" class="form-control">
                                                                                                <option value="{{ $historia->cancer_mama }}" selected>{{ $historia->cancer_mama }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_mama_quien" class="form-control" value="{{ $historia->cancer_mama_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Ovario</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_ovario" class="form-control">
                                                                                                <option value="{{ $historia->cancer_ovario }}" selected>{{ $historia->cancer_ovario }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_ovario_quien" class="form-control" value="{{ $historia->cancer_ovario_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Diabetes</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="diabetes" class="form-control">
                                                                                                <option value="{{ $historia->diabetes }}" selected>{{ $historia->diabetes }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="diabetes_quien" class="form-control" value="{{ $historia->diabetes_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Hiperlipidemias</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="hiperlipidemias" class="form-control">
                                                                                                <option value="{{ $historia->hiperlipidemias }}" selected>{{ $historia->hiperlipidemias }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="hiperlipidemias_quien" class="form-control" value="{{ $historia->hiperlipidemias_quien }}">
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Cancer Endometrial</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="cancer_endometrial" class="form-control">
                                                                                                <option value="{{ $historia->cancer_endometrial }}" selected>{{ $historia->cancer_endometrial }}</option>
                                                                                                <option value="NO">NO</option>
                                                                                                <option value="SI">SI</option>
                                                                                          </select>
                                                                                    </td>
                                                                                    <td>
                                                                                          <input type="text" name="cancer_endometrial_quien" class="form-control" value="{{ $historia->cancer_endometrial_quien }}">
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
