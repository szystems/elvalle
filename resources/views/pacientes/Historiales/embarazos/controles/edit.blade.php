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
                                    <a class="nav-link" href="{{URL::action('HistoriaController@index','searchidpaciente='.$paciente->idpaciente)}}">Historia</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('FisicoController@index','searchidpaciente='.$paciente->idpaciente)}}">Fisico</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Embarazos</u></b></a>
                              </li>
                        </ul>


                        <div class="card">

                              <header class="card-header">
                                    <h2 class="h3 card-header-title"><strong>Editar Control: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($control,['method'=>'PATCH','route'=>['controles.update',$control->idcontrol]])!!}
                                    {{Form::token()}}
                                          <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><strong><u>Cabecera</u></strong></label>
                                                            <input type="hidden" name="idembarazo" value="{{ $embarazo->idembarazo }}">
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
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                      <div class="form-group">
                                                            <label for="doctor"><h2><u><strong>Editar datos de control de embarazo:</strong></u></h2></label>
                                                      </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                                      <div class="form-group">
                                                            <div class="table-responsive">
                                                                  <table class="table table-sm table-striped table-bordered table-condensed table-hover">
                                                                      
                                                                        <tbody>
                                                                              @php
                                                                                    $fechaControl = date("d-m-Y", strtotime($control->fecha));
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
                                                                                    <td><strong>Sueño</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="sueno" cols="30" rows="2">{{ $control->sueno }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Apetito</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="apetito" cols="30" rows="2">{{ $control->apetito }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Estreñimiento</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="estrenimiento" cols="30" rows="2">{{ $control->estrenimiento }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Disuria</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="disuria" cols="30" rows="2">{{ $control->disuria }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nauseas/Vomitos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nauseas_vomitos" cols="30" rows="2">{{ $control->nauseas_vomitos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Flujo Vaginal</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="flujo_vaginal" cols="30" rows="2">{{ $control->flujo_vaginal }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Dolor</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="dolor" cols="30" rows="2">{{ $control->dolor }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Otros</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="otros" cols="30" rows="2">{{ $control->otros }}</textarea>
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
                                                                                                <input type="text" name="presion_arterial" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->presion_arterial }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">mm Hg</span>
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
                                                                                    <td><strong>Frecuencia Cardiaca Materna</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="frecuencia_cardiaca_materna" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->frecuencia_cardiaca_materna }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Altura Uterina</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="altura_uterina" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->altura_uterina }}" placeholder="0" onkeypress="return validardecimal(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                             

                                                                              <tr>
                                                                                    <td><strong>Frecuencia Cardiaca Fetal</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="frecuencia_cardiaca_fetal" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->frecuencia_cardiaca_fetal }}" placeholder="0" onkeypress="return validarentero(event,this.value)" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">/min</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Presentacion Fetal</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="presentacion_fetal" class="form-control">
                                                                                                @if ($control->presentacion_fetal)
                                                                                                      <option value="{{ $control->presentacion_fetal }}" selected>{{ $control->presentacion_fetal }}</option>
                                                                                                      <option value="Cefalica">Cefalica</option>
                                                                                                      <option value="Podalica">Podalica</option>
                                                                                                      <option value="Oblicua">Oblicua</option>
                                                                                                @else
                                                                                                      <option value="Cefalica">Cefalica</option>
                                                                                                      <option value="Podalica">Podalica</option>
                                                                                                      <option value="Oblicua">Oblicua</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Movimientos Fetales</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="movimientos_fetales" class="form-control">
                                                                                                @if ($control->movimientos_fetales)
                                                                                                      <option value="{{ $control->movimientos_fetales }}" selected>{{$control->movimientos_fetales }}</option>
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @else
                                                                                                      <option value="+">+</option>
                                                                                                      <option value="++">++</option>
                                                                                                      <option value="+++">+++</option>
                                                                                                @endif
                                                                                          </select>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Edema en MI</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="edema_mi" class="form-control">
                                                                                                @if ($control->edema_mi)
                                                                                                      <option value="{{ $control->edema_mi }}" selected>{{ $control->edema_mi }}</option>
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
                                                                                    <td><strong>Varices</strong></td>
                                                                                    <td align="left">
                                                                                          <select name="varices" class="form-control">
                                                                                                @if ($control->sueno)
                                                                                                      <option value="{{ $control->varices }}" selected>{{ $control->varices }}</option>
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
                                                                                    <td><strong>Flujo Vaginal (Ph)</strong></td>
                                                                                    <td align="left">
                                                                                          <div class="input-group">
                                                                                                <input type="text" name="flujo_vaginal_ph" class="form-control text-right" aria-label="Amount (to the nearest dollar)" value="{{ $control->flujo_vaginal_ph }}" required>
                                                                                                <div class="input-group-prepend">
                                                                                                      <span class="input-group-text">Ph</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td colspan="2"><h2><strong><u>Tratamiento</u></strong></h2></td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Medicamentos</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="medicamentos" cols="30" rows="2">{{ $control->medicamentos }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Especiales</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="especiales" cols="30" rows="2">{{ $control->especiales }}</textarea>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    @php
                                                                                          $proximaCita = date("d-m-Y", strtotime($control->proxima_cita));
                                                                                    @endphp
                                                                                    <td><strong>Proxima Cita</strong></td>
                                                                                    <td align="left">
                                                                                          <span class="form-icon-wrapper">
                                                                                                <span class="form-icon form-icon--right">
                                                                                                      <i class="fas fa-calendar-alt form-icon__item"></i>
                                                                                                </span>
                                                                                                <input type="text" id="proxima_cita" class="form-control datepicker" name="proxima_cita" value="{{ $proximaCita }}">
                                                                                          </span>
                                                                                    </td>
                                                                              </tr>

                                                                              <tr>
                                                                                    <td><strong>Nota Adicional</strong></td>
                                                                                    <td align="left">
                                                                                          <textarea class="form-control" name="nota" cols="30" rows="2">{{ $control->nota }}</textarea>
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