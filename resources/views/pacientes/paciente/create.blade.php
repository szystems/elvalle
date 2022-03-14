@extends ('layouts.admin')
@section ('contenido')

<?php 
    $user = Auth::user(); 
?>

<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Crear Paciente </strong></h2>
            </header>

            <div class="card-body">
                  <h5 class="h4 card-title">Ingrese los datos que se le piden:</h5>
                  <h6><font color="orange"> Campos Obligatorios *</font></h6>
                  @if (count($errors)>0)
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                          <li>{{$error}}</li>
                                    @endforeach
                              </ul>
                        </div>
                  @endif

                  {!!Form::open(array('url'=>'pacientes/paciente','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                  {{Form::token()}}
                  <h3><strong><u>Datos Generales: </u></strong></h3>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre del Paciente">
                        @if ($errors->has('nombre'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nombre') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                        <label for="sexo"><font color="orange">*</font>Sexo</label>
                        <select id="sexo" type="text" class="form-control" name="sexo">
                              <option selected="selected" value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                        </select>
                        @if ($errors->has('sexo'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('sexo') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                        <label for="fecha_nacimiento"><font color="orange">*</font>Fecha Nacimiento</label>
                        <span class="form-icon-wrapper">
                              <span class="form-icon form-icon--right">
                                    <i class="fas fa-calendar-alt form-icon__item"></i>
                              </span>
                              <input type="text" id="fecha_nacimiento" class="form-control datepicker" name="fecha_nacimiento" >
                        </span>
                  </div>
                  <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                        <label for="correo">Correo</label>
                        <input id="correo" type="text" class="form-control" name="correo" value="{{ old('correo') }}" placeholder="Correo del paciente">
                        @if ($errors->has('correo'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('correo') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Teléfono del paciente">
                        @if ($errors->has('telefono'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('telefono') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        <label for="direccion">Dirección</label>
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección del paciente">
                        @if ($errors->has('direccion'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('direccion') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('dpi') ? ' has-error' : '' }}">
                        <label for="dpi"><font color="orange">*</font>DPI</label>
                        <input id="dpi" type="text" class="form-control" name="dpi" value="{{ old('dpi') }}" placeholder="Numero de DPI">
                        @if ($errors->has('dpi'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('dpi') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                        <label for="nit">Nit</label>
                        <input id="nit" type="text" class="form-control" name="nit" value="{{ old('nit') }}" placeholder="Numero de Nit">
                        @if ($errors->has('nit'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nit') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group">
                        <label for="foto">Imagen</label>
                        <input type="file" name="foto" value="{{old('foto')}}">
                  </div>
            </div>

            <footer class="card-footer">
                  <div class="form-group">
                        <button class="btn btn-danger" type="reset"><i class="fas fa-ban"></i> Borrar</button>
                        <button class="btn btn-info" type="submit"><i class="far fa-save"></i> Guardar</button>
                  </div>

                  {!!Form::close()!!}
            </footer>
      </div>
</div>
<script>
	var date = new Date();
	var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
	var tomorrow = new Date(today);
	tomorrow.setDate(tomorrow.getDate() + 1);
	var optSimple = {
		format: "dd-mm-yyyy",
    	language: "es",
    	autoclose: true,
		todayHighlight: true,
		todayBtn: "linked",
	};

	$( '#fecha_nacimiento' ).datepicker( optSimple );

	$( '#fecha_nacimiento').datepicker( 'setDate', today );
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