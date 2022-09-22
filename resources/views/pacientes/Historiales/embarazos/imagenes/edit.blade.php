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
                                    <a class="nav-link active" aria-current="page" href="{{URL::action('EmbarazoController@index','searchidpaciente='.$paciente->idpaciente)}}"><b><u>Embarazos</u></b></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('RadiofrecuenciaController@index','searchidpaciente='.$paciente->idpaciente)}}">Radiofrecuencias</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('SillaElectromagneticaController@index','searchidpaciente='.$paciente->idpaciente)}}">Silla Electromagnetica</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="{{URL::action('ClimaymenoController@index','searchidpaciente='.$paciente->idpaciente)}}">Climaterio / Menopausea</a>
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
                                    <h2 class="h3 card-header-title"><strong>Editar Imagen de embarazo: </strong></h2>
                              </header>

                              <div class="card-body">
                                    {!!Form::model($embarazoimg,['method'=>'PATCH','route'=>['imagenes.update',$embarazoimg->idembarazo_img],'files'=>'true'])!!}
                                    {{Form::token()}}
                                    <div class="input-group">
                                          <div class="col-lg-3 col-sm-12 col-md-12 col-xs-12">
                                              <div class="form-group">
                                                  <br>
                                                  @if ($embarazoimg->imagen != null)
                                                      <img src="{{asset('imagenes/embarazos/'.$embarazoimg->imagen)}}" alt="" width="250px"  class="img-thumbnail">
                                                  @else
                                                            "No hay imagen"
                                                  @endif
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                                                <div class="form-group">
                                                      {{ $embarazoimg->imagen}}
                                                      <input type="file" name="imagen" value="{{old('imagen')}}">
                                                </div>
                                          </div>
                                          <div class="col-lg-5 col-sm-12 col-md-12 col-xs-12">
                                                <div class="form-group">
                                                <label for="descripcion">Descripción</label>
                                                      <textarea name="descripcion" class="form-control">{{ $embarazoimg->descripcion }}</textarea>
                                                </div>
                                          </div>
                                      </div>
                                                      
                                    
                              </div>

                              <div class="card-footer">
                                    <div class="form-group" id="guardar">

                                          <input type="hidden" name="idembarazo" value="{{ $embarazo->idembarazo }}">
                                          <input name="_token" value="{{ csrf_token() }}" type="hidden" >
                                          <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Editar</button>

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
