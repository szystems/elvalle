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
                                    {!!Form::model($paciente,['method'=>'PATCH','route'=>['historias.update',$paciente->idpaciente]])!!}
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
                                                            <label for="historia"><strong>Historia</strong></label>
                                                            <textarea name="historia" class="form-control" cols="30" rows="5">{{ $historia->historia }}</textarea>
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