@extends ('layouts.admin')
@section ('contenido')

<div class="col-md-6 mb-4">
      <div class="card">
            <header class="card-header">
                  <h2 class="h3 card-header-title"><strong>Nuevo Proveedor</strong></h2>
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

                  {!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
                  {{Form::token()}}
                  <h3><strong><u>Datos Generales: </u></strong></h3>
                  <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label for="nombre"><font color="orange">*</font>Nombre</label>
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre del proveedor">
                        @if ($errors->has('nombre'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nombre') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email del proveedor">
                        @if ($errors->has('email'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('email') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Teléfono del proveedor">
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
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección del proveedor">
                        @if ($errors->has('direccion'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('direccion') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('tipo_documento') ? ' has-error' : '' }}">
                        <label for="tipo_documento">Tipo de Documento</label>
                        <input id="tipo_documento" type="text" class="form-control" name="tipo_documento" value="{{ old('tipo_documento') }}" placeholder="Tipo de documento">
                        @if ($errors->has('tipo_documento'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('tipo_documento') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('num_documento') ? ' has-error' : '' }}">
                        <label for="num_documento">Numero de Documento</label>
                        <input id="num_documento" type="text" class="form-control" name="num_documento" value="{{ old('num_documento') }}" placeholder="Numero de documento">
                        @if ($errors->has('num_documento'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('num_documento') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('banco') ? ' has-error' : '' }}">
                        <label for="banco">Nombre de Banco</label>
                        <input id="banco" type="text" class="form-control" name="banco" value="{{ old('banco') }}" placeholder="Nombre de banco">
                        @if ($errors->has('banco'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('banco') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('nombre_cuenta') ? ' has-error' : '' }}">
                        <label for="nombre_cuenta">Nombre de Cuenta</label>
                        <input id="nombre_cuenta" type="text" class="form-control" name="nombre_cuenta" value="{{ old('nombre_cuenta') }}" placeholder="Nombre de cuenta">
                        @if ($errors->has('nombre_cuenta'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('nombre_cuenta') }}
                                    </strong>
                              </span>
                        @endif
                  </div>
                  <div class="form-group{{ $errors->has('numero_cuenta') ? ' has-error' : '' }}">
                        <label for="numero_cuenta">Numero de Cuenta</label>
                        <input id="numero_cuenta" type="text" class="form-control" name="numero_cuenta" value="{{ old('numero_cuenta') }}" placeholder="xxx-xxxxxx-x">
                        @if ($errors->has('numero_cuenta'))
                              <span class="help-block">
                                    <strong>
                                          {{ $errors->first('numero_cuenta') }}
                                    </strong>
                              </span>
                        @endif
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


@endsection